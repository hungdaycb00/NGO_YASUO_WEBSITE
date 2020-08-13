@extends('layout.user_layout')
@section('user_content')
    <!DOCTYPE html>
<head>
    <title>Help Center</title>
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
        <h2>PIND HELP</h2>
        <?php
        $message = Session::get('message');
        if($message){
            echo $message;
            Session::put('message', null);
        }
        ?>
        {{csrf_field()}}
        <input type="text" class="ggg" name="firstname" placeholder="FIRSTNAME" required="">
        <input type="text" class="ggg" name="lastname" placeholder="LASTNAME" required="">
        <input type="email" class="ggg" name="email" placeholder="E-MAIL" required="">
        <input type="text" class="ggg" name="phone" placeholder="PHONE" required="">
        <label class="ggg" for="input_6"> Best way to contact me : </label>
        <div style="margin-bottom: 60px">
            <select style="width:250px" data-component="dropdown" aria-labelledby="label_6">
                <option value="">  </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4+"> 4+ </option>
            </select>
        </div>

        <label class="ggg"> What do you need help with ? </label>
        <h4 style="color: #000000"><input type="checkbox" /> Children </h4>
        <h4 style="color: #000000"><input type="checkbox" /> Diasbilities </h4>
        <h4 style="color: #000000"><input type="checkbox" /> Disadvantaged </h4>
        <h4 style="color: #000000"><input type="checkbox" /> Other difficulities </h4>

        <label class="ggg" style="margin-top: 20px"> I am in need of: </label>
        <div id="cid_31" class="form-input-wide">
            <textarea id="input_31" class="form-textarea" name="q31_iAm31" cols="70" rows="8" data-component="textarea" aria-labelledby="label_31"></textarea>
        </div>

        <label class="ggg" style="margin-top: 20px"> COMENTS </label>
        <div id="cid_31" class="form-input-wide">
            <textarea id="input_31" class="form-textarea" name="q31_iAm31" cols="70" rows="8" data-component="textarea" aria-labelledby="label_31"></textarea>
        </div>

        <div class="clearfix"></div>
        <input type="submit" value="Submit" name="submit" data-target="#exampleModal">

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

@endsection
