@extends('layout.notice_layout')
@section('notice')
    <img src="{{URL::to('/frontend/img/check.png')}}" alt="">
    <h2>Registration completed successfully</h2>
    <br>
    <a href="{{URL::to('login')}}"><button class="btn-large">Back to Login</button></a>
@endsection
