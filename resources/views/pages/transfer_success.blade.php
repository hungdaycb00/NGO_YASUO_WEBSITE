@extends('layout.notice_layout')
@section('notice')
    <img src="{{URL::to('/frontend/img/check.png')}}" alt="">
    <h2>We have received your information</h2>
    <p>We will check and confirm via email</p>
    <p><i>Thanks you</i></p>
    <br>
    <a href="{{URL::to('/')}}"><button class="btn-large">Back to Home</button></a>
@endsection
