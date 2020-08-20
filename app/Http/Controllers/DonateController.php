<?php


namespace App\Http\Controllers;

use App\Events;
use Session;
use App\Donate;
use App\list_post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DonateController
{
    public function showDonate(){
        Session::put('events_id', null);
        return view('pages.donate');
    }
    public function showDonateEvents($id){
        Session::put('events_id', $id);
        return view('pages.donate');
    }
    public function transfer(){
        return view('pages.transfer');
    }
    public function transferEvents($id){
        $data = Events::where('events_id',$id)->get();
        return view('pages.transfer',['events'=>$data]);
    }
    public function creditCard(){
        return view('pages.donate_credit_card');
    }

    //post
    public function add(){
        return view('admin.donate.transfer');
    }
    public function list(){
        $dataListPost = Donate::all();
        return view('admin.donate.list',['list'=>$dataListPost]);
    }
    public function save(Request $request){

        $data = new Donate;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->amount = $request->amount;
        $data->category_id = $request->category_type;
        $data->events_id = $request->events_id;
        $data->donator_status = $request->status;
        $data->money_status = 0;
        $data->comment = $request->message;

            $data->save();
            Session::put('events_id', null);
            Session::put('message', 'Add new donator success!');
            return Redirect::to('admin/donate/list');
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
        $data = new Donate;
        $data->name = $request->name;
        $data->member_id = $request->member_id;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->amount = $request->amount;
        $data->category_id = $request->category_type;
        $data->events_id = $request->events;
        $data->donator_status = $request->donator_status;
        $data->money_status = $request->money_status;
        $data->comment = $request->message;

        $data->save();
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
}
