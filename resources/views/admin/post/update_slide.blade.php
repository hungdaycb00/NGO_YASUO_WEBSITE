<?php
?>
@extends('layout.admin_layout')
@section('admin_content')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Update Our Partners
        </header>
        @if(count($errors) > 0)
            @foreach($errors->all() as $err)
                <div class="alert alert-danger">
                    {{$err}}<br>
                </div>
            @endforeach
        @endif
        <?php
        $message = Session::get('message');
        if($message){
            echo '<span class="text-alert alert" >'.$message.'</span>';
            Session::put('message', null);
        }
        ?>
        <div class="panel-body">

            @foreach($edit_slide as $key =>$edit_value)
            <div class="position-center">
                <form role="form" action="{{URL::to('admin/our_partners/update/'.$edit_value->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" value="{{$edit_value->title}}" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="">Link</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="{{$edit_value->link_address}}" name="link" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile"><img src="/upload/{{$edit_value->image_name}}" alt="" height="150" width="150" style="margin-bottom: 10px;"></label>
                        <input type="file" name="post_image" id="exampleInputFile">
                        <input type="hidden" name="old_image" id="exampleInputFile" value="{{$edit_value->image_name}}">
                    </div>
                    <button type="submit" name="update_post" class="btn mt-10 btn-info ">Submit</button>
                </form>
            </div>
            @endforeach
        </div>
    </section>

</div>
@endsection
