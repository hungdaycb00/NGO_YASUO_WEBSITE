@extends('layout.user_layout')
@section('user_content')
    @include('layout.helpCenter_layout')
    <div class="container">
        <div class="row">
            <div class="col-lg-4  ">

                <ul class="text-right pr-3 text-direction-none">
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/')}}" class="user-nav-link nav-link active tittle-one ">About GiveIndia</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/1')}}" class="user-nav-link nav-link active ">Registration</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/2')}}" class="user-nav-link nav-link active">Donation Process</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/3')}}" class="user-nav-link nav-link active">Donation Receipts</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/4')}}" class="user-nav-link nav-link active">Reporting</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/5')}}" class="user-nav-link nav-link active">GiveIndia Listed NGOs</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/6')}}" class="user-nav-link nav-link active">Transition FAQs</a></li>
                </ul>
            </div>
            <div class="col-lg-8 ">
                <h2 class="text-heading-aboutus">Enabling A Giving Culture </h2>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class=" btn1 btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    1. What is GiveIndia?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p>GiveIndia is India’s largest and most trusted online donation platform, having enabled giving in India for the last 20 years. It is a nonprofit organisation with a giving community of millions of donors who support a vast network of 1250+ verified nonprofits across India, touching the lives of millions of people every year.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Why should I choose to donate through GiveIndia?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>We respect your decision to donate, and understand that you want your contribution to     make an impact. GiveIndia helps you with this by</p>
                                <ul>
                                    <li class="litieude">Offering you a wide range of donation options from credible NGOs working on a variety of causes. GiveIndia lists NGOs after clearing them through stringent norms of credibility and accountability.</li>
                                    <li class="litieude">Sending you a feedback report with details on how your money has made a difference on every donation you make.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. What is GiveIndia’s vision statement?

                                </button>
                            </h5>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <p>GiveIndia’s vision is to alleviate poverty by enabling the world to give.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                    4. Can I donate to GiveIndia?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                <p>GiveIndia does not accept donations for its work. We are treating the initial corporate grant we got as "seed money" till we reach self-sustenance. The best way to support us is to donate more through us.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseFive " aria-expanded="false" aria-controls="collapseThree">
                                    5. How much of my donation reaches the NGO that I wish to support?

                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                <p>GiveIndia ensures that 90% of your contribution reaches the NGO you have chosen by keeping fundraising costs at 10%.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                    6. Why do you have a retention charge when you are an NGO?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body">
                                <p>GiveIndia retains a maximum of 10% in order to provide you with high quality support when transacting through us. This helps us recover a reasonable portion of our operating costs. This small donation that you give us reduces our dependence on grants and helps us in becoming sustainable in the long run to serve donors, NGOs and beneficiaries better.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSeven">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                                    7. Do I have to give my PAN?

                                </button>
                            </h5>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                            <div class="card-body">
                                <p>We would require you PAN number if your annual donations across all programs cross Rs.50,000/-.</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingEight">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    8. I want to know more about GiveIndia, where can I find your Annual Report?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                            <div class="card-body">
                                <p class="tieude6">You can find out annual report <a href="aboutus_5.html">here</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingNice">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseNice" aria-expanded="false" aria-controls="collapseEight">
                                    9. Can I volunteer with GiveIndia?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseNice" class="collapse" aria-labelledby="headingNice" data-parent="#accordion">
                            <div class="card-body">
                                <p class="tieude6">We welcome volunteers. GiveIndia is a ‘philanthropy marketplace’ and does not work directly with the underprivileged. GiveIndia needs support in marketing, design, verification visits, and many other areas. Please write to us at
                                    <a href="mailto:info@giveindia.org">info@giveindia.org</a> with the skill set that you have and let’s talk. If working on ground with the needy is what you are looking for, we recommend you contact one of the NGOs listed on our website.</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
