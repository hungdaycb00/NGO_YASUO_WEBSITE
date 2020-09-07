<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <div class="container-fluid">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left d-flex">
                                <ul>
                                    <li>Phone: +84 (0) 101 6666 888</li>
                                    <li>Email: ngo_yasuo@help.org.com</li>
                                </ul>
                                <div class="header-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a  href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="header-info-right d-flex align-items-center">
                                <div class="select-this">
                                    <form action="#">
                                        <div class="select-itms">
                                            <select name="select" id="select1">
                                                <option value="">English</option>
                                                <option value="">Vietnamese</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="dropdown">


                                    <?php
                                    $name = Session::get('username');
                                    if($name){
                                    echo $name;
                                    Session::put('login', null);
                                    ?>

                                    <a class=" text-dark "   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="fa fa-user dropdown-toggle"></span>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item  h5 font-weight-bold" href="{{URL::to('profile')}}">Profile</a>
                                            <a class="dropdown-item h5 font-weight-bold" href="{{URL::to('user_logout')}}">Logout</a>
                                        </div>


                                        <?php
                                        }else{
                                        ?>
                                        <a class='text-dark font-weight-bold' href={{URL::to('login')}}>Log In</a>
                                        <a href="{{URL::to('register')}}" class='text-dark btn' style="padding: 20px;" >Sign Up</a>
                                        <?php
                                        }
                                        ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="{{URL::to('home')}}"><img src="/frontend/img/logo/Logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{URL::to('news')}}" class="font-weight-bold"><h2>News</h2></a>
                                                <ul class="submenu">
                                                    <li><a href="{{URL::to('Children')}}">Privileged Children</a></li>
                                                    <li><a href="{{URL::to('Education')}}">Education</a></li>
                                                    <li><a href="{{URL::to('Health')}}">Health Care </a></li>
                                                    <li><a href="{{URL::to('Other')}}">Others</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{URL::to('about_us')}}">About Us</a></li>
                                            <li><a href="{{URL::to('help_center')}}">Help Center</a></li>
                                            <li><a href="{{URL::to('our_partners')}}">Our partners </a></li>
                                            <li><a href="{{URL::to('contact')}}">Contact Us </a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="header-right-btn d-none d-lg-block ml-20">
                                    <a href="{{URL::to('donate')}}" class="btn header-btn">Donate</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
