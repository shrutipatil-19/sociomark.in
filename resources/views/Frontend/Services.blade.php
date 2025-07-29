@extends('Frontend.layout.app')
@section('custome-style')
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Services",
            "item": "https://www.sociomark.ae/services"
        }, {
            "@type": "ListItem",
            "position": 2,
            "name": "Digital marketing",
            "item": "https://www.sociomark.ae/service/digital-marketing-agency-dubai"
        }, {
            "@type": "ListItem",
            "position": 3,
            "name": "SEO agency",
            "item": "https://www.sociomark.ae/service/seo-agency-dubai"
        }, {
            "@type": "ListItem",
            "position": 4,
            "name": "Social media agency",
            "item": "https://www.sociomark.ae/service/social-media-agency-dubai"
        }, {
            "@type": "ListItem",
            "position": 5,
            "name": "Website development agency",
            "item": "https://www.sociomark.ae/service/website-development-agency"
        }, {
            "@type": "ListItem",
            "position": 6,
            "name": "Content Marketing agency",
            "item": "https://www.sociomark.ae/service/content-marketing-agency-dubai"
        }, {
            "@type": "ListItem",
            "position": 7,
            "name": "Performance marketing agency",
            "item": "https://www.sociomark.ae/service/performance-marketing-agency"
        }, {
            "@type": "ListItem",
            "position": 8,
            "name": "Photography and Video Production",
            "item": "https://www.sociomark.ae/service/photography-videography"
        }]
    }
</script>


