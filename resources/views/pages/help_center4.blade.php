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
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/4')}}" class="user-nav-link nav-link active tittle-one ">Reporting</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/5')}}" class="user-nav-link nav-link active">GiveIndia Listed NGOs</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/6')}}" class="user-nav-link nav-link active">Transition FAQs</a></li>
                </ul>
            </div>
            <div class="col-lg-8 ">
                <h2 class="text-heading-aboutus">Reporting</h2>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class=" btn1 btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    1. Will I get a report to know the more about the the program that I have donated to?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p>Yes, you will get an update about the program that you have donated to. The program page will mention the frequency of the reports. The reports will be updated on ‘Your Profile’ section of platform. You will receive an email informing you when the report is updated on your profile.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. What does the report contain?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>The report will contain an update of the NGO, the specific program that you support. There are different types of reports that the NGOs send based on what has been agreed upon - including an update on the specific beneficiary if you have been assigned one, update about the program supported, update on the NGO as well as any significant event or achievement.</p>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. What is a verification report?

                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <p>Verification visits are conducted by randomly identifying two or more beneficiaries of a program from the reports that have been sent by the nonprofits. Our team then visit the beneficiary, usually directly without prior information. Checks are conducted on</p>
                                <ul>
                                    <li class="tieude6">If the beneficiary exists</li>
                                    <li class="tieude6">She has received the benefits as described in the feedback report</li>
                                </ul>
                                <p class="tieude6">Verification reports are reports filled out by volunteers/staff after a verification visit to an nonprofit is done.These reports are an additional way through which GiveIndia checks the credibility of its partner nonprofit. Visits are conducted periodically by volunteers through a set process. Check more about our GiveAssured process
                                    <a href="https://www.giveindia.org/giveassured">here</a>.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
