<?php

namespace App\Http\Controllers;

use App\list_post;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    //
    public function addPost(){
        return view('admin.add_new_post');
    }
    public function listPost(){
        $dataListPost = list_post::all();
       $managerPost= view('admin.list_post')->with('list_post',$dataListPost);
       return view('layout.admin_layout')->with('admin.list_post',$managerPost);


    }
    public function saveNewPost(Request $request){
        $data = array();
        $data['post_title'] = $request->add_title_post;
        $data['post_content'] = $request->add_content;
        $data['post_status']= $request->post_status;

        $this->validate($request, [
            'post_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $get_image = $request->file('post_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.time().'.'.$get_image->getClientOriginalExtension();
            $get_image->move('upload/',$new_image);
            $data['post_imageName'] = $new_image;
            DB::table('list_post')->insert($data);
            Session::put('message', 'Add new post success!');
            return Redirect::to('add_post');
        }
        if($data){
            DB::table('list_post')->insert($data);
            Session::put('message', 'Add new post success!');
            return Redirect::to('add_post');
        }
        else{
            Session::put('message', 'Please fill full the information!!');
            return Redirect::to('add_post');
        }
    }

    public function editPost($post_id){
        $edit_Post = list_post::where('post_id', $post_id)->get();
        $managerPost= view('admin.update_post')->with('edit_post',$edit_Post);
        return view('layout.admin_layout')->with('admin.update_post',$managerPost);
    }
    public function updatePost(Request $request, $post_id){
        $data = array();
        $data['post_title'] = $request->add_title_post;
        $data['post_content'] = $request->add_content;
        $data['post_imageName'] = $request->imageName;
        $get_image = $request->file('post_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.time().'.'.$get_image->getClientOriginalExtension();
            $get_image->move('upload/',$new_image);
            $data['post_imageName'] = $new_image;
            list_post::where('post_id', $post_id)->update($data);
            Session::put('message', 'Update post success!');
            return Redirect::to('list_post');
        }
    }
    public function inactivePost($post_id){

        $data = array();
        $data['post_status'] = 1;
        list_post::where('post_id', $post_id)->update($data);
//        list_post::where('post_id', $post_id)->update('post_status', 0);
        Session::put('message', 'Post is inactive!');
        return Redirect::to('list_post');
    }
    public function activePost($post_id){
        $data = array();
        $data['post_status'] = 0;
        list_post::where('post_id', $post_id)->update($data);
        Session::put('message', 'Post is active!');
        return Redirect::to('list_post');
    }

    public function deletePost( $post_id){
            list_post::where('post_id', $post_id)->delete();
            Session::put('message', 'Delete post success!');
            return Redirect::to('list_post');

    }
}
