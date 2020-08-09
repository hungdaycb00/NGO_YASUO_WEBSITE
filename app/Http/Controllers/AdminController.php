<?php

namespace App\Http\Controllers;

use App\admin_user;
use App\member;
use App\ngo_admin;
use Illuminate\Routing\Controller as BaseController;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class AdminController extends Controller
{
    //
    public function showDashboard(){
        return view('admin.index');
    }
    public function showLogin(){
        return view('admin.login');
    }
//    public function register(){
//        $dataListMember = member::all();
//        $manager = view('admin.list_member')->with('list_member', $dataListMember);
//        return view('layout.admin_layout')->with('admin.list_member', $manager);
//    }
    public function listMember(){
        $dataListMember = member::all();
        $manager = view('admin.list_member')->with('list_member', $dataListMember);
        return view('layout.admin_layout')->with('admin.list_member', $manager);
        return view('admin.list_member');
    }
    public function login(Request $request){
       $admin_email = $request->admin_email;
       $admin_password = $request->admin_password;
       $result = ngo_admin::where('email',$admin_email)->where('password',$admin_password)->first();
       //$result = DB::table('ngo_admin')->where('admin_email',$admin_email)->where('password', $admin_password)->first();
       if(!$result){
           Session::put('message',' Invalid login or password. Please try again. !!!');
           return Redirect::to('admin/login');
       }
       else{
           Session::put('admin_name', $result->lastname);
           Session::put('admin_id', $result->admin_id);
           return Redirect::to('admin');
       }

    }
    public function logOut(){
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return Redirect::to('admin/login');
    }
    public function saveRegister(Request $request){
        $data = new admin_user();
        $email = $request->email;
        $data->email = $email;
        $data->password = $request->password;
        $data->confirm_password = $request->confirm_password;
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $result_email = admin_user::where('email',$email)->first();
        if ($result_email){
            Session::put('message', 'The email is already! Please try another email.');
            return Redirect::to('admin/register');
        }
        if($data){
            $data->save();
            return Redirect::to('admin/login');
        }

    }


}
