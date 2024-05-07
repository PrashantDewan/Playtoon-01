@extends('frontend.layout.main')
@section('head')
<!-- import individual head here -->
<title>Insight</title>
<!-- Owl Carousel CSS cdn -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"> -->


<link rel="stylesheet" href="{{asset('frontend/css/pages/Insight.css')}}" />
<!-- <link rel="stylesheet" href="{{asset('frontend/css/components/card.css')}}" /> -->



<style>
    .my-row {
        /* border: 1px solid red; */
    }

    .my-row div {
        /* border: 1px solid green; */
    }

    .item {
        /* background-color: aquamarine; */
    }
</style>


@section('content')



<!-- cover section START -->


<!-- <section class="css-bg-1 css-content-container cover-wrap d-flex flex-column justify-content-between align-items-start" style="background-image: url('{{ asset('frontend/assets/img/Book_Lovers.png') }}')">
    <p class="fs-5 text-white fw-bold css-letter-space-1">Discover incredible lessons for your kids!</p>
    <button class="btn css-btn-1">Find More</button>
</section> -->

<section>
    <div class="css-content-container">

        <div class="row my-row ">
            <!-- col 1 START  -->
            <p class="fs-5 fw-bold css-letter-space-1">Todays Plan</p>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="item">
                    <div class="css-bg-5 card-box d-flex flex-column justify-content-between align-items-start" style="background-image: url('{{ asset('frontend/assets/img/cardbg.png') }}')">
                        <div>
                            <p class="fs-5 text-dark fw-bold css-letter-space-1 py-0 my-0">Listening</p>
                            <p class="my-0 py-0">234 words</p>
                        </div>
                        <button class="btn css-btn-primary btn-sm">Start</button>
                    </div>
                </div>

                <!-- nested row inside col STAT -->
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-6 col-lg-6 p-2">
                        <div class="item">
                            <div class="css-bg-6 card-box d-flex flex-column justify-content-between align-items-start">
                                <div>
                                    <p class="fs-5 text-dark fw-bold css-letter-space-1 my-0 py-0">Reading</p>
                                    <p>1234 Characters</p>
                                </div>
                                <button class="btn css-btn-primary btn-sm">Start</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 p-2">
                        <div class="item">
                            <div class="css-bg-7 card-box d-flex flex-column justify-content-between align-items-start">
                                <div>
                                    <p class="fs-5 text-dark fw-bold css-letter-space-1 my-0 py-0">Listening</p>
                                    <p>678 Words</p>
                                </div>
                                <button class="btn css-btn-primary btn-sm">Start</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-12 p-2">
                        <div class="item">
                            <div class="css-bg-8 card-box d-flex flex-column justify-content-between align-items-start">
                                <div>
                                    <p class="fs-5 text-dark fw-bold css-letter-space-1 my-0 py-0">Grammer Training</p>
                                    <p>Simple Present</p>
                                </div>
                                <button class="btn css-btn-primary btn-sm">Continue</button>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- nested row inside col END -->
            </div>
            <!-- col 1 END  -->

            <!-- col 2 START  -->
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="item pb-2 ">
                    <div class="bg-light h-50 card-box card-achievements d-flex flex-column justify-content-between align-items-start">
                        <p class="fs-5 text-black fw-bold css-letter-space-1">Achievements</p>

                    </div>
                </div>

                <div class="item pt-2 stat-item ">
                    <div class="bg-light  stat-box  d-flex flex-column justify-content-between align-items-start">
                        <p class="fs-5 text-black fw-bold css-letter-space-1">Statistics </p>
                        <div class="position-relative chart-wrap">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- col 2 END  -->

            <!-- <div class="col-sm-12 col-md-6 col-lg-6 p-2 ">
                <div class="item">Variable width content box take space of two row height</div>
            </div> -->
            <!-- <div class="col-sm-12 col-md-6 col-lg-6 p-2 d-flex flex-column">
                <div class="item flex-grow-1">Variable width content box take space of two row height</div>
            </div> -->

            <!-- <div class="col-sm-12 col-md-6 col-lg-6 p-2">
                <div class="item">Variable width content box 2</div>
            </div> -->

        </div>
    </div>
</section>



<!-- cover section END -->











<!-- Initialize Owl Carousel -->

@endsection
@section('script')
<!-- import individual scripts here -->
<!-- chart js cdn -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- chart js data graph  -->
<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        },
        responsive: true
    });
</script>


<!-- owl js cdn  -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
<script>

</script>



@endsection