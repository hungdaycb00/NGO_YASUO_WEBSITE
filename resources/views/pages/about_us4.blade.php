@extends('layout.user_layout')
@section('user_content')
   @include('layout.about_layout')
    <div class="container">
        <div class="row">
           @include('layout.about_layout_left')
            <div class="col-lg-8 ">
                <h2 class="text-heading-aboutus">Our Journey</h2>
                <img src="../frontend/img/aboutus/ourjourney.png" alt="" class="anhminhhoa">

            </div>
        </div>
    </div>

@endsection

