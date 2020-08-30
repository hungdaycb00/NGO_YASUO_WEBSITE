@extends('layout.user_layout')
@section('user_content')
   @include('layout.about_layout')
    <div class="container">
        <div class="row">
           @include('layout.about_layout_left')
            <div class="col-lg-8 ">
                <h2 class="text-heading-aboutus">What We Do</h2>
                <p>GiveIndia, an online donation platform, allows you to support a cause of your choice from the NGOs
                    that have been evaluated for transparency and credibility.</p>
                <p>
                    GiveIndia is India's largest and most trustworthy giving platform for donors.
                    With contributions of over ₹450+ crore from 13 lakh donors and 150+ corporates,
                    supporting 1250+ nonprofits and impacting 45 lakh lives across 23 states in India.
                </p>
                <div class="row">
                    <div class="col-6 phandoan1 "  >
                        <img src="../frontend/img/aboutus/aboutus1.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-6  phandoan2" >
                        <p>
                            We tell you exactly how your donation helps those in
                            need and also give you a proof of it through fund utilisation reports.
                        </p >
                        <p>
                            We have reviewed hundreds of nonprofit organizations from all over India
                            to identify and list the ones that meet our GiveAssured criteria. They work
                            for a host of causes ranging from child welfare and
                            education to disability, poverty, and women's empowerment and many others.
                        </p>
                    </div>
                </div>
                <h2 class="text-heading-aboutus">How we work</h2>
                <p><b>Here is how we ensure that your contribution reaches the people and the organization you support.</b></p>
                <div class="row work-panel">
                    <div class="col-4">
                        <img src="../frontend/img/aboutus/aboutus2.png" alt="" class="what-we-do-images">
                    </div>
                    <div class="col-4">
                        <p>
                            1. You select the program that
                            you wish to commit to support
                        </p>
                    </div>
                </div>
                <div class="row work-panel">
                    <div class="col-4">
                        <p>2. You receive a tax exemption receipt as soon as your donation
                            transaction is complete</p>
                    </div>
                    <div class="col-4">
                        <img src="../frontend/img/aboutus/aboutus3.png" alt="" class="what-we-do-images">
                    </div>
                </div>
                <div class="row work-panel">
                    <div class="col-4">
                        <img src="../frontend/img/aboutus/aboutus4.png" alt="" class="what-we-do-images">
                    </div>
                    <div class="col-4">
                        <p>
                            3. The amount is allocated to the program and nonprofit of your choice
                        </p>
                    </div>
                </div>
                <div class="row work-panel">
                    <div class="col-4">
                        <p>4. Donations are disbursed to the nonprofits as per our schedule</p>
                    </div>
                    <div class="col-4">
                        <img src="../frontend/img/aboutus/aboutus5.png" alt="" class="what-we-do-images">
                    </div>
                </div>
                <div class="row work-panel">
                    <div class="col-4">
                        <img src="../frontend/img/aboutus/aboutus6.png" alt="" class="what-we-do-images">
                    </div>
                    <div class="col-4">
                        <p>5. The nonprofit utilizes the money for the people as per your chosen program</p>
                    </div>
                </div>
                <div class="row work-panel">
                    <div class="col-4">
                        <p>6. We track every donation and ensure that the nonprofit sends us a report on how they utilize donations</p>
                    </div>
                    <div class="col-4">
                        <img src="../frontend/img/aboutus/aboutus7.png" alt="" class="what-we-do-images">
                    </div>
                </div>
                <div class="row work-panel">
                    <div class="col-4">
                        <img src="../frontend/img/aboutus/aboutus8.png" alt="" class="what-we-do-images">
                    </div>
                    <div class="col-4">
                        <p>7. We give you periodic updates about the people and the program you are helping</p>
                    </div>
                </div>
                <p>When you chose us to be your giving partner, you can rest ass
                    ured that your contributions do what you want them to do.
                </p>
            </div>
        </div>
    </div>

@endsection

