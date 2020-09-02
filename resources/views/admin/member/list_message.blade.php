<?php
?>
@extends('layout.admin_layout')
@section('admin_content')

    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                List of message
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Subject</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th></th>
                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($mess as $cate_member)
                    <tr>
                        <td>{{$cate_member->id}}</td>
                        <td>{{$cate_member->subject}}</td>
                        <td>{{$cate_member->name}}</td>
                        <td>{{$cate_member->mail}}</td>
                        <td>{{$cate_member->message}}</td>
                        <td>
                            <a onclick="return confirm('Are you sure to delete ?')" href="{{URL::to('admin/message/delete/'.$cate_member->id)}}" class="active  styling-edit" ui-toggle-class="">
                                <i class="fa fa-times text-danger text"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">

                    <div class="col-sm-5 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
