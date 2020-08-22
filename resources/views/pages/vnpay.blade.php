<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tạo mới đơn hàng</title>
    <!-- Bootstrap core CSS -->
    <link href="/assetsVNpay/bootstrap.min.css" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="/assetsVNpay/jumbotron-narrow.css" rel="stylesheet">
    <script src="/assetsVNpay/jquery-1.11.3.min.js"></script>
</head>

<body>

<div class="container">
    <div class="header clearfix">
        <h3 class="text-muted">VNPAY</h3>
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


            <div class="form-group">
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
                <label for="bank_code">Bank</label>
                <select name="bank_code" id="bank_code" class="form-control">
                    <option value="NCB"> Ngan hang NCB</option>
                    <option value="AGRIBANK"> Ngan hang Agribank</option>
                    <option value="SCB"> Ngan hang SCB</option>
                    <option value="SACOMBANK">Ngan hang SacomBank</option>
                    <option value="EXIMBANK"> Ngan hang EximBank</option>
                    <option value="MSBANK"> Ngan hang MSBANK</option>
                    <option value="NAMABANK"> Ngan hang NamABank</option>
                    <option value="VNMART"> Vi dien tu VnMart</option>
                    <option value="VIETINBANK">Ngan hang Vietinbank</option>
                    <option value="VIETCOMBANK"> Ngan hang VCB</option>
                    <option value="HDBANK">Ngan hang HDBank</option>
                    <option value="DONGABANK"> Ngan hang Dong A</option>
                    <option value="TPBANK"> Ngân hàng TPBank</option>
                    <option value="OJB"> Ngân hàng OceanBank</option>
                    <option value="BIDV"> Ngân hàng BIDV</option>
                    <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                    <option value="VPBANK"> Ngan hang VPBank</option>
                    <option value="MBBANK"> Ngan hang MBBank</option>
                    <option value="ACB"> Ngan hang ACB</option>
                    <option value="OCB"> Ngan hang OCB</option>
                    <option value="IVB"> Ngan hang IVB</option>
                    <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                </select>
            </div>
            <div class="form-group">
                <label for="language">Language</label>
                <select name="language" id="language" class="form-control">
                    <option value="vn">Tiếng Việt</option>
                    <option value="en">English</option>
                </select>
            </div>

            <button type="submit" class="btn btn-default">Payment</button>
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


</body>
</html>
