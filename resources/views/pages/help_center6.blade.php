@extends('layout.user_layout')
@section('user_content')
    @include('layout.helpCenter_layout')
    <div class="container">
        <div class="row">
            <div class="col-lg-4  ">

                <ul class="text-right pr-3 text-direction-none">
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/')}}" class="user-nav-link nav-link active  ">About GiveIndia</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/1')}}" class="user-nav-link nav-link active ">Registration</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/2')}}" class="user-nav-link nav-link active">Donation Process</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/3')}}" class="user-nav-link nav-link active">Donation Receipts</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/4')}}" class="user-nav-link nav-link active">Reporting</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/5')}}" class="user-nav-link nav-link active">GiveIndia Listed NGOs</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/6')}}" class="user-nav-link nav-link active tittle-one">Transition FAQs</a></li>
                </ul>
            </div>
            <div class="col-lg-8 ">
                <h2 class="text-heading-aboutus">Transition FAQs</h2>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class=" btn1 btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    1. Why does the GiveIndia website look different? Where is the old GiveIndia.org?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p>GiveIndia.org now has a new look. With the new look, we are now working with renewed focus to create a world where giving is a way of life. We are now stepping into the next era of online donations for people looking to make a difference. To enable this, our prime focus will be on making your giving a monthly experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Why have you changed?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>Monthly giving will help you create a larger impact with your donations. When you commit to support one program over a period of time, you will engage better with the program and the impact it is creating.</p>
                                <p>GiveIndia in its fabric always works to help donors and nonprofits in an efficient and effective way. Monthly giving is a wonderful giving option for both you and the causes you support.</p>
                                <p>As a donor, you are aware of the amount that you are committing to the year which makes it an ** effective and convenient way ** of planning your donations</p>
                                <p>Through Monthly Giving, you also become a part of the program and the life of the beneficiaries that you support. You can see the impact of your investment as the program grows in its journey .</p>
                                <p class="tieude6">Click <a href="http://gi.giveindia.org/">here</a> if you still would like to explore one time giving options.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. I have standing instructions on my credit card, Can I move it to a monthly giving program?

                                </button>
                            </h5>
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <p>We cannot transfer the standing instructions made by you. If you wish to support a monthly program, you have to cancel the standing instruction on your credit card and start a giving program on GiveIndia.org.</p>
                                <p>It is just a 5-step process to start supporting a program</p>
                                <ul>
                                    <li>Select a cause that you wish to support from here.</li>
                                    <li>Select a program from the different programs</li>
                                    <li>Select the number of units that you want to support by moving the slider</li>
                                    <li>Click on the ‘Give now’ button on the Program page</li>
                                    <li>Make the payment.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                    4. I am unable to find the nonprofit program I used to donate to, How can I find it in the new GiveIndia.org
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                <p>You can find all the nonprofits listed on GiveIndia here. If your preferred nonprofit does not have a monthly giving option yet, you will be redirected to their one time giving options. Bear with us, we are working with them to have monthly options hosted very soon.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseFive " aria-expanded="false" aria-controls="collapseThree">
                                    5. I donate through my salary, I am unable to find my charity account details

                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                <p>GiveIndia.org now has a new look. With the new look, we are now working with renewed focus to create a world where giving is a way of life. However, we would like to reassure you that we have made sure that all your transactions with us continue seamlessly.</p>
                                <p class="tieude6">You can access your GiveIndia Charity Account by clicking on the <a href="http://gi.giveindia.org/">‘Workplace Giving’</a> tab on the top right of our new homepage. This will lead you the old GiveIndia.org home page. You can continue to log in to your charity account as usual.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                    6. Is monthly giving the only recurring way to donate on GiveIndia? Can I make a quarterly or annual option?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body">
                                <p>We are very soon coming with different recurring options to give on the monthly platform</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
