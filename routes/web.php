<?php

use Illuminate\Support\Facades\Route;

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
//Frontend
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/login', 'HomeController@login');
Route::get('/register', 'HomeController@register');
Route::get('/profile', 'HomeController@showProfile');
Route::get('/register/success', 'HomeController@registerSuccess');
Route::post('/login_check', 'HomeController@loginCheck');
Route::get('/about_us', 'HomeController@aboutUs');
Route::get('/user_logout', 'HomeController@logOut');
// update profile by user
Route::get('edit_profile/{id}','HomeController@editProfile');
Route::post('update_profile/{id}','HomeController@updateProfile');

//help center
Route::get('/help_center','HelpCenterController@showHelpCenter');

//Children
Route::get('/children','ChildrenController@showChildren');
//Donate
Route::get('/donate','DonateController@showDonate');


//Backend

//hiển thị trang chủ admin
Route::get('/admin', 'AdminController@showDashboard');
// list member
Route::get('/admin/list_member','AdminController@listMember');


//web đăng nhập admin website
Route::get('/admin/login', 'AdminController@showLogin');
Route::get('/admin/register', 'AdminController@register');
//đăng xuất admin web
Route::get('/admin_logout','AdminController@logOut');

//đăng nhập vào admin web
Route::post('/admin-dashBoard', 'AdminController@login');
// Posts
Route::get('/add_post','PostController@addPost');
Route::get('/edit_post/{post_id}','PostController@editPost');
Route::get('/inactive/{post_id}','PostController@inactivePost');
Route::get('/active/{post_id}','PostController@activePost');
Route::get('/delete_post/{post_id}','PostController@deletePost');
Route::get('/list_post','PostController@listPost');

Route::post('/save_new_post','PostController@saveNewPost');

// lưu thông tin đăng kí người dùng của user
Route::post('/save_register_user', 'HomeController@saveRegister');
//danh sách thành viên
Route::get('admin/list_member','AdminController@listMember');
// edit profile by admin
Route::get('edit_profile_member/{id}','AdminController@editProfile');
Route::post('update_profile_member/{id}','AdminController@updateProfile');
//delete member
Route::get('delete_profile_member/{id}','AdminController@deleteProfile');
// lưu thông tin đăng kí tài khoản của admin
Route::post('/save_register_admin', 'AdminController@saveRegister');
//update post
Route::post('/update_post/{post_id}','PostController@updatePost');
