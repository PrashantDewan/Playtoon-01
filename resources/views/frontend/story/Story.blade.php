@extends('frontend.layout.main')
@section('head')
<!-- import individual head here -->

<title>Story</title>
<!-- Owl Carousel CSS cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<link rel="stylesheet" href="{{asset('frontend/css/components/cover.css')}}" />
<link rel="stylesheet" href="{{asset('frontend/css/components/card.css')}}" />
<link rel="stylesheet" href="{{asset('frontend/css/pages/story.css')}}" />

    <title>Story</title>
    <!-- Owl Carousel CSS cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{ asset('frontend/css/components/cover.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/components/card.css') }}" />
@endsection
@section('content')
    <!-- cover section START -->


    <section
        class="header-margin-top css-bg-3 css-content-container cover-wrap d-flex flex-column justify-content-between align-items-start"
        style="background-image: url('{{ asset('frontend/assets/img/rhymescover.png') }}')">
        <p class="fs-4 text-white fw-bold css-letter-space-1">Read and listen to amazing story</p>
        <button class="btn css-btn-3">Explore</button>
    </section>

<!-- ...................dont REMOVE this commented CODE..............  -->


<!-- <section class=" css-bg-3 css-content-container cover-wrap d-flex flex-column justify-content-between align-items-start" style="background-image: url('{{ asset('frontend/assets/img/rhymescover.png') }}')">
    <p class="fs-4 text-white fw-bold css-letter-space-1">Read and listen to amazing story</p>
    <button class="btn css-btn-3">Explore</button>
</section> -->



    <section class="activity mt-4">
        <p class="fs-5 css-bold-6">
            Popular Story
        </p>
        <div class="owl-carousel">
            @foreach ($books as $book)
                <div>
                    <div class="css-card position-relative ">
                        <div class="thumbnail-img-wrap position-absolute">
                            <img src="{{ asset($book->image) }}" alt="img" />
                        </div>

                        <div class="css-card-body position-absolute">
                            <p class="py-0 m-0 fw-normal fs-14">{{ $book->name }}</p>
                            <p class="py-0 fw-normal fs-14">{{ $book->type }}</p>
                            <button class="btn css-btn-primary css-minw-fit-content px-5 py-1">Read</button>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        <div class="d-flex justify-content-center align-items-center p-4">
            {{ $books->links() }}
        </div>



        {{-- <div class="text-center p-4" style="font-size: 14px;">
            {{ $books->links() }}
        </div> --}}
        {{-- <style>
            .text-center .pagination .page-item .page-link {
                font-size: 14px;
            }
        </style> --}}



    </section>

    <section class="activity mt-4 ">
        <p class="fs-5 css-bold-6">You might like</p>
        <div class="owl-carousel">

            <!-- item start  -->
            <div>
                <div class="css-card position-relative ">
                    <div class="thumbnail-img-wrap position-absolute">
                        <img src="{{ asset('frontend/assets/img/baby (3).png') }}" alt="img" />
                    </div>

                    <div class="css-card-body position-absolute">
                        <p class="py-0 m-0 fw-normal fs-14">30 min</p>
                        <p class="py-0 fw-normal fs-14">Fiction</p>
                        <button class="btn css-btn-primary css-minw-fit-content px-5 py-1">Read</button>
                    </div>
                </div>
            </div>

            <!-- item end  -->


            <div>
                <div class="css-card position-relative ">
                    <div class="thumbnail-img-wrap position-absolute">
                        <img src="{{ asset('frontend/assets/img/baby (3).png') }}" alt="img" />
                    </div>

                    <div class="css-card-body position-absolute">
                        <p class="py-0 m-0 fw-normal fs-14">30 min</p>
                        <p class="py-0 fw-normal fs-14">Fiction</p>
                        <button class="btn css-btn-primary css-minw-fit-content px-5 py-1">Read</button>
                    </div>
=======

<section class="activity mt-4">
    <p class="fs-5 css-bold-6">
        Recently Played
    </p>
    <div class="owl-carousel">
        <div>
            <div class=" card css-card-3 css-story-card-bg-1 p-2 pb-0">
                <img src="{{ asset('frontend/assets/img/baby (3).png') }}" class=" card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-6 text-white ">Card titledd</h5>
                    <div class="d-flex justify-content-between">
                        <p class="text-white mb-0 pb-0 fs-14">Story</p>
                        <p class="text-white fs-14">32m</p>
                    </div>

                </div>
            </div>
        </div>
        <div>
            <div class=" card css-card-3 css-story-card-bg-3 p-2 pb-0">
                <img src="{{ asset('frontend/assets/img/baby (3).png') }}" class=" card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-6 text-white ">Card titledd</h5>
                    <div class="d-flex justify-content-between">
                        <p class="text-white mb-0 pb-0 fs-14">Story</p>
                        <p class="text-white fs-14">32m</p>
                    </div>

                </div>
            </div>
        </div>

        <div>
            <div class="card css-story-card-bg-4 p-2">
                <img src="{{ asset('frontend/assets/img/baby (3).png') }}" class=" card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-6 text-white ">Card title</h5>
                    <p class="card-text text-white fs-14">Some quick example text to build on the </p>
                </div>
            </div>
        </div>
        <div>
            <div class="card css-story-card-bg-5 p-2">
                <img src="{{ asset('frontend/assets/img/baby (3).png') }}" class=" card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-6 text-white ">Card title</h5>
                    <p class="card-text text-white fs-14">Some quick example text to build on the </p>
                </div>
            </div>

