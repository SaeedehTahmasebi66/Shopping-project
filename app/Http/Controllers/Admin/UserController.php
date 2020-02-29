<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::all();
        return view('admin.users.index')->with("allUsers",$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'string',
            'username' => 'required | string',
            'phonenumber' => 'required | numeric | regex:/[0-9]{11}/',
            'email' => 'required | email ',
            'password'=> 'required',
        ]);

        $newUser = new User;
        $newUser->fullname = $request->post('fullname');
        $newUser->username = $request->post('username');
        $newUser->phonenumber = $request->post('phonenumber');
        $newUser->email = $request->post('email');
        $newUser->password = $request->post('password');
        $newUser->gender = 1;                                 //فعلا
        $newUser->save();

        return redirect('admin/users')->with('success', 'عضو جدید افزوده شد !');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editUser = User::find($id);
        return view('admin.users.edit')->with('selectedUser',$editUser);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fullname' => 'string',
            'username' => 'required | string',
            'phonenumber' => 'required | numeric | regex:/[0-9]{11}/',
            'email' => 'required | email ',
        ]);
        $editUser = User::find($id);
        $editUser->fullname = $request->post('fullname');
        $editUser->username = $request->post('username');
        $editUser->phonenumber = $request->post('phonenumber');
        $editUser->email = $request->post('email');

        $editUser->save();
        return redirect('admin/users')->with('success', 'اطلاعات شخص ویرایش شد !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteUser = User::find($id);
        $deleteUser->delete();
        return redirect('admin/users')->with('success', 'شخص مورد نظر حذف شد !');
    }
}