@endsection
@section('content')
<main id="contact">
    <div class="breadcumb-wrapper p-0">
        <div class="">
            <div class="w-100" style="height: 70vh;">
                <video playsinline src="{{ asset('frontend-assets/services.mp4') }}" loop autoplay muted class="w-100 h-100"
                    style="object-fit: cover;"></video>
            </div>
        </div>
    </div>
    <!-- <section class="overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content breadcrumb-light">
                            <h1 class="breadcumb-title">Services</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                {{-- <li><a href="{{ route('about') }}">About Us</a></li> --}}
                                <li>Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    <!--==============================
                                                                                                                                                                        Service Area
                                                                                                                                                                    ==============================-->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-4 col-lg-4">
                    <div class="page-img global-img mb-35" data-aos="fade-right" data-aos-duration="3000">
                        <img src="{{ asset('frontend-assets/img/service/services.png') }}"
                            alt="Service Image">
                    </div>
                </div>
                <div class="col-xxl-8 col-lg-8">
                    <div class="page-content">
                        <h1 class="h2 sec-title mb-20" data-aos="fade-left" data-aos-duration="3000">Why
                            <span class="text-blue">Make A Mark</span> With Us?
                        </h1>
                        <p class="sec-para" data-aos="fade-left" data-aos-duration="3000"><b>Sociomark’s team adds great value to each project by
                                bringing in a cumulative experience of 30 years.</b>

                        </p>
                        <p class="sec-para mb-30" data-aos="fade-left" data-aos-duration="3000"> Targeting the correct audience, getting you to the top
                            of the search rankings & consistently put out more engaging, minimalistic,
                            quirky & appealing content, are the key factors for setting us apart!</p>
                    </div>
                </div>
            </div>
            <div class="d-none">
                <div class="row align-items-center">
                    <h2 class="h2 page-title mb-20 text-center text-uppercase text-blue"><b>Create More
                            Awareness</b></span>
                    </h2>
                    <p class="blog-text mb-35 text-center">Overall, A 360 degree approach, facilitating a
                        complete coverage
                        of all possible digital mediums. You know we can mark all possibilities!</p>
                </div>
                <div class="row">
                    <div class="service-process-wrap">
                        <div class="service-process">
                            <div class="align-content-center service-process_img"><img
                                    src="{{ asset('frontend-assets/img/icon/service/Social.png') }}"
                                    height="50" alt="Social Media Marketing">
                            </div>
                            <div class="service-process_centent">
                                <h5 class="service-process_title">Social Media Marketing</h5>
                                <p class="service-process_text">Targeting the correct audience at the right
                                    time, across all the social media platforms.</p>
                            </div>
                        </div>
                        <div class="service-process">
                            <div class="align-content-center service-process_img"><img
                                    src="{{ asset('frontend-assets/img/icon/service/SEO.png') }}"
                                    height="50" alt="Search Engine Optimization">
                            </div>
                            <div class="service-process_centent">
                                <h5 class="service-process_title">Search Engine Optimization </h5>
                                <p class="service-process_text">Ensuring visibility for the search engine,
                                    collaborative efforts that help in brand topping the search list.</p>
                            </div>
                        </div>
                        <div class="service-process">
                            <div class="align-content-center service-process_img"><img
                                    src="{{ asset('frontend-assets/img/icon/service/Website.png') }}"
                                    height="50" alt="Website Development">
                            </div>
                            <div class="service-process_centent">
                                <h5 class="service-process_title">Website Development</h5>
                                <p class="service-process_text">Creating a face for the brand with seamless
                                    integration, that helps build a connect with your audience.</p>
                            </div>
                        </div>


                        <div class="service-process">
                            <div class="align-content-center service-process_img"><img
                                    src="{{ asset('frontend-assets/img/icon/service/Digital.png') }}"
                                    height="50" alt="Digital Marketing">
                            </div>
                            <a href="{{ route('digitalMarketing') }}">
                                <div class="service-process_centent">
                                    <h5 class="service-process_title">Digital Marketing</h5>
                                    <p class="service-process_text">71% prefer communicating through email. One
                                        of
                                        the best ways to personalize communication for your brand.</p>
                                </div>
                            </a>
                        </div>
                        <div class="service-process">
                            <div class="align-content-center service-process_img"><img
                                    src="{{ asset('frontend-assets/img/icon/service/mark.png') }}"
                                    height="50" alt="Performance Marketing">
                            </div>
                            <div class="service-process_centent">
                                <h5 class="service-process_title"> Performance Marketing</h5>
                                <p class="service-process_text">Ensuring visibility for the search engine,
                                    collaborative efforts that help in brand topping the search list.</p>
                            </div>
                        </div>
                        <div class="service-process">
                            <div class="align-content-center service-process_img"><img
                                    src="{{ asset('frontend-assets/img/icon/service/content.png') }}"
                                    height="50" alt="Content Marketing">
                            </div>
                            <div class="service-process_centent">
                                <h5 class="service-process_title">Content Marketing</h5>
                                <p class="service-process_text">Creating a face for the brand with seamless
                                    integration, that helps build a connect with your audience.</p>
                            </div>
                        </div>
                        <div class="service-process">
                            <div class="align-content-center service-process_img"><img
                                    src="{{ asset('frontend-assets/img/icon/service/mark.png') }}"
                                    height="50" alt="Photography & Video Production">
                            </div>
                            <div class="service-process_centent">
                                <h5 class="service-process_title">Photography & Video Production</h5>
                                <p class="service-process_text">Creating a face for the brand with seamless
                                    integration, that helps build a connect with your audience.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-grey space services px-5">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <h2 class="sec-title mb-20" data-aos="fade-right" data-aos-duration="1000">Create More
                        <span class="text-blue">Awareness</span>
                    </h2>
                    <p class="sec-para mb-35" data-aos="fade-right" data-aos-duration="2000">Overall, A 360 degree approach, facilitating a
                        complete coverage
                        of all possible digital mediums. You know we can mark all possibilities!</p>
                </div>
                <div class="col-lg-8">
                    <div class="service-process-wrap">
                        <div class="service-process" data-aos="fade-left" data-aos-duration="1000">
                            <div class="align-content-center service-process_img"><img
                                    src="{{ asset('frontend-assets/img/icon/service/Social.png') }}" height="50"
                                    alt="Social Media Marketing">
                            </div>
                            <a href="{{ route('socialMedia') }}">
                                <div class="service-process_centent">
                                    <h5 class="sub-sec-title">Social Media Marketing</h5>
                                    <p class="sec-para">Targeting the correct audience at the right
                                        time, across all the social media platforms.</p>
                                </div>
                            </a>
                        </div>
                        <div class="service-process" data-aos="fade-left" data-aos-duration="2000">
                            <div class="align-content-center service-process_img"><img
                                    src="{{ asset('frontend-assets/img/icon/service/SEO.png') }}" height="50"
                                    alt="SEO">
                            </div>
                            <a href="{{ route('seo') }}">
                                <div class="service-process_centent">
                                    <h5 class="sub-sec-title">SEO </h5>
                                    <p class="sec-para">Ensuring visibility for the search engine,
                                        collaborative efforts that help in brand topping the search list.</p>
                                </div>
                            </a>
                        </div>
                        <div class="service-process" data-aos="fade-left" data-aos-duration="3000">
                            <div class="align-content-center service-process_img"><img
                                    src="{{ asset('frontend-assets/img/icon/service/Website.png') }}" height="50"
                                    alt="Website Development">
                            </div>
                            <a href="{{ route('website') }}">
                                <div class="service-process_centent">
                                    <h5 class="sub-sec-title">Website Development</h5>
                                    <p class="sec-para">Creating a face for the brand with seamless
                                        integration, that helps build a connect with your audience.</p>
                                </div>
                            </a>
                        </div>
                        <div class="service-process" data-aos="fade-left" data-aos-duration="4000">
                            <div class="align-content-center service-process_img"><img
                                    src="{{ asset('frontend-assets/img/icon/service/Digital.png') }}" height="50"
                                    alt="Digital Marketing">
                            </div>
                            <a href="{{ route('digitalMarketing') }}">
                                <div class="service-process_centent">
                                    <h5 class="sub-sec-title">Digital Marketing</h5>
                                    <p class="sec-para">71% prefer communicating through email. One of
                                        the best ways to personalize communication for your brand.</p>
                                </div>
                            </a>
                        </div>
                        <div class="service-process" data-aos="fade-left" data-aos-duration="5000">
                            <div class="align-content-center service-process_img"><img
                                    src="{{ asset('frontend-assets/img/icon/service/SEM.png') }}" height="50"
                                    alt="Performance Marketing">
                            </div>
                            <a href="{{ route('sem') }}">
                                <div class="service-process_centent">
                                    <h5 class="sub-sec-title">Performance Marketing</h5>
                                    <p class="sec-para">Ensuring visibility for the search engine,
                                        collaborative efforts that help in brand topping the search list.</p>
                                </div>
                            </a>
                        </div>
                        <div class="service-process" data-aos="fade-left" data-aos-duration="6000">
                            <div class="align-content-center service-process_img"><img
                                    src="{{ asset('frontend-assets/img/icon/service/content.png') }}" height="50"
                                    alt="Content Marketing">
                            </div>
                            <a href="{{ route('contentMarketing') }}">
                                <div class="service-process_centent">
                                    <h5 class="sub-sec-title">Content Marketing</h5>
                                    <p class="sec-para">Creating a face for the brand with seamless
                                        integration, that helps build a connect with your audience.</p>
                                </div>
                            </a>
                        </div>
                        {{-- <div class="service-process">
                                    <div class="align-content-center service-process_img"><img
                                            src="{ asset('frontend-assets/img/icon/service/Social.png') }}"
                        height="50" alt="">
                    </div>
                    <div class="service-process_centent">
                        <h5 class="service-process_title">Photography & Video Production</h5>
                        <p class="service-process_text">Creating a face for the brand with seamless
                            integration, that helps build a connect with your audience.</p>
                    </div>
                </div> --}}
            </div>
        </div>
        </div>
        </div>
    </section>


    <section class="space">
        <div class="container-fluid">
            <div class="row mb-35">
                <h2 class="h2 sec-title mb-md-5 mb-3 text-center">The Mighty <span class="text-blue">Exposure</span>
                </h2>
                <div class="swiper caseStudySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <picture>
                                <source media="(min-width: 768px)"
                                    srcset="https://www.sociomark.in/lp/assets/media/images/case-study/bannernw18.png">
                                <source media="(min-width: 768px)"
                                    srcset="https://www.sociomark.in/lp/assets/media/images/case-study/bannernw18.png">
                                <source
                                    srcset="https://www.sociomark.in/lp/assets/media/images/case-study/banner-nw18.png">
                                <img loading="lazy"
                                    src="https://www.sociomark.in/lp/assets/media/images/case-study/banner-nw18.png"
                                    alt="exposure" class="w-100 img-border">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture>
                                <source media="(min-width: 768px)"
                                    srcset="https://www.sociomark.in/lp/assets/media/images/case-study/bannerdesk_nodwin.png">
                                <source media="(min-width: 768px)"
                                    srcset="https://www.sociomark.in/lp/assets/media/images/case-study/bannerdesk_nodwin.png">
                                <source
                                    srcset="https://www.sociomark.in/lp/assets/media/images/case-study/bannermob_nodwin.png">
                                <img loading="lazy"
                                    src="https://www.sociomark.in/lp/assets/media/images/case-study/bannermob_nodwin.png"
                                    alt="exposure" class="w-100 img-border">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture>
                                <source media="(min-width: 768px)"
                                    srcset="https://www.sociomark.in/lp/assets/media/images/case-study/bannerdesk_times_network.png">
                                <source media="(min-width: 768px)"
                                    srcset="https://www.sociomark.in/lp/assets/media/images/case-study/bannerdesk_times_network.png">
                                <source
                                    srcset="https://www.sociomark.in/lp/assets/media/images/case-study/bannermob_times_network.png">
                                <img loading="lazy"
                                    src="https://www.sociomark.in/lp/assets/media/images/case-study/bannermob_times_network.png"
                                    alt="exposure" class="w-100 img-border">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture>
                                <source media="(min-width: 768px)"
                                    srcset="https://www.sociomark.in/lp/assets/media/images/case-study/bannerdesk_shahenaz.png">
                                <source media="(min-width: 768px)"
                                    srcset="https://www.sociomark.in/lp/assets/media/images/case-study/bannerdesk_shahenaz.png">
                                <source
                                    srcset="https://www.sociomark.in/lp/assets/media/images/case-study/bannerdmob_shahenaz.png">
                                <img loading="lazy"
                                    src="https://www.sociomark.in/lp/assets/media/images/case-study/bannerdmob_shahenaz.png"
                                    alt="exposure" class="w-100 img-border">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture>
                                <source media="(min-width: 768px)"
                                    srcset="https://www.sociomark.in/lp/assets/media/images/case-study/bannerdesk_aha_homes.png">
                                <source media="(min-width: 768px)"
                                    srcset="https://www.sociomark.in/lp/assets/media/images/case-study/bannerdesk_aha_homes.png">
                                <source
                                    srcset="https://www.sociomark.in/lp/assets/media/images/case-study/bannermob_aha_homes.png">
                                <img loading="lazy"
                                    src="https://www.sociomark.in/lp/assets/media/images/case-study/bannermob_aha_homes.png"
                                    alt="exposure" class="w-100 img-border">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture>
                                <source media="(min-width: 768px)"
                                    srcset="https://www.sociomark.in/lp/assets/media/images/case-study/bannerdesk_ayushakti.png">
                                <source media="(min-width: 768px)"
                                    srcset="https://www.sociomark.in/lp/assets/media/images/case-study/bannerdesk_ayushakti.png">
                                <source
                                    srcset="https://www.sociomark.in/lp/assets/media/images/case-study/bannermob_ayushakti.png.png">
                                <img loading="lazy"
                                    src="https://www.sociomark.in/lp/assets/media/images/case-study/bannermob_ayushakti.png.png"
                                    alt="exposure" class="w-100 img-border">
                            </picture>
                        </div>
                    </div>
                    <!--<div class="swiper-button-next"></div>-->
                    <!--<div class="swiper-button-prev"></div>-->
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Link Swiper's CSS -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
                <!-- Swiper JS -->
                <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                <script>
                    var swiper = new Swiper(".caseStudySwiper", {
                        spaceBetween: 30,
                        centeredSlides: true,
                        slidesPerView: 1.3,
                        loop: true,
                        autoplay: {
                            delay: 2500,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: ".caseStudySwiper .swiper-pagination",
                            clickable: true,
                        },
                        // 	navigation: {
                        // 		nextEl: ".caseStudySwiper .swiper-button-next",
                        // 		prevEl: ".caseStudySwiper .swiper-button-prev",
                        // 	},
                    });
                </script>
            </div>
        </div>
    </section>

    <section class="d-none">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-lg-12">
                    <div class="page-single">
                        <div class="row align-items-center">
                            {{-- <div class="row gy-4 gx-40"> --}}
                            <div class="col-xl-7">
                                <h4 class="mb-20"><b>How We Can Help</b></h4>
                                <p class="mt-n1 mb-4 blog-text">Our designers translate your brand identity
                                    into
                                    a
                                    captivating visual language, ensuring consistency across all
                                    touchpoints.
                                </p>
                                <div class="checklist style4 mb-20">
                                    <ul>
                                        <li><i class="fa-solid fa-shield-check"></i>Increased User
                                            Engagement &
                                            Conversion Rates</li>
                                        <li><i class="fa-solid fa-shield-check"></i>Enhanced Brand
                                            Perception
                                        </li>
                                        <li><i class="fa-solid fa-shield-check"></i>Improved Global Reach &
                                            Accessibility</li>
                                        <li><i class="fa-solid fa-shield-check"></i>Reduced Development
                                            Costs
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="page-img global-img" data-aos="fade-left" data-aos-duration="3000">
                                    <img class="w-100" src="https://placehold.co/600x600" alt="service">
                                </div>
                            </div>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services-tab" class="d-none">
        <div class="container-fluid">
            <div class="row">
                <h2 class="h2 mt-35 page-title mb-20 text-center text-uppercase"><span class="text-blue">International
                        SEO
                        Service</span></h2>
                <div class="d-lg-flex align-items-center">
                    <div class="col-lg-3 col-12">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active p-3" id="v-pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-home" type="button" role="tab"
                                aria-controls="v-pills-home" aria-selected="true">Education institutions</button>
                            <button class="nav-link p-3" id="v-pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                aria-controls="v-pills-profile" aria-selected="false">Healthcare industry</button>
                            <button class="nav-link p-3" id="v-pills-messages-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-messages" type="button" role="tab"
                                aria-controls="v-pills-messages" aria-selected="false">Technology companies</button>
                            <button class="nav-link p-3" id="v-pills-settings-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-settings" type="button" role="tab"
                                aria-controls="v-pills-settings" aria-selected="false">Publication</button>
                            <button class="nav-link p-3" id="v-pills-settings-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-settings" type="button" role="tab"
                                aria-controls="v-pills-settings" aria-selected="false">E-commerce businesses</button>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab" tabindex="0">
                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-12 text-center">
                                        <div class="page-img">
                                            <img class="w-50" src="https://placehold.co/400x800" alt="service">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="page-img">
                                            <img class="w-50" src="https://placehold.co/400x800" alt="service">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <h4 class="mb-20 text-blue"><b>How We Can Help</b></h4>
                                        <p class="mt-n1 mb-4 blog-text">Our designers translate your brand identity
                                            into
                                            a
                                            captivating visual language, ensuring consistency across all
                                            touchpoints.
                                        </p>
                                        <div class="checklist style4 mb-20">
                                            <ul>
                                                <li><i class="fa-solid fa-shield-check"></i>Increased User
                                                    Engagement &
                                                    Conversion Rates</li>
                                                <li><i class="fa-solid fa-shield-check"></i>Enhanced Brand
                                                    Perception
                                                </li>
                                                <li><i class="fa-solid fa-shield-check"></i>Improved Global Reach &
                                                    Accessibility</li>
                                                <li><i class="fa-solid fa-shield-check"></i>Reduced Development
                                                    Costs
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab" tabindex="0">

                                <div class="row align-items-center">
                                    <div class="col-lg-4 col-12 text-center">
                                        <div class="page-img" data-aos="fade-right" data-aos-duration="5000">
                                            <img class="w-50" src="https://placehold.co/400x800" alt="service">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <h4 class="mb-20 text-blue"><b>How We Can Help</b></h4>
                                        <p class="mt-n1 mb-4 blog-text">Our designers translate your brand identity
                                            into
                                            a
                                            captivating visual language, ensuring consistency across all
                                            touchpoints.
                                        </p>
                                        <div class="checklist style4 mb-20">
                                            <ul>
                                                <li><i class="fa-solid fa-shield-check"></i>Increased User
                                                    Engagement &
                                                    Conversion Rates</li>
                                                <li><i class="fa-solid fa-shield-check"></i>Enhanced Brand
                                                    Perception
                                                </li>
                                                <li><i class="fa-solid fa-shield-check"></i>Improved Global Reach &
                                                    Accessibility</li>
                                                <li><i class="fa-solid fa-shield-check"></i>Reduced Development
                                                    Costs
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-12">
                                        <div class="page-img" data-aos="fade-left" data-aos-duration="3000">
                                            <img class="w-50" src="https://placehold.co/400x800" alt="service">
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="d-none">
        <div class="container">
            <h2 class="h2 mt-35 page-title mb-20 text-center text-uppercase"><span class="text-blue">Create More
                    Awareness</span></h2>

            <div id="timeline">
                <div class="timeline-item">
                    <div class="timeline-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="21px" height="20px"
                            viewBox="0 0 21 20" enable-background="new 0 0 21 20" xml:space="preserve">
                            <path fill="#FFFFFF"
                                d="M19.998,6.766l-5.759-0.544c-0.362-0.032-0.676-0.264-0.822-0.61l-2.064-4.999
                                                                                    c-0.329-0.825-1.5-0.825-1.83,0L7.476,5.611c-0.132,0.346-0.462,0.578-0.824,0.61L0.894,6.766C0.035,6.848-0.312,7.921,0.333,8.499
                                                                                    l4.338,3.811c0.279,0.246,0.395,0.609,0.314,0.975l-1.304,5.345c-0.199,0.842,0.708,1.534,1.468,1.089l4.801-2.822
                                                                                    c0.313-0.181,0.695-0.181,1.006,0l4.803,2.822c0.759,0.445,1.666-0.23,1.468-1.089l-1.288-5.345
                                                                                    c-0.081-0.365,0.035-0.729,0.313-0.975l4.34-3.811C21.219,7.921,20.855,6.848,19.998,6.766z" />
                        </svg>

                    </div>
                    <div class="timeline-content">
                        <h2>SOCIAL MEDIA MARKETING</h2>
                        <p>
                            Targeting the correct audience at the right time, across all the social media platforms.
                        </p>
                        <a href="#" class="btn">Know More</a>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="21px" height="20px"
                            viewBox="0 0 21 20" enable-background="new 0 0 21 20" xml:space="preserve">
                            <g>
                                <path fill="#FFFFFF"
                                    d="M17.92,3.065l-1.669-2.302c-0.336-0.464-0.87-0.75-1.479-0.755C14.732,0.008,7.653,0,7.653,0v5.6
                                                                                        c0,0.096-0.047,0.185-0.127,0.237c-0.081,0.052-0.181,0.06-0.268,0.02l-1.413-0.64C5.773,5.183,5.69,5.183,5.617,5.215l-1.489,0.65
                                                                                        c-0.087,0.038-0.19,0.029-0.271-0.023c-0.079-0.052-0.13-0.141-0.13-0.235V0H2.191C1.655,0,1.233,0.434,1.233,0.97
                                                                                        c0,0,0.025,15.952,0.031,15.993c0.084,0.509,0.379,0.962,0.811,1.242l2.334,1.528C4.671,19.905,4.974,20,5.286,20h10.307
                                                                                        c1.452,0,2.634-1.189,2.634-2.64V4.007C18.227,3.666,18.12,3.339,17.92,3.065z M16.42,17.36c0,0.464-0.361,0.833-0.827,0.833H5.341
                                                                                        l-1.675-1.089h10.341c0.537,0,0.953-0.44,0.953-0.979V2.039l1.459,2.027V17.36L16.42,17.36z" />
                            </g>
                        </svg>

                    </div>
                    <div class="timeline-content right">
                        <h2>SEO</h2>
                        <p>
                            Ensuring visibility for the search engine, collaborative efforts that help in brand topping
                            the search list.
                        </p>
                        <a href="#" class="btn">Know More</a>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="21px" height="20px"
                            viewBox="0 0 21 20" enable-background="new 0 0 21 20" xml:space="preserve">
                            <path fill="#FFFFFF"
                                d="M19.998,6.766l-5.759-0.544c-0.362-0.032-0.676-0.264-0.822-0.61l-2.064-4.999
                                                                                    c-0.329-0.825-1.5-0.825-1.83,0L7.476,5.611c-0.132,0.346-0.462,0.578-0.824,0.61L0.894,6.766C0.035,6.848-0.312,7.921,0.333,8.499
                                                                                    l4.338,3.811c0.279,0.246,0.395,0.609,0.314,0.975l-1.304,5.345c-0.199,0.842,0.708,1.534,1.468,1.089l4.801-2.822
                                                                                    c0.313-0.181,0.695-0.181,1.006,0l4.803,2.822c0.759,0.445,1.666-0.23,1.468-1.089l-1.288-5.345
                                                                                    c-0.081-0.365,0.035-0.729,0.313-0.975l4.34-3.811C21.219,7.921,20.855,6.848,19.998,6.766z" />
                        </svg>

                    </div>
                    <div class="timeline-content">
                        <h2>WEBSITE DEVELOPMENT</h2>
                        <p>
                            Creating a face for the brand with seamless integration, that helps build a connect with
                            your audience.
                        </p>
                        <a href="#" class="btn">Know More</a>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="21px" height="20px"
                            viewBox="0 0 21 20" enable-background="new 0 0 21 20" xml:space="preserve">
                            <g>
                                <path fill="#FFFFFF"
                                    d="M17.92,3.065l-1.669-2.302c-0.336-0.464-0.87-0.75-1.479-0.755C14.732,0.008,7.653,0,7.653,0v5.6
                                                                                        c0,0.096-0.047,0.185-0.127,0.237c-0.081,0.052-0.181,0.06-0.268,0.02l-1.413-0.64C5.773,5.183,5.69,5.183,5.617,5.215l-1.489,0.65
                                                                                        c-0.087,0.038-0.19,0.029-0.271-0.023c-0.079-0.052-0.13-0.141-0.13-0.235V0H2.191C1.655,0,1.233,0.434,1.233,0.97
                                                                                        c0,0,0.025,15.952,0.031,15.993c0.084,0.509,0.379,0.962,0.811,1.242l2.334,1.528C4.671,19.905,4.974,20,5.286,20h10.307
                                                                                        c1.452,0,2.634-1.189,2.634-2.64V4.007C18.227,3.666,18.12,3.339,17.92,3.065z M16.42,17.36c0,0.464-0.361,0.833-0.827,0.833H5.341
                                                                                        l-1.675-1.089h10.341c0.537,0,0.953-0.44,0.953-0.979V2.039l1.459,2.027V17.36L16.42,17.36z" />
                            </g>
                        </svg>

                    </div>
                    <div class="timeline-content right">
                        <h2>DIGITAL MARKETING</h2>
                        <p>
                            71% prefer communicating through email. One of the best ways to personalize communication
                            for your brand.
                        </p>
                        <a href="#" class="btn">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('Frontend/partial/servicesCommon')

    <script>
        var swiper = new Swiper(".servicesSwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            slidesPerView: 1,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".servicesSwiper .swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                350: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    // grid: {
                    //     rows: 2,
                    // },
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                    // grid: {
                    //     rows: 2,
                    // },
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                    // grid: {
                    //     rows: 2,
                    // },
                },
                1400: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    // grid: {
                    //     rows: 2,
                    // },
                },
                1800: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    // grid: {
                    //     rows: 2,
                    // },
                },
            },
            // 	navigation: {
            // 		nextEl: ".caseStudySwiper .swiper-button-next",
            // 		prevEl: ".caseStudySwiper .swiper-button-prev",
            // 	},
        });
        lightGallery(document.getElementById('servicesPages'), {
            plugins: [lgZoom, lgThumbnail],
            speed: 500,
        });
    </script>

    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <style>
        /* service */

        .service-process-wrap .sec-para {
            font-size: 16px;
        }

        .service-process {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: color 0.3s ease 0.2s;
            border: none;
        }

        /* service :end */

        /* Gallery Section */
        .gallery-thumb {
            overflow: hidden;
            border-radius: 1rem;
            box-shadow: 0 0 0 6px #031952, 0 0 0 9px #cfcfcf;
        }

        .gallery-thumb img {
            height: 100%;
            width: 100%;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .gallery_title {
            font-size: 0.9rem;
            width: 100%;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .gallery a {
            width: calc(250px - 0.5rem);
            display: block;
            overflow: hidden;
            border-radius: 1rem;
            filter: brightness(0.9);
        }

        .gallery a:hover {
            filter: brightness(1);
        }

        .gallery a img {
            width: 100%;
            height: auto;
        }

        .gallery-masonry {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
        }

        .gallery-masonry a {
            margin-bottom: 1rem;
        }


        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #106c97;
        }

        header:after,
        #timeline .timeline-item:after,
        header:before,
        #timeline .timeline-item:before {
            content: '';
            display: block;
            width: 100%;
            clear: both;
        }

        img {
            max-width: 100%;
        }

        a {
            text-decoration: none;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
        }

        .project-name {
            text-align: center;
            padding: 10px 0;
        }



        #timeline {
            width: 100%;
            margin: 30px auto;
            position: relative;
            padding: 0 10px;
            -webkit-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            -ms-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        #timeline:before {
            content: "";
            width: 2px;
            height: 100%;
            background: #ee4d4d;
            left: 50%;
            top: 0;
            position: absolute;
        }

        #timeline:after {
            content: "";
            clear: both;
            display: table;
            width: 100%;
        }

        #timeline .timeline-item {
            margin-bottom: 30px;
            position: relative;
        }

        #timeline .timeline-item .timeline-icon {
            background: #ff900b;
            width: 50px;
            height: 50px;
            position: absolute;
            top: 0;
            left: 50%;
            overflow: hidden;
            margin-left: -23px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            border-radius: 50%;
        }

        #timeline .timeline-item .timeline-icon svg {
            position: relative;
            top: 10px;
            left: 14px;
        }

        #timeline .timeline-item .timeline-content {
            width: 45%;
            background: #fff;
            padding: 20px;
            -webkit-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 3px 0 rgba(0, 0, 0, 0.1);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            border-radius: 5px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        #timeline .timeline-item .timeline-content h2 {
            padding: 15px;
            background: #106c97;
            color: #fff;
            margin: -20px -20px 0 -20px;
            font-weight: 300;
            -webkit-border-radius: 3px 3px 0 0;
            -moz-border-radius: 3px 3px 0 0;
            -ms-border-radius: 3px 3px 0 0;
            border-radius: 3px 3px 0 0;
        }

        #timeline .timeline-item .timeline-content:before {
            content: '';
            position: absolute;
            left: 45%;
            top: 20px;
            width: 0;
            height: 0;
            border-top: 7px solid transparent;
            border-bottom: 7px solid transparent;
            border-left: 7px solid #ee4d4d;
        }

        #timeline .timeline-item .timeline-content.right {
            float: right;
        }

        #timeline .timeline-item .timeline-content.right:before {
            content: '';
            right: 45%;
            left: inherit;
            border-left: 0;
            border-right: 7px solid #ee4d4d;
        }

        .btn {
            padding: 5px 15px;
            text-decoration: none;
            background: transparent;
            border: 2px solid #ff900b;
            color: #050505;
            display: inline-block;
            position: relative;
            text-transform: uppercase;
            font-size: 12px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            border-radius: 5px;
            -webkit-transition: background 0.3s ease;
            -moz-transition: background 0.3s ease;
            -ms-transition: background 0.3s ease;
            transition: background 0.3s ease;
            -webkit-box-shadow: 2px 2px 0 #f27c7c;
            -moz-box-shadow: 2px 2px 0 #f27c7c;
            -ms-box-shadow: 2px 2px 0 #f27c7c;
            box-shadow: 2px 2px 0 #f27c7c;
        }

        .btn:hover {
            box-shadow: none;
            top: 2px;
            left: 2px;
            -webkit-box-shadow: 2px 2px 0 transparent;
            -moz-box-shadow: 2px 2px 0 transparent;
            -ms-box-shadow: 2px 2px 0 transparent;
            box-shadow: 2px 2px 0 transparent;
        }

        @media screen and (max-width: 768px) {
            #timeline {
                margin: 30px;
                padding: 0px;
                width: 90%;
            }

            #timeline:before {
                left: 0;
            }

            #timeline .timeline-item .timeline-content {
                width: 90%;
                float: right;
            }

            #timeline .timeline-item .timeline-content:before,
            #timeline .timeline-item .timeline-content.right:before {
                left: 10%;
                margin-left: -6px;
                border-left: 0;
                border-right: 7px solid #ee4d4d;
            }

            #timeline .timeline-item .timeline-icon {
                left: 0;
            }
        }
    </style>

</main>
@endsection