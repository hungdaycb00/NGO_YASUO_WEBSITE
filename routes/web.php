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
    Route::get('/Children','PagesController@showChildren');
    Route::get('/our_partners','PagesController@showOurPartners');
    Route::get('/contact', 'PagesController@contact');

    Route::get('/notice_transfer','DonateController@transferSuccess');
    //vn pay
    Route::get('onlinebank','DonateController@showVNPay');
    Route::post('onlinebank','DonateController@createVNPay');
    Route::group(['prefix'=>'donate'],function (){
        Route::get('/','DonateController@showDonate');
        Route::get('/transfer','DonateController@transfer');
        Route::get('/donate_credit_card','DonateController@creditCard');
        Route::get('/{id}','DonateController@showDonateEvents');
        Route::get('/transfer/{id}','DonateController@transferEvents');
        Route::get('/donate_credit_card/{id}','DonateController@creditCardEvents');
    });
    Route::get('/about_us', 'PagesController@aboutUs');
    Route::get('/blog_detail/{id}', 'PagesController@blogDetail');
    Route::get('/events_detail/{id}', 'PagesController@eventsDetail');
    Route::get('/news', 'PagesController@news');
    Route::get('/Education', 'PagesController@showEducation');
    Route::get('/Health', 'PagesController@showHealth');
    Route::get('/Other', 'PagesController@showOther');
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
    Route::group(['prefix'=>'events'],function (){
        Route::get('add_post','EventsController@addPost');
        Route::get('list_post','EventsController@listPost');
        Route::get('edit_post/{id}','EventsController@editPost');

        Route::post('/save_new_post','EventsController@saveNewPost');
        Route::post('/update_post/{id}','EventsController@updatePost');
        Route::get('/delete_post/{id}','EventsController@deletePost');

        Route::get('/inactive/{id}','EventsController@inactivePost');
        Route::get('/active/{id}','EventsController@activePost');
    });
    Route::group(['prefix'=>'donate'],function (){
//        Route::get('add','DonateController@add');
        Route::get('list','DonateController@list');
        Route::get('edit/{id}','DonateController@edit');

        Route::post('/save','DonateController@save');
        Route::post('/saveCredit','DonateController@saveCredit');
        Route::post('/update/{id}','DonateController@update');
        Route::get('/delete/{id}','DonateController@delete');

        Route::get('/inactive/{id}','DonateController@inactive');
        Route::get('/active/{id}','DonateController@active');
    });
    Route::group(['prefix'=>'our_partners'],function (){
        Route::get('add','PostController@addPartners');
        Route::get('list','PostController@listPartners');
        Route::get('edit/{id}','PostController@editPartners');

        Route::post('/save','PostController@saveNewPartners');
        Route::post('/update/{id}','PostController@updatePartners');
        Route::get('/delete/{id}','PostController@deletePartners');

        Route::get('/inactive/{id}','PostController@inactivePost');
        Route::get('/active/{id}','PostController@activePost');
    });
});

//search
Route::post('/search', 'PagesController@search');
