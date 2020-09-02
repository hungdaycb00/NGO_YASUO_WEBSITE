@extends('layout.user_layout')
@section('title')
    Contact
@endsection
@section('user_content')
    <style>
        .slider-area3 {
            height: 200px;
            background-size: cover;
        }
        .slider-area3 .hero-cap h2 {
            color: #072366;
            font-size: 50px;
            font-weight: 800;
            text-transform: capitalize;
            line-height: 1;
            margin-top: 100px;
        }
    </style>
    <div class="slider-area3">
        <div class="slider-height3 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-20 text-center">
                            <h2>About US</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="">
        <div class="container">
            <div class="position-center text-center mb-50">
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<p><span class="alert alert-success" >'.$message.'</span></p>';
                    Session::put('message', null);
                }
                ?>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{URL::to('save_message')}}" method="post" >
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="mail" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="add_new_post" class="btn mt-10 btn-info mb-15">Submit</button>

                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="col-12">
                        <h2 class="contact-title">Contact info</h2><br>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Buttonwood, California.</h3>
                            <p>Rosemead, CA 91770</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+1 253 565 2365</h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info" >
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>giveaidsupport@gmail.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
