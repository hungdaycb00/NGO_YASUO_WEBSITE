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
                            <h5><a href="{{URL::to('/donate/transfer')}}" style="font-size: 24px;">You can come directly to the office for donate</a></h5>
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
                            <h5>@if(Session::get('events_id') != null)
                                    <a href="{{URL::to('/donate/transfer/'.Session::get('events_id'))}}" style="font-size: 24px;">Donate via account number</a>
                                @endif
                                @if(Session::get('events_id') == null)
                                <a href="{{URL::to('/donate/transfer')}}" style="font-size: 24px;">Donate via account number</a>
                                @endif
                            </h5>
                            <p>Card number: 0611001917137, <br>Card name: QUỸ TRÒ NGHÈO VÙNG CAO,
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
                            @if(Session::get('events_id') != null)
                                <a href="{{URL::to('/donate/donate_credit_card/'.Session::get('events_id'))}}" style="font-size: 24px;">Donate by VNPAY</a>
                            @endif
                            @if(Session::get('events_id') == null)
                                <a href="{{URL::to('/donate/donate_credit_card')}}" style="font-size: 24px;">Donate by VNPAY</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->
@endsection
