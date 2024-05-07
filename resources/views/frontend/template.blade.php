<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- bs cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- global custom style  -->
    <link rel="stylesheet" href="{{asset('frontend/css/global.css')}}" />
    <!-- <link rel="stylesheet" href="{{asset('frontend/css/pages/SignIn.css')}}" /> -->

    <title>Playtoons | </title>
</head>

<body>
    <div class="css-container min-vw-100 min-vh-100" style="background-image: url('{{ asset('frontend/assets/img/Playtoon-bg.png') }}')">
        <div class="wrap w-100 min-vh-100 d-flex justify-content-center align-items-center border">
            <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="Logo" class="logo" />
                <h6 class="mt-2">Login</h6>
                <div class="container container-sign-up">

                </div>

            </div>

        </div>
    </div>
    </div>

    <!-- global scripts -->
    <!-- bs js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jquery cdn  -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</body>

</html>