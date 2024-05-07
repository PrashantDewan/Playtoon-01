@extends('landing.layout.main')
@section('content')
<div class="container">
    <div class="header-wrap">
        <div class="row">
            <div class="col-md-7 col-sm-12 col-lg-6">
                <div class="header-text">
                    <div class="text">
                        <span class="title-span">Welcome to our school</span>
                        <h1>Make Your <span class="color-span">Student's</span> Life Special</h1>
                        <p>The Universe is one great kindergarten for man. Everything that exists has brought with it its own peculiar lesson.</p>
                        <a class="btn btn-primary kids-active-btn" href="#">Get Started</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-sm-12 col-lg-6">
                <div class="header-img">
                    <img src="{{asset('landing/images/header-baby.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="cloud">
        <img src="{{asset('landing/images/cloud-01.png')}}" alt="">
    </div>
</div>
<div class="animation"><img src="{{asset('landing/images/3.gif')}}" alt=""></div>
<div class="animation-two"><img src="{{asset('landing/images/7.gif')}}" alt=""></div>
<!-- end menu -->

</header>
<!-- ====================================
        End Header Here
========================================= -->
<div class="header-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                <div class="header-box-single box-one">
                    <div class="box-text">
                        <h4>High quality Learning</h4>
                        <p>Compellingly architect timely relationships for customized experiences. Credibly plagiarize emerging go with quality.</p>
                        <a class="btn btn-primary kids-active-btn" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <!-- col-md-4 -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                <div class="header-box-single box-two">
                    <div class="box-text">
                        <h4>Friendly Teachers</h4>
                        <p>Vivamus felis massa, hendrerit eget varius lacinia, lacinia a praesent nec ipsum ornare efficitur consectetur lacus eu arcu mattis.</p>
                        <a class="btn btn-primary kids-active-btn" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <!-- col-md-4 -->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                <div class="header-box-single box-three">
                    <div class="box-text">
                        <h4>Best Support Ever</h4>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos viverra nulla aliquet luctus.</p>
                        <a class="btn btn-primary kids-active-btn" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <!-- col-md-4 -->
        </div>
    </div>
</div>
<!-- ====================================
        End Header Bottom Here
========================================= -->
<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="section-title">
                    <h2>About Us</h2>
                    <p>Get to Know us</p>
                </div>
            </div>
            <div class="col-12 col-md-7 col-lg-7">
                <div class="about-img">
                    <div class="about-main-img">
                        <img src="{{asset('landing/images/img.png')}}" alt="">
                    </div>
                    <div class="about-cloud-img-one"> <img src="{{asset('landing/images/white-cloud.png')}}" alt=""> </div>
                    <div class="about-cloud-img-two"> <img src="{{asset('landing/images/white-cloud.png')}}" alt=""> </div>
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-5">
                <div class="about-text">
                    <h4>Our Mission</h4>
                    <p>Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecena Aliquam erat volutpat In id fermentum augue, ut pellentesque leo. Maecenas at arcu risus. Donec commodo sodales ex, scelerisque laoreet nibh hendrerit id. In aliquet magna maximus. </p>
                    <a class="btn btn-primary kids-active-btn" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="about-main-cloud-one"> <img src="{{asset('landing/images/yellow-cloud.png')}}" alt=""></div>
    <div class="about-main-cloud-two"> <img src="{{asset('landing/images/yellow-cloud.png')}}" alt=""></div>
    <div class="about-main-shape-one"> <img src="{{asset('landing/images/shape-01.png')}}" alt=""></div>
    <div class="about-main-shape-two"> <img src="{{asset('landing/images/shape-02.png')}}" alt=""></div>
    <div class="animation"><img src="{{asset('landing/images/9.gif')}}" alt=""></div>
    <div class="animation-two"><img src="{{asset('landing/images/8.gif')}}" alt=""></div>
</section>
<!-- ====================================
        End About Here
