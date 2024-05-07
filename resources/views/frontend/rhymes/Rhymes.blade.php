@extends('frontend.layout.main')
@section('head')
    <!-- import individual head here -->
    <title>Rhymes</title>
    <!-- Owl Carousel CSS cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/components/cover.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/components/card.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/Rhymes.css') }}" />
    <!-- <style>
        .my-row {
            border: 1px solid red;
        }

        .my-row div {
            /* border: 1px solid green; */
        }

        .item {
            background-color: aquamarine;
        }
    </style> -->
@endsection
@section('content')
    <!-- <section class="hero-card ">
            <div class="hero-box">
                <div class="text-co">
                    <span>Find amazing lesson for your kids</span>
                </div>
                <div class="image-content">
                    <img src="../frontend/assets/img/hero-img-1.png" alt="">
                </div>
                <div class="button">
                    <button>Explore more</button>
                </div>
            </div>

        </section> -->
    <!-- cover section START -->


    <!-- <section class="css-bg-2 css-content-container cover-wrap d-flex flex-column justify-content-between align-items-start" style="background-image: url('{{ asset('frontend/assets/img/rhymescover.png') }}')">
            <p class="fs-4 text-white fw-bold css-letter-space-1">Discover incredible lessons for your kids!</p>
            <button class="btn css-btn-2">Explore</button>
        </section> -->


    <!-- cover section END -->
    <section class="activity mt-4">
        <p class="fs-5 css-bold-6 mb-0 pb-0 text-white">
            Popular Rhymes
        </p>
        @foreach ($rhymes as $rhyme)
            <div class="row css-row ">
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="item">
                        <div class="card card-bg-1 p-2">
                            <img src="/images/rhymes/{{ $rhyme->image }}" alt="Thumbnail Image" class="book-image" />
                            <div class="card-body">
                                <h5 class="card-title fs-6 text-white ">{{ $rhyme->title }}</h5>
                                <p class="card-text text-white fs-14">{{ $rhyme->author }}</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


    </section>
@endsection
@section('script')
    <!-- import individual scripts here -->


    <!-- owl js cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Initialize Owl Carousel -->
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                margin: 15,

                responsive: {
                    0: {
                        items: 1
                    },
                    767: {
                        items: 2,

                    },
                    900: {
                        items: 4,

                    }
                }
            });

        });
    </script>
@endsection
