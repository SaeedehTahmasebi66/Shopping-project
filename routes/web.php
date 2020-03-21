<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

//-------- myproject ---------

Route::get('', function () {
    return view('index');
});

Route::get('', ['uses'=> 'productsController@showAllProducts']);

Route::get('/cart', ['as'=>'cart', 'uses'=> 'cartController@selectedProducts']);
Route::get('/shop', ['as'=>'shop', 'uses'=> 'productsController@showAllProducts']);
Route::get('/product-details', ['as'=>'product-details', 'uses'=> 'productsController@product_details']);
Route::get('/blog', function () {return view('blog');});
Route::get('/blog-single', function () {return view('blog-single');});
Route::get('/contact-us', function () {return view('contact-us');});
Route::get('/personalPage', function () {return view('personal-page');});
Route::get('/mens-shoes', ['as'=>'shoes', 'uses'=> 'categoryController@shoes']);


//users
Route::get('/login', ['as'=>'login', 'uses'=> 'UsersController@login']);
Route::post('/checkLoginInputs', ['as'=>'login', 'uses'=> 'UsersController@findUser']);
Route::get('/register', ['as'=>'register', 'uses'=> 'UsersController@register']);
Route::post('/checkRegisterInputs', ['as'=>'register', 'uses'=> 'UsersController@validation']);


//++++++++++++++++++++++++++++++++++++++++++  Admin   +++++++++++++++++++++++++++++++++++++
Route::get('/admin', function () {return view('admin.index');});
Route::get('/admin/index2', function () {return view('admin.index2');});
Route::get('/admin/index3', function () {return view('admin.index3');});


//     ------------------------------------ admin/users   --------------------------
Route::resource('admin/users', 'Admin\UserController');

//     ----------------------------------- admin/products   ------------------------
Route::resource('admin/products', 'Admin\ProductController');

//      ----------------------------------- admin/comments   ------------------------
Route::resource('admin/comment', 'Admin\CommentController');


// Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
//     Route::resource('/users', 'UserController');
//     Route::resource('/products', 'ProductController');
//     Route::resource('/comment', 'CommentController');
// });







//---------=- Class work ----------

// Route::get('/allusers', ['as'=>'users.all', 'uses'=> 'siteController@getall']);

// Route::get('/showuserstable', ['as'=>'users.table', 'uses'=> 'siteController@maketable']);
// Route::get('/updateUser', ['as'=>'users.all', 'uses'=> 'siteController@index']);

// //Route::get('/createusers', ['as'=>'users.all', 'uses'=> 'siteController@createall']);

// Route::get('/validate', ['as'=>'users.all', 'uses'=> 'siteController@index']);
// Route::post('/validateForm', ['as'=>'users.all', 'uses'=> 'siteController@validateusers']);


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');







