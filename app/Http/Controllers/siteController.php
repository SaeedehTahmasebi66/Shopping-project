<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\user;

class siteController extends Controller
{
    public function getall(){
        $allusers = Users::all();
        //var_dump($allusers);die;
        return view('users/all')->with('all',$allusers);
    }
    public function index(){
        return view('users.all');
    }

    public function createUsers(){

    }

    public function validateUsers(Request $request){
        $request->validate([
            'fullname' => 'required | string',
            'username' => 'required | string',
            'password' => 'required | min:6',
            'email' => 'required | email| unique:users,email',
            'phonenumber' => 'required | numeric | min:10',
            //'gender' => 'required',

        ]);

       $form = new Users();
       $form->fullname = $request->post('fullname');
        //var_dump($form->fullname);die;
        $form->username = $request->post('username');
        $form->password = $request->post('password');
        $form->email = $request->post('email');
        $form->registerdate = time();
        $form->logdate = time();
        $form->phonenumber = $request->post('phonenumber');
        //$form->gender = $request->post('gender');  فعلا
        $form->gender = 1;
        $form->usertype = 1;
        $form->save();

       // return redirect('createUsers')->with('success', 'Coin has been added');
        return redirect('validate')->with('success', 'Coin has been added');
    }


    public function validateUpdate(Request $request){
        $request->validate([
            'fullname' => 'required | string',
            'username' => 'required | string',
            'password' => 'required | min:6',
            'email' => 'required | email| unique:users,email',
            'phonenumber' => 'required | min:10 | numeric',
            'gender' => 'required',

        ]);

       $form = new Users();
       $form->fullname = $request->post('fullname');
        //var_dump($form->fullname);die;
        $form->username = $request->post('username');
        $form->password = $request->post('password');
        $form->email = $request->post('email');
        $form->registerdate = time();
        $form->logdate = time();
        $form->phonenumber = $request->post('phonenumber');
        $form->gender = $request->post('gender');
        $form->save();
        //return redirect('createUsers')->with('success', 'Coin has been added');
        return redirect('showuserstable')->with('success', 'Coin has been added');
    }



    public function maketable(){
        //echo "Hiiiii";
        $allusers = Users::all();
        return view('users.table')->with('all',$allusers);
    }


    public function updateUsers(){
        //echo "Hello";
        //find?????

    }
}
