@extends('frontend.layout.main')
@section('head')
<!-- import individual head here -->

<!-- Owl Carousel CSS cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="{{asset('frontend/css/components/cover.css')}}" />
<link rel="stylesheet" href="{{asset('frontend/css/components/card.css')}}" />
<link rel="stylesheet" href="{{asset('frontend/css/pages/home.css')}}" />

@section('content')



<!-- cover section START -->


<section class="css-bg-1 css-content-container cover-wrap d-flex flex-column justify-content-between align-items-start" style="background-image: url('{{ asset('frontend/assets/img/Book_Lovers.png') }}')">
    <p class="fs-4 text-white fw-bold css-letter-space-1">Discover incredible lessons for your kids!</p>
    <button class="btn css-btn-1">Find More</button>
</section>


<!-- cover section END -->
<section class="activity mt-4">
    <p class="fs-5 css-bold-6">Continue Activity</p>
    <div class="owl-carousel">
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

<section class="activity mt-4 ">
    <p class="fs-5 css-bold-6">Popular Topics</p>
    <div class="owl-carousel">
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

</section>
<!-- Initialize Owl Carousel -->

@endsection
@section('script')
<!-- import individual scripts here -->


<!-- owl js cdn  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            margin: 15,
            nav: true,
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

    });
</script>



@endsection