<<<<<<< HEAD
            <div>
                <div class="css-card position-relative ">
                    <div class="thumbnail-img-wrap position-absolute">
                        <img src="{{ asset('frontend/assets/img/baby (3).png') }}" alt="img" />
                    </div>

                    <div class="css-card-body position-absolute">
                        <p class="py-0 m-0 fw-normal fs-14">30 min</p>
                        <p class="py-0 fw-normal fs-14">Fiction</p>
                        <button class="btn css-btn-primary css-minw-fit-content px-5 py-1">Read</button>
                    </div>
=======
        <div>
            <div class="card css-story-card-bg-6 p-2">
                <img src="{{ asset('frontend/assets/img/baby (3).png') }}" class=" card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-6 text-white ">Card title</h5>
                    <p class="card-text text-white fs-14">Some quick example text to build on the </p>
>>>>>>> 92237d494336eaea60639f97f9fc9fc2e8197172
                </div>
            </div>
            <div>
                <div class="css-card position-relative ">
                    <div class="thumbnail-img-wrap position-absolute">
                        <img src="{{ asset('frontend/assets/img/baby (3).png') }}" alt="img" />
                    </div>

<<<<<<< HEAD
                    <div class="css-card-body position-absolute">
                        <p class="py-0 m-0 fw-normal fs-14">30 min</p>
                        <p class="py-0 fw-normal fs-14">Fiction</p>
                        <button class="btn css-btn-primary css-minw-fit-content px-5 py-1">Read</button>
                    </div>
=======
        <div>
            <div class="card css-story-card-bg-6 p-2">
                <img src="{{ asset('frontend/assets/img/baby (3).png') }}" class=" card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-6 text-white ">Card title</h5>
                    <p class="card-text text-white fs-14">Some quick example text to build on the </p>
>>>>>>> 92237d494336eaea60639f97f9fc9fc2e8197172
                </div>
            </div>

<<<<<<< HEAD
            <div>
                <div class="css-card position-relative ">
                    <div class="thumbnail-img-wrap position-absolute">
                        <img src="{{ asset('frontend/assets/img/baby (3).png') }}" alt="img" />
                    </div>

                    <div class="css-card-body position-absolute">
                        <p class="py-0 m-0 fw-normal fs-14">30 min</p>
                        <p class="py-0 fw-normal fs-14">Fiction</p>
                        <button class="btn css-btn-primary css-minw-fit-content px-5 py-1">Read</button>
                    </div>
=======
        <div>
            <div class="card css-story-card-bg-6 p-2">
                <img src="{{ asset('frontend/assets/img/baby (3).png') }}" class=" card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-6 text-white ">Card title</h5>
                    <p class="card-text text-white fs-14">Some quick example text to build on the </p>
>>>>>>> 92237d494336eaea60639f97f9fc9fc2e8197172
                </div>
            </div>

<<<<<<< HEAD
            <div>
                <div class="css-card position-relative ">
                    <div class="thumbnail-img-wrap position-absolute">
                        <img src="{{ asset('frontend/assets/img/baby (3).png') }}" alt="img" />
                    </div>

                    <div class="css-card-body position-absolute">
                        <p class="py-0 m-0 fw-normal fs-14">30 min</p>
                        <p class="py-0 fw-normal fs-14">Fiction</p>
                        <button class="btn css-btn-primary css-minw-fit-content px-5 py-1">Read</button>
                    </div>
                </div>
            </div>

            <div>
                <div class="css-card position-relative ">
                    <div class="thumbnail-img-wrap position-absolute">
                        <img src="{{ asset('frontend/assets/img/baby (3).png') }}" alt="img" />
                    </div>

                    <div class="css-card-body position-absolute">
                        <p class="py-0 m-0 fw-normal fs-14">30 min</p>
                        <p class="py-0 fw-normal fs-14">Fiction</p>
                        <button class="btn css-btn-primary css-minw-fit-content px-5 py-1">Read</button>
                    </div>
                </div>
            </div>

        </div>


    </section>

    <section>
=======



    </div>


</section>



