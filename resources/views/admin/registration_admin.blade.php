<!DOCTYPE html>
<head>
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('backend/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('backend/css/font.css')}}" type="text/css"/>
    <link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="{{asset('backend/js/jquery2.0.3.min.js')}}"></script>
</head>
<body>
<div class="reg-w3">
    <div class="w3layouts-main">
        <h2>Register Now</h2>
        <?php
        $message = Session::get('message');
        if($message){
            echo $message;
            Session::put('message', null);
        }
        ?>
        <form action="{{URL::to('save_register_admin')}}" method="post">
            {{csrf_field()}}
            <input type="email" class="ggg" name="email" placeholder="E-MAIL" required="">
            <input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
            <input type="password" class="ggg" name="confirm_password" placeholder="CONFIRM PASSWORD" required="">
            <input type="text" class="ggg" name="firstname" placeholder="FIRSTNAME" required="">
            <input type="text" class="ggg" name="lastname" placeholder="LASTNAME" required="">
            <input type="text" class="ggg" name="address" placeholder="ADDRESS" required="">
            <input type="text" class="ggg" name="phone" placeholder="PHONE" required="">
            <h4><input type="checkbox" />I agree to the Terms of Service and Privacy Policy</h4>
            <div class="clearfix"></div>
            <input type="submit" value="Register" name="register" data-target="#exampleModal">
        </form>
        <p>Already have an account ?<a href="{{URL::to('admin/login')}}"><u>Login</u></a></p>
    </div>
</div>
<script src="{{asset('backend/js/bootstrap.js')}}"></script>
<script src="{{asset('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('backend/js/scripts.js')}}"></script>
<script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('backend/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{asset('backend/js/flot-chart/excanvas.min.js')}}"></script><![endif]-->
<script src="{{asset('backend/js/jquery.scrollTo.js')}}"></script>
</body>
</html>
