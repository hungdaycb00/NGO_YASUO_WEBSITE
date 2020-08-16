@extends('layout.user_layout')
@section('user_content')
    <div class="text-center mt-30"><p class="h1 uppercase">Fund account information</p>
    <p class="blockquote color-blue">Card number: 0611001917137, <br>Card name: QUỸ TRÒ NGHÈO VÙNG CAO, <br>Swift Code: BFTVVNVX061
            <br>Ngân hàng Ngoại Thương Việt Nam - Vietcombank, chi nhánh Ba Đình, Hà Nội</p></div>

    <form action="#" method="post">
                    <div class="agileits_w3layouts_main_grid">
                        <div class="agile_main_grid_left">
                            <h3>Your Details :</h3>
                            <input type="text" name="Name" placeholder="Name" required="">
                            <input type="email" name="Email" placeholder="Email" required="">
                            <input type="text" name="Phone Number" placeholder="Address" required="">
                            <input type="text" name="Phone Number" placeholder="Phone Number" required="">

                        </div>

                        <div class="agile_main_grid_left">
                            <div class="w3_agileits_main_grid_left_grid">
                                <h3>Your Donation :</h3>
                                <div class="agileits_main_grid_left_l_grids">
                                    <h4>Because</h4>
                                    <select id="w3_agileits_select1" class="w3layouts_select" onchange="change_country(this.value)"
                                            required="">
                                        <option value="" selected=""> --Any donation cause--</option>
                                        <option value=""> Children</option>
                                        <option value=""> Education</option>
                                        <option value=""> Environment</option>
                                        <option value=""> Health</option>
                                        <option value=""> Women</option>
                                        <option value=""> Youth</option>
                                        <option value="">Other</option>
                                    </select>
                                </div>

                                <div class="col-xs-2">
                                    <h4 for="ex1">Donate Amount</h4>
                                    <input class="form-control" name="amount" id="ex1" type="text" placeholder="$0.00">
                                </div>
                                <textarea name="Message" placeholder="Comments..." required=""></textarea>
                            </div>
                        </div>
                        <input type="submit" value="Submit"><br>

                        <div class="clear"></div>
                    </div>
                </form>
    <div class="text-center"><p class="alert-success">We will check and notify you!!!</p></div>
                <!-- Button to Open the Modal -->
@endsection
