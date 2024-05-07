@extends('landing.layout.main')
@section('content')

<section class="container hero">

    <div class="row my-row ">
        <div class="col-sm-12 col-md-12 col-lg-6 p-2">
            <div class="item ">
                <p class="m-0 p-0 text-sm-center text-lg-start">Welcome to our school</p>
                <p class="css-fs-hero-title fw-bold mb-3 text-sm-center text-lg-start">Make Your Student's Life Special</p>
                <p class="text-sm-center text-lg-start">The Universe is one great kindergarten for man. Everything that exists has brought with it its own peculiar lesson.</p>
                <div class="d-flex justify-content-sm-center justify-content-md-center justify-content-lg-start ">
                    <button class="btn css-btn-primary ">
                        Get Started
                    </button>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 p-2">
            <div class="item mt-sm-4 mt-lg-auto">
                <div class=" hero-img-wrap d-flex justify-content-center align-items-center"><img src="{{asset('landing/assets/images/bg.png')}}" alt="" /></div>
            </div>
        </div>
    </div>
</section>

<section class="container section-working">
    <p class="section-title fw-bold text-center">How Playtoon works</p>
    <div class="row my-row ">
        <div class="col-sm-12 col-md-12 col-lg-6 p-2">
            <div class="item mt-sm-4 mt-lg-auto d-flex ">
                <div class=" hero-img-wrap d-flex w-75  align-items-center"><img src="{{asset('landing/assets/images/playtoon/imagemanthinking.png')}}" alt="" /></div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 p-2">
            <div class="item">

                <!-- nested ROW START -->
                <div class="row my-row ">
                    <div class="col-sm-12 col-md-12 col-lg-6 p-2">
                        <div class="item">
                            <div class="image-wrap mb-3"><img src="{{asset('landing/assets/images/playtoon/icon1bgicon1.png')}}" alt="icon" /></div>
                            <p class="fs-6 fw-bold ">High Quality Learning</p>
                            <p class="css-text-color">Compellingly architect timely relationships for customized experiences. Credibly plagiarize emerging go with quality.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 p-2">
                        <div class="item">
                            <div class="image-wrap mb-3"><img src="{{asset('landing/assets/images/playtoon/icon1bgicon1.png')}}" alt="icon" /></div>
                            <p class="fs-6 fw-bold ">High Quality Learning</p>
                            <p class="css-text-color">Compellingly architect timely relationships for customized experiences. Credibly plagiarize emerging go with quality.</p>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-12 col-lg-6 p-2">
                        <div class="item">
                            <div class="image-wrap mb-3"><img src="{{asset('landing/assets/images/playtoon/icon1bgicon1.png')}}" alt="icon" /></div>
                            <p class="fs-6 fw-bold ">High Quality Learning</p>
                            <p class="css-text-color">Compellingly architect timely relationships for customized experiences. Credibly plagiarize emerging go with quality.</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 p-2">
                        <div class="item">
                            <div class="image-wrap mb-3"><img src="{{asset('landing/assets/images/playtoon/icon1bgicon1.png')}}" alt="icon" /></div>
                            <p class="fs-6 fw-bold ">High Quality Learning</p>
                            <p class="css-text-color">Compellingly architect timely relationships for customized experiences. Credibly plagiarize emerging go with quality.</p>
                        </div>
                    </div>


                </div>
                <!-- nested ROW END -->

            </div>
        </div>


    </div>

</section>


