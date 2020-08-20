<?php


namespace App\Http\Controllers;

use Session;
use App\Donate;
use App\list_post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DonateController
{
    public function showDonate(){
        return view('pages.donate');
    }
    public function transfer(){
        return view('pages.transfer');
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
//        $data->events_id = $request->events_id;
        $data->donator_status = $request->status;
        $data->money_status = 0;
        $data->comment = $request->message;

            $data->save();
            Session::put('message', 'Add new donator success!');
            return Redirect::to('admin/donate/list');
    }
    public function delete( $id){
        list_post::where('post_id', $id)->delete();
        Session::put('message', 'Delete post success!');
        return Redirect::to('admin/post/list_post');

    }
    public function edit($id){
        $edit_Post = list_post::where('post_id', $id)->get();
        $managerPost= view('admin.post.update_post')->with('edit_post',$edit_Post);
        return view('layout.admin_layout')->with('admin.post.update_post',$managerPost);
    }
    public function update(Request $request, $id){
        $this->validate($request,
            [
                'add_title_post'=> 'required',
                'add_summary'=>'required|max:255'
            ],
            [
                'add_title_post.required'=>'Enter the title!!!',
                'add_summary.required'=>'Enter the title!!!',
                'add_summary.max'=>'The summary max to 255 characters!!!',
            ]);
        $data = array();
        $data['post_title'] = $request->add_title_post;
        $data['post_summary'] = $request->add_summary;
        $data['post_content'] = $request->add_content;
        $data['post_highlights']= $request->highlights;
        $data['category_id']= $request->category_type;
        $get_image = $request->file('post_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.time().'.'.$get_image->getClientOriginalExtension();
            $get_image->move('upload/',$new_image);
            $data['post_imageName'] = $new_image;
            list_post::where('post_id', $id)->update($data);
            Session::put('message', 'Update post success!');
            return Redirect::to('admin/post/list_post');
        }
        else{
            $data['post_imageName'] = $request->old_image;
            list_post::where('post_id', $id)->update($data);
            Session::put('message', 'Update post success!');
            return Redirect::to('admin/post/list_post');
        }
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
