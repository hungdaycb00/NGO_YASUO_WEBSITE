<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Give - AID Home </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="frontend/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{URL::asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontend/css/style.css')}}">
</head>
<body>
<!--  Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="frontend/img/logo/Logo.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
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
                                        <li><a  href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
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
                                <ul class="contact-now">
                                    <li><a class="font-weight-bold" href="{{URL::to('login')}}"><u>Login</u></a></li>
                                </ul>
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
                                <a href="{{URL::to('home')}}"><img src="frontend/img/logo/Logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{URL::to('home')}}" class="font-weight-bold"><h2>News</h2></a>
                                                <ul class="submenu">
                                                    <li><a href="#">Children</a></li>
                                                    <li><a href="#">Education</a></li>
                                                    <li><a href="#">Woman</a></li>
                                                    <li><a href="#">Others</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="program.html">Help Center</a></li>
                                            <li><a href="events.html">Our partners </a></li>

                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="header-right-btn d-none d-lg-block ml-20">
                                    <a href="contact.html" class="btn header-btn">Donate</a>
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
<!-- header end -->
<main>

    @yield('user_content')

</main>
<footer>
    <div class="footer-wrapper section-bg2" data-background="frontend/img/gallery/footer_bg.png">
        <!-- Footer Top-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <div class="footer-tittle">
                                    <div class="footer-logo mb-20">
                                        <a href="{{URL::to('home')}}"><img src="frontend/img/logo/Logo1_footer.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                        <p>Address :Your address goes here, your demo address.</p>
                                    </li>
                                    <li><a href="#">Phone : +8880 44338899</a></li>
                                    <li><a href="#">Email : info@colorlib.com</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Important Link</h4>
                                <ul>
                                    <li><a href="#"> View Project</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Testimonial</a></li>
                                    <li><a href="#">Proparties</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <div class="footer-pera footer-pera2">
                                    <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
                                </div>
                                <!-- Form -->
                                <div class="footer-form" >
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                              method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                                   class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                                   onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                        class="email_icon newsletter-submit button-contactForm"><img src="frontend/img/gallery/form.png" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-10 col-lg-9 ">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> GIVE - AID <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Yasuo Team</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3">
                            <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a  href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="./frontend/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./frontend/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./frontend/js/popper.min.js"></script>
<script src="./frontend/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./frontend/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./frontend/js/owl.carousel.min.js"></script>
<script src="./frontend/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./frontend/js/wow.min.js"></script>
<script src="./frontend/js/animated.headline.js"></script>
<script src="./frontend/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="./frontend/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="./frontend/js/jquery.nice-select.min.js"></script>
<script src="./frontend/js/jquery.sticky.js"></script>
<!-- Progress -->
<script src="./frontend/js/jquery.barfiller.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="./frontend/js/jquery.counterup.min.js"></script>
<script src="./frontend/js/waypoints.min.js"></script>
<script src="./frontend/js/jquery.countdown.min.js"></script>
<script src="./frontend/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="./frontend/js/contact.js"></script>
<script src="./frontend/js/jquery.form.js"></script>
<script src="./frontend/js/jquery.validate.min.js"></script>
<script src="./frontend/js/mail-script.js"></script>
<script src="./frontend/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="./frontend/js/plugins.js"></script>
<script src="./frontend/js/main.js"></script>

</body>
</html>
