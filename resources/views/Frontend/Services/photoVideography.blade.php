@extends('Frontend.layout.app')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

@section('content')
<main id="seo-service">
    <div class="breadcumb-wrapper p-0" style="margin-top: 66px;">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/hero.png') }}"
                        alt="photo videography" srcset="" width="100%">
                </div>
            </div>
        </div>
    </div>

    <section class="overflow-hidden mb-md-5 md-2 pt-5" id="about-sec">
        <div class="container">
            <div class="row align-items-end justify-content-center">
                <div class="col-lg-9 col-12 d-flex justify-content-center align-items-center flex-column">
                    <div class="title-area mb-md-3 mb-2 mt-n1">
                        <h1 class="text-center fw-bold sec-title my-3" data-aos="zoom-in" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            The Best photography & videography agency that makes your <span class="text-blue"> every frame count </span>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-12 col-12 d-flex justify-content-center align-items-center flex-column">
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">We all have experienced it; emotions stay with us and not facts. Powerful visuals are an effective way to capture them. At Sociomark, we help brands excel in the language of visual communications through eye-catching and awe-inspiring videography and photography.
                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">Be it events, product shoots or building a brand from the very start, visual content is one of the main ingredients of the whole recipe. It is not just about looking good; it is about making them feel something through visual storytelling.
                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">Being a part of social media marketing, visuals are the medium that conveys the message to the audience and they ought to be creative and relatable. As a videography agency in Mumbai, we have worked with a diverse range of clients and delivered results for all their visual content needs. Be it crisp shots for a catalogue, a brand film, or a product shoot, our work is known to be remembered.
                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">So let us skip the stock footage and create something natural and real. Real people, real moments and eventually real results.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <style>
        .benefit-block:hover {
            border-left: 5px solid #106c97 !important;
        }

        .benefit-block:hover .sub-sec-title {
            color: #106c97 !important;
        }

        #benefits {
            max-height: 60vh;
        }
    </style>
    <section class="overflow-hidden space bg-grey " id="work-flow">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center">
                        <h2 class="fw-bold mb-5 sec-title" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            Our approach to framing
                            <span class="text-blue"> visual masterpieces</span>.
                        </h2>
                        {{-- <p class="sec-para">Here are a few of the SEO strategies that we as a Leading Digital Marketing
                                Agency in Mumbai
                                implement, so that the website that we build for our clients stand out from the rest. This
                                in turn gives them a major advantage over its competitors.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <!-- Left Side -->
                <div class="col-md-6 text-center">
                    <div class="circle-wrapper" data-aos="fade-right" data-aos-delay="200" data-tilt data-tilt-max="10">
                        <div class="circle" data-tilt data-tilt-max="10">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/storytelling.png') }}"
                                alt="Key" class="mt-3">
                        </div>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="col-md-6 mt-4 mt-md-0">
                    <div id="benefits">
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Knowing the brand</h4>
                            <p class="sec-para">The process begins by understanding the brand’s personality. So that the visuals resonate and feel like a part or an extension of the brand.
                            </p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Plan and prep before the shoot.</h4>
                            <p class="sec-para">The right light and the right location are invaluable. Our team does that in advance so that the shoots are smooth.
                            </p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Framing the moment</h4>
                            <p class="sec-para">Being a photography agency in India, we know that it’s not just about the presence but the authenticity that we put into it that makes brands stand out. That is what we look for in every frame and shot.</p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Right gear and the right crew</h4>
                            <p class="sec-para">To ensure high-quality output, we use the latest tools and technology. From drone shots to studio setups, along with a skilled team, we ensure that the outcome is the best.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-hidden space mb-md-5 mb-3" id="about-sec3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center">
                        <h2 class="fw-bold mb-5 sec-title" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            The Way We Craft Impactful Stories
                            <span class="text-blue"> Through the Lens</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="according-list-area">
                <div class="according-list hover-item item-active">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Uncovering Ideas</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/Services/Creative Discovery.png') }}"
                            alt="Creative Discovery" class="rounded-overflow">
                        <p class="sec-para text">Every visual begins with a brief behind it. We crack the brief in ways that feel unique and work towards bringing out the best from it.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Designing the Blueprint</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/Services/Concept Planning.png') }}"
                            alt="Concept Planning" class="rounded-overflow">
                        <p class="sec-para text">We plan everything in advance with clarity. Mood boards, short lists and requirements. So that there are no surprises or delays during the shoot.
                        </p>
                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Bringing Concepts to Life</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/Services/production with Purpose.png') }}"
                            alt="Production with Purpose" class="rounded-overflow">
                        <p class="sec-para text">Our team captures the moments with a proper plan and direction. Be it a short ad, a long form, a campaign or an event.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Shaping the Final Cut</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/Services/Post-Production Magic.png') }}"
                            alt="Post-Production Magic" class="rounded-overflow">
                        <p class="sec-para text">Correcting tones, fine-tuning frames, and perfecting the last details for a stunning result.
                        </p>

                    </div>
                </div>
            </div>


        </div>
        <!-- <div class="shape-mockup spin d-none d-lg-block" data-top="5%" data-right="2%"><img
                    src="assets/img/shape/shape-9.png" alt=""></div>
            <div class="shape-mockup d-none d-lg-block" data-top="2%" data-left="0%"><img
                    src="assets/img/shape/shape-13.png" alt=""></div>
            <div class="shape-mockup d-none d-lg-block" data-bottom="0%" data-left="50%"><img
                    src="assets/img/shape/shape-14.png" alt=""></div> -->

    </section>

    <section class="overflow-hidden space bg-grey" id="about-sec2">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-8" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="title-area mb-20">
                        <h2 class="sec-title mb-md-3 mb-2">
                            The reason brands count
                            <span class="text-blue">on our frames</span>
                        </h2>
                    </div>
                    <p class="sec-para d-none ">Our SEO strategies are designed to improve your website’s ranking on
                        major search engines like Google. By targeting high-intent keywords relevant to your business.
                    </p>
                    <div class="choose-feature-wrap">
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/icons/Vision.png') }}"
                                    width="60" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Relatable visual story</h4>
                                <p class="sec-para">We don’t just capture random shots just for the sake of doing it. Every frame has a purpose behind it, an energy, and an emotion that captures the true essence of the brand.</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/icons/storytelling.png') }}"
                                    width="60" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Storytelling with strategy</h4>
                                <p class="sec-para">The work that we put our has a voice behind it. The one that resonates with your brand and delivers the message to the target audience.</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/icons/brand.png') }}"
                                    width="60" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Consistency in quality</h4>
                                <p class="sec-para"> From the original concept/idea to the final cut, we ensure reliability with results that brands can count on, every time.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="choose-image">
                        <div class="tilt-active">
                            {{-- <img src="{{ asset('frontend-assets/img/Services-page/Why choose Seo.png') }}"
                            alt="Choose" class="w-100"> --}}
                            <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/Trust.png') }}"
                                alt="Choose" class="w-100">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="port-bann overflow-hidden space ">
        <div class="container">
            <div class="row">
                <h2 class=" sec-title text-center">Photography <span class="text-blue">Creative</span></h2>
                </h2>
                <div class="swiper creativeSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide p-4">
                            <blockquote
                                class="instagram-media"
                                data-instgrm-permalink="https://www.instagram.com/reel/DDhX55BgFgF/?utm_source=ig_embed&amp;utm_campaign=loading"
                                data-instgrm-version="14"
                                style="background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin:1px;  width:100%; padding:0;  ">
                            </blockquote>

                            <script async src="//www.instagram.com/embed.js"></script>


                        </div>
 
                        <div class="swiper-slide p-4">
                            <blockquote
                                class="instagram-media"
                                data-instgrm-permalink="https://www.instagram.com/reel/DHGFv0wy32I/?utm_source=ig_embed&amp;utm_campaign=loading"
                                data-instgrm-version="14"
                                style="background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); width:100%; margin:1px;  padding:0;">
                            </blockquote>

                            <script async src="//www.instagram.com/embed.js"></script>


                        </div>
                        <div class="swiper-slide p-4">
                            <blockquote
                                class="instagram-media"
                                data-instgrm-permalink="https://www.instagram.com/reel/DIWhZbposlv/?utm_source=ig_embed&amp;utm_campaign=loading"
                                data-instgrm-version="14"
                                style="background:#FFF; border:0; border-radius:3px; box-shadow:none; margin:1px;padding:0; width:100%;">
                            </blockquote>

                            <script async src="//www.instagram.com/embed.js"></script>


                        </div>
                        <div class="swiper-slide p-4">
                            <blockquote
                                class="instagram-media"
                                data-instgrm-permalink="https://www.instagram.com/reel/DKrl9nPyMVr/?utm_source=ig_embed&amp;utm_campaign=loading"
                                data-instgrm-version="14"
                                style="background:#FFF; border:0; border-radius:8px; box-shadow:none; margin:0 auto; width:100%; padding:0;">
                            </blockquote>

                            <script async src="//www.instagram.com/embed.js"></script>


                        </div>
                        <div class="swiper-slide p-4">
                            <blockquote
                                class="instagram-media"
                                data-instgrm-permalink="https://www.instagram.com/reel/DL4q8wPM9Yc/?utm_source=ig_embed&amp;utm_campaign=loading"
                                data-instgrm-version="14"
                                style="background:#FFF; border:0; border-radius:8px; box-shadow:none; margin:0 auto;  padding:0; width:100%;">
                            </blockquote>

                            <script async src="//www.instagram.com/embed.js"></script>


                        </div>
                        <div class="swiper-slide p-4">
                            <blockquote
                                class="instagram-media"
                                data-instgrm-permalink="https://www.instagram.com/reel/DMk6fhPS0q9/?utm_source=ig_embed&amp;utm_campaign=loading"
                                data-instgrm-version="14"
                                style="background:#FFF; border:0; border-radius:8px; box-shadow:none; margin:0 auto;  padding:0; width:100%;">
                            </blockquote>

                            <script async src="//www.instagram.com/embed.js"></script>

                        </div>
                        <div class="swiper-slide p-4">
                            <blockquote
                                class="instagram-media"
                                data-instgrm-permalink="https://www.instagram.com/reel/DNQV-QsSMCq/?utm_source=ig_embed&amp;utm_campaign=loading"
                                data-instgrm-version="14"
                                style="background:#FFF; border:0; border-radius:8px; box-shadow:none; margin:0 auto; padding:0; width:100%;">
                            </blockquote>

                            <script async src="//www.instagram.com/embed.js"></script>

                        </div>
                    </div>
                    <!--<div class="swiper-button-next"></div>-->
                    <!--<div class="swiper-button-prev"></div>-->
                    {{-- <div class="swiper-pagination"></div> --}}
                </div>

                <script>
                    var swiper = new Swiper(".creativeSwiper", {
                        spaceBetween: 30,
                        centeredSlides: true,
                        slidesPerView: 1,
                        loop: true,
                        autoplay: {
                            delay: 2500,
                            disableOnInteraction: false,
                        },
                        breakpoints: {
                            375: {
                                slidesPerView: 1,
                                spaceBetween: 20,
                            },
                            768: {
                                slidesPerView: 2,
                                spaceBetween: 40,
                            },
                            1024: {
                                slidesPerView: 3,
                                spaceBetween: 50,
                            },
                        },
                        pagination: {
                            el: ".creativeSwiper .swiper-pagination",
                            clickable: true,
                        },
                    });
                </script>
            </div>
        </div>
    </section>
    <div class="space-extra2-bottom">
        <div class="container">
            <div class="row text-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">1.2</span>B<span
                                class="plus">+</span>
                        </h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Video Views</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">70</span><span
                                class="plus">+</span>
                        </h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Events Covered</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">25</span><span
                                class="plus">+</span>
                        </h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Product Shoot</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">30</span><span
                                class="plus">+</span></h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Happy Customers</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

            </div>
        </div>
    </div>

    <section class="overflow-hidden space bg-grey" id="Features">
        <div class="container">
            <!-- Header Text -->
            <h2 class="fw-bold mb-5 sec-title text-center" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                What’s Included in Our <span class="text-blue"> Photography& Videography Package</span>
            </h2>
            <!-- Feature Icons Row 1 -->
            <div class="row justify-content-evenly mt-5">
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/icons/Product Shoots_.png') }}"
                            alt="One-Click Reports" class="feature-icon">
                    </div>

                    <div class="sub-sec-title">Product Shoots </div>
                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/icons/Event.png') }}"
                            alt="Traffic Performance" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Event Coverages</div>

                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/icons/Model Shoots_.png') }}"
                            alt="CRM Module" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Model Shoots</div>

                </div>
            </div>

            <!-- Feature Icons Row 2 -->
            <div class="row justify-content-evenly mt-3 mt-md-5">
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/icons/Lives_.png') }}"
                            alt="Keyword Performance" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Lives </div>

                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/icons/Podcast.png') }}"
                            alt="Marketing Activities" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Podcasts </div>

                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/icons/Walkthrough Videos.png') }}"
                            alt="Leads Management" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">
                        -Walkthrough Videos</div>

                </div>
            </div>

            <!-- Dashboard Images -->
            <div class="mt-5" data-aos="zoom-in" data-tilt data-tilt-max="10" data-aos-delay="100"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <img src="{{ asset('frontend-assets/img/ServicePages/Photography and Video/Package.png') }}"
                    alt="Dashboard Screenshot" class="dashboard-img rounded-overflow">
            </div>
        </div>
    </section>

    @include('Frontend.partial.clientList')
    {{-- Testimonials --}}


    <div class="overflow-hidden space" id="about-sec6">
        <div class="container">
            <div class="title-area text-center mb-25">
                <!-- <h2 class="sec-title">Frequently Asked Questions</h2> -->
                <h2 class="fw-bold sec-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    Frequently Asked <span class="text-blue"> Questions</span>
                </h2>
            </div>
            <div class="row justify-content-center align-items-center mt-5">
                {{-- <div class="col-xl-5">
                    <div class="me-xl-5 pe-xl-3">
                        <div class="title-area mb-30 text-center text-xl-start">
                            <img src="https://www.gbim.com/about-us/sm_faq.png" alt="" data-aos="zoom-in"
                                data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        </div>

                    </div>
                </div> --}}
                <div class="col-xl-12 mt-35 mt-xl-0 h-auto" id="faqAccordion">
                    <div class="accordion-area accordion">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="false"
                                    aria-controls="collapse-1">What is photography marketing?
                                </button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Photography marketing involves promoting your photography
                                        services to attract and engage clients. It encompasses a range of activities,
                                        from showcasing your portfolio and using social media marketing to networking
                                        and implementing targeted advertising.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">What
                                    is 3D photography?
                                </button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">3D photography is a method of capturing images that
                                        simulate depth, making them appear three-dimensional. It usually involves
                                        combining two slightly offset photos to mimic human binocular vision.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="false"
                                    aria-controls="collapse-3">What are the four main types of photographs?
                                </button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">The most popular types of photography are portrait,
                                        landscape, long exposure, and macro photography.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">How
                                    does photography work?</button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Photography works by capturing light through a camera lens
                                        onto a light-sensitive surface like film or a digital sensor. The amount and
                                        focus of light determine how the image is recorded.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-6" aria-expanded="false"
                                    aria-controls="collapse-6">What is photography used for?
                                </button>
                            </div>
                            <div id="collapse-6" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Photography is used to capture moments, tell stories,
                                        document events, promote products, express creativity, and communicate ideas in
                                        fields like art, journalism, advertising, and science.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-6" aria-expanded="false"
                                    aria-controls="collapse-6">What are the benefits of photography?
                                </button>
                            </div>
                            <div id="collapse-6" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Photography is a visual art that captures moments,
                                        emotions, and stories through images. Benefits of photography extend far beyond
                                        mere documentation. The practice allows for self-expression, preserves memories,
                                        fosters creativity, and serves as a powerful communication tool.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('Frontend.partial.blog')


    @include('Frontend/partial/contactUs')
</main>
@endsection

@push('scripts')
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            // when window width is >= 0px
            0: {
                slidesPerView: 1,
            },
            // when window width is >= 768px
            768: {
                slidesPerView: 2,
            },
            // when window width is >= 992px
            992: {
                slidesPerView: 3,
            }
        }
    });
    // services tab
    const tabTriggers = document.querySelectorAll('[data-bs-toggle="pill"]');

    tabTriggers.forEach(trigger => {
        trigger.addEventListener('shown.bs.tab', (event) => {
            const targetPaneId = event.target.getAttribute('data-bs-target');
            const targetPane = document.querySelector(targetPaneId);

            // Animate text content
            const textCols = targetPane.querySelectorAll('.col-lg-6.col-12.side-padding-mbl');
            textCols.forEach(col => {
                col.classList.remove('animate-slide-in-right');
                void col.offsetWidth;
                col.classList.add('animate-slide-in-right');
            });

            // Animate images
            const images = targetPane.querySelectorAll('.page-img img');
            if (images.length === 1) {
                images[0].classList.remove('animate-zoom-in');
                void images[0].offsetWidth;
                images[0].classList.add('animate-zoom-in');
            } else if (images.length === 2) {
                images[0].classList.remove('animate-slide-in-left');
                images[1].classList.remove('animate-slide-in-right');
                void images[0].offsetWidth; // force reflow
                void images[1].offsetWidth;
                images[0].classList.add('animate-slide-in-left');
                images[1].classList.add('animate-slide-in-right');
            }
        });
    });
    // services tab end
</script>
@endpush