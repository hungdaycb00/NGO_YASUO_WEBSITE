<?php

namespace App\Http\Controllers;

use App\Events;
use App\list_post;
use DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EventsController extends Controller
{
    //post
    public function addPost(){
        return view('admin.events.add_new_post');
    }
    public function listPost(){
        $dataListPost = Events::all();
        return view('admin.events.list_post',['list'=>$dataListPost]);
    }
    public function saveNewPost(Request $request){
        $this->validate($request,
            [
                'add_title_post'=> 'required|max:100',
                'post_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'total_donate'=>'required',
            ],
            [
                'add_title_post.required'=>'The title field is required.!!!',
                'add_title_post.max'=>'The title max to 100 characters!!!',
                'post_image.max'=>'images with a maximum size of 2048kb!!!',
                'post_image.mines'=>'The image must have a jpeg,png,jpg,gif,svg extension!!!',
                'total_donate'=>'Enter the total donate target!!',
            ]);
        $data = array();
        $data['events_title'] = $request->add_title_post;
        $data['events_content'] = $request->add_content;
        $data['total_donate']= $request->total_donate;
        $data['category_id']= $request->category_type;
        $data['post_status']= $request->post_status;
        $get_image = $request->file('post_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.time().'.'.$get_image->getClientOriginalExtension();
            $get_image->move('upload/',$new_image);
            $data['events_imageName'] = $new_image;
            DB::table('events_tbl')->insert($data);
            Session::put('message', 'Add new events success!');
            return Redirect::to('admin/events/add_post');
        }
        else{
            DB::table('events_tbl')->insert($data);
            Session::put('message', 'Add new post success!');
            return Redirect::to('admin/events/add_post');
        }


    }
    public function deletePost( $id){
        Events::where('events_id', $id)->delete();
        Session::put('message', 'Delete post success!');
        return Redirect::to('admin/events/list_post');

    }
    public function editPost($id){
        $edit_Post = Events::where('events_id', $id)->get();
        $managerPost= view('admin.events.update_post')->with('edit_post',$edit_Post);
        return view('layout.admin_layout')->with('admin.events.update_post',$managerPost);
    }
    public function updatePost(Request $request, $id){
        $this->validate($request,
            [
                'add_title_post'=> 'required|max:100',
                'post_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'total_donate'=>'required',
            ],
            [
                'add_title_post.required'=>'The title field is required.!!!',
                'add_title_post.max'=>'The title max to 100 characters!!!',
                'post_image.max'=>'images with a maximum size of 2048kb!!!',
                'post_image.mines'=>'The image must have a jpeg,png,jpg,gif,svg extension!!!',
                'total_donate'=>'Enter the total donate target!!',
            ]);
        $data = array();
        $data['events_title'] = $request->add_title_post;
        $data['events_content'] = $request->add_content;
        $data['total_donate']= $request->total_donate;
        $data['category_id']= $request->category_type;
        $get_image = $request->file('post_image');
        if($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . time() . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('upload/', $new_image);
            $data['events_imageName'] = $new_image;
            Events::where('events_id', $id)->update($data);
            Session::put('message', 'Update events success!');
            return Redirect::to('admin/events/list_post');
        }
        else{
            $data['events_imageName'] = $request->old_image;
            Events::where('events_id', $id)->update($data);
            Session::put('message', 'Update events success!');
            return Redirect::to('admin/events/list_post');
        }
    }
    public function inactivePost($id){
        $data = array();
        $data['post_status'] = 1;
        Events::where('events_id', $id)->update($data);
        Session::put('message', 'Post is inactive!');
        return Redirect::to('admin/events/list_post');
    }
    public function activePost($id){
        $data = array();
        $data['post_status'] = 0;
        Events::where('events_id', $id)->update($data);
        Session::put('message', 'Post is active!');
        return Redirect::to('admin/events/list_post');
    }
    //end

}
