<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Users;


class UsersController extends Controller
{
    public function login(){
        return view('login');
    }
    public function findUser(Request $request){

        $login = Users::where('username',$request->post('username')) -> first();
        if ( ($login != null) && ($request->post('password') == $login->password) ){
        return redirect('personalPage');
        }else {
            return redirect('login')->with('success','نام کاربری و یا کلمه عبور شما صحیح نمیباشد.');
        }
    }

    public function validation(Request $request){
        $request->validate([
            'fullname' => 'required | string',
            'username' => 'required | string',
            'phonenumber' => 'required | numeric | regex:/[0-9]{11}/',
            'email' => 'required | email | unique:users,email',
            'password' => 'required | min:6',
            'gender' => 'required',
        ]);

        $register = new Users();
        $register->fullname = $request->post('fullname');
        $register->username = $request->post('username');
        $register->phonenumber = $request->post('phonenumber');
        $register->email = $request->post('email');
        $register->password = $request->post('password');
        $register-> gender = $request->post('gender');
        $register->registerdate = time();
        $register->logdate = time();

        $register->save();
        return redirect('register')->with('success','شما با موفقیت ثبت نام شدید.');
    }

    public function register(){

        //validateinputs
        return view('register');
    }

    public function profile(){

        //showing person's name instead of "Login" in the menu at the top
        // return view('index');
    }
}
