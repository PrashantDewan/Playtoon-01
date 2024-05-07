<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- bs cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- global custom style  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/global.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/SignIn.css') }}" />
    {{-- toster --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Playtoons | Login</title>
</head>

<body>

    <div class="css-container min-vw-100 min-vh-100"
        style="background-image: url('{{ asset('frontend/assets/img/Playtoon-bg.png') }}')">
        <div class="wrap w-100 min-vh-100 d-flex justify-content-center align-items-center border">
            <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="Logo" class="logo" />
                <h6 class="mt-2">Login</h6>

                <div class="container container-sign-up">
                    <form class="row g-3" action="{{ route('user.login') }}" method="post">
                        @csrf
                        <div class="col-12 ">
                            <input type="email" name="email" placeholder="Email"
                                class="form-control css-input-primary" id="username">
                        </div>
                        <div class="col-12 ">
                            <input type="password" name="password" placeholder="Password"
                                class="form-control css-input-primary " id="password">
                        </div>
                        <div class="col-12 ">
                            <div class="d-flex justify-content-end"><a href="{{route('forget.password')}}"
                                    class="fw-14 color-main-deep">Forget Password?</a></div>
                        </div>

                        <div class="col-12 ">
                            <button type="submit" class="btn css-btn-primary w-100">Login</button>
                        </div>
                        <p class="text-center">Dont have an account? <a href="/register" class="fw-14 color-main-deep">
                                Create One</a></p>
                    </form>

                    <a href="{{ route('google_auth') }}"><button type="button"
                            class="btn btn-sm btn-outline-secondary bg-white w-100 hover-color-main">
                            <img src="{{ asset('frontend/assets/img/google-icon.png') }}" alt="google logo" /> <span
                                class="ml-2">Sign in with Google</span></button>
                    </a>


                </div>

            </div>

        </div>
    </div>
    </div>

    <!-- global scripts -->
    <!-- bs js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jquery cdn  -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    {{-- toster --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('message') }}")
        @endif
    </script>
</body>

</html>
