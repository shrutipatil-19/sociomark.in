@extends('frontend.layout.app')
@section('content')
    <section class="business-section" style="background-image: url(assets/images/background/pattern-4.png)">
        <div class="container">
            <!-- Sec Title / Centered -->
            <div class="sec-title text-center">
                <h2>Explore Our <span>Business</span> <br> New Features</h2>
            </div>
            <div class="row clearfix">

                <!-- Left Column -->
                <div class="left-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">

                        <!-- Business Block -->
                        <div class="business-block">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-phone"></span>
                                    </div>
                                    <h4><a href="service-detail.html">Security Managment</a></h4>
                                    <div class="text">Lorem ipsum, or lipsum as some known, is dummy text used</div>
                                </div>
                            </div>
                        </div>

                        <!-- Business Block -->
                        <div class="business-block">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-phone"></span>
                                    </div>
                                    <h4><a href="service-detail.html">Customer strategy</a></h4>
                                    <div class="text">Lorem ipsum, or lipsum as some known, is dummy text used</div>
                                </div>
                            </div>
                        </div>

                        <!-- Business Block -->
                        <div class="business-block">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-phone"></span>
                                    </div>
                                    <h4><a href="service-detail.html">seo & Content Writting</a></h4>
                                    <div class="text">Lorem ipsum, or lipsum as some known, is dummy text used</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="circle-layer"></div>
                        <div class="circle-layer-two"></div>
                        <div class="pattern-layer" style="background-image: url(assets/images/background/pattern-5.png)">
                        </div>
                        <div class="image" data-tilt data-tilt-max="4">
                            <img src="https://html.themexriver.com/aginco/assets/images/resource/business-1.jpg"
                                alt="" />
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="right-column col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-column">

                        <!-- Business Block -->
                        <div class="business-block">
                            <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-phone"></span>
                                    </div>
                                    <h4><a href="service-detail.html">analytic optimization</a></h4>
                                    <div class="text">Lorem ipsum, or lipsum as some known, is dummy text used</div>
                                </div>
                            </div>
                        </div>

                        <!-- Business Block -->
                        <div class="business-block">
                            <div class="inner-box wow fadeInRight" data-wow-delay="150ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-phone"></span>
                                    </div>
                                    <h4><a href="service-detail.html">digitals products</a></h4>
                                    <div class="text">Lorem ipsum, or lipsum as some known, is dummy text used</div>
                                </div>
                            </div>
                        </div>

                        <!-- Business Block -->
                        <div class="business-block">
                            <div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon fa fa-phone"></span>
                                    </div>
                                    <h4><a href="service-detail.html">Link Building & Content</a></h4>
                                    <div class="text">Lorem ipsum, or lipsum as some known, is dummy text used</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Business Section -->


    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="container-fluid">
                                <div class="row p-4 align-items-center">
                                    <div class="col-md-6 col-12">
                                        <div class="text-center">
                                            <img src="https://placehold.co/800x800" alt="" srcset=""
                                                class="w-50">
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-12 text-start">
                                        <h2>Next, we set up the scrolling animation</h2>
                                        <p>We track the view() position of the section elements using the named timeline
                                            view-timeline: --section;. We had previously set the timeline-scope: --section
                                            up in our HTML element, so we can access it from anywhere in the document.</p>
                                        <p>We animate the .content children using animation-timeline: --section;. The
                                            .content element will now animate based on its parent section's position. This
                                            is important due to how we're handling the layout in the next section.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container-fluid">
                                <div class="row p-4 align-items-center">
                                    <div class="col-md-6 col-12">
                                        <div class="text-center">
                                            <img src="https://placehold.co/800x800" alt="" srcset=""
                                                class="w-50">
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-12 text-start">
                                        <h2>Next, we set up the scrolling animation</h2>
                                        <p>We track the view() position of the section elements using the named timeline
                                            view-timeline: --section;. We had previously set the timeline-scope: --section
                                            up in our HTML element, so we can access it from anywhere in the document.</p>
                                        <p>We animate the .content children using animation-timeline: --section;. The
                                            .content element will now animate based on its parent section's position. This
                                            is important due to how we're handling the layout in the next section.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container-fluid">
                                <div class="row p-4 align-items-center">
                                    <div class="col-md-6 col-12">
                                        <div class="text-center">
                                            <img src="https://placehold.co/800x800" alt="" srcset=""
                                                class="w-50">
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-12 text-start">
                                        <h2>Next, we set up the scrolling animation</h2>
                                        <p>We track the view() position of the section elements using the named timeline
                                            view-timeline: --section;. We had previously set the timeline-scope: --section
                                            up in our HTML element, so we can access it from anywhere in the document.</p>
                                        <p>We animate the .content children using animation-timeline: --section;. The
                                            .content element will now animate based on its parent section's position. This
                                            is important due to how we're handling the layout in the next section.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container-fluid">
                                <div class="row p-4 align-items-center">
                                    <div class="col-md-6 col-12">
                                        <div class="text-center">
                                            <img src="https://placehold.co/800x800" alt="" srcset=""
                                                class="w-50">
                                        </div>

                                    </div>
                                    <div class="col-md-6 col-12 text-start">
                                        <h2>Next, we set up the scrolling animation</h2>
                                        <p>We track the view() position of the section elements using the named timeline
                                            view-timeline: --section;. We had previously set the timeline-scope: --section
                                            up in our HTML element, so we can access it from anywhere in the document.</p>
                                        <p>We animate the .content children using animation-timeline: --section;. The
                                            .content element will now animate based on its parent section's position. This
                                            is important due to how we're handling the layout in the next section.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <script>
        new Swiper(".mySwiper", {
            direction: "vertical",
            slidesPerView: 1,
            spaceBetween: 30,
            // mousewheel: true,
            mousewheel: {
                forceToAxis: true,
                sensitivity: 1,
                releaseOnEdges: true,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

    <style>
        .swiper {
            width: 100%;
            height: 80vh;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }



        .swiper-pagination-bullets .swiper-pagination-bullet {
            width: 20px;
            height: 20px;
        }
    </style>



    <style>
        .accordion-item2 .box-title:before {
            content: "";
            position: absolute;
            top: 5px;
            left: 0;
            background-image: none;
        }

        .accordion-item2 .box-title {
            padding-left: 0px;
        }

        .according-list .box-title {
            font-size: 25px;
        }

        .according-list .according-img {
            max-width: 870px;
            padding: 0rem 2rem;
        }

        .according-list.item-active .according-img {
            height: 60vh;
            opacity: 1;
            visibility: visible;
            overflow-y: auto;
        }

        .accordion-item2 .box-title:hover:before,
        .accordion-item2 .box-title.active:before {
            background-image: none;
        }
    </style>

    <!--==============================
                                                    Service Area
                                                    ==============================-->
    <section class="overflow-hidden bg-smoke2 space">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center">
                        {{-- <div class="shadow-title">Services</div>
                        <span class="sub-title sub-title4 ">Our Services<span></span></span> --}}
                        <h2 class="sec-title ">Trusted Experts in Comprehensive Digital Solutions</h2>
                    </div>
                </div>
            </div>
            <div class="according-list-area">
                <div class="according-list hover-item item-active">
                    <div class="accordion-item2">
                        <h3 class="box-title">Digital Marketing</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/service/digital_marketing.jpeg') }}" alt=""
                            class="w-75">
                        <p class="text">web deve Appeals to clients looking for innovative and creative digital
                            solutions,
                            positioning the agency as a leader in creativity. Conveys a collaborative approach,
                            suggesting that the agency works closely with clients to achieve their digital
                            goals.
                        </p>
                        <a href="" class="th-btn white-border th-icon th-radius">
                            Read More
                        </a>
                    </div>

                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">SEO</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/service/seo.jpeg') }}" alt="" class="w-75">
                        <p class="text">Appeals to clients looking for innovative and creative digital
                            solutions,
                            positioning the agency as a leader in creativity. Conveys a collaborative approach,
                            suggesting that the agency works closely with clients to achieve their digital
                            goals.
                        </p>
                        <a href="" class="th-btn white-border th-icon th-radius">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">Social Media Marketing</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/service/social_media.jpeg') }}" alt=""
                            class="w-75">
                        <p class="text">Appeals to clients looking for innovative and creative digital
                            solutions,
                            positioning the agency as a leader in creativity. Conveys a collaborative approach,
                            suggesting that the agency works closely with clients to achieve their digital
                            goals.
                        </p>
                        <a href="" class="th-btn white-border th-icon th-radius">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">Website Development</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/service/website_development.jpeg') }}" alt=""
                            class="w-75">
                        <p class="text">Appeals to clients looking for innovative and creative digital
                            solutions,
                            positioning the agency as a leader in creativity. Conveys a collaborative approach,
                            suggesting that the agency works closely with clients to achieve their digital
                            goals.
                        </p>
                        <a href="" class="th-btn white-border th-icon th-radius">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">Content Marketing</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/service/sem.jpeg') }}" alt="" class="w-75">
                        <p class="text">Appeals to clients looking for innovative and creative digital
                            solutions,
                            positioning the agency as a leader in creativity. Conveys a collaborative approach,
                            suggesting that the agency works closely with clients to achieve their digital
                            goals.
                        </p>
                        <a href="" class="th-btn white-border th-icon th-radius">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">SEM</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/service/sem.jpeg') }}" alt="" class="w-75">
                        <p class="text">Appeals to clients looking for innovative and creative digital
                            solutions,
                            positioning the agency as a leader in creativity. Conveys a collaborative approach,
                            suggesting that the agency works closely with clients to achieve their digital
                            goals.
                        </p>
                        <a href="" class="th-btn white-border th-icon th-radius">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title">Photography & Video Production </h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/service/video.jpeg') }}" alt="" class="w-75">
                        <p class="text">Appeals to clients looking for innovative and creative digital
                            solutions,
                            positioning the agency as a leader in creativity. Conveys a collaborative approach,
                            suggesting that the agency works closely with clients to achieve their digital
                            goals.
                        </p>
                        <a href="" class="th-btn white-border th-icon th-radius">
                            Read More
                        </a>
                    </div>
                </div>
            </div>


        </div>
        {{-- <div class="shape-mockup spin d-none d-lg-block" data-top="5%" data-right="2%"><img
                src="assets/img/shape/shape-9.png" alt=""></div>
        <div class="shape-mockup d-none d-lg-block" data-top="2%" data-left="0%"><img
                src="assets/img/shape/shape-13.png" alt=""></div>
        <div class="shape-mockup d-none d-lg-block" data-bottom="0%" data-left="50%"><img
                src="assets/img/shape/shape-14.png" alt=""></div> --}}

    </section>

    <style>
        .nav-link {
            padding: 1.1rem 1rem;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #106c97;
            border: none;
            border-bottom: 4px solid #ff900b;
            border-left: 4px solid #ff900b;
        }

        .nav-pills .nav-link {
            border: none;
        }

        .nav-pills .nav-link:hover {
            background-color: #106c97;
            color: white;
            border: none;
            border-bottom: 4px solid #ff900b;
            border-left: 4px solid #ff900b;
        }
    </style>
    <script>
        $(document).ready(function() {
            $(".nav-link").mouseenter(function() {
                $(this).tab('show');
            });
        });
    </script>

    <section>
        <div class="container">
            <div class="row">
                {{-- <div class="d-flex align-items-start"> --}}
                <div class="col-lg-4">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-digital-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-digital" type="button" role="tab"
                            aria-controls="v-pills-digital" aria-selected="true">Digital Marketing</button>
                        <button class="nav-link" id="v-pills-seo-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-seo" type="button" role="tab" aria-controls="v-pills-seo"
                            aria-selected="false">SEO</button>
                        <button class="nav-link" id="v-pills-social-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-social" type="button" role="tab"
                            aria-controls="v-pills-social" aria-selected="false">Social Media Marketing
                        </button>
                        <button class="nav-link" id="v-pills-website-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-website" type="button" role="tab"
                            aria-controls="v-pills-website" aria-selected="false">Website Development
                        </button>
                        <button class="nav-link" id="v-pills-content-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-content" type="button" role="tab"
                            aria-controls="v-pills-content" aria-selected="false">Content Marketing

                        </button>
                        <button class="nav-link" id="v-pills-sem-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-sem" type="button" role="tab" aria-controls="v-pills-sem"
                            aria-selected="false">SEM
                        </button>
                        <button class="nav-link" id="v-pills-video-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-video" type="button" role="tab" aria-controls="v-pills-video"
                            aria-selected="false">Photography & Video Production
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-digital" role="tabpanel"
                            aria-labelledby="v-pills-digital-tab">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset('frontend-assets/img/service/digital_marketing.jpeg') }}"
                                        alt="" class="w-75">
                                </div>
                                <div class="col-12">
                                    <p class="text mt-3">web deve Appeals to clients looking for innovative and creative
                                        digital
                                        solutions,
                                        positioning the agency as a leader in creativity. Conveys a collaborative approach,
                                        suggesting that the agency works closely with clients to achieve their digital
                                        goals.
                                    </p>
                                    <a href="" class="th-btn white-border th-icon th-radius">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-seo" role="tabpanel" aria-labelledby="v-pills-seo-tab">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset('frontend-assets/img/service/seo.jpeg') }}" alt=""
                                        class="w-75">
                                </div>
                                <div class="col-12">
                                    <p class="text mt-3">Appeals to clients looking for innovative and creative digital
                                        solutions,
                                        positioning the agency as a leader in creativity. Conveys a collaborative approach,
                                        suggesting that the agency works closely with clients to achieve their digital
                                        goals.
                                    </p>
                                    <a href="" class="th-btn white-border th-icon th-radius">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-social" role="tabpanel"
                            aria-labelledby="v-pills-social-tab">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset('frontend-assets/img/service/social_media.jpeg') }}" alt=""
                                        class="w-75">
                                </div>
                                <div class="col-12">
                                    <p class="text mt-3">Appeals to clients looking for innovative and creative digital
                                        solutions,
                                        positioning the agency as a leader in creativity. Conveys a collaborative approach,
                                        suggesting that the agency works closely with clients to achieve their digital
                                        goals.
                                    </p>
                                    <a href="" class="th-btn white-border th-icon th-radius">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-website" role="tabpanel"
                            aria-labelledby="v-pills-website-tab">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset('frontend-assets/img/service/website_development.jpeg') }}"
                                        alt="" class="w-75">
                                </div>
                                <div class="col-">
                                    <p class="text mt-3">Appeals to clients looking for innovative and creative digital
                                        solutions,
                                        positioning the agency as a leader in creativity. Conveys a collaborative approach,
                                        suggesting that the agency works closely with clients to achieve their digital
                                        goals.
                                    </p>
                                    <a href="" class="th-btn white-border th-icon th-radius">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-content" role="tabpanel"
                            aria-labelledby="v-pills-content-tab">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset('frontend-assets/img/service/sem.jpeg') }}" alt=""
                                        class="w-75">
                                </div>
                                <div class="col-12">
                                    <p class="text mt-3">Appeals to clients looking for innovative and creative digital
                                        solutions,
                                        positioning the agency as a leader in creativity. Conveys a collaborative approach,
                                        suggesting that the agency works closely with clients to achieve their digital
                                        goals.
                                    </p>
                                    <a href="" class="th-btn white-border th-icon th-radius">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-sem" role="tabpanel" aria-labelledby="v-pills-sem-tab">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset('frontend-assets/img/service/sem.jpeg') }}" alt=""
                                        class="w-75">
                                </div>
                                <div class="col-12">
                                    <p class="text mt-3">Appeals to clients looking for innovative and creative digital
                                        solutions,
                                        positioning the agency as a leader in creativity. Conveys a collaborative approach,
                                        suggesting that the agency works closely with clients to achieve their digital
                                        goals.
                                    </p>
                                    <a href="" class="th-btn white-border th-icon th-radius">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-video" role="tabpanel"
                            aria-labelledby="v-pills-video-tab">
                            <div class="row">
                                <div class="col-12">
                                    <img src="{{ asset('frontend-assets/img/service/video.jpeg') }}" alt=""
                                        class="w-75">
                                </div>
                                <div class="col-12">
                                    <p class="text mt-3">Appeals to clients looking for innovative and creative digital
                                        solutions,
                                        positioning the agency as a leader in creativity. Conveys a collaborative approach,
                                        suggesting that the agency works closely with clients to achieve their digital
                                        goals.
                                    </p>
                                    <a href="" class="th-btn white-border th-icon th-radius">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- </div> --}}
        </div>
    </section>