========================================= -->
<div class="counter-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
                <div class="single-counter">
                    <div class="counter-single-area">
                        <i class="fa-solid fa-users"></i>
                        <span class="counter">4325</span>
                        <p>Total Student</p>
                    </div>
                </div>
            </div>
            <!-- col-md-close -->
            <div class="col-12 col-md-4 col-lg-4">
                <div class="single-counter">
                    <div class="counter-single-area">
                        <i class="fa-solid fa-book"></i>
                        <span class="counter">325</span>
                        <p>Class Room</p>
                    </div>
                </div>
            </div>
            <!-- col-md-close -->
            <div class="col-12 col-md-4 col-lg-4">
                <div class="single-counter">
                    <div class="counter-single-area">
                        <i class="fa-solid fa-user-graduate"></i>
                        <span class="counter">225</span>
                        <p>Total Teacher</p>
                    </div>
                </div>
            </div>
            <!-- col-md-close -->
        </div>
    </div>
    <div class="airplane"><img src="{{asset('landing/images/airplane.png')}}" alt=""></div>
</div>
<!-- ====================================
        End Counter Area Here
========================================= -->
<section class="activities">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="section-title">
                    <h2>Our Activities</h2>
                    <p>Infant classroom offers strategies for building positive relationships, helping children</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">

                <div class="activities-single-box d-flex justify-content-between">
                    <div class="activites-text">
                        <h4>Funny and Happy</h4>
                        <p>We are group of teachers who really love childrens and enjoy every month.</p>
                    </div>
                    <div class="activities-img">
                        <i class="fa-solid fa-futbol"></i>
                    </div>
                </div>
                <div class="activities-single-box d-flex justify-content-between mt-4">
                    <div class="activites-text">
                        <h4>Fulfill With Love</h4>
                        <p>Vestibulum tincidunt ante eu hendrerit malesuada. In quis elementum.</p>
                    </div>
                    <div class="activities-img">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                </div>
            </div>
            <!-- col-md-4 -->
            <div class="col-12 col-md-4 col-lg-4">
                <div class="activitics-main-img">
                    <img src="{{asset('landing/images/activitics-baby.png')}}" alt="">
                </div>
            </div>
            <!-- col-md-4 -->
            <div class="col-12 col-md-4 col-lg-4">
                <div class="activities-single-box d-flex justify-content-between m-left">
                    <div class="activities-img">
                        <i class="fa-solid fa-lightbulb"></i>
                    </div>
                    <div class="activites-text">
                        <h4>Professional Teaching</h4>
                        <p>Pellentesque habitant morbi tristique senectus et netus etmond malesuada data.</p>
                    </div>
                </div>
                <div class="activities-single-box d-flex justify-content-between mt-4 m-left">
                    <div class="activities-img">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div class="activites-text">
                        <h4>Fully Equiped</h4>
                        <p>Vivamus rutrum, orci sed scelerisque convallis, neque nibh elementum.</p>
                    </div>
                </div>
            </div>
            <!-- col-md-4 -->
        </div>
    </div>
    <div class="animation"><img src="{{asset('landing/images/3.gif')}}" alt=""></div>
    <div class="animation-two"><img src="{{asset('landing/images/7.gif')}}" alt=""></div>
</section>
<!-- ====================================
        End activities Area Here
