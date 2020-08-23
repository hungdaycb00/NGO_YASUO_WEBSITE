@extends('layout.user_layout')
@section('title')
    Our Partners
@endsection
@section('user_content')
    <style>
        #section-padding29{
            padding-top: 80px;
            padding-bottom: 80px;
        }
        .slider-area3 .hero-cap h2{
            color: #072366;
            font-size: 50px;
            font-weight: 800;
            text-transform: capitalize;
            line-height: 1;
            margin-top: 100px;
            margin-bottom: 40px;
        }
        .col-lg-6 .component-hero img{
            width: 100%;
            height: 350px;

        }
        .col-lg-6 .content-1{
            padding: 25px;

        }
        .col-lg-6 .content-1 h2{
            font-size: 35px;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .container .row1 h4{
            margin-top: 30px;
            font-size: 35px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 800;
        }
        .container .row1 p{
            text-align: center;
            margin-bottom: 50px;
        }
        .owl-carousel .owl-nav button.owl-prev {
            background: 0 0;
            color: inherit;
            border: none;
            padding: 0 !important;
            font: inherit;
            position: absolute;
            top: 25%;
            left: 0;
            background: #00000000;
        }
        .owl-carousel .owl-nav button.owl-next {
            background: 0 0;
            color: inherit;
            border: none;
            padding: 0 !important;
            font: inherit;
            position: absolute;
            top: 25%;
            right: 0;
            background: #00000000;

        }
        .owl-carousel .owl-nav button.owl-next span{
            font-size: 100px;
            color: #17a2b87a;
        }
        .owl-carousel .owl-nav button.owl-prev span{
            font-size: 100px;
            color: #17a2b87a;

        }
        .cases-caption2{
            padding: 24px 20px 10px 20px;
            background: white;
        }
        .container .row1 .item1 h5 {
            font-size: 21px;
            font-weight: 800;
            line-height: 1.4;
            margin-bottom: 20px;
            display: block;
            text-align: center;
            color: black;
        }
        h5 a:hover {
            color: black;
        }

        .container .row1 .item1 span.card__btn  {
            padding: 1rem;
            background-color: transparent;
            border: 1px solid #17a2b8;
            text-align: center;
            width: 60%;
            display: block;
            margin: 0 auto;
            border-radius: 4px;
            color: #007bff;
            font-weight: bold;
            transition: 0.4s;
        }

        .container .row1 .item1 span.card__btn:hover{
            background-color: #007bff;
            color: white;
            transition: 0.4s;
        }
        .container .row2  span.card__btn1{
            padding: 1rem;
            background-color: transparent;
            border: 1px solid #17a2b8;
            text-align: center;
            display:block;
            margin: 0 auto;
            border-radius: 4px;
            color: #007bff;
            font-weight: bold;
            transition: 0.4s;
            font-size: 16px;
            width: 300px;
            margin-top:50px;
        }
        .container .row2  span.card__btn1:hover{
            background-color: #007bff;
            color: white;
            transition: 0.4s;
        }
        .container .row3  h4{
            margin-top: 30px;
            font-size: 35px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 800;
            margin-bottom: 50px;
        }
        .container .row3{
            width: 70%;
            margin: 0 auto;
            margin-bottom: 100px;
        }
        .owl-stage-outer{
            margin-bottom:30px;
        }
        .container .row3 p{
            text-align: center;
            color: #17a2b8;
            font-weight: bold;
        }
        .container .row h3{
            font-size: 3rem;
            line-height: 3.75rem;
            margin-bottom: 1rem;
            font-weight: 900;
            padding: 1rem;
            text-align: center;
        }
        .container .row p.stat__subtitle{
            text-align: center;
            padding: 0px 100px ;
            font-weight: 800;
            color: #10285d;
            margin-bottom: 100px;
        }
        .container .row .col-lg-12 h4{

            font-size: 35px;
            margin-bottom: 70px;
            text-align: center;
            font-weight: bold;
        }
        .container .row .col-lg-12 p.stat__subtitle1{
            width: 80%;
            margin: 0px auto 30px auto;
            text-align: center;

        }
        .container .row .col-lg-12 img.align-center {

            width: 100%;
            margin: 70px 0px;
        }

    </style>

    <!--? Hero Start -->
    <div class="slider-area3">
        <div class="slider-height3 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-20 text-center">
                            <h2>Our Partners</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- title -->

    <div class="container">
        <div class="row">
            <div class="col-lg-6   ">

                <div class="content-1">
                    <h2>
                        Crucial for ending poverty for children
                    </h2>
                    <p>
                        These include institutions, governments, corporations, faith
                        communities and more at global, regional and local level.
                    </p>
                    <p>
                        <strong>
                            <em>
                                "Partnering and collaboration wherever we work delivers
                                the very best results for the world's vulnerable children"
                            </em>
                        </strong>
                    </p>
                    <p>
                        - Andrew Morley, World Vision International President
                    </p>

                </div>
            </div>

            <div class="col-lg-6  " >
                <div class="component-hero ">
                    <img src="frontend/img/ourpartners/ourpanner1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--Title End -->
    <!-- slide start-->
    <div class="service-area section-padding30" id="section-padding29">
        <div class="container">
            <div class="row1">
                <h4>Our Partnerships</h4>
                <p>We are pleased to work with thousands of partners. Those who work with us globally include:</p>
                <!-- Set up your HTML -->
                <div class="owl-carousel owl-theme">
                    <div class="item1">
                        <a href="">
                            <img src="frontend/img/ourpartners/logo1.png" alt="">
                        </a>
                        <div class="cases-caption2">
                            <h5><a href="services.html">The Global Fund</a></h5>
                            <a href=""><span class="card__btn">LEARN MORE</span></a>
                        </div>

                    </div>
                    <div class="item1">
                        <a href="">
                            <img src="assets/img/ourpartners/logo2.png" alt="">
                        </a>
                        <div class="cases-caption2">
                            <h5><a href="services.html">WFP</a></h5>
                            <a href=""><span class="card__btn">LEARN MORE</span></a>
                        </div>
                    </div>
                    <div class="item1">
                        <a href="">
                            <img src="assets/img/ourpartners/logo3.png" alt="">
                        </a>
                        <div class="cases-caption2">
                            <h5><a href="services.html">UNICEF</a></h5>
                            <a href=""><span class="card__btn">LEARN MORE</span></a>
                        </div>
                    </div>
                    <div class="item1">
                        <a href="">
                            <img src="assets/img/ourpartners/logo4.png" alt="">
                        </a>
                        <div class="cases-caption2">
                            <h5><a href="services.html">UNHCR</a></h5>
                            <a href=""><span class="card__btn">LEARN MORE</span></a>
                        </div>
                    </div>
                    <div class="item1">
                        <a href="">
                            <img src="assets/img/ourpartners/logo5.png" alt="">
                        </a>
                        <div class="cases-caption2">
                            <h5><a href="services.html">GRUNDFOS</a></h5>
                            <a href=""><span class="card__btn">LEARN MORE</span></a>
                        </div>
                    </div>
                    <div class="item1">
                        <a href="">
                            <img src="assets/img/ourpartners/logo6.png" alt="">
                        </a>
                        <div class="cases-caption2">
                            <h5><a href="services.html"> GlobalPartnership</a></h5>
                            <a href=""><span class="card__btn">LEARN MORE</span></a>
                        </div>
                    </div>
                    <div class="item1">
                        <a href="">
                            <img src="assets/img/ourpartners/logo7.png" alt="">
                        </a>
                        <div class="cases-caption2">
                            <h5><a href="services.html">Joint Learning Initiative</a></h5>
                            <a href=""><span class="card__btn">LEARN MORE</span></a>
                        </div>
                    </div>
                    <div class="item1">
                        <a href="">
                            <img src="assets/img/ourpartners/logo8.png" alt="">
                        </a>
                        <div class="cases-caption2">
                            <h5><a href="services.html">PMNCH</a></h5>
                            <a href=""><span class="card__btn">LEARN MORE</span></a>
                        </div>
                    </div>
                </div>
                <div class="row2">

                    <a href="">
               <span class="card__btn1">
                   OTHER VALUED PARTNERS
                </span>
                    </a>

                </div>
            </div>

        </div>
    </div>
    <!-- slider end -->
    <!--tieude-->
    <div class="container">
        <div class="row3">

            <h4>"World Vision is a great partner... we have a lot to do, we are going to do it together!"</h4>
            <p>David Beasley, WFP Executive Director</p>
        </div>

    </div>
    <!--tieude-->
    <!--thong tin-->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 " >
                <h3>20,000+</h3>
                <p class="stat__subtitle">Partners in nearly 100 countries worldwide</p>
            </div>
            <div class="col-lg-4 ">
                <h3>1600</h3>
                <p class="stat__subtitle">Area programmes and humanitarian responses</p>
            </div>
            <div class="col-lg-4 ">
                <h3>$46.3M</h3>
                <p class="stat__subtitle">Provided in emergency funds to local partners</p>
            </div>

        </div>
    </div>
    <!--thong tin end-->
    <!--thong tin 2 start-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ">
                <h4>Partnership Philosophy</h4>
                <p class="stat__subtitle1">
                    No organisation or government working alone can solve child vulnerability.
                    World Vision believes that only by working together with children, their
                    communities, and our supporters and partners, the lives of the world’s most
                    vulnerable children can be transformed.
                </p>
                <p class="stat__subtitle1">
                    At every level – from a child’s community to global – World Vision works with
                    partners from across society to influence and bring our expertise and resource
                    to transform children’s lives.  We value the role, expertise and resources
                    of businesses, of governments, of faith actors, and other organisations in
                    addressing child well-being.
                </p>
                <p class="stat__subtitle1">
                    We work to make our partnerships positive for every partner.  This means we
                    have a commitment to seek mutual benefit; to respect and values others' contributions;
                    to manage power dynamics carefully; to listen and be responsive, and to communicate
                    openly and transparently.
                </p>
                <p class="stat__subtitle1">
                    We measure our partnering practice and make sure it is fully aligned to global
                    humanitarian standards. This is part of upholding our commitments to the,Grand Bargain
                    and applies to all of our work in development, fragile and humanitarian emergency contexts and advocacy.
                </p>

            </div>

        </div>

    </div>
    <!--thong tin 2 end-->

@endsection
