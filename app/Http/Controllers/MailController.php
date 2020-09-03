<?php

namespace App\Http\Controllers;

use App\Events;
use App\member;
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
    public function sendPass(Request $request){
        //send mail
        $data = member::where('email',$request->email)->get();
        foreach ($data as $p){
            $user = $p->username;
            $pass = $p->password;
        }
        $to_name = $user;
        $to_email = $request->email;//send to this email

        $data = array("name"=>"Give - AID Team,","body"=>'Your information:',"end"=>'Thanks you so much !!!','user'=>$to_name,'pass'=>$pass); //body of mail.blade.php

        Mail::send('pages.Send_password',$data,function($message) use ($to_name,$to_email){
            $message->to($to_email)->subject('Donate Give - AID');//send this mail with subject
            $message->from($to_email,$to_name);//send from this mail
        });

        //--send mail
        return redirect('login')->with('message','Check email to receive your password!');
    }
    public function forgotPass(){
        return view('pages.forgot_pass');
    }
    public function sendMailFriend(Request $request){
        //send mail
        $to_name = 'My Friend';
        $to_email = $request->mail;//send to this email
        $messages = $request->message;
        $events_id = $request->id;

        $data = array("name"=>"Give - AID Team,","mess"=>$messages,"end"=>'Thanks you so much !!!','user'=>$to_name,'id'=>$events_id); //body of mail.blade.php

        Mail::send('pages.Send_friend',$data,function($message) use ($to_name,$to_email){
            $message->to($to_email)->subject('Your friend invite you join the Events');//send this mail with subject
            $message->from($to_email,$to_name);//send from this mail
        });

        //--send mail
        return redirect('events_detail/'.$events_id)->with('message','');
    }
}
