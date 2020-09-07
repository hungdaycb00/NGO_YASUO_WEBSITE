@extends('layout.user_layout')
@section('user_content')
{{--    <style>--}}
{{--        .btn:not(:disabled):not(.disabled) {--}}
{{--            cursor: pointer;--}}
{{--            padding: 20px 20px;--}}
{{--        }--}}
{{--    </style>--}}
    <link rel="stylesheet" href="{{URL::asset('frontend/css/style_home.css')}}">

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
                                    <a href="{{URL::to('donate')}}" class="btn hero-btn mb-10" data-animation="fadeInLeft"
                                       data-delay=".8s">Donate</a>
                                    <a href="#" class="cal-btn ml-15" data-animation="fadeInRight"
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
    <div class="service-area">
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
                    @foreach($news as $p)
                    <div class="item">
                        <a href="blog_detail/{{$p->post_id}}">
                            <div class="cases-img">
                                <img src="{{URL::to('upload/'.$p->post_imageName)}}" alt="" style="height: 200px;">
                            </div>

                        </a>
                        <div class="cases-caption2">
                            <h5><a href="blog_detail/{{$p->post_id}}" style="font-weight: 100;">{{$p->post_title}}</a></h5>
                        </div>
                    </div>
                    @endforeach
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
                            <img src="frontend/img/gallery/about1.png" alt="">
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
                <?php $i = 1 ?>
                @foreach($events as $key => $p)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cases mb-40">
                        <div class="cases-img">
                            <img src="{{asset('upload/'.$p->events_imageName)}}" alt="">
                        </div>
                        <div class="cases-caption">
                            <h3><a href="events_detail/{{$p->events_id}}">{{$p->events_title}}</a></h3>
                            <!-- Progress Bar -->
                            <div class="single-skill mb-15">
                                <div class="bar-progress">
                                    <div id="bar{{$i}}" class="barfiller">
                                        <div class="tipWrap">
                                            <span class="tip"></span>
                                        </div>
                                        <?php $count = 0;?>
                                        @foreach($donate as $d)
                                            @if($p->events_id ==($d->events_id))
                                                <?php $count++;?>
                                        <span class="fill" data-percentage="{{number_format($d->total_donates/$p->total_donate*100,1)}}"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- / progress -->
                            <div class="prices d-flex justify-content-between">
                                <p>Raised:<span> ${{$d->total_donates}}</span></p>
                                @endif
                                @endforeach
                                @if($count == 0)
                                    <span class="fill" data-percentage="0"></span>
                            </div>
                        </div>
                    </div>
                    <!-- / progress -->
                    <div class="prices d-flex justify-content-between">
                        <p>Raised:<span> $0</span></p>
                        @endif
                        <?php $count = 0;?>
                                <p>Goal:<span> ${{number_format($p->total_donate,0)}}</span></p>
                            </div>

                            <!-- Hero-btn -->
                            <div class="text-right mt-20">
                                <a href="{{URL::to('events_detail/'.$p->events_id)}}" class="text-info" >read more</a>
                            </div>
                            <div class="text-center mt-20">
                                <a href="{{URL::to('donate/'.$p->events_id)}}" class="btn btn-success" >Donate</a>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php $i++ ?>
                @endforeach

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
<!-- su kien da ket thuc-->
<div class="our-cases-area1 section-padding30">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 col-md-10 col-sm-12">
                <div class="section-tittle text-center mb-80">
                    <span>what I have done</span>
                    <h2>the events we have completed</h2>
                </div>
            </div>

            <table class="content-table">
                <thead>
                <tr>
                    <th>Order</th>
                    <th>Name Of The Event</th>
                    <th>Total donate</th>
                    <th>Target</th>
                    <th>End Time</th>
                    <th >Read More</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 0; ?>
                @foreach($events as $e)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$e->events_title}}</td>
                    @foreach($donate as $d)
                        @if($e->events_id == $d->events_id)
                    <td>{{$d->total_donates}}</td>
                        @endif
                    @endforeach
                    <td>{{$e->total_donate}}</td>
                    <td>11/11/2020</td>
                    <th class="readmore"><a href="{{URL::to('events_detail/'.$e->events_id)}}">Read More></a></th>
                </tr>
                    <?php $i++; ?>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- su kien da ket thuc end-->
@endsection

