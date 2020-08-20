<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Give - AID | @yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="/frontend/img/favicon.ico">

    <!-- CSS here -->
    @include('layout.css')

</head>
<body>
<!--  Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="/frontend/img/logo/Logo.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
@include('layout.user_header')
<!-- header end -->
<main>

    @yield('user_content')

</main>

{{--footer--}}
@include('layout.user_footer')
{{--end footer--}}
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
@include('layout.script')

</body>
</html>
