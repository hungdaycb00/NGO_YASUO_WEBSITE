<?php

namespace App\Http\Controllers;

use App\Category_post;
use App\Donate;
use App\Events;
use App\list_post;
use App\Slide;
use Illuminate\Http\Request;
use App\member;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class PagesController extends Controller
{


    function __construct()
    {
        $category =  Category_post::all();
        $partner= Slide::all()->where('post_status', 1);
        $post = list_post::all()->sortByDesc('created_at');
        $news = list_post::all()->where('post_highlights',1)->sortByDesc('created_at')->take(4);
        $events = Events::all()->sortByDesc('created_at')->take(3);
        $data = DB::table('events_tbl')
            ->join('donate_details','donate_details.events_id','events_tbl.events_id')
            ->select('donate_details.events_id',DB::raw('Sum(donate_details.amount) as total_donates'))
            ->groupBy('donate_details.events_id')
            ->where('donate_details.money_status',4)
            ->get();

//        $data = Donate::all()->where('money_status',4)->groupBy('events_id')->sum('amount');
        view()->share('cate',$category);
        view()->share('post',$post);
        view()->share('events',$events);
        view()->share('news',$news);
        view()->share('donate',$data);
        view()->share('partners',$partner);
    }

    public function home(){
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
        $this->validate($request,
            [
                'username'=>'min:6',
                'password'=>'min:6',

            ],[
                'username.min'=>'The username must be at least 6 characters.',
                'password.min'=>'The password must be at least 6 characters.',
            ]);
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

//        if(Auth::member()->attempt(['username'=>$request->username,'password'=>$request->password])){
//            return redirect('/');
//        }
//        else{
//
//            return redirect('login')->with('message','error');
//        }

    }
    public function register(){
        return view('pages.registration_user');
    }
    public function registerSuccess(){
        return view('pages.registration_success');
    }
    public function saveRegister(Request $request){
        $this->validate($request,
            [
                'username'=>'min:6',
                'password'=>'min:6',
                'confirm_password'=>'same:password',
                'check'=> 'accepted'
            ],[
                'username.min'=>'The username must be at least 6 characters.',
                'password.min'=>'The password must be at least 6 characters.',
                'confirm_password.same'=>'The confirm password must be same with password!!',
                'check.accepted'=>'You need agree to the Terms of Service and Privacy Policy'
            ]);
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

    //pages
    //about us
    public function aboutUs(){
        return view('pages.about_us');
    }
    public function aboutUs1(){
        return view('pages.about_us1');
    }
    public function aboutUs2(){
        return view('pages.about_us2');
    }
    public function aboutUs3(){
        return view('pages.about_us3');
    }
    public function aboutUs4(){
        return view('pages.about_us4');
    }
    public function aboutUs5(){
        return view('pages.about_us5');
    }

    //end
    //help center
    public function helpCenter(){
        return view('pages.help_center');
    }
    public function helpCenter1(){
        return view('pages.help_center1');
    }
    public function helpCenter2(){
        return view('pages.help_center2');
    }
    public function helpCenter3(){
        return view('pages.help_center3');
    }
    public function helpCenter4(){
        return view('pages.help_center4');
    }
    public function helpCenter5(){
        return view('pages.help_center5');
    }
    public function helpCenter6(){
        return view('pages.help_center6');
    }
    //end
    public function contact(){
        return view('pages.contact');
    }
    public function showOurPartners(){
        return view('pages.our_partners');
    }

    public function showChildren(){
        $post = list_post::all()->where('category_id', 3)->where('post_status',1)->sortByDesc('created_at');
        return view('pages.children',['children'=>$post]);
    }
    public function showEducation(){
        $post = list_post::all()->where('category_id', 1)->where('post_status',1)->sortByDesc('created_at');
        return view('pages.education',['children'=>$post]);
    }
    public function showHealth(){
        $post = list_post::all()->where('category_id', 2)->where('post_status',1)->sortByDesc('created_at');
        return view('pages.health_care',['children'=>$post]);
    }
    public function showOther(){
        $post = list_post::all()->where('category_id', 4)->where('post_status',1)->sortByDesc('created_at');
        return view('pages.other',['children'=>$post]);
    }
    public function news(){
        return view('pages.news');
    }
    public function blogDetail($id){
        $data = list_post::where('post_id', $id)->get();
        return view('pages.blog_detail',['data' => $data]);
    }
    public function eventsDetail($id){
        $data = Events::where('events_id', $id)->get();
        return view('pages.events_detail',['data' => $data]);
    }
    public function search(Request $request){
        $keyword = $request -> keyword;
        $data = list_post::where('post_title', 'like', "%$keyword%")->orWhere('post_content', 'like', "%$keyword%")
            ->take(10)->paginate(5);
        return view('pages.search', ['blogDetail' => $data, 'keyword' => $keyword ]);
    }
}
