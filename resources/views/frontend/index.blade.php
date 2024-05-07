<html>

<head>
    <!-- bs cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- font awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- global custom style  -->
    <link rel="stylesheet" href="{{asset('frontend/css/global.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/header.css')}}" />
    <!-- slider config  -->
    <link rel="stylesheet" href="{{asset('frontend/css/Slider.css')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('frontend/css/pages/ChooseLoginAccount.css')}}" />


    {{-- toster --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    @yield('head')

</head>

<body>
    <div class="css-container w-100 h-100">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light   fixed-top" id="nav">
                <div class="container-fluid ">
                    <div class="dropdown ">
                        <a class="navbar-brand dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('frontend/assets/img/baby (1).png') }}" alt="Logo">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Link</a></li> -->
                            <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
                        </ul>
                    </div>

                    <!-- <a class="navbar-brand" href="#">
                        <img src="{{ asset('frontend/assets/img/baby (1).png') }}" alt="Logo">
                    </a> -->


                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">

                        </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <div class="d-flex justify-content-between align-items-center w-100  nav-items-wrap">

                            <p class="fs-5 nav-user-info-text" style="min-width: 150px;">Hello, <span class="fw-bold">{{auth()->user()->name}}</span></p>

                            <form class="d-flex ml-auto">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn css-btn-primary css-minw-fit-content bg-white text-dark" type="submit">
                                    <img src="{{ asset('frontend/assets/img/nav/sort.png') }}" alt="filter" />

                                </button>
                            </form>
                            <div>
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="{{route('user.indexpage')}}">
                                            <span class="d-flex flex-column align-items-center">
                                                <img src="{{ asset('frontend/assets/img/nav/home.png') }}" alt="nav-link" />
                                                <span>Home</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('user.rhymes')}}">
                                            <span class="d-flex flex-column align-items-center">
                                                <img src="{{ asset('frontend/assets/img/nav/musicnote.png') }}" alt="nav-link" />
                                                <span>Rhymes</span>
                                            </span>
                                        </a>
                                    </li>
                                    <!-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </li> -->
                                    <li class="nav-item">

                                        <a class="nav-link" href="{{route('user.story')}}" tabindex="-1" aria-disabled="true">
                                            <span class="d-flex flex-column align-items-center">

                                                <img src="{{ asset('frontend/assets/img/nav/book1.png') }}" alt="nav-link" />
                                                <span>Story</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">
                                            <span class="d-flex flex-column align-items-center">
                                                <img src="{{ asset('frontend/assets/img/nav/game.png') }}" alt="nav-link" />
                                                <span>Game</span>
                                            </span>
                                        </a>
                                    </li>

                                    <li class="nav-item">

                                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">
                                            <span class="d-flex flex-column align-items-center">
                                                <img src="{{ asset('frontend/assets/img/nav/dashboard.png') }}" alt="nav-link" />
                                                <span>Insight</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">

                                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">
                                            <span class="d-flex flex-column align-items-center">
                                                <img src="{{ asset('frontend/assets/img/nav/ham.png') }}" alt="nav-link" />
                                                <span>More</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main class="pb-4 header-margin-top">

            <!-- main content goes here -->
            <div class="css-container w-100 h-100 ">
                <div class="wrap w-100 h-100 d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column align-items-center">
                        <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="Logo" class="logo" />
                        <h6 class="mt-2">Kids Account</h6>
                        <div class="container">
                            <div class="row justify-content-center accounts-wrap">
                                @foreach($accounts as $account)
                                <a href="{{route('user.select.account',$account->id)}}" onclick="setAccountID({{ $account->id}})">
                                    <div class="col-12 col-sm-6 col-md-3 css-row-child">
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <div class="img-wrap"><img src="/images/account/{{ $account->image }}" alt="Logo" class="child-image" width="80" /></div>
                                            <p class="fw-bold fs-14">{{$account->name}}</p>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                                <a href="{{route('user.add.user')}}">
                                    <div class="col-12 col-sm-6  col-md-12  ">
                                        <div class="d-flex flex-column justify-content-center align-items-center">
                                            <div class="img-wrap add-account"><img src="{{ asset('frontend/assets/img/Vector.png') }}" alt="Logo" /></div>
                                            <p class="fs-14">Add User</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-4 d-flex flex-column align-items-center">
                                    <a href="/logout"><button type="button" class="btn css-btn-primary ">Logout</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer>

        </footer>
    </div>


    <!-- global scripts -->

    <!-- jquery cdn  -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!-- bs js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>



    <script src="{{asset('frontend/js/Header.js')}}"></script>

    {{-- toster --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        @if(Session::has('message'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{session('message')}}")
        @endif
    </script>

    <script>
        function setAccountID(accountID) {
            localStorage.setItem("account_id", accountID);
            localStorage.setItem("user_id", `{{auth()->user()->id}}`);
        }
    </script>


</body>


</html>