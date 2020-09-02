@extends('layout.user_layout')
@section('user_content')
    @include('layout.helpCenter_layout')
    <div class="container">
        <div class="row">
            <div class="col-lg-4  ">

                <ul class="text-right pr-3 text-direction-none">
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/')}}" class="user-nav-link nav-link active  ">About GiveIndia</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/1')}}" class="user-nav-link nav-link active ">Registration</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/2')}}" class="user-nav-link nav-link active  ">Donation Process</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/3')}}" class="user-nav-link nav-link active tittle-one">Donation Receipts</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/4')}}" class="user-nav-link nav-link active">Reporting</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/5')}}" class="user-nav-link nav-link active">GiveIndia Listed NGOs</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/6')}}" class="user-nav-link nav-link active">Transition FAQs</a></li>
                </ul>
            </div>
            <div class="col-lg-8 ">
                <h2 class="text-heading-aboutus">Donation Receipts</h2>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class=" btn1 btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    1. When will I get a receipt for my donation?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p class="tieude6">IYour donation will be charged to your card in a 30 days cycle and you will receive a within 24 hours of the donation. If you haven’t received your receipt within 24 hours, please contact us at at **
                                    <a href="mailto:info@giveindia.org">info@giveindia.org</a> **</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. What tax benefits will I get for the donations made through GiveIndia?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>If you are an Indian taxpayer, You can avail the tax exemption for donations made through 80G . If you are a US taxpayer, You can avail the tax exemption for donations made through 501(c)(3).</p>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. Do you have a partner to accept money in the US with a tax exempt status?

                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <p>Yes, we have a partner, GIVE Foundation, Inc., a 501(c)(3) registered non profit organisation that accepts money in the U.S. You can register as a U.S. taxpayer on our website and donate to send money via GIVE Foundation Inc. All donations through this route are tax-exempt in the U.S.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
