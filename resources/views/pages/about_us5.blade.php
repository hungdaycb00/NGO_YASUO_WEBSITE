@extends('layout.user_layout')
@section('user_content')
    <style>
        .slider-area3 .hero-cap h2{
            color: #072366;
            font-size: 50px;
            font-weight: 800;
            text-transform: capitalize;
            line-height: 1;
            margin-top: 100px;
        }
        .slider-area3{
            height: 250px;
            background-size: cover;

        }
        .col-lg-4{
            border-right: 1px solid rgba(0,0,0,0.1);;
            margin-bottom: 30px;
            margin-top: 8px;
        }
        .col-lg-8{
            padding-bottom: 30px;
        }
        ul.text-right.pr-3.text-direction-none {
            font-size: 20px;
            line-height: 100px;
            font-weight: bold;

        }
        a.user-nav-link.nav-link.active  {
            color: #10285d;
        }
        a.user-nav-link.nav-link.active.tittle-one  {
            color: #09cc7f;
        }
        li.user-nav.no-wrap.nav.flex-column a:hover {
            color: #09cc7f;
        }


        h2.text-heading-aboutus{
            font-size: 35px;
            margin-bottom: 20px;
        }

        .col-lg-8 ul li p a{
            color: #007bff
        }

        .col-lg-8 p.tieude5 a:hover{
            color:  #007bff;
        }
        .col-lg-8 hr.kengang{
            border-top: 1px solid #1f2b7b;
        }
        .btn1{
            border: 1px solid transparent;
            line-height: 1.5;
            font-size: medium;
        }
        #accordion .card{
            margin-bottom: 10px;
        }
        .col-lg-8 .card-body p.tieude6 a{
            color: #008c8c;

        }
    </style>
   @include('layout.about_layout')
    <div class="container">
        <div class="row">
           @include('layout.about_layout_left')
            <div class="col-lg-8 ">
                <h2 class="text-heading-aboutus">Legal & Financial Information</h2>
                <ul>
                    <li><p>-GiveIndia was conceptualized in December 1999. <a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/images/aboutus/Legal/conceptnote.pdf">Click here </a>for a copy of the concept note behind GiveIndia</p></li>
                    <li><p>-GiveIndia is registered as a not-for-profit company u/s 25 of the Companies Act, 1956. (Reg. No. 04-37902, dtd. April 28, 2000), with the RoC, Gujarat.</p></li>
                    <li><p>-GiveIndia is registered u/s 12A of the Income Tax Act, 1961, and with the Director of Income Tax (Exemptions) u/s 80G, valid till March 31, 2008. (Reg. No. DIT(E)/80G(5)/862/04-05).</p></li>
                    <li><p>-GiveIndia is registered under section 6 (1) (a) of the Foreign Contribution (Regulation) Act, 1976 (FCRA Reg. No. 041910285). The Bank account under which FC funds are received is with ICICI Bank Ltd., Drive In Road Branch, Ahmedabad.</p></li>
                    <li><p>-GiveIndia operates 2 Bank Accounts with ICICI Bank Ltd., Ahmedabad, 3 Bank Account with ICICI Bank Ltd, Mumbai and 2 Bank A/c with HDFC bank, Mumbai.</p></li>
                    <li><p>-Deloitte, Haskins & Sells, one of the Big 4 audit firms of the world, are our statutory auditors.</p></li>
                    <li><p><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/images/aboutus/Legal/GI-PAN-Card.pdf">-PAN Card</a></p></li>
                    <li><p></p>-Our Internal Auditor Mr. Sandeep S. Shrikhande, S.D.Medadkar & Co.</li>

                </ul>
                <hr class="kengang">
                <h2 class="text-heading-aboutus">Annual Report</h2>
                <p>To view detailed financial statements and disclosures, please read through the Annual Reports -</p>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class=" btn1 btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Annual Report 2018-19
                                </button>
                            </h5>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <p class="tieude6"><a href="https://give-marketplace.s3.ap-south-1.amazonaws.com/static/legal/AnnualReport_2018-2019/1._Auditor_Report.pdf">Auditor's Report</a></p>
                                <p class="tieude6"><a href="https://give-marketplace.s3.ap-south-1.amazonaws.com/static/legal/AnnualReport_2018-2019/2.+Balancesheet.pdf">Balance Sheet</a></p>
                                <p class="tieude6"><a href="https://give-marketplace.s3.ap-south-1.amazonaws.com/static/legal/AnnualReport_2018-2019/3._Income_%26_Expenditure_Statement.pdf">Income & Expenditure Statement</a></p>
                                <p class="tieude6"><a href="https://give-marketplace.s3.ap-south-1.amazonaws.com/static/legal/AnnualReport_2018-2019/4._Receipts+_and+_Payments_Funds_Flow_statement.pdf">Receipts and Payments- Funds Flow statement</a></p>
                                <p class="tieude6"><a href="https://give-marketplace.s3.ap-south-1.amazonaws.com/static/legal/AnnualReport_2018-2019/5._Schedules_%26_Notes_to_the_Accounts.pdf">Schedules & Notes to the Accounts</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Annual Report 2017-18
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2017-2018/1.+Auditors+Report.pdf">Auditor's Report</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2017-2018/2.Balance++Sheet.pdf">Balance Sheet</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2017-2018/3.Income+and+Expenditure.pdf">Income & Expenditure Statement</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2017-2018/4.Receipts+and+Payments.pdf">Receipts and Payments- Funds Flow statement</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2017-2018/5.Schedules+and+Notes.pdf">Schedules & Notes to the Accounts</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2017-2018/Annual+Report+fy17-18_GiveFoundation.pdf">Annual Report</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Annual Report 2016-17

                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2016-2017/auditors-report.pdf">Auditor's Report</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2016-2017/balance-sheet.pdf">Balance Sheet</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2016-2017/inc-exp.pdf">Income & Expenditure Statement</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2016-2017/FundFlowStatement.pdf">Receipts and Payments- Funds Flow statement</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2016-2017/Notes.pdf">Schedules & Notes to the Accounts</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2016-2017/Annual+Report+fy16-17_GiveFoundation.pdf">Annual Report</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                    Annual Report 2015-16

                                </button>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2015-2016/auditors-report.pdf">Auditor's Report</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2015-2016/balance-sheet.pdf">Balance Sheet</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2015-2016/inc-exp.pdf">Income & Expenditure Statement</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2015-2016/FundFlowStatement.pdf">Receipts and Payments- Funds Flow statement</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2015-2016/Notes.pdf">Schedules & Notes to the Accounts</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2015-2016/ar-final.pdf">Annual Report</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseFive " aria-expanded="false" aria-controls="collapseThree">
                                    Annual Report 2014-15

                                </button>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2014-2015/auditors-report.pdf">Auditor's Report</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2014-2015/balance-sheet.pdf">Balance Sheet</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2014-2015/inc-exp.pdf">Income & Expenditure Statement</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2014-2015/FundFlowStatement.pdf">Receipts and Payments- Funds Flow statement</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2014-2015/Notes.pdf">Schedules & Notes to the Accounts</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2014-2015/ar-final.pdf">Annual Report</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                    Annual Report 2013-14
                                </button>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body">
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2013-2014/auditors-report.pdf">Auditor's Report</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2013-2014/balance-sheet.pdf">Balance Sheet</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2013-2014/inc-exp.pdf">Income & Expenditure Statement</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2013-2014/receipts-payments.pdf">Receipts and Payments- Funds Flow statement</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2013-2014/schedules.pdf">Schedules</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2013-2014/notes-to-accounts.pdf">Notes to the Accounts</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2013-2014/ar-final.pdf">Annual Report</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2013-2014/ca-norms.pdf">Credibility Alliance Norms Compliance Report</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSeven">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                                    Annual Report 2012-13

                                </button>
                            </h5>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                            <div class="card-body">
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2012-2013/auditors-report.pdf">Auditor's Report</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2012-2013/balance-sheet.pdf">Balance Sheet</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2012-2013/inc-exp.pdf">Income & Expenditure Statement</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2012-2013/receipts-payments.pdf">Receipts and Payments- Funds Flow statement</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2012-2013/schedules.pdf">Schedules</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2012-2013/notes-to-accounts.pdf">Notes to the Accounts</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2012-2013/ar-final.pdf">Annual Report</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/AnnualReport_2012-2013/ca-norms.pdf">Credibility Alliance Norms Compliance Report</a></p>
                            </div>
                        </div>
                    </div>

                    <h2 class="text-heading-aboutus">FCRA Donation Details</h2>
                    <p>View our Quarterly FCRA Donation Details</p>
                    <div class="card">
                        <div class="card-header" id="heading">
                            <h5 class="mb-0">
                                <button class="btn1 btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Quarterly FCRA Donation Details
                                </button>
                            </h5>
                        </div>
                        <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                            <div class="card-body">
                                <p class="tieude6"><a href="https://give-marketplace.s3.ap-south-1.amazonaws.com/static/legal/FCRA/fcra-fy-2020-2021-q1.pdf">FCRA Donation Details Apr-Jun 2020</a></p>
                                <p class="tieude6"><a href="https://give-marketplace.s3.ap-south-1.amazonaws.com/static/legal/FCRA/fcra-fy-2019-2020-q4.pdf">FCRA Donation Details Jan-Mar 2020</a></p>
                                <p class="tieude6"><a href="https://give-marketplace.s3.ap-south-1.amazonaws.com/static/legal/FCRA/fcra-fy-2019-2020-q3.pdf">FCRA Donation Details Oct-Dec 2019</a></p>
                                <p class="tieude6"><a href="https://give-marketplace.s3.ap-south-1.amazonaws.com/static/legal/FCRA/FCRA-Q2-July-Sept-2019.pdf">FCRA Donation Details July-Sept 2019</a></p>
                                <p class="tieude6"><a href="https://give-marketplace.s3.ap-south-1.amazonaws.com/static/legal/FCRA/Q1-april-june-2019.pdf">FCRA Donation Details Apr-Jun 2019</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/FCRA/Q4_qtly_fy18_19.pdf">FCRA Donation Details Jan-Mar 2019</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/FCRA/Q3_qtly_fy18_19.pdf">FCRA Donation Details Oct-Dec 2018</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/FCRA/FCRA+Q2+Upload1.pdf">FCRA Donation Details July-Sept 2018</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/FCRA/fcra-FY-18-19-Q1-Apr-Jun.jpg">FCRA Donation Details Apr-Jun 2018</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/FCRA/fcra-FY-17-18-Q4-Jan-Mar.jpg">FCRA Donation Details Jan-Mar 2018</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/FCRA/fcra-FY-17-118-Q3-oct-dec.jpg">FCRA Donation Details Oct-Dec 2017</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/FCRA/fcra-fy-17-18-Q3-July-Sept.jpg">FCRA Donation Details July-Sept 2017</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/FCRA/accounts-fcra-fy-17-18-Q4-apr-jun.jpg">FCRA Donation Details Apr-Jun 2017</a></p>
                                <p class="tieude6"><a href="https://s3.ap-south-1.amazonaws.com/give-marketplace/static/legal/FCRA/accounts-fcra-fy-16-17-Q4-jan-mar.jpg">FCRA Donation Details Jan-Mar 2017</a></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

