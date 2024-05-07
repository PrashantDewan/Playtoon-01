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
                <h4 class="mb-3 fw-normal">Pricing Plan</h4>
            </div>
            <div class="row d-flex justify-content-center">
                @foreach($plans as $plan)
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card h-100 shadow-lg ">
                        <div class="card-body">
                            <div class="d-flex justify-content-between p-3">
                                <h5 class="card-title">{{$plan->name}}</h5>
                                <div class="badge bg-primary text-wrap" style="width: fit-content; height:fit-content">
                                    {{$plan->trial_period_days}} days
                                </div>

                            </div>

                        </div>
                        <ul class="list-group list-group-flush">
                            {!! $plan->description !!}
                        </ul>
                        <div class="card-body">
                            <span class="h2">{{$plan->currency}} {{$plan->price}}</span>
                            <br><br>
                        </div>
                        <div class="card-body text-center ">

                            <a href="{{route('purchase.subscription',$plan->id)}}"><button class="btn w-100  btn-lg bg-color-warning " style="border-radius:30px">Get Started</button></a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="d-flex w-100 justify-content-center mt-2"><a href="/">
                    <button class="btn   btn-sm  css-btn-primary justify-content-center gap-2 align-items-center d-flex "><img src="{{ asset('frontend/assets/img/arrowcircleleft.png') }}" alt="" />Go Back</button></a>
            </div>
        </div>

    
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>