========================================= -->
<section class="our-classes">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="section-title">
                    <h2>Our Classes</h2>
                    <p>With kindori, we always put the quality of teaching children first,
                        when sending children at kindori kindergarten.</p>
                </div>
            </div>
        </div>
        <div class="classes-top-area">
            <div class="classes-slider owl-carousel owl-theme">
                <div class="classes-slider-item">
                    <div class="slider-img">
                        <img src="{{asset('landing/images/slider-01.png')}}" alt="">
                    </div>
                    <div class="slider-description">
                        <div class="slider-title d-flex justify-content-between">
                            <div class="title-left">
                                <span>Age</span>
                                <span>2-6</span>
                            </div>
                            <div class="title-right">
                                <span>Size</span>
                                <span>Class 21-10</span>
                            </div>
                        </div>
                        <div class="slider-text">
                            <h4>Letter Match</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur pisicelit sed do eiusmod tempor incidie</p>
                        </div>
                        <div class="slider-btn">
                            <a class="btn btn-primary kids-active-btn" href="#">Price: $57</a>
                        </div>
                    </div>
                </div>
                <!-- iteam -->
                <div class="classes-slider-item">
                    <div class="slider-img">
                        <img src="{{asset('landing/images/slider-02.png')}}" alt="">
                    </div>
                    <div class="slider-description">
                        <div class="slider-title d-flex justify-content-between">
                            <div class="title-left">
                                <span>Age</span>
                                <span>4-8</span>
                            </div>
                            <div class="title-right">
                                <span>Size</span>
                                <span>Class 17-11</span>
                            </div>
                        </div>
                        <div class="slider-text">
                            <h4>Word Match</h4>
                            <p>Proin velit mi, volutpat quis blandit id, consequat non est. Curabitur facilisis</p>
                        </div>
                        <div class="slider-btn">
                            <a class="btn btn-primary kids-active-btn" href="#">Price: $50</a>
                        </div>
                    </div>
                </div>
                <!-- iteam -->
                <div class="classes-slider-item">
                    <div class="slider-img">
                        <img src="{{asset('landing/images/slider-03.png')}}" alt="">
                    </div>
                    <div class="slider-description">
                        <div class="slider-title d-flex justify-content-between">
                            <div class="title-left">
                                <span>Age</span>
                                <span>5-10</span>
                            </div>
                            <div class="title-right">
                                <span>Size</span>
                                <span>Class 12-15</span>
                            </div>
                        </div>
                        <div class="slider-text">
                            <h4>Sentence Match</h4>
                            <p>Vestibulum tincidunt ante eu hendrerit malesuada. In quis elementum.</p>
                        </div>
                        <div class="slider-btn">
                            <a class="btn btn-primary kids-active-btn" href="#">Price: $60</a>
                        </div>
                    </div>
                </div>
                <!-- iteam -->
                <div class="classes-slider-item">
                    <div class="slider-img">
                        <img src="{{asset('landing/images/slider-03.png')}}" alt="">
                    </div>
                    <div class="slider-description">
                        <div class="slider-title d-flex justify-content-between">
                            <div class="title-left">
                                <span>Age</span>
                                <span>3-10</span>
                            </div>
                            <div class="title-right">
                                <span>Size</span>
                                <span>Class 21-10</span>
                            </div>
                        </div>
                        <div class="slider-text">
                            <h4>Word Match</h4>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada.</p>
                        </div>
                        <div class="slider-btn">
                            <a class="btn btn-primary kids-active-btn" href="#">Price: $56</a>
                        </div>
                    </div>
                </div>
                <!-- iteam -->
            </div>
            <!-- slider -->
        </div>
        <!-- top area -->
        <div class="our-classes-bottom">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 co-12">
                    <div class="classes-bottom-img">
                        <img src="{{asset('landing/images/baby.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-8 col-lg-8 col-sm-6 co-12">
                    <div class="classes-bottom-text">
                        <div>
                            <h2>HOW TO ENROLL YOUR CHILD TO A CLASS?</h2>
                            <p>We are group of teachers who really love childrens and eaching and playing with our students.enjoy every and playing with our students.</p>
                            <a class="btn btn-primary kids-active-btn" href="#">JOIN NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="classes-form">
                    <form action="https://ecologytheme.com/theme/kidsplace/pagename.php" method="post">
                        <div class="row">
                            <div class="form-group col-md-5">
                                <select>
                                    <option value="">All Categories</option>
                                    <option value="">Class One</option>
                                    <option value="">Class Two</option>
                                    <option value="">Class Three</option>
                                    <option value="">Class Four</option>
                                    <option value="">Class Five</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" placeholder="Course Keyword" name="keyword">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="submit" value="View Course" name="view">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="classes-cloud-one"><img src="{{asset('landing/images/yellow-cloud.png')}}" alt=""></div>
        <div class="classes-cloud-two"><img src="{{asset('landing/images/yellow-cloud.png')}}" alt=""></div>
        <div class="classes-cloud-three"><img src="{{asset('landing/images/yellow-cloud.png')}}" alt=""></div>
    </div>
