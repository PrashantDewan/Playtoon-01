@extends('frontend.layout.main')
@section('head')
<!-- import individual head here -->
<title>Rhymes View</title>
<!-- Owl Carousel CSS cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link rel="stylesheet" href="{{ asset('frontend/css/components/cover.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/css/components/card.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/css/pages/rhymesView.css') }}" />
<!-- <link rel="stylesheet" href="{{asset('frontend/css/pages/story.css')}}" /> -->
<style>
    /* .my-row {
        border: 1px solid red;
    }

    .my-row div {
        border: 1px solid green;
    }

    .item {
        background-color: aquamarine;
    } */

    #panel,
    #flip {
        /* padding: 5px; */
        /* text-align: center; */
        /* background-color: #e5eecc; */
        /* border: solid 1px #aaa; */
    }

    #panel {
        margin-top: 4px;

        display: none;
    }
</style>
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
    <!-- <p class="fs-5 css-bold-6 mb-0 pb-0 text-white">
        Popular Rhymes
    </p> -->
    <!-- <iframe width="100%" height="400px" src="http://www.youtube.com/embed/RB_hVB6qzBc" frameborder="0" allowfullscreen></iframe> -->




    <!-- <div class="row my-row">
        <div class="col-sm-12 col-md-12 col-lg-8 p-2">
            <div class="item w-100">

                <iframe style="width: 100%;height:60vh;" src="http://www.youtube.com/embed/RB_hVB6qzBc" allowfullscreen allow="autoplay"></iframe>

            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4 p-2">
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
                    
    </div> -->

    <div class="css-grid">

        <div class="grid-item css-video-wrap">
            <iframe style="width: 100%;height:60vh;" src="http://www.youtube.com/embed/RB_hVB6qzBc" allowfullscreen allow="autoplay"></iframe>




            <div class="video-info-wrap mt-3">
                <h5>Journey of a queen to the unknown</h5>
                <p class="fs-14 mb-0">Oct 4. 2023</p>
                <div id="flip" class="fw-bold fs-14">See More</div>
                <div id="panel">
                    <p class="fs-14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat cum quae quaerat, inventore quam blanditiis unde saepe. Consequatur animi quibusdam neque? Excepturi pariatur ratione assumenda quo omnis qui, quidem nostrum vel quia dolor esse aliquam libero tempore consequatur minus, eos quisquam? Reiciendis nostrum dolorem vel necessitatibus eos iste, voluptates excepturi sequi placeat iusto temporibus totam ratione eum maxime saepe quo odit porro ab quas ullam omnis blanditiis soluta! Perspiciatis repellat quos doloremque officia eos debitis facere pariatur beatae dignissimos voluptas at ratione excepturi maiores minus accusantium architecto accusamus rerum sit reprehenderit, similique molestiae neque exercitationem iste. Ipsam vero temporibus adipisci.</p>
                </div>

            </div>
        </div>

        <div class="grid-item css-videos-list">
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
    </div>






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


        // video info hide/show

        var isOpen = false;
        $("#flip").click(function() {
            $("#panel").slideToggle("fast");
            isOpen = !isOpen;
            if (isOpen == true) {
                $("#flip").text("See Less");
            } else {
                $("#flip").text("See More");
            }


        });

    });
</script>
@endsection