<?php
?>
@extends('layout.admin_layout')
@section('admin_content')
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Add new Events
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
            @foreach($edit as $d)
            <div class="position-center">
                <form role="form" action="{{URL::to('admin/donate/update/'.$d->id)}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label >Name</label>
                        <input type="text" value="{{$d->name}}" class="form-control"  name="name">
                        <label >Member ID</label>
                        <input type="number" value="{{$d->member_id}}" class="form-control"  name="member_id">
                        <label >Email</label>
                        <input type="text" value="{{$d->email}}" class="form-control"  name="email">
                        <label>Address</label>
                        <input type="text" value="{{$d->address}}" class="form-control"  name="address">
                        <label>Phone</label>
                        <input type="text" value="{{$d->phone}}" class="form-control"  name="phone">
                        <label for="">Amount</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" name="amount" value="{{$d->amount}}">
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <select class="form-control input-m m-bot15" name="category_type">
                            <option value="{{$d->category_id}}">{{$d->category->category_name}}</option>
                            <option value="1">Education</option>
                            <option value="2">Health Care</option>
                            <option value="3">Privileged Children</option>
                            <option value="4">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Events</label>
                        <select class="form-control input-m m-bot15" name="events">
                            <option value="">None</option>
                            @if($d->events_id != null)
                            <option value="{{$d->events_id}}">{{$d->events->events_title}}</option>
                            @endif
                            @foreach($edit1 as $e)
                                <option value="{{$e->events_id}}">{{$e->events_title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Donator Status</label>
                        <select class="form-control input-m m-bot15" name="donator_status">
                            <option value="{{$d->donator_status}}">{{$d->statusDonator->status_name}}</option>
                            <option value="2">Private</option>
                            <option value="1">Public</option>
                        </select>
                        <label for="">Money Status</label>
                        <select class="form-control input-m m-bot15" name="money_status">
                            <option value="{{$d->money_status}}">{{$d->statusMoney->status_name}}</option>
                            <option value="4">Complete</option>
                            <option value="3">Pending</option>
                        </select>
                        <label >Comment</label>
                        <input type="text" value="{{$d->comment}}" class="form-control"  name="comment">
                    </div>
                    <button type="submit" name="update_post" class="btn mt-10 btn-info ">Submit</button>
                </form>
            </div>
            @endforeach
        </div>
    </section>

</div>
@endsection