</section>
<!-- ====================================
        End Our Classes Area Here
========================================= -->
<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="section-title">
                    <p>WHAT DO PARENTS SAY ABOUT US</p>
                    <h2>Testimonials</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 mx-auto">
                <div class="testimonial_wrapper_4 says_info">
                    <div class="testimonial_single">
                        <div class="reviewer_info">
                            <div class="member-img">
                                <img src="{{asset('landing/images/client-01.png')}}" alt="member img" class="img-fluid  wow zoomIn" data-wow-duration="2s" data-wow-delay=".2s">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_single">
                        <div class="reviewer_info">
                            <div class="member-img">
                                <img src="{{asset('landing/images/client-02.png')}}" alt="member img" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_single">
                        <div class="reviewer_info">
                            <div class="member-img">
                                <img src="{{asset('landing/images/client-03.png')}}" alt="member img" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_single">
                        <div class="reviewer_info">
                            <div class="member-img">
                                <img src="{{asset('landing/images/client-01.png')}}" alt="member img" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial_single">
                        <div class="reviewer_info">
                            <div class="member-img">
                                <img src="{{asset('landing/images/client-03.png')}}" alt="member img" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slider-image -->
                <div class="testimonial_wrapper_4 says_content">
                    <div class="testimonial_single">
                        <ul class="d-flex">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <i class="fa-solid fa-quote-left"></i>
                        <p>Monotonectally drive prospective systems for innovative synergy. Intrinsicly productize sticky solutions via state of the art scenarios.</p>
                        <div class="reviewer">
                            <h4>Nathen Dived</h4>
                        </div>
                    </div>
                    <div class="testimonial_single">
                        <ul class="d-flex">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <i class="fa-solid fa-quote-left"></i>
                        <p>Monotonectally drive prospective systems for innovative synergy. Intrinsicly productize sticky solutions via state of the art scenarios.</p>
                        <div class="reviewer">
                            <h4>Ahone Smith</h4>
                        </div>
                    </div>
                    <div class="testimonial_single">
                        <ul class="d-flex">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <i class="fa-solid fa-quote-left"></i>
                        <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                        <div class="reviewer">
                            <h4>Dr. Alex Limon</h4>
                        </div>
                    </div>
                    <div class="testimonial_single">
                        <ul class="d-flex">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <i class="fa-solid fa-quote-left"></i>
                        <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                        <div class="reviewer">
                            <h4>Nathen Dived</h4>
                        </div>
                    </div>
                    <div class="testimonial_single">
                        <ul class="d-flex ">
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                            <li><i class="fa-solid fa-star"></i></li>
                        </ul>
                        <i class="fa-solid fa-quote-left"></i>
                        <p>I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                        <div class="reviewer">
                            <h4>Dr. Alex Limon</h4>
                        </div>
                    </div>
                </div>
                <!-- slider text -->
            </div>
        </div>
        <!-- slider row -->
        <div class="testimonial-shape-one"><img src="{{asset('landing/images/bee.png')}}" alt=""></div>
        <div class="testimonial-shape-two"><img src="{{asset('landing/images/qutation.png')}}" alt=""></div>
        <div class="testimonial-shape-three"><img src="{{asset('landing/../../../www.ecologytheme.com/theme/kidsplace/images/Vector.html')}}" alt=""></div>
        <div class="testimonial-shape-four"><img src="{{asset('landing/../../../www.ecologytheme.com/theme/kidsplace/images/Vector.html')}}" alt=""></div>
        <div class="testimonial-shape-five"><img src="{{asset('landing/images/bee.png')}}" alt=""></div>
    </div>
</section>
<!-- ====================================
        End Testimonial Area Here
