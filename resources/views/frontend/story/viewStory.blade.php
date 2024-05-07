@extends('frontend.layout.main')
@section('head')
<!-- import individual head here -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

<title>View Story</title>
<!-- slick slider css cdn -->
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" /> -->
<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css" /> -->
<!-- custom slick slider style  -->
<!-- <link rel="stylesheet" href="{{asset('frontend/css/SlickSlider.css')}}" /> -->


<link rel="stylesheet" href="{{asset('frontend/css/components/cover.css')}}" />
<link rel="stylesheet" href="{{asset('frontend/css/components/card.css')}}" />
<link rel="stylesheet" href="{{asset('frontend/css/pages/StoryView.css')}}" />
@endsection
@section('content')



<!-- cover section START -->


<!-- cover section END -->


<section class="activity d-flex justify-content-center">
    <p class="fs-3">Journey of a Beautiful Queen</p>
</section>

<section class="d-flex d-flex flex-column align-items-center">
    <div class="css-card position-relative story-thumbnail">
        <div class="thumbnail-img-wrap position-absolute">
            <img src="{{ asset('frontend/assets/img/baby (3).png') }}" alt="img" />
        </div>

        <div class="css-card-body position-absolute">
            <!-- <p class="py-0 m-0 fw-normal fs-14">30 min</p>
            <p class="py-0 fw-normal fs-14">Fiction</p> -->

        </div>
    </div>
    <p class="mt-3"><span class="mt-2 me-2 color-rating"><i class="fa-regular fa-star"></i> 4.7 </span><span class="fs-14">By Sandesh Adhikari</span></p>



</section>

<section class="story-readport px-2">
    <div class="w-50">
        <div class="progress css-bg-2 ">
            <div class="progress-bar bg-danger " role="progressbar" style="width: 30%" ausria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                10% Complete
            </div>
            
        </div>

    </div>
    <p class="fs-4 mb-1">Introduction</p>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit suscipit, incidunt, temporibus aspernatur exercitationem libero voluptatum, fuga voluptatibus deleniti adipisci quis optio dicta placeat eos quia. At totam sapiente quis exercitationem distinctio officiis fugiat labore a ducimus maxime nostrum, quod iste vel porro laudantium ullam amet, laboriosam animi. Voluptate molestias doloribus rem vero optio numquam autem. Recusandae assumenda provident, ut molestiae explicabo debitis dolorum ipsam repellat illo delectus suscipit autem mollitia tenetur repudiandae commodi pariatur nulla nostrum sint eligendi illum? Dicta soluta quis quo omnis architecto praesentium quod perferendis a. Tenetur consequatur necessitatibus quibusdam corporis est blanditiis, doloremque libero voluptatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, eius! Autem quae illo fugit possimus nobis cumque natus nemo vel consequatur ullam reiciendis asperiores odio in unde magni commodi vitae corrupti dolore, distinctio, reprehenderit explicabo nihil dolor. Hic ut ullam iusto velit tempore, soluta facilis ea harum rem sunt dicta doloremque at dolore obcaecati sed rerum amet nisi maiores, tenetur quae pariatur, debitis aut! Dolorem dolorum ratione, praesentium tenetur dolore qui consequatur nobis voluptatibus aspernatur, harum, esse odit molestias consequuntur eius non modi illum quas iste rerum excepturi! Rerum veniam eligendi, iste ducimus tempora minima quis animi. Aliquid tenetur perferendis deserunt et recusandae esse. Mollitia cum quae sed nostrum labore debitis asperiores a voluptate nihil. Quia inventore aliquid assumenda harum odit ea tenetur accusamus, iste voluptatem, commodi ipsam quam voluptates numquam quod molestiae cupiditate velit aliquam. Cum quas porro est ad. Odio, labore rerum perferendis ipsum maxime nesciunt id asperiores dolores quaerat atque, magni eum optio ipsa commodi a qui tempora porro debitis illum possimus assumenda eveniet officiis esse similique. Eos facere dolor, earum tenetur repellat voluptas enim sapiente eaque voluptatibus deserunt sunt. Inventore aliquam odit illum corporis ipsa minus ipsam nemo reprehenderit quae, reiciendis vitae commodi aut sapiente rem.
    </p>
</section>





@endsection
@section('script')
<!-- import individual scripts here -->


<!-- slick slider js -->
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->

<!-- <script type="text/javascript">
    $(document).ready(function() {


        $('.slide-show').slick({


        
            draggable: true,
            centerMode: true,
            responsive: [{
                    breakpoint: 2024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 3,
                    }
                }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }

            ]
        });


    });
</script> -->



@endsection