<section class="container section-about">
    <p class="section-title fw-bold text-center">About Playtoon</p>
    <div class="row my-row ">
        <div class="col-sm-12 col-md-12 col-lg-6 p-2">
            <div class="item mt-sm-4 mt-lg-auto  ">
                <p class="title-1 fw-bold">Our Mission</p>
                <p class="css-text-color">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. At laudantium magni, vero eos repudiandae placeat.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam harum aperiam sequi excepturi alias esse soluta eligendi ipsam libero explicabo?
                </p>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 p-2">
            <div class="item">
                <div class=" hero-img-wrap d-flex justify-content-end   align-items-center"><img src="{{asset('landing/assets/images/playtoon/imgmissionimg.png')}}" alt="" /></div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 p-2">
            <div class="item">
                <div class=" hero-img-wrap d-flex justify-content-start   align-items-center"><img src="{{asset('landing/assets/images/playtoon/imgvisionimg.png')}}" alt="" /></div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 p-2">
            <div class="item mt-sm-4 mt-lg-auto  ">
                <p class="title-1 fw-bold">Our Vision</p>
                <p class="css-text-color">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. At laudantium magni, vero eos repudiandae placeat.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam harum aperiam sequi excepturi alias esse soluta eligendi ipsam libero explicabo?
                </p>
            </div>
        </div>


    </div>
</section>

<div class="section-wrap  css-bg-main">
    <section class="section-activities container text-white py-5">
        <p class="section-title fw-bold text-center mb-0">Activities</p>
        <p class="text-center mb-5">Infant classroom offers strategies for building positive relationships, helping children</p>
        <div class="row my-row mt-3 ">
            <div class="col-sm-12 col-md-12 col-lg-12 p-2 w-100 d-flex justify-content-center">
                <div class="item mt-sm-4 mt-lg-auto text-center w-50">
                    <div class="image-wrap mb-3">
                        <img src="{{asset('landing/assets/images/playtoon/game-icons_teacher (1).png')}}" alt="icon" />
                    </div>
                    <p class="fw-bold mb-0">Professional Teaching</p>
                    <p class="">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. At laudantium magni, vero
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 p-2">
                <!-- nested ROW START -->
                <div class="row my-row ">
                    <div class="col-sm-12 col-md-12 col-lg-3 p-2">
                        <div class="item mt-sm-4 mt-lg-auto h-100 text-center d-flex flex-column  justify-content-center">
                            <div class="image-wrap mb-3">
                                <img src="{{asset('landing/assets/images/playtoon/ri_graduation-cap-fillicon2.png')}}" alt="icon" />
                            </div>
                            <p class="fw-bold mb-0">Professional Teachingg</p>
                            <p class="">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. At laudantium magni, vero
                            </p>
                        </div>
                    </div>

                    <!-- center img col START -->
                    <div class="col-sm-12 col-md-12 col-lg-6 p-2">
                        <div class="item d-flex justify-content-center">
                            <div class="image-wrap mb-3 d-flex justify-item-center">
                                <img class="mx-auto w-75" src="{{asset('landing/assets/images/playtoon/imgactivityheroimg.png')}}" alt="icon" />
                            </div>
                        </div>
                    </div>
                    <!-- center img col END -->

                    <div class="col-sm-12 col-md-12 col-lg-3 p-2">
                        <div class="item mt-sm-4 mt-lg-auto  text-center h-100 text-center d-flex flex-column  justify-content-center">
                            <div class="image-wrap mb-3">
                                <img src="{{asset('landing/assets/images/playtoon/mdi_hearticon3.png')}}" alt="icon" />
                            </div>
                            <p class="fw-bold mb-0">Professional Teaching ss</p>
                            <p class="text-white">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. At laudantium magni, vero
                            </p>
                        </div>
                    </div>



                </div>
                <!-- nested ROW END -->
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 p-2">
                <div class="item d-flex justify-content-center flex-column text-center">
                    <div class="image-wrap mb-3">
                        <img src="{{asset('landing/assets/images/playtoon/ri_graduation-cap-fillicon2.png')}}" alt="icon" />
                    </div>
                    <p class="fs-6 fw-bold  ">High Quality Learning</p>
                    <p class="text-white">Compellingly architect timely relationships for customized experiences. Credibly plagiarize emerging go with quality.</p>
                </div>
            </div>



        </div>

    </section>
</div>


@endsection