========================================= -->
<section class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="section-title">
                    <h2>Photo Gallery</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="gallery-wrapper col-md-12">
                <div class="filter-buttons">
                    <div class="button-group filters-button-group">
                        <button class="button is-checked" data-filter="*">All</button>
                        <button class="button" data-filter=".ct1">Our School</button>
                        <button class="button" data-filter=".ct2">Activities</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid">
            <div class="row">
                <div class="col-md-4 grid-item ct3 ct4">
                    <div class="single-gallery-item">
                        <div class="single-gallery-itemimg">
                            <a href="#"><img src="{{asset('landing/images/gallery-01.jpg')}}" alt=""></a>
                        </div>
                        <div class="view">
                            <a href="images/gallery-01.jpg" class="port-view"><i class="fa-solid fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="col-md-4 grid-item ct1">
                    <div class="single-gallery-item ">
                        <div class="single-gallery-itemimg">
                            <a href="#"><img src="{{asset('landing/images/gallery-02.jpg')}}" alt=""></a>
                        </div>
                        <div class="view">
                            <a href="images/gallery-02.jpg" class="port-view"><i class="fa-solid fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="col-md-4 grid-item ct3">
                    <div class="single-gallery-item">
                        <div class="single-gallery-itemimg">
                            <a href="#"><img src="{{asset('landing/images/gallery-03.jpg')}}" alt=""></a>
                        </div>
                        <div class="view">
                            <a href="images/gallery-03.jpg" class="port-view"><i class="fa-solid fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!-- item -->
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-md-4 grid-item ct2 ct3 ct4">
                    <div class="single-gallery-item">
                        <div class="single-gallery-itemimg">
                            <a href="#"><img src="{{asset('landing/images/gallery-04.jpg')}}" alt=""></a>
                        </div>
                        <div class="view">
                            <a href="images/gallery-04.jpg" class="port-view"><i class="fa-solid fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="col-md-4 grid-item ct1">
                    <div class="single-gallery-item">
                        <div class="single-gallery-itemimg">
                            <a href="#"><img src="{{asset('landing/images/gallery-05.jpg')}}" alt=""></a>
                        </div>
                        <div class="view">
                            <a href="images/gallery-05.jpg" class="port-view"><i class="fa-solid fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="col-md-4 grid-item ct2 ct3 ct4">
                    <div class="single-gallery-item">
                        <div class="single-gallery-itemimg">
                            <a href="#"><img src="{{asset('landing/images/gallery-06.jpg')}}" alt=""></a>
                        </div>
                        <div class="view">
                            <a href="images/gallery-06.jpg" class="port-view"><i class="fa-solid fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!-- item -->
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-md-4 grid-item ct2 ct3 ct4">
                    <div class="single-gallery-item">
                        <div class="single-gallery-itemimg">
                            <a href="#"><img src="{{asset('landing/images/gallery-07.jpg')}}" alt=""></a>
                        </div>
                        <div class="view">
                            <a href="images/gallery-07.jpg" class="port-view"><i class="fa-solid fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="col-md-4 grid-item ct1">
                    <div class="single-gallery-item">
                        <div class="single-gallery-itemimg">
                            <a href="#"><img src="{{asset('landing/images/gallery-08.jpg')}}" alt=""></a>
                        </div>
                        <div class="view">
                            <a href="images/gallery-08.jpg" class="port-view"><i class="fa-solid fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!-- item -->
                <div class="col-md-4 grid-item ct2 ct3 ct4">
                    <div class="single-gallery-item">
                        <div class="single-gallery-itemimg">
                            <a href="#"><img src="{{asset('landing/images/gallery-09.jpg')}}" alt=""></a>
                        </div>
                        <div class="view">
                            <a href="images/gallery-09.jpg" class="port-view"><i class="fa-solid fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!-- item -->
            </div>
            <!-- row -->
        </div>
    </div>
    <div class="g-bettarfly"><img src="{{asset('landing/images/betterfly.png')}}" alt=""></div>
    <div class="g-bettarfly-two"><img src="{{asset('landing/images/betterfly-01.png')}}" alt=""></div>
</section>
<!-- ====================================
        End Gellary Area Here
