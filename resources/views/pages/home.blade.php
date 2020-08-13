@extends('layout.user_layout')
@section('user_content')

    <style>
        a.text-dark.btn {
            background: #ffbc00;
            border-radius: 30px;
        }
    </style>
    <link rel="stylesheet" href="{{URL::asset('frontend/css/style_home.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/owl.theme.default.min.css')}}">
    <!-- slider Area Start-->
    <div class="slider-area">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInUp" data-delay=".6s">Helping<br>the poor</h1>
                                <P data-animation="fadeInUp" data-delay=".8s">Call on the help of everyone, to help the
                                    disadvantaged, to bring a smile to them.</P>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="industries.html" class="btn hero-btn mb-10" data-animation="fadeInLeft"
                                       data-delay=".8s">Donate</a>
                                    <a href="industries.html" class="cal-btn ml-15" data-animation="fadeInRight"
                                       data-delay="1.0s">
                                        <i class="flaticon-null"></i>
                                        <p>+1800 1000</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!--? Slider start-->
    <div class="service-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>What we are doing</span>
                        <h2>help all difficult situations</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <a href="">
                            <img src="frontend/img/slidernew/slider1.jpg" alt="">
                        </a>

                        <div class="cases-caption2">
                            <h5><a href="services.html">Daville Has A New Home!</a></h5>

                        </div>

                    </div>
                    <div class="item">
                        <a href="">
                            <img src="frontend/img/slidernew/slider2.jpg" alt="">
                        </a>
                        <div class="cases-caption2">
                            <h5><a href="services.html">A Call From The Mother</a></h5>

                        </div>
                    </div>
                    <div class="item">
                        <a href="">
                            <img src="frontend/img/slidernew/slider3.jpg" alt="">
                        </a>
                        <div class="cases-caption2">
                            <h5><a href="services.html">Unsafe Drinking Water</a></h5>

                        </div>
                    </div>
                    <div class="item">
                        <a href="">
                            <img src="frontend/img/slidernew/slider4.jpg" alt="">
                        </a>
                        <div class="cases-caption2">
                            <h5><a href="services.html">A Life Spared</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider end-->
    <!-- Set up your HTML -->
    <!-- slider New End -->
    <!--? Services Area Start -->
    <div class="our-cases-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>our activities</span>
                        <h2>organizing charity programs to support the poor</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <img src="frontend/img/post/post_11.jpg" alt="">
                        </div>
                        <div class="cases-caption1">
                            <h5><a href="services.html">Physical Examination</a></h5>

                            <p>We organize a health check-up and free medicine for the poor.</p>
                            <!-- Progress Bar -->

                            <!-- / progress -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <img src="frontend/img/post/post_12.jpg" alt="">
                        </div>
                        <div class="cases-caption1">
                            <h5><a href="services.html">Fundraising Activities</a></h5>
                            <p>Organizing music nights to raise funds for the poor</p>
                            <!-- Progress Bar -->

                            <!-- / progress -->

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <img src="frontend/img/post/post_13.jpg" alt="">
                        </div>
                        <div class="cases-caption1">
                            <h5><a href="services.html">Food Support</a></h5>
                            <p>Organize food and necessities distribution for people in need..</p>
                            <!-- Progress Bar -->

                            <!-- / progress -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->
    <!--? About Law Start-->
    <section class="about-low-area section-padding2">
        <div

            class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <span>About our foundetion</span>
                            <h2>We Are In A Mission To Help Helpless</h2>
                        </div>
                        <p>An association founded to help the disadvantaged in life with the cooperation of many
                            different organizations (NGO).</p>
                        <p>We were founded and helped by many large individuals and companies.</p>
                    </div>
                    <a href="about.html" class="btn">About US</a>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img ">
                        <div class="about-font-img d-none d-lg-block">
                            <img src="frontend/img/gallery/about0.jpg" alt="">
                        </div>
                        <div class="about-back-img ">
                            <img src="frontend/img/gallery/about4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Law End-->
    <!-- Our Cases Start -->
    <div class="our-cases-area ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>Our Goals</span>
                        <h2>We call on people to raise funds to organize activities to help those in need</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <img src="frontend/img/gallery/case4.jpg" alt="">
                        </div>
                        <div class="cases-caption">
                            <h3><a href="#">Ensure Education For Every Poor Children</a></h3>
                            <!-- Progress Bar -->
                            <div class="single-skill mb-15">
                                <div class="bar-progress">
                                    <div id="bar1" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="70"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- / progress -->
                            <div class="prices d-flex justify-content-between">
                                <p>Raised:<span> $20,000</span></p>
                                <p>Goal:<span> $35,000</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <img src="frontend/img/gallery/case5.jpg" alt="">
                        </div>
                        <div class="cases-caption">
                            <h3><a href="#">Support For Pets In Difficult Circumstancesv</a></h3>
                            <!-- Progress Bar -->
                            <div class="single-skill mb-15">
                                <div class="bar-progress">
                                    <div id="bar2" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="25"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- / progress -->
                            <div class="prices d-flex justify-content-between">
                                <p>Raised:<span> $20,000</span></p>
                                <p>Goal:<span> $35,000</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <img src="frontend/img/gallery/case6.jpg" alt="">
                        </div>
                        <div class="cases-caption">
                            <h3><a href="#">Wheelchair Assistance For People With Disabilities</a></h3>
                            <!-- Progress Bar -->
                            <div class="single-skill mb-15">
                                <div class="bar-progress">
                                    <div id="bar3" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <span class="fill" data-percentage="50"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- / progress -->
                            <div class="prices d-flex justify-content-between">
                                <p>Raised:<span> $20,000</span></p>
                                <p>Goal:<span> $35,000</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Cases End -->
    <!-- Featured_job_start -->
    <section class="featured-job-area  section-bg2"
             data-background="frontend/img/gallery/section_bg03.png">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 col-md-10 col-sm-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <span>our actions</span>
                        <h2>always organize volunteer activities to join hands to support everywhere</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12">
                    <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="#"><img src="frontend/img/gallery/socialEvents5.png" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#"><h4>Support The Epidemic Season</h4></a>
                                <ul>
                                    <li><i class="far fa-clock"></i>8:30 - 9:30am</li>
                                    <li><i class="fas fa-sort-amount-down"></i>18.04.2020</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Hai Phong</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="#"><img src="frontend/img/gallery/socialEvents6.png" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#"><h4>Repel The Flood</h4></a>
                                <ul>
                                    <li><i class="far fa-clock"></i>8:30 - 9:30am</li>
                                    <li><i class="fas fa-sort-amount-down"></i>28.6.2020</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Cao Bang</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="#"><img src="frontend/img/gallery/socialEvents7.png" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#"><h4>Join Hands To Help Upland Children</h4></a>
                                <ul>
                                    <li><i class="far fa-clock"></i>8:30 - 9:30am</li>
                                    <li><i class="fas fa-sort-amount-down"></i>25.01.2020</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Tuyen Quang</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured_job_end -->

    <!-- Count Down End -->
    <!-- slider -->
    <script src="frontend/js/owl.carousel.min.js"></script>
    <script src="frontend/js/slider.js"></script>
    <!-- slider -->
@endsection

