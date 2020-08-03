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
    public function register(){
        return view('pages.registration_user');
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
            return Redirect::to('login');
        }

    }
}
