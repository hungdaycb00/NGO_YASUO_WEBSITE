@extends('layout.user_layout')
@section('user_content')
    @include('layout.helpCenter_layout')
    <div class="container">
        <div class="row">
            <div class="col-lg-4  ">

                <ul class="text-right pr-3 text-direction-none">
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/')}}" class="user-nav-link nav-link active  ">About GiveIndia</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/1')}}" class="user-nav-link nav-link active ">Registration</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/2')}}" class="user-nav-link nav-link active tittle-one">Donation Process</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/3')}}" class="user-nav-link nav-link active">Donation Receipts</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/4')}}" class="user-nav-link nav-link active">Reporting</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/5')}}" class="user-nav-link nav-link active">GiveIndia Listed NGOs</a></li>
                    <li class="user-nav no-wrap nav flex-column"><a href="{{URL::to('help_center/6')}}" class="user-nav-link nav-link active">Transition FAQs</a></li>
                </ul>
            </div>
            <div class="col-lg-8 ">
                <h2 class="text-heading-aboutus">Donation Process</h2>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class=" btn1 btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    1. What is ‘Monthly Giving’?
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p>Monthly Giving on GiveIndia enables donors who want to support beneficiaries from underprivileged communities and NGOs through crucial long-term life events. When you choose to give monthly for a long-term, your donation is no longer just charity but grows to become an investment. It is an investment that helps beneficiaries for a long-term through his or her need. When you commit to support one program and nonprofit over a period of time, you will engage better with the program and the impact it is creating. This helps the community at large. Imagine this - When you support a program that gives solar lamps to a family, over a period of a year, you will bring light to 12 families over a year. Over a larger period you will be the reason a whole community will have access to basic electricity that will change their whole quality of life.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    2. Why does GiveIndia encourage ‘Monthly Giving’?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p>GiveIndia in its fabric always works to help donors and nonprofits in an efficient and effective way. Monthly giving is a wonderful giving option for both you and the causes you support. As a donor, you are aware of the amount that you are committing to the year which makes it an ** effective and convenient way ** of planning your donations Through Monthly Giving, you also become a part of the program and the life of the beneficiaries that you support. You can see the impact of your investment as the program grows in its journey .</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    3. What are the causes that I can support through GiveIndia?

                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <p>You can support a host of causes through GiveIndia. GiveIndia works with NGOs that work in different aspects of poverty alleviation through causes that support Children, Differently Abled, Education, Elderly, Livelihood, Environment, Health, Women, and Youth.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                    4. How do I search for a cause that I want to support?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                <p>You can explore the full list of the causes we support here. Select the cause of your choice and the page will display all programs of that cause.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseFive " aria-expanded="false" aria-controls="collapseThree">
                                    5. There are different nonprofits that have programs for the same cause which have different monthly donation amounts, Why is this?

                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                <p>Different nonprofits have different cost structures which are guided by the areas they operate in, scale etc. Hence the costs for the same kind of programs are different. However, we check the for the credibility of the requested donation amount for every program. You can read more about this process
                                    <a href="https://www.giveindia.org/giveassured">here</a>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                    6. Can I support more than one cause?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body">
                                <p>Yes, of course. You may support as many programs as you wish to. The details of the programs that you support will be on the ‘Your Profile’ page.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSeven">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                                    7. How do I donate on GiveIndia?

                                </button>
                            </h5>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                            <div class="card-body">
                                <p>You can donate on GiveIndia in the below steps.</p>
                                <ul>
                                    <li class="litieude">Select a cause that you wish to support from  <a href="https://www.giveindia.org/"> here.</a> </li>
                                    <li class="litieude">Select a program from the different programs</li>
                                    <li class="litieude">Select the number of units that you want to support by moving the slider</li>
                                    <li class="litieude">Click on the ‘Give now’ button on the Program page</li>
                                    <li class="litieude">Make the payment.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="headingEight">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    8. When does my monthly giving donation get charged to my card?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                            <div class="card-body">
                                <p>Your ‘monthly giving’ donation will be charged to your card in a 30 day cycle. Ex: If you make your first donation on 25th of the month, your subsequent donation will be 30 days later and so on.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingNice">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseNice" aria-expanded="false" aria-controls="collapseNice">
                                    9. What are the modes of payment for a donation?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseNice" class="collapse" aria-labelledby="headingNice" data-parent="#accordion">
                            <div class="card-body">
                                <p>GiveIndia presently accepts</p>
                                <ul>
                                    <li class="litieude">all credit cards and debit cards of ICICI bank, HDFC bank, Citibank, Canara bank, and Kotak Mahindra bank for donations made in India</li>
                                    <li class="litieude">both credit and debit cards for donations made outside of India.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTen">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                    10. How do I know my transaction is secure?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
                            <div class="card-body">
                                <p>GiveIndia has very high standards on credit card security to better protect the information you give us when you make the donation. We do not store any payment information on our servers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingEleven">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                    11. How is the exchange rate determined?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
                            <div class="card-body">
                                <p>Monthly donations are deducted on the basis of the real time exchange rate.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwelve">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                    12. How do I know if my donation has reached the program that I am supporting?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordion">
                            <div class="card-body">
                                <p>Donations are disbursed to the partner nonprofits once a month. We give the nonprofits a transaction wise report on the donations that are channeled to them. This helps the nonprofits understand the purpose for which each donation was made for. With this, they plan their spending. This forms the basis on which the nonprofit sends their report which is then shared with you. For all the programs that you support we will send you regular reports with update on the program.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThirteen">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                    13. Can I establish contact with the beneficiary?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordion">
                            <div class="card-body">
                                <p>NGOs mostly do welcome visitors to the beneficiary communities. Having said that, they do not allow the donors to visit the specific beneficiaries that they have supported or sponsored, as it can often give rise to awkward situations for the beneficiary.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFourteen">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                    14. How do I cancel my monthly giving?
                                </button>
                            </h5>
                        </div>
                        <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordion">
                            <div class="card-body">
                                <p>We are sorry to see that you are thinking of terminating your monthly giving . Is there anything we can do to change your mind? In case you do have to cancel your giving program, please log in to GiveIndia and then click on 'Cancel Subscription' on the respective program in the ‘Donations’ section of the ‘Your Profile’ page. We will send you an email confirming your cancellation.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
