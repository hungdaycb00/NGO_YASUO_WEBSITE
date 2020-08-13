<?php

namespace App\Http\Controllers;
use App\member;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;

class HomeController extends Controller
{
    //
    public function index(){
        return view('pages.home');
    }
    public function login(){
        return view('pages.login_user');
    }
    public function showProfile(){
        $data = member::where('member_id', Session::get('user_id'))->get();
        return view('pages.user_profile',['list_member' => $data]);
    }
    public function editProfile($id){
        $data = member::where('member_id', $id)->get();
        return view('pages.edit_profile_member',['list_member' => $data]);
    }
    public function updateProfile(Request $request, $id){
        $data = array();
        $data['email'] = $request->email;
        $data['firstname'] = $request->firstname;
        $data['lastname'] = $request->lastname;
        $data['address'] = $request->address;
        member::where('member_id', $id)->update($data);
        Session::put('message', 'Update profile success!');
        return Redirect::to('profile');
    }
    public function logOut(){
        Session::put('username', null);
        Session::put('member_id', null);
        Session::put('message', null);
        return Redirect::to('login');
    }
    public function loginCheck(Request $request){
        $username = $request->username;
        $password = $request->password;
        $result = member::where('username',$username)->where('password',$password)->first();
        if(!$result){
            Session::put('message',' Invalid login or password. Please try again. !!!');
            return Redirect::to('login');
        }
        else{
            Session::put('username', $result->lastname);
            Session::put('user_id', $result->member_id);
            return Redirect::to('home');
        }
    }
    public function register(){
        return view('pages.registration_user');
    }
    public function registerSuccess(){
        return view('pages.registration_success');
    }

    public function saveRegister(Request $request){
        $data = new member();
        $name = $request->username;
        $email = $request->email;
        $data->username = $name;
        $data->email = $email;
        $data->password = $request->password;
        $data->confirm_password = $request->confirm_password;
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->address = $request->address;

        $result_name = member::where('username',$name)->first();
        $result_email = member::where('email',$email)->first();
        if($result_name) {
            Session::put('message', 'The username is already! Please try another username.');
            return Redirect::to('register');
        } elseif ($result_email){
                Session::put('message', 'The email is already! Please try another email.');
                return Redirect::to('register');
        }
        if($data){
            $data->save();
            return Redirect::to('register/success');
        }

    }

    public function contact(){
        return view('pages.contact');
    }
    public function userEditProfile(){

    }
}