<section>
    <p class="fs-5 css-bold-6 mt-4 mb-0">
        All
    </p>

    <div class="row-wrap  mb-2">
        <div class="row css-row ">
            <div class="col-sm-6 col-md-4 col-lg-2 mt-3">
                <div class="item">
                    <div class=" card  css-card-3 css-story-card-bg-2 p-2 pb-0">
                        <img src="{{ asset('frontend/assets/img/baby (3).png') }}" class=" card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-6 text-white ">Card titledd</h5>
                            <div class="d-flex justify-content-between">
                                <p class="text-white mb-0 pb-0 fs-14">Story</p>
                                <p class="text-white fs-14">32m</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 mt-3">
                <div class="item">
                    <div class=" card css-card-3 css-story-card-bg-1 p-2 pb-0">
                        <img src="{{ asset('frontend/assets/img/baby (3).png') }}" class=" card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-6 text-white ">Card titledd</h5>
                            <div class="d-flex justify-content-between">
                                <p class="text-white mb-0 pb-0 fs-14">Story</p>
                                <p class="text-white fs-14">32m</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 mt-2">
                <div class="item">
                    <div class=" card css-card-3 css-story-card-bg-1 p-2 pb-0">
                        <img src="{{ asset('frontend/assets/img/baby (3).png') }}" class=" card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-6 text-white ">Card titledd</h5>
                            <div class="d-flex justify-content-between">
                                <p class="text-white mb-0 pb-0 fs-14">Story</p>
                                <p class="text-white fs-14">32m</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 mt-2">
                <div class="item">
                    <div class=" card css-card-3 css-story-card-bg-1 p-2 pb-0">
                        <img src="{{ asset('frontend/assets/img/baby (3).png') }}" class=" card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-6 text-white ">Card titledd</h5>
                            <div class="d-flex justify-content-between">
                                <p class="text-white mb-0 pb-0 fs-14">Story</p>
                                <p class="text-white fs-14">32m</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 mt-2">
                <div class="item">
                    <div class=" card css-card-3 css-story-card-bg-1 p-2 pb-0">
                        <img src="{{ asset('frontend/assets/img/baby (3).png') }}" class=" card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-6 text-white ">Card titledd</h5>
                            <div class="d-flex justify-content-between">
                                <p class="text-white mb-0 pb-0 fs-14">Story</p>
                                <p class="text-white fs-14">32m</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 mt-2">
                <div class="item">
                    <div class=" card css-card-3 css-story-card-bg-1 p-2 pb-0">
                        <img src="{{ asset('frontend/assets/img/baby (3).png') }}" class=" card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-6 text-white ">Card titledd</h5>
                            <div class="d-flex justify-content-between">
                                <p class="text-white mb-0 pb-0 fs-14">Story</p>
                                <p class="text-white fs-14">32m</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 mt-2">
                <div class="item">
                    <div class=" card css-card-3 css-story-card-bg-1 p-2 pb-0">
                        <img src="{{ asset('frontend/assets/img/baby (3).png') }}" class=" card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-6 text-white ">Card titledd</h5>
                            <div class="d-flex justify-content-between">
                                <p class="text-white mb-0 pb-0 fs-14">Story</p>
                                <p class="text-white fs-14">32m</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 mt-2">
                <div class="item">
                    <div class=" card css-card-3 css-story-card-bg-1 p-2 pb-0">
                        <img src="{{ asset('frontend/assets/img/baby (3).png') }}" class=" card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-6 text-white ">Card titledd</h5>
                            <div class="d-flex justify-content-between">
                                <p class="text-white mb-0 pb-0 fs-14">Story</p>
                                <p class="text-white fs-14">32m</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-2 mt-3">
                <div class="item">
                    <div class=" card css-card-2 css-story-card-bg-1 p-2 pb-0">
                        <img src="{{ asset('frontend/assets/img/baby (3).png') }}" class=" card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-6 text-white ">Card titledd</h5>
                            <div class="d-flex justify-content-between">
                                <p class="text-black mb-0 pb-0 fs-14">Story</p>
                                <p class="text-black fs-14">32m</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
>>>>>>> 92237d494336eaea60639f97f9fc9fc2e8197172

    </section>
@endsection
@section('script')
    <!-- import individual scripts here -->

    <!-- owl js cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



<<<<<<< HEAD
    <!-- Initialize Owl Carousel -->
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                margin: 15,
                // nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    767: {
                        items: 2,
                        // nav: true
                    },
                    900: {
                        items: 4,
                        // nav: true
                    }
                }
            });

=======
<!-- Initialize Owl Carousel -->
<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            margin: 20,
            // nav: true,
            responsive: {
                0: {
                    items: 1
                },
                767: {
                    items: 2,
                    // nav: true
                },
                900: {
                    items: 4,
                    // nav: true
                },
                1200: {
                    items: 6,
                    // nav: true
                },

            }
>>>>>>> 92237d494336eaea60639f97f9fc9fc2e8197172
        });
    </script>
@endsection