@endsection


<!-- <div class="choose-area overflow-hidden mb-md-3 mt-md-3 mt-0 md-0 " id="about-sec2">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 pe-5" data-aos="fade-left"
                    data-aos-delay="300"
                    data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="title-area mb-20">
                        <h2 class="sec-title ">The Powerful Lorem ipsum dolor sit amet, consectetur adipisicing. <span class="text-blue"> Benefits of</span> Saor SEO Lorem, ipsum.</h2>
                    </div>
                    <p class="sec-para ">In today's digital landscape, a strong online presence is critical for business success. But simply having a website isn't enough. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <div class="row mb-35 ">
                        <div class="col-6">
                            <p class="sec-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus perspiciatis ratione, minus nobis nam doloremque. </p>
                        </div>
                        <div class="col-6">
                            <p class="sec-para">Lorem ipsum dolor sit amet doloremque. Nesciunt quae debitis in autem?</p>
                        </div>
                    </div>
                    <a href="" class="th-btn black-border th-icon th-radius">
                        Read More <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                </div>
                <div class="col-xl-5" data-aos="fade-right"
                    data-aos-delay="300"
                    data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="choose-image">
                        <div class="img1 tilt-active">
                            <img src="{{ asset('frontend-assets/img/normal/choose_1.png') }}" alt="Choose">
                            <div class="choose-shape"><img src="{{ asset('frontend-assets/img/shape/choose-shape.png') }}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
