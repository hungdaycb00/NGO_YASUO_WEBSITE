
<!DOCTYPE html>
<head>
    <title>Admin Login</title>

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
    <style>
        html,body{
            background-image: url("{{URL::to('/backend/images/bg_register.jpg')}}");
            text-align: center;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        img{
            width: 300px;
            height: 300px;
        }
        .alert{
            margin-top: 10%;
        }
    </style>
</head>
<body>
<section class="">
    <div class="alert alert-danger img-thumbnail align-center" role="alert">
       <img src="{{URL::to('/frontend/img/check.png')}}" alt="">
        <h2>Registration completed successfully</h2>
        <br>
        <a href="{{URL::to('login')}}"><button class="btn-large">Back to Login</button></a>
    </div>
</section>
<script src="{{asset('backend/js/bootstrap.js')}}"></script>
<script src="{{asset('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('backend/js/scripts.js')}}"></script>
<script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('backend/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{asset('backend/js/flot-chart/excanvas.min.js')}}"></script><![endif]-->
<script src="{{asset('backend/js/jquery.scrollTo.js')}}"></script>
</body>
</html>
