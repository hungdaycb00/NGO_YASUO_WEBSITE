<?php
?>
@extends('layout.admin_layout')
@section('admin_content')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Add new post
        </header>

        <div class="panel-body">

            @foreach($edit_post as $key =>$edit_value)
            <div class="position-center">
                <form role="form" action="{{URL::to('update_post/'.$edit_value->post_id)}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" value="{{$edit_value->post_title}}" class="form-control" id="exampleInputEmail1" name="add_title_post" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Content</label>
                        <textarea class="form-control" style="resize: none" rows="8" name="add_content">{{$edit_value->post_content}}
                        </textarea>
                    </div>
                    <div class="form-group" name="imageName">
                        <label for="exampleInputFile">Image input</label>
                        <input type="file" name="post_image" id="exampleInputFile">
                    </div>
                    <button type="submit" name="update_post" class="btn mt-10 btn-info ">Submit</button>
                </form>
            </div>
            @endforeach
        </div>
    </section>

</div>
@endsection
