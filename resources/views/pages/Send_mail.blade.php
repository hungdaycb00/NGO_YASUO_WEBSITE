
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
    <a href="ngo-yasuo.org"><button class="btn">Back to Website</button></a>
</div>

@include('layout.script')
</body>
</html>
