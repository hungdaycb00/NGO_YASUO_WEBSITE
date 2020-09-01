<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;

class MailController extends Controller
{
    //
    public function sendMail(){
        //send mail
        $to_name = Session::get('name');
        $to_email = Session::get('mail');//send to this email

        $data = array("name"=>"Give - AID Team,","body"=>'We have received your information!',"end"=>'Thanks you so much !!!','user'=>$to_name); //body of mail.blade.php

                Mail::send('pages.Send_mail',$data,function($message) use ($to_name,$to_email){
                    $message->to($to_email)->subject('Donate Give - AID');//send this mail with subject
                    $message->from($to_email,$to_name);//send from this mail
                });

        Session::put('name', null);
        Session::put('mail', null);
                //--send mail
        return redirect('notice_transfer');
    }
    public function mail(){
        return view('pages.Send_mail');
    }
}
