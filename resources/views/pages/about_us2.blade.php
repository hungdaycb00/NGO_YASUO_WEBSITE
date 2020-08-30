@extends('layout.user_layout')
@section('user_content')
   @include('layout.about_layout')
   <style>
       .slider-area3 .hero-cap h2{
           color: #072366;
           font-size: 50px;
           font-weight: 800;
           text-transform: capitalize;
           line-height: 1;
           margin-top: 100px;
       }
       .slider-area3{
           height: 250px;
           background-size: cover;

       }
       .col-lg-4{
           border-right: 1px solid rgba(0,0,0,0.1);;
           margin-bottom: 30px;
           margin-top: 8px;
       }
       .col-lg-8{
           padding-bottom: 30px;
       }
       ul.text-right.pr-3.text-direction-none {
           font-size: 20px;
           line-height: 100px;
           font-weight: bold;

       }
       a.user-nav-link.nav-link.active  {
           color: #10285d;
       }
       a.user-nav-link.nav-link.active.tittle-one  {
           color: #09cc7f;
       }
       li.user-nav.no-wrap.nav.flex-column a:hover {
           color: #09cc7f;
       }


       h2.text-heading-aboutus{
           font-size: 35px;
           margin-bottom: 20px;
       }

       .col-lg-8 h3.tieude3{
           font-size: 25px;
           color: #007bff;
           margin-bottom: 20px;
       }
   </style>
    <div class="container">
        <div class="row">
           @include('layout.about_layout_left')
            <div class="col-lg-8 ">
                <h2 class="text-heading-aboutus">Our Guiding Principles</h2>
                <h3 class="tieude3">Vision</h3>
                <p>GiveIndia’s vision is to alleviate poverty by enabling the world to give.</p>
                <img src="../frontend/img/aboutus/OurGuidingPrinciples.png" alt="">
                <h3 class="tieude3">Our Values</h3>
                <p><strong>Integrity in everything we do</strong></p>
                <p>We strive to be honest and fair to all our stakeholders
                    , and do the right thing, even when no one’s watching.
                </p>
                <p>—</p>
                <p><strong>Serve with passion</strong></p>
                <p>We are fiercely committed to our purpose and work with
                    a burning desire to deliver our impact.
                </p>
                <p>—</p>
                <p><strong>Focused on scale</strong></p>
                <p>We stay laser-focused on large-scale impact. if we can’t scale it, we park it.</p>
                <p>—</p>
                <p><strong>Empathy for all</strong></p>
                <p>Empathy is why we’re together. we provide unconditional respect, freedom & support to each other.</p>

            </div>
        </div>
    </div>

@endsection

