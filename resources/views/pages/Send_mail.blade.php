
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Send mail</title>
    @include('layout.css')
</head>

<body>
<div id="container">
    <a href="https://ibb.co/k6z0jPK"><img  src="https://i.ibb.co/k6z0jPK/Logo.png" alt="Logo" border="0" /></a>
    <br>
    <div style="">
    <h2>Mail send from: {{$name}}</h2>
    <h3>Hi, {{$user}}</h3>
    <p>{{$body}}</p>
    <h4><i>{{$end}}</i></h4>
    </div>
    <a href="ngo-yasuo.org"><button style="background: #09cc7f;
        text-transform: capitalize;
        padding: 27px 44px;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        font-size: 15px;
        font-weight: 600;
        border-radius: 0px;
        line-height: 1;
        -moz-user-select: none;
        letter-spacing: 1px;
        line-height: 0;
        margin-bottom: 0;
        margin: 10px;
        cursor: pointer;
        transition: color 0.4s linear;
        position: relative;
        z-index: 1;
        border: 0;
        overflow: hidden;
        margin: 0; ">Back to Website</button></a>
</div>

@include('layout.script')
</body>
</html>
