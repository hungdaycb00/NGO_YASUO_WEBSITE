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
            <div class="position-center text-center">
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
            </div>

            <div class="position-center">
                <form role="form" action="{{URL::to('admin/our_partners/save')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="">title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter title">
                    </div>
                    <div class="form-group" name="imageName">
                        <label for="exampleInputFile">Image input</label>
                        <input type="file" name="post_image" id="exampleInputFile">
                    </div>
                    <div class="form-group">
                        <label for="">Link</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="link" placeholder="Enter title">
                    </div>
                    <select class="form-control input-m m-bot15" name="post_status">
                        <option value="1">Show</option>
                        <option value="0">Hidden</option>
                    </select>
                    <button type="submit" class="btn mt-10 btn-info ">Submit</button>
                </form>
            </div>

        </div>
    </section>

</div>
@endsection
