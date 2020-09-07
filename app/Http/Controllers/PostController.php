<?php

namespace App\Http\Controllers;
use App\Controllers;
use App\Category_post;
use App\list_post;
use App\Slide;
use DB;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    //post
    public function addPost(){
        $data = Category_post::all();
        return view('admin.post.add_new_post',['category'=>$data]);
    }
    public function listPost(){
        $dataListPost = list_post::all();
       return view('admin.post.list_post',['list'=>$dataListPost]);
    }
    public function saveNewPost(Request $request){
        $this->validate($request,
            [
                'add_title_post'=> 'required|max:100',
                'add_summary'=>'required|max:255',
                'post_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ],
            [
                'add_title_post.required'=>'Enter the title!!!',
                'add_title_post.max'=>'The title max to 100 characters!!!',
                'add_summary.required'=>'Enter the title!!!',
                'add_summary.max'=>'The summary max to 255 characters!!!',
                'post_image.max'=>'images with a maximum size of 2048kb!!!',
                'post_image.mines'=>'The image must have a jpeg,png,jpg,gif,svg extension!!!',
            ]);
        $data = array();
        $data['post_title'] = $request->add_title_post;
        $data['post_summary'] = $request->add_summary;
        $data['post_content'] = $request->add_content;
        $data['post_highlights']= $request->highlights;
        $data['category_id']= $request->category_type;
        $data['post_status']= $request->post_status;
        $get_image = $request->file('post_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.time().'.'.$get_image->getClientOriginalExtension();
            $get_image->move('upload/',$new_image);
            $data['post_imageName'] = $new_image;
            DB::table('list_post')->insert($data);
            Session::put('message', 'Add new post success!');
            return Redirect::to('admin/post/add_post');
        }
        else{
            DB::table('list_post')->insert($data);
            Session::put('message', 'Add new post success!');
            return Redirect::to('admin/post/add_post');
        }


    }
    public function deletePost( $id){
        list_post::where('post_id', $id)->delete();
        Session::put('message', 'Delete post success!');
        return Redirect::to('admin/post/list_post');

    }
    public function editPost($id){
        $edit_Post = list_post::where('post_id', $id)->get();
        $managerPost= view('admin.post.update_post')->with('edit_post',$edit_Post);
        return view('layout.admin_layout')->with('admin.post.update_post',$managerPost);
    }
    public function updatePost(Request $request, $id){
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
    public function inactivePost($id){

        $data = array();
        $data['post_status'] = 1;
        list_post::where('post_id', $id)->update($data);
        Session::put('message', 'Post is inactive!');
        return Redirect::to('admin/post/list_post');
    }
    public function activePost($id){
        $data = array();
        $data['post_status'] = 0;
        list_post::where('post_id', $id)->update($data);
        Session::put('message', 'Post is active!');
        return Redirect::to('admin/post/list_post');
    }
    //end
    //category
    public function addCategory(){
        return view('admin.post.add_new_category');
    }
    public function listCategory(){
        $data = Category_post::all();
        return view('admin.post.list_category',['list'=>$data]);
    }
    public function saveNewCategory(Request $request){
        $data = array();
        $data['category_name'] = $request->category_name;
        if($data){
            DB::table('category_post')->insert($data);
            Session::put('message', 'Add new category success!');
            return Redirect::to('admin/category/add_category');
        }
    }
    public function editCategory($id){
        $data = Category_post::where('category_id', $id)->get();
        return view('admin.post.update_category',['cate'=>$data]);
    }
    public function updateCategory(Request $request, $id){
        $data = array();
        $data['category_name'] = $request->category_name;
        if($data){
            Category_post::where('category_id', $id)->update($data);
            Session::put('message', 'Update category success!');
            return Redirect::to('admin/category/list_category');
        }
    }
    public function deleteCategory($id){
        Category_post::where('category_id', $id)->delete();
        Session::put('message', 'Delete category success!');
        return Redirect::to('admin/category/list_category');

    }
    //end
    //our partners
    public function addPartners(){
        return view('admin.post.add_new_slide');
    }
    public function listPartners(){
        $dataListPost = Slide::all();
        return view('admin.post.list_slide',['list'=>$dataListPost]);
    }
    public function saveNewPartners(Request $request){
        $this->validate($request,
            [
                'post_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ],
            [
                'post_image.max'=>'images with a maximum size of 2048kb!!!',
                'post_image.mines'=>'The image must have a jpeg,png,jpg,gif,svg extension!!!',
                'post_image.required'=>'Choose logo image!!!'
            ]);
        $data = array();
        $data['title'] = $request->title;
        $data['link_address'] = $request->link;
        $data['post_status']= $request->post_status;
        $get_image = $request->file('post_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.time().'.'.$get_image->getClientOriginalExtension();
            $get_image->move('upload/',$new_image);
            $data['image_name'] = $new_image;
            DB::table('slide_tbl')->insert($data);
            Session::put('message', 'Add new Partners success!');
            return Redirect::to('admin/our_partners/add');
        }
    }
    public function deletePartners( $id){
        Slide::where('id', $id)->delete();
        Session::put('message', 'Delete partners success!');
        return Redirect::to('admin/our_partners/list');

    }
    public function editPartners($id){
        $edit_Post = Slide::where('id', $id)->get();
        $managerPost= view('admin.post.update_slide')->with('edit_slide',$edit_Post);
        return view('layout.admin_layout')->with('admin.post.update_slide',$managerPost);
    }
    public function updatePartners(Request $request, $id){
        $this->validate($request,
            [
                'post_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ],
            [
                'post_image.max'=>'images with a maximum size of 2048kb!!!',
                'post_image.mines'=>'The image must have a jpeg,png,jpg,gif,svg extension!!!',
            ]);
        $data = array();
        $data['title'] = $request->title;
        $data['link_address'] = $request->link;
        $get_image = $request->file('post_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.time().'.'.$get_image->getClientOriginalExtension();
            $get_image->move('upload/',$new_image);
            $data['image_name'] = $new_image;
            DB::table('slide_tbl')->update($data);
            Session::put('message', 'Update Partners success!');
            return Redirect::to('admin/our_partners/add');

        }
        else{
            $data['image_name'] = $request->old_image;
            Slide::where('id', $id)->update($data);
            Session::put('message', 'Update Partners success!');
            return Redirect::to('admin/our_partners/list');
        }
    }
    public function inactivePartners($id){

        $data = array();
        $data['post_status'] = 1;
        Slide::where('id', $id)->update($data);
        Session::put('message', 'Partners is inactive!');
        return Redirect::to('admin/our_partners/list');
    }
    public function activePartners($id){
        $data = array();
        $data['post_status'] = 0;
        Slide::where('id', $id)->update($data);
        Session::put('message', 'Partners is active!');
        return Redirect::to('admin/our_partners/list');
    }
    //end
}
