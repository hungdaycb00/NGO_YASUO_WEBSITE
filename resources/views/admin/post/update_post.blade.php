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
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}} <br>
                    @endforeach
                </div>
            @endif
            <?php

            $message = Session::get('message');
            if($message){
                echo '<span class="text-alert alert" >'.$message.'</span>';
                Session::put('message', null);
            }
            ?>
            @foreach($edit_post as $key =>$edit_value)
            <div class="position-center">
                <form role="form" action="{{URL::to('admin/post/update_post/'.$edit_value->post_id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" value="{{$edit_value->post_title}}" class="form-control" id="exampleInputEmail1" name="add_title_post" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Summary</label>
                        <input type="text" value="{{$edit_value->post_summary}}" class="form-control" id="exampleInputEmail1" name="add_summary" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Content</label>
                        <textarea class="form-control" id="content-1" style="resize: none" rows="8" name="add_content">{{$edit_value->post_content}}
                        </textarea>
                        <script type="text/javascript">

                            config={};
                            config.entities_latin = false;
                            config.uiColor = '#AADC6E';
                            config.language = 'en';
                            config.toolbarGroups = [
                                { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                                { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
                                { name: 'document', groups: [ 'document', 'doctools', 'mode' ] },
                                { name: 'links', groups: [ 'links' ] },
                                { name: 'forms', groups: [ 'forms' ] },
                                { name: 'tools', groups: [ 'tools' ] },
                                '/',
                                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                                { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
                                { name: 'insert', groups: [ 'insert' ] },
                                { name: 'styles', groups: [ 'styles' ] },
                                { name: 'about', groups: [ 'about' ] },
                                '/',
                                { name: 'colors', groups: [ 'colors' ] },
                                { name: 'others', groups: [ 'others' ] }
                            ];

                            config.removeButtons = 'Checkbox,Radio,HiddenField,Button,ImageButton,Select,TextField,Textarea,Form,CreateDiv,Language,Anchor,Table,Flash,Image,HorizontalRule,Iframe,ShowBlocks,Font,FontSize,TextColor,BGColor,Subscript,Superscript,CopyFormatting,RemoveFormat,Preview,Link,Unlink,NewPage,Print,Indent,Outdent,BidiLtr,BidiRtl,Smiley,SpecialChar,PageBreak';

                            CKEDITOR.replace('content-1', config);
                        </script>
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <select class="form-control input-m m-bot15" name="category_type">
                            <option value="{{$edit_value->category_id}}">{{$edit_value->categoryPost->category_name}}</option>
                            <option value="1">Education</option>
                            <option value="2">Health Care</option>
                            <option value="3">Privileged Children</option>
                            <option value="4">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Highlights</label>
                        <select class="form-control input-m m-bot15" name="highlights">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile"><img src="/upload/{{$edit_value->post_imageName}}" alt="" height="150" width="150" style="margin-bottom: 10px;"></label>
                        <input type="file" name="post_image" id="exampleInputFile">
                        <input type="hidden" name="old_image" id="exampleInputFile" value="{{$edit_value->post_imageName}}">
                    </div>
                    <button type="submit" name="update_post" class="btn mt-10 btn-info ">Submit</button>
                </form>
            </div>
            @endforeach
        </div>
    </section>

</div>
@endsection
