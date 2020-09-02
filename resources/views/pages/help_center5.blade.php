@extends('layout.user_layout')
@section('user_content')
    @include('layout.helpCenter_layout')
    <div class="container">
        <div class="row">
            <div class="col-lg-4  ">

                <ul class="text-right pr-3 text-direction-none">
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/')}}" class="user-nav-link nav-link active ">About GiveIndia</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/1')}}" class="user-nav-link nav-link active ">Registration</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/2')}}" class="user-nav-link nav-link active">Donation Process</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/3')}}" class="user-nav-link nav-link active">Donation Receipts</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/4')}}" class="user-nav-link nav-link active">Reporting</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/5')}}" class="user-nav-link nav-link active tittle-one ">GiveIndia Listed NGOs</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/6')}}" class="user-nav-link nav-link active">Transition FAQs</a></li>
                </ul>
            </div>
            <div class="col-lg-8 ">
                <h2 class="text-heading-aboutus">GiveIndia Listed NGOs</h2>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class=" btn1 btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    1. What is the eligibility criteria for an NGO to be listed on GiveIndia?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p>At GiveIndia, we value the trust and faith donors place in us while making a donation. To ensure that we live up to this trust, we have a set of norms that that nonprofits have to fulfill to be profiled on our site. Every nonprofit undergoes a robust due diligence process that covers legal, compliance, financial, implementation and monitoring checks and only on fulfilling all the requirements are listed on the site. Read more about the GiveAssured promise here</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. What happens to NGOs who don’t meet the norms after getting onboarded ?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>We regularly review the norms of our due diligence and verification process to keep them in line with the laws of the land.</p>
                                <p>If a nonprofit does not meet our norms during our periodic checks, we will deactivate them and seek clarification from the nonprofit partner. We will follow-up to make sure there is ample opportunity to provide clarifications that the norms are being followed. If even after that, the nonprofit fails to show credible evidence or correct its process & procedures, then the nonprofit will be delisted.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. How do you verify that my donations are being used the right way?

                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <p>While it is difficult to verify every donation made through us, we verify a random sample for every program for every listed program. Verification visits are conducted by randomly identifying and visiting two or more beneficiaries of a program, without prior information, from the reports that have been sent by the nonprofits. Read more about our verification process
                                    <a href="https://www.giveindia.org/giveassured">here</a>.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
