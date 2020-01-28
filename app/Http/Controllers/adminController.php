<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Users;

// class adminController extends Controller
// {
//     public function showAllUsers(){
//         $allusers = Users::all();
//         return view('admin.users.showuserstable')->with('all',$allusers);
//     }

//     public function deleteUsers($id){
//         $deleteUser = Users::find($id);
//         $deleteUser->delete();
//         $allusers = Users::all();
//         return redirect('showallusers')->with('all',$allusers);
//     }

//     public function editUsers($id){
//         $editUser = Users::find($id);
//         return view('edit')->with('selectedUser',$editUser);
//     }

//     public function updateUser(Request $request){
//         $id = $request->id;
//         $editUser = Users::find($id);
//         $editUser->fullname = $request->post('fullname');
//         $editUser->username = $request->post('username');
//         $editUser->phonenumber = $request->post('phonenumber');
//         $editUser->email = $request->post('email');

//         $editUser->save();
//         $allusers = Users::all();
//         return redirect('showallusers')->with('all',$allusers);
//     }

//     public function showAllProducts(){

//     }

//     public function addProducts(){

//     }

//     public function deleteProducts(){

//     }

//     public function updateProducts(){

//     }

//     public function showAllCategory(){

//     }

//     public function addCategory(){

//     }

//     public function deleteCategory(){

//     }

//     public function updateCategory(){

//     }


// }
