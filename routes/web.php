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
Route::group(['prefix'=>'/'],function(){
    Route::get('home','PagesController@home');
    Route::get('/', 'PagesController@home');
    Route::get('/login', 'PagesController@login');
    Route::get('/register', 'PagesController@register');
    Route::get('/profile', 'PagesController@showProfile');
    Route::get('/register/success', 'PagesController@registerSuccess');
    Route::post('/login_check', 'PagesController@loginCheck');
    Route::get('/user_logout', 'PagesController@logOut');
    Route::post('/save_register_user', 'PagesController@saveRegister');
    // update profile by user
    Route::get('edit_profile/{id}','PagesController@editProfile');
    Route::post('update_profile/{id}','PagesController@updateProfile');

    //pages
    Route::get('/help_center','HelpCenterController@showHelpCenter');
    Route::get('/children','PagesController@showChildren');
    Route::get('/donate','DonateController@showDonate');
    Route::get('/contact', 'PagesController@contact');
    Route::get('/about_us', 'PagesController@aboutUs');
});
//Backend
//hiển thị trang chủ admin
Route::get('/admin', 'AdminController@showDashboard');
// list member
Route::get('/admin/list_member','AdminController@listMember');
//web đăng nhập admin website
Route::get('/admin/login', 'AdminController@showLogin');
Route::get('/admin/register', 'AdminController@register');
Route::get('/admin_logout','AdminController@logOut');
Route::post('/admin-dashBoard', 'AdminController@login');
// lưu thông tin đăng kí người dùng của user
//danh sách thành viên
Route::get('admin/list_member','AdminController@listMember');
// edit profile by admin
Route::get('edit_profile_member/{id}','AdminController@editProfile');
Route::post('update_profile_member/{id}','AdminController@updateProfile');
//delete member
Route::get('delete_profile_member/{id}','AdminController@deleteProfile');
// lưu thông tin đăng kí tài khoản của admin
Route::post('/save_register_admin', 'AdminController@saveRegister');
Route::group(['prefix'=>'admin'],function (){
    Route::group(['prefix'=>'category'],function (){
        Route::get('add_category','PostController@addCategory');
        Route::get('list_category','PostController@listCategory');
        Route::get('edit_category/{id}','PostController@editCategory');

        Route::post('/save_new_category','PostController@saveNewCategory');
        Route::post('/update_category/{id}','PostController@updateCategory');
        Route::get('/delete_category/{id}','PostController@deleteCategory');
    });
    Route::group(['prefix'=>'post'],function (){
        Route::get('add_post','PostController@addPost');
        Route::get('list_post','PostController@listPost');
        Route::get('edit_post/{id}','PostController@editPost');

        Route::post('/save_new_post','PostController@saveNewPost');
        Route::post('/update_post/{id}','PostController@updatePost');
        Route::get('/delete_post/{id}','PostController@deletePost');

        Route::get('/inactive/{id}','PostController@inactivePost');
        Route::get('/active/{id}','PostController@activePost');
    });
});
