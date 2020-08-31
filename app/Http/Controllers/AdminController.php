<?php

namespace App\Http\Controllers;

use App\admin_user;
use App\Donate;
use App\Events;
use App\member;
use App\ngo_admin;
use Illuminate\Routing\Controller as BaseController;
use phpDocumentor\Reflection\Types\Array_;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use DB;

class AdminController extends Controller
{
    //
//    function __construct()
//    {
//        $event = Events::all();
//        $member = member::all();
//        $donate = Donate::all()->where('money_status', 4);
//        view()->share('data1'=>$event);
//    }

    public function showDashboard(){
        $event = Events::all();
        $member = member::all();
        $donate = Donate::all()->where('money_status', 4);
        $donate1 = Donate::all()->where('money_status', 4)->where('category_id', 1)->sum('amount');
        $donate2 = Donate::all()->where('money_status', 4)->where('category_id', 2)->sum('amount');
        $donate3 = Donate::all()->where('money_status', 4)->where('category_id', 3)->sum('amount');
        $donate4 = Donate::all()->where('money_status', 4)->where('category_id', 4)->sum('amount');
        $total_money = Donate::all()->where('money_status', 4)->sum('amount');
        $events = Events::all()->take(1);
        $data = DB::table('events_tbl')
            ->join('donate_details','donate_details.events_id','events_tbl.events_id')
            ->select('donate_details.events_id',DB::raw('Sum(donate_details.amount) as total_donates'))
            ->groupBy('donate_details.events_id')
            ->where('donate_details.money_status',4)
            ->get();
        view()->share('data1',$event);
        view()->share('data2',$member);
        view()->share('data3',$donate);
        view()->share('data4', $total_money);
        view()->share('donate1', $donate1);
        view()->share('donate2', $donate2);
        view()->share('donate3', $donate3);
        view()->share('donate4', $donate4);
        view()->share('data5',$events);
        view()->share('data6',$data);
        return view('admin.index');
    }
    public function showLogin(){
        return view('admin.login');
    }
    public function register(){
        return view('admin.admin_account.registration_admin');
    }
    public function listMember(){
        $dataListMember = member::all();
        return view('admin.member.list_member',['list' => $dataListMember]);
    }
    public function editProfile($id){
        $data = member::where('member_id', $id)->get();
        return view('admin.member.edit_profile_member',['list_member' => $data]);
    }
    public function updateProfile(Request $request, $id){
        $data = array();
        $data['username'] = $request->username;
        $data['email'] = $request->email;
        $data['firstname'] = $request->firstname;
        $data['lastname'] = $request->lastname;
        $data['address'] = $request->address;
        member::where('member_id', $id)->update($data);
        Session::put('message', 'Update profile success!');
        return Redirect::to('admin/list_member');
    }
    public function deleteProfile($id){
        $data = member::where('member_id', $id)->delete();
        Session::put('message', 'Delete profile member success!!!');
        return redirect('admin/list_member');
    }
    public function login(Request $request){
       $admin_email = $request->admin_email;
       $admin_password = $request->admin_password;
       $result = ngo_admin::where('email',$admin_email)->where('password',$admin_password)->first();
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
