<?php

namespace App\Http\Controllers;

use App\Category_post;
use App\Donate;
use App\Events;
use App\list_post;
use Illuminate\Http\Request;
use App\member;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;

class PagesController extends Controller
{
    private $vnp_TmnCode = "MET2IMIN"; //Mã website tại VNPAY
    private $vnp_HashSecret = "JQMZJMUHWPTWRXJOGNIFIEPYVPEJFZZV"; //Chuỗi bí mật
    private $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    private $vnp_Returnurl ="http://ngo-yasuo.org/onlinebank";

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

    //pages
    public function aboutUs(){
        return view('pages.about_us');
    }
    public function contact(){
        return view('pages.contact');
    }
    function __construct()
    {
        $category =  Category_post::all();
        $post = list_post::all()->sortByDesc('created_at');
        $news = list_post::all()->where('post_highlights',1)->sortByDesc('created_at')->take(4);
        $events = Events::all()->sortByDesc('created_at')->take(3);
        $data = DB::table('events_tbl')
            ->join('donate_tbl','donate_tbl.events_id','events_tbl.events_id')
            ->select('donate_tbl.events_id',DB::raw('Sum(donate_tbl.amount) as total_donates'))
            ->groupBy('donate_tbl.events_id')
            ->where('donate_tbl.money_status',4)
            ->get();

//        $data = Donate::all()->where('money_status',4)->groupBy('events_id')->sum('amount');
        view()->share('cate',$category);
        view()->share('post',$post);
        view()->share('events',$events);
        view()->share('news',$news);
        view()->share('donate',$data);
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
    public function showVNPay(Request $request){
        if ($request->vnp_ResponseCode == '00')
        {
//            $transactionID = $request->vnp_TxnRef;
//            $transaction = Transaction::find($transactionID);
//            if ($transaction)
//            {
//                \Cart::clear();
//                $transaction->tr_type = Transaction::TYPE_PAY;
//                $transaction->tr_status = Transaction::STATUS_DONE;
//                $transaction->save();
//
//                return redirect()->to('/')->with('success','Xác nhận giao dịch thành công');
//            }

            return redirect()->to('/')->with('message','Xác nhận giao dịch thành công');
        }

    return view('pages.vnpay');
}
    public function createVNPay(Request $request){

        $vnp_TxnRef = 20000000000;//Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
            $vnp_OrderInfo = $request->order_desc;
            $vnp_OrderType = $request->order_type;
            $vnp_Amount = $request->amount* 100;
            $vnp_Locale = $request->language;
            $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
            error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $this->vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $this->vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );
            if ($request->bank_code)
            {
                $inputData['vnp_BankCode'] = 'NCB';
            }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $this->vnp_Url . "?" . $query;
        if ($this->vnp_HashSecret) {
            $vnpSecureHash = hash('sha256',$this->vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }

            $returnData = array(
                'code' => '00',
                'message' => 'success',
                'data' => $vnp_Url
            );

//        dd($returnData);
//
            return redirect()->to($returnData['data']);
        }
}
