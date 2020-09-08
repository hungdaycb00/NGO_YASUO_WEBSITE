<?php


namespace App\Http\Controllers;
use App\Controllers;
use App\list_post;
use App\Category_post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events;
use Session;
use DB;
use App\Donate;
use Illuminate\Support\Facades\Redirect;


class DonateController extends Controller
{
    private $vnp_TmnCode = "MET2IMIN"; //Mã website tại VNPAY
    private $vnp_HashSecret = "JQMZJMUHWPTWRXJOGNIFIEPYVPEJFZZV"; //Chuỗi bí mật
    private $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    private $vnp_Returnurl ="http://ngo-yasuo.org/onlinebank";
    public function showDonate(){
        Session::put('events_id', null);
        return view('pages.donate');
    }
    public function transferSuccess(){
        Session::put('events_id', null);
        return view('pages.transfer_success');
    }
    public function showDonateEvents($id){
        Session::put('events_id', $id);
        return view('pages.donate');
    }
    public function transfer(){
        $data = Category_post::all();
        return view('pages.transfer',['category'=>$data]);
    }
    public function transferEvents($id){
        $data = Events::where('events_id',$id)->get();
        return view('pages.transfer',['events'=>$data]);
    }
    public function creditCard(){
        $data = Category_post::all();
        return view('pages.donate_credit_card',['category'=>$data]);
    }
    public function creditCardEvents($id){
        $data = Events::where('events_id',$id)->get();
        return view('pages.donate_credit_card',['events'=>$data]);
    }

    //post
    public function add(){
        return view('admin.donate');
    }
    public function list(){
        $dataListPost = Donate::all();
        return view('admin.donate.list',['listDonate'=>$dataListPost]);
    }
    public function save(Request $request){

        $this->validate($request,
            [
                'category_type' => 'required',
                'amount'=>'gt:0'
            ],
            [
                'category_type.required'=>'Please select the donate reason!!!',
                'amount.gt'=>'your donate must greater than 0!!!'

            ]);
        $data = new Donate;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->amount = $request->amount;
        $data->category_id = $request->category_type;
        $data->events_id = $request->events_id;
        $data->donator_status = $request->status;
        $data->money_status = 3;
        $data->code_payment = $request->code_payment;
        $data->comment = $request->message;
        Session::put('code_payment',$request->code_payment);
        if(Session::get('user_id') != null){
            $data->member_id = Session::get('user_id');
        }
            $data->save();
            Session::put('message', 'Add new donator success!');
        Session::put('name', $request->name);
            Session::put('mail', $request->email);
            return Redirect::to('/send-mail');
    }
    public function saveCredit(Request $request){

        $this->validate($request,
            [
                'category_type' => 'required',
                'amount'=>'gt:0'
            ],
            [
                'category_type.required'=>'Please select the donate reason!!!',
                'amount.gt'=>'your donate must greater than 0!!!'

            ]);
        $data = new Donate;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->amount = $request->amount;
        $data->category_id = $request->category_type;
        $data->events_id = $request->events_id;
        $data->donator_status = $request->status;
        $data->money_status = 3;
        $data->code_payment = $request->code_payment;
        Session::put('code_payment',$request->code_payment);
        $data->comment = $request->message;
        if(Session::get('user_id') != null){
            $data->member_id = Session::get('user_id');
        }
        $data->save();
        return Redirect::to('/onlinebank');
    }
    public function delete( $id){
        Donate::where('id', $id)->delete();
        Session::put('message', 'Delete Donator success!');
        return Redirect::to('admin/donate/list');

    }
    public function edit($id){
        $edit = Donate::where('id', $id)->get();
        $events = Events::all()->sortByDesc('created_at');
        return view('admin.donate.update',['edit'=>$edit],['edit1'=>$events]);
    }
    public function update(Request $request, $id){
        $data = array();
        $data['name'] = $request->name;
        $data['member_id']= $request->member_id;
        $data['email']  = $request->email;
        $data['address'] = $request->address;
        $data['phone'] = $request->phone;
        $data['amount'] = $request->amount;
        $data['category_id'] = $request->category_type;
        $data['events_id'] = $request->events;
        $data['donator_status'] = $request->donator_status;
        $data['money_status'] = $request->money_status;
        $data['code_payment'] = $request->code_payment;
        $data['comment']  = $request->comment;

        DB::table('donate_details')->where('id',$id)->update($data);
        Session::put('events_id', null);
        Session::put('message', 'Update donator success!');
        return Redirect::to('admin/donate/list');
    }
    public function inactive($id){

        $data = array();
        $data['post_status'] = 1;
        list_post::where('post_id', $id)->update($data);
        Session::put('message', 'Post is inactive!');
        return Redirect::to('admin/post/list_post');
    }
    public function active($id){
        $data = array();
        $data['post_status'] = 0;
        list_post::where('post_id', $id)->update($data);
        Session::put('message', 'Post is active!');
        return Redirect::to('admin/post/list_post');
    }
    //end
    public function showVNPay(Request $request){

        if ($request->vnp_ResponseCode == '00')
        {
            $code_payment = Session::get('code_payment');
            $data = array();
            $data['money_status'] = 4;
             DB::table('donate_details')->where('code_payment', $code_payment)->update($data);
                return redirect::to('/notice_transfer');
        }
        if(Session::get('code_payment')){
            $dataCard = Donate::all()->where('code_payment', Session::get('code_payment'))->take(1);
            return view('pages.vnpay',['code'=>$dataCard]);
        }


        return view('pages.vnpay');
    }
    public function createVNPay(Request $request){

        $vnp_TxnRef = $request->order_id;//Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
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
            $inputData['vnp_BankCode'] = $request->bank_code;
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
