@extends('layout.user_layout')
@section('user_content')
    <!--? Services Area Start -->
    <div class="service-area pt-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <h2>Donate</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="fa fa-hand-peace"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="{{URL::to('/donate/transfer')}}">You can come directly to the office for donate</a></h5>
                            <p>Address : Hà Nội, Việt Nam <br>
                                Phone : +8880 888888 <br>
                                Email : yasuo@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat active text-center mb-50">
                        <div class="cat-icon">
                            <span class="fa fa-heartbeat"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="{{URL::to('/donate/transfer')}}">Donate via account number</a></h5>
                            <p>Card number: 0611001917137, <br>Card name: QUỸ TRÒ NGHÈO VÙNG CAO, <br>Swift Code: BFTVVNVX061
                                <br>Ngân hàng Ngoại Thương Việt Nam - Vietcombank, chi nhánh Ba Đình, Hà Nội</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="fa fa-handshake"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="{{URL::to('/donate/donate_credit_card')}}">Donate by Credit Card</a></h5>
                            <p>The sea freight service has grown conside rably in recent years. We spend timetting to know your processes to.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->
@endsection
