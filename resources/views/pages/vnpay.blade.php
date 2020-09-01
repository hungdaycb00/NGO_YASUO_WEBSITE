



@extends('layout.user_layout')
@section('user_content')
    <!-- Bootstrap core CSS -->
{{--    <link href="/assetsVNpay/bootstrap.min.css" rel="stylesheet"/>--}}
    <!-- Custom styles for this template -->
    <link href="/assetsVNpay/jumbotron-narrow.css" rel="stylesheet">
    <script src="/assetsVNpay/jquery-1.11.3.min.js"></script>
    <style>
        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }
    </style>

<div class="container">
    <div class="header clearfix text-center">
        <p><h1 class="text-muted display-4 pt-25">VNPAY</h1></p>
    </div>
    <div class="table-responsive">

        <form action="onlinebank" id="create_form" method="post">
            {{csrf_field()}}
            @foreach($code as $c)
            <div class="form-group">
                <label for="language">Order Type </label>
                <select name="order_type" id="order_type" class="form-control">
                    <option value="billpayment">Donate</option>
                </select>
            </div>


            <div class="form-group mt-50">
                <label for="order_id">Code Payment</label>
                <input class="form-control" id="order_id" name="order_id" type="text" value="{{$c->code_payment}}"/>
            </div>
            <div class="form-group">
                <label for="amount">Amount</label>
                <input class="form-control" id="amount"
                       name="amount" type="number" value="{{$c->amount}}"/>
            </div>
            <div class="form-group">
                <label for="order_desc">Content billing</label>
                <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2" placeholder="messages...">payment</textarea>
            </div>
            @endforeach
            <div class="form-group">
                <label for="language">Language</label>
                <select name="language" id="language" class="form-control">
                    <option value="vn">Tiếng Việt</option>
                    <option value="en">English</option>
                </select>
            </div>

            <button type="submit" class="btn btn-lg btn-success mt-30 ">Payment</button>
        </form>
    </div>
    <footer class="footer">
        <p>&copy; VNPAY 2015</p>
    </footer>
</div>
<link href="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.css" rel="stylesheet"/>
<script src="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.js"></script>
<script type="text/javascript">
    $("#btnPopup").click(function () {
        var postData = $("#create_form").serialize();
        var submitUrl = $("#create_form").attr("action");
        $.ajax({
            type: "POST",
            url: submitUrl,
            data: postData,
            dataType: 'JSON',
            success: function (x) {
                if (x.code === '00') {
                    if (window.vnpay) {
                        vnpay.open({width: 768, height: 600, url: x.data});
                    } else {
                        location.href = x.data;
                    }
                    return false;
                } else {
                    alert(x.Message);
                }
            }
        });
        return false;
    });
</script>

@endsection