========================================= -->
<section class="teachers">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="section-title">
                    <h2> Who Stand By Your Kids Always</h2>
                    <p>We are group of teachers who really love childrens and enjoy every moment of teaching</p>
                </div>
            </div>
        </div>
        <div class="teacher-slider owl-carousel owl-theme">
            <div class="teacher-slider-item">
                <img src="{{asset('landing/images/teacher-01.jpg')}}" alt="">
                <h4>STEVEA AILA</h4>
                <span>Teacher</span>
                <p>Seamlessly myocardinate user friendly e-commerce after transparent internal or "organic" sources.</p>
                <div class="teacher-social">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- item -->
            <div class="teacher-slider-item">
                <img src="{{asset('landing/images/teacher-02.jpg')}}" alt="">
                <h4>ROBART WILLIAM</h4>
                <span>Teacher</span>
                <p>Proin feugiat, ante a congue pulvinar, urna purus fermentum elit, consectetur sagittis est ligula.</p>
                <div class="teacher-social">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- item -->
            <div class="teacher-slider-item">
                <img src="{{asset('landing/images/teacher-03.jpg')}}" alt="">
                <h4>JHON ROY</h4>
                <span>Teacher</span>
                <p>Fusce molestie orci sed cursus feugiat. Mauris sollicitudin, felis ut faucibus rhoncus, justo ligula.</p>
                <div class="teacher-social">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- item -->
            <div class="teacher-slider-item">
                <img src="{{asset('landing/images/client-03.png')}}" alt="">
                <h4>STEVEA AILA</h4>
                <span>Teacher</span>
                <p>Seamlessly myocardinate user friendly e-commerce after transparent internal or "organic" sources. </p>
                <div class="teacher-social">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- item -->
        </div>
        <!-- slider -->
    </div>
    <div class="teacher-shape"><img src="{{asset('landing/images/dots.png')}}" alt=""></div>
    <div class="teacher-shape-one"><img src="{{asset('landing/images/airplane.png')}}" alt=""></div>
    <div class="teacher-shape-two"><img src="{{asset('landing/images/dots.png')}}" alt=""></div>
    <div class="teacher-shape-three"><img src="{{asset('landing/images/dots.png')}}" alt=""></div>
</section>
<!-- ====================================
        End Teachers Area Here
