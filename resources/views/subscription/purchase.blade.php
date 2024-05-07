<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- global custom style  -->
    <link rel="stylesheet" href="{{asset('frontend/css/global.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/pages/Subscription.css')}}" />

    <title>Platoon | Subscription</title>

</head>

<body>
    <div class="css-container min-vw-100 min-vh-100" style="background-image: url('{{ asset('frontend/assets/img/Playtoon-bg.png') }}')">
        <div class="container p-3 pt-5">

            <div class="d-flex flex-column  align-items-center ">
                <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="Logo" class="logo" />
                <h4 class="mb-3 fw-normal">Purchase Plan</h4>
            </div>

            <div class="d-flex w-100 justify-content-center mt-2"><a href="/">
                    <button class="btn   btn-sm  css-btn-primary justify-content-center gap-2 align-items-center d-flex "><img src="{{ asset('frontend/assets/img/arrowcircleleft.png') }}" alt="" />Go Back</button></a>
            </div>
        </div>

        <div class="content">
            <h1>Purcahse By Paypal</h1>

            <table border="0" cellpadding="10" cellspacing="0" align="center">
                <tr>
                    <td align="center"></td>
                </tr>
                <tr>
                    <td align="center"><a href="https://www.paypal.com/in/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/in/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0" alt="PayPal Logo"></a></td>
                </tr>
            </table>

            <a href="{{ route('payment') }}" class="btn btn-success">Pay $100 from Paypal</a>

        </div>
        <div class="content">
            <h1>Purcahse By Stripe</h1>

            <a href="{{ route('stripe') }}" class="btn btn-success">Pay $100 from Stript</a>

        </div>

    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>