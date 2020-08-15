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
            @foreach($cate as $key =>$edit_value)
            <div class="position-center">
                <form role="form" action="{{URL::to('admin/category/update_category/'.$edit_value->category_id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" value="{{$edit_value->category_name}}" class="form-control" id="exampleInputEmail1" name="category_name" placeholder="Enter title">
                    </div>
                    <button type="submit" name="update_post" class="btn mt-10 btn-info ">Submit</button>
                </form>
            </div>
            @endforeach
        </div>
    </section>

</div>
@endsection