========================================= -->
<section class="blog-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="section-title">
                    <h2>Our Event</h2>
                    <p>We are group of teachers who really love childrens and enjoy every moment of teaching</p>
                </div>
            </div>
        </div>
        <div class="blog-main-area">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-6 col-xxl-4">
                    <div class="single-blog d-flex">
                        <div class="blog-image"><img src="{{asset('landing/images/gallery-05.jpg')}}" alt=""></div>
                        <div class="blog-text">
                            <span>Date: 2022.04.12</span>
                            <h4>Imagination Classes.</h4>
                            <p>Lorem ipsum dolor amet consectur pisicelit sed eiusmod tempor indie.</p>
                            <div class="blog-btn"> <a href="#" class="btn btn-primary"><i class="fa-solid fa-location-dot"></i> Newwork City</a></div>
                        </div>
                    </div>
                </div>
                <!-- single blog -->
                <div class="col-md-12 col-sm-12 col-lg-6 col-xxl-4">
                    <div class="single-blog d-flex">
                        <div class="blog-image"><img src="{{asset('landing/images/blog-02.png')}}" alt=""></div>
                        <div class="blog-text">
                            <span>Date: 2022.01.19</span>
                            <h4>Number Classes.</h4>
                            <p>Curabitur efficitur tellus nibh, sit amet tincidunt odio rhoncus sed sodales.</p>
                            <div class="blog-btn"> <a href="#" class="btn btn-primary"><i class="fa-solid fa-location-dot"></i> Wasington City</a></div>
                        </div>
                    </div>
                </div>
                <!-- single blog -->
                <div class="col-md-12 col-sm-12 col-lg-6 col-xxl-4">
                    <div class="single-blog d-flex">
                        <div class="blog-image"><img src="{{asset('landing/images/blog-03.png')}}" alt=""></div>
                        <div class="blog-text">
                            <span>Date: 2022.05.12</span>
                            <h4>Music Classes.</h4>
                            <p>Aenean scelerisque, nibh vel sodales mollis, arcu lacus congue dapibus.</p>
                            <div class="blog-btn"> <a href="#" class="btn btn-primary"><i class="fa-solid fa-location-dot"></i> Thailand City</a></div>
                        </div>
                    </div>
                </div>
                <!-- single blog -->
                <div class="col-md-12 col-sm-12 col-lg-6 col-xxl-4">
                    <div class="single-blog d-flex">
                        <div class="blog-image"><img src="{{asset('landing/images/blog-06.png')}}" alt=""></div>
                        <div class="blog-text">
                            <span>Date: 2022.03.12</span>
                            <h4>Developing Classes.</h4>
                            <p>Quisque ex augue, dapibus nec consequat nec, ornare id nisl eros.</p>
                            <div class="blog-btn"> <a href="#" class="btn btn-primary"><i class="fa-solid fa-location-dot"></i> Peris City</a></div>
                        </div>
                    </div>
                </div>
                <!-- single blog -->
                <div class="col-md-12 col-sm-12 col-lg-6 col-xxl-4">
                    <div class="single-blog d-flex">
                        <div class="blog-image"><img src="{{asset('landing/images/blog-05.png')}}" alt=""></div>
                        <div class="blog-text">
                            <span>Date: 2022.07.12</span>
                            <h4>Paper Plates Art.</h4>
                            <p>Nullam accumsan sed eros a iaculis. Praesent velit dolor, tempus integer.</p>
                            <div class="blog-btn"> <a href="#" class="btn btn-primary"><i class="fa-solid fa-location-dot"></i> Dubai City</a></div>
                        </div>
                    </div>
                </div>
                <!-- single blog -->
                <div class="col-md-12 col-sm-12 col-lg-6 col-xxl-4">
                    <div class="single-blog d-flex">
                        <div class="blog-image"><img src="{{asset('landing/images/blog-01.png')}}" alt=""></div>
                        <div class="blog-text">
                            <span>Date: 2022.08.12</span>
                            <h4>Draing Classes</h4>
                            <p>Integer suscipit orci eget rutrum venenatis. Integer lobortis tellus augue.</p>
                            <div class="blog-btn"> <a href="#" class="btn btn-primary"><i class="fa-solid fa-location-dot"></i> London City</a></div>
                        </div>
                    </div>
                </div>
                <!-- single blog -->
            </div>
        </div>
    </div>
    <div class="blog-shape-one"><img src="{{asset('landing/images/blog-air.png')}}" alt=""></div>
    <div class="blog-shape-two"><img src="{{asset('landing/images/yellow-cloud.png')}}" alt=""></div>
</section>
<!-- ====================================
        End Blog Area Here
========================================= -->
<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-4 clo-sm-6 cal-xxl-3">
                <div class="call-to-action-img"><img src="{{asset('landing/images/calltoaction.png')}}" alt=""></div>
            </div>
            <div class="col-md-8 clo-sm-6 cal-xxl-9">
                <div class="call-to-action-text">
                    <div>
                        <h3>Subscribe Newsletter</h3>
                        <p>Compellingly coordinate client-focused alignments for clicks-and-mortar.</p>
                        <div class="call-to-action-from ">
                            <form action="https://ecologytheme.com/theme/kidsplace/pagename.php" class="d-flex">
                                <input type="text" placeholder="Enter your email">
                                <input type="submit" value="Subscribe Now">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="call-shape-one"><img src="{{asset('landing/images/white-cloud.png')}}" alt=""></div>
    <div class="call-shape-two"><img src="{{asset('landing/images/white-cloud.png')}}" alt=""></div>
    <div class="call-shape-three"><img src="{{asset('landing/images/dots.png')}}" alt=""></div>
    <div class="call-shape-four"><img src="{{asset('landing/images/airplane.png')}}" alt=""></div>
</div>
<!-- ====================================
        End Call to Action Area Here
========================================= -->
@endsection