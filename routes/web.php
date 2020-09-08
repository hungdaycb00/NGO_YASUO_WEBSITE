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
    //contact
    Route::post('/save_message','PagesController@postContact');
    Route::get('/contact', 'PagesController@contact');

    //pages
    Route::get('/help_center','HelpCenterController@showHelpCenter');
    Route::get('/Children','PagesController@showChildren');
    Route::get('/our_partners','PagesController@showOurPartners');

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
    Route::group(['prefix'=>'about_us'],function (){
        Route::get('/','PagesController@aboutUs');
        Route::get('/about_us1','PagesController@aboutUs1');
        Route::get('/about_us2','PagesController@aboutUs2');
        Route::get('/about_us3','PagesController@aboutUs3');
        Route::get('/about_us4','PagesController@aboutUs4');
        Route::get('/about_us5','PagesController@aboutUs5');

    });
    Route::group(['prefix'=>'help_center'],function (){
        Route::get('/','PagesController@helpCenter');
        Route::get('/1','PagesController@helpCenter1');
        Route::get('/2','PagesController@helpCenter2');
        Route::get('/3','PagesController@helpCenter3');
        Route::get('/4','PagesController@helpCenter4');
        Route::get('/5','PagesController@helpCenter5');
        Route::get('/6','PagesController@helpCenter6');

    });
    Route::get('/blog_detail/{id}', 'PagesController@blogDetail');
    Route::get('/events_detail/{id}', 'PagesController@eventsDetail');
    Route::get('/news', 'PagesController@news');
    Route::get('/Education', 'PagesController@showEducation');
    Route::get('/Health', 'PagesController@showHealth');
    Route::get('/Other', 'PagesController@showOther');
    Route::get('/Events', 'PagesController@showEvents');
});
//Backend

//web đăng nhập admin website
Route::get('/admin/login', 'AdminController@showLogin');
Route::get('/admin_logout','AdminController@logOut');
Route::post('/admin-dashBoard', 'AdminController@login');
// lưu thông tin đăng kí người dùng của user
// edit profile by admin
Route::get('edit_profile_member/{id}','AdminController@editProfile');
Route::post('update_profile_member/{id}','AdminController@updateProfile');
//delete member
Route::get('delete_profile_member/{id}','AdminController@deleteProfile');
// lưu thông tin đăng kí tài khoản của admin
Route::post('/save_register_admin', 'AdminController@saveRegister');
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function (){
    Route::get('/', 'AdminController@showDashboard');
    Route::get('/list_member','AdminController@listMember');
    Route::get('/register', 'AdminController@register');

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
        Route::post('save_new_donate','DonateController@save');
        Route::get('list','DonateController@list');
        Route::get('edit/{id}','DonateController@edit');
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

        Route::get('/inactive/{id}','PostController@inactivePartners');
        Route::get('/active/{id}','PostController@activePartners');
    });
    Route::group(['prefix'=>'message'],function (){
        Route::get('list','PagesController@listMessage');
        Route::get('/delete/{id}','PagesController@deleteMessage');

    });
});
Route::group(['prefix'=>'admin'],function (){
    Route::group(['prefix'=>'donate'],function (){
        Route::post('/save','DonateController@save');
        Route::post('/saveCredit','DonateController@saveCredit');
    });

});
//search
Route::post('/search', 'PagesController@search');
//send mail
Route::get('send-mail','MailController@sendMail');
Route::post('invite_friend','MailController@sendMailFriend');
Route::get('test-mail','MailController@mail');
Route::post('send-pass','MailController@sendPass');
Route::get('forgot-pass','MailController@forgotPass');
