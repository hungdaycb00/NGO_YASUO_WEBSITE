@extends('layout.user_layout')
@section('user_content')

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="frontend/css/donate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <div class="container-fluid text-center "><p class="h1 mt-15">Donate</p></div>
    <form action="#" method="post">

            <div class="agileits_w3layouts_main_grid">
                <div class="agile_main_grid_left">
                    <h3>Your Details :</h3>
                    <input type="text" name="Name" placeholder="First Name" required="">
                    <input type="text" name="Name" placeholder="Last Name" required="">
                    <input type="text" name="Last Name" placeholder="Organization" required="">
                    <input type="email" name="Email" placeholder="Email" required="">
                    <input type="text" name="Phone Number" placeholder="Address" required="">
                    <select id="w3_agileits_select1" class="w3layouts_select" onchange="change_country(this.value)" required="">
                        <option value="">Country</option>
                        <option value="">America</option>
                        <option value="">Vietnam</option>
                        <option value="">China</option>
                        <option value="">Europe</option>
                        <option value="">Other</option>
                    </select>
                    <select id="w3_agileits_select1" class="w3layouts_select" onchange="change_country(this.value)" required="">
                        <option value="">City</option>
                        <option value="">NewYork</option>
                        <option value="">HaNoi</option>
                        <option value="">Washington</option>
                        <option value="">Chicago</option>
                        <option value="">Other</option>
                    </select>
                    <input type="text" name="Phone Number" placeholder="Phone Number" required="">
                    <textarea name="Message" placeholder="Comments..." required=""></textarea>

                </div>
                <div class="agile_main_grid_left">
                    <div class="w3_agileits_main_grid_left_grid">
                        <h3>Your Donation :</h3>
                        <div class="agileits_main_grid_left_l_grids">
                            <h4>Because</h4>
                            <select id="w3_agileits_select1" class="w3layouts_select" onchange="change_country(this.value)" required="">
                                <option value="" selected=""> --Any donation cause-- </option>
                                <option value=""> Children </option>
                                <option value=""> Education </option>
                                <option value=""> Environment </option>
                                <option value=""> Health </option>
                                <option value=""> Women </option>
                                <option value=""> Youth </option>
                                <option value="">Other</option>
                            </select>
                        </div>

                        <div class="col-xs-2">
                            <h4 for="ex1">Donate Amount</h4>
                            <input class="form-control" name="amount" id="ex1" type="text" placeholder="$0.00">
                        </div>


                    </div>
                    <div class="w3_agileits_qualifications">
                        <h3>Credit Card</h3>
                        <div class="w3-agile1">
                            <div class="payment-w3ls">
                                <img src="{{URL::asset('frontend/img/card.png')}}" alt=" " class="img-responsive">
                            </div>
                        </div>

                        <div class="card-bounding agileits">
                            <div class="card-details">
                                <aside>Card Type</aside>
                                <select id="w3_agileits_select1" class="w3layouts_select" required="">
                                    <option value="" selected=""> Card type </option>
                                    <option value=""> Visa </option>
                                    <option value=""> PayPal </option>
                                    <option value=""> Mastercard </option>
                                    <option value=""> American Express </option>

                                </select>
                            </div>
                            <div class="card-details">
                                <aside>Name On Card:</aside>
                                <input type="text" name="name" placeholder="Name On Card" required="">
                            </div>
                            <aside>Card Number:</aside>
                            <div class="card-details">
                                <!--- ".card-type" is a sprite used as a background image with associated classes for the major card types, providing x-y coordinates for the sprite --->

                                <input type="text" name="card number" class="hm" placeholder="0000 0000 0000 0000" maxlength="19" onkeyup="$cc.validate(event)" required="">
                                <!-- The checkmark ".card-valid" used is a custom font from icomoon.io --->

                            </div>
                            <div class="card-details agileits-w3layouts">
                                <div class="expiration">
                                    <aside>Expiration Date</aside>
                                    <input type="text" name="date" onkeyup="$cc.expiry.call(this,event)" maxlength="7" placeholder="mm/yyyy" required="">
                                </div>
                                <div class="cvv">
                                    <aside>CVV</aside>
                                    <input type="text" name="cvv" placeholder="XXX" maxlength="3" required="">
                                </div>
                                <div class="clear">	</div>
                            </div>
                            <input type="submit" value="Donate">

                        </div>
                    </div>
                </div>
                <div class="clear"> </div>
            </div>
    </form>
    <!-- Validator js -->
    <script src="frontend/js/creditCardValidator.js" type="text/javascript"></script>
@endsection
