@extends('Frontend.layout.app')
@section('content')
    <section class="port-bann">
        <div class="container-fluid">
            <div class="row mt-60">
                {{-- <h2 class="h2 page-title mb-20 text-center text-uppercase">The <span class="text-blue">Mighty
                    Exposure</span> --}}
                </h2>
                <div class="swiper caseStudySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <div class="col-12">
                                <img src="{{ asset('frontend-assets/img/work/grill-box/grill1.jpeg') }}" alt="grill box"
                                    srcset="" class="w-100">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/work/grill-box/grill2.jpeg') }}" alt="grill box"
                                srcset="" class="w-100">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/work/grill-box/grill3.jpeg') }}" alt="grill box"
                                srcset="" class="w-100">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/work/grill-box/4.jpg') }}" alt="grill box" srcset=""
                                class="w-100">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/work/grill-box/grill5.jpeg') }}" alt="grill box"
                                srcset="" class="w-100">
                        </div>
                    </div>
                </div>
                <!-- Link Swiper's CSS -->
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
                <!-- Swiper JS -->
                <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                <script>
                    var swiper = new Swiper(".caseStudySwiper", {
                        spaceBetween: 30,
                        centeredSlides: true,
                        slidesPerView: 1,
                        loop: true,
                        autoplay: {
                            delay: 2500,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: ".caseStudySwiper .swiper-pagination",
                            clickable: true,
                        },

                    });
                </script>
            </div>
        </div>
    </section>

    <section class="porfolio-text overflow-hidden space ">
        <div class="container">
            <div class="row">
                <h1 class="text-blue sec-title mb-20">GrillBox Restaurant</h1>
                <p class="sec-para"><b>About the Brand:</b> </p>
                <p class="sec-para">
                    GrillBox is a standout name in the Restaurant sector, offering an elevated take on Experiential dining.
                    Known for its unlimited BBQ and grand buffet spreads, GrillBox invites guests on a flavourful journey
                    complete with live grills, diverse cuisines, and indulgent desserts. Each dish is made using fresh
                    ingredients and authentic recipes, crafted to create memorable dining moments. Whether it’s a
                    celebration or a casual outing, GrillBox turns every meal into a feast worth sharing.
                </p>
                {{-- <p class="sec-para"><b>About the Brand:</b> Grill Box is the place to head to when you want to indulge your taste buds with some good Barbeque. It’s styled in a forest/cave theme and is absolutely fun. It is a celebration of traditional charcoal & fire-based cooking with some incredible ingredients. Their menu consists of a huge variety of Vegetarian and Non-Vegetarian dishes consisting of Starters, Soups, Salads, Main Course, Fruits and Desserts.</p> --}}
                <p class="sec-para"><b>Services Offered:</b> Complete Marketing Strategy (Online + Offline), Social Media
                    Management, ORM, Content Writing, In store branding includes - Flyers, Danglers.</p>
                @include('Frontend.partial.socialMediaLinkInPortfolio')

            </div>
        </div>
    </section>
    <section class="port-bann overflow-hidden space ">
        <div class="container-fluid">
            <div class="row">
                <h2 class=" sec-title text-center">The Mighty <span class="text-blue">Creative</span></h2>
                </h2>
                <div class="swiper creativeSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/portfolio/grillbox/1.png') }}" alt="grill box Creative"
                                srcset="" class="w-100">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/portfolio/grillbox/2.png') }}" alt="grill box Creative"
                                srcset="" class="w-100">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('frontend-assets/img/portfolio/grillbox/3.png') }}" alt="grill box Creative"
                                srcset="" class="w-100">
                        </div>

                    </div>
                    <!--<div class="swiper-button-next"></div>-->
                    <!--<div class="swiper-button-prev"></div>-->
                    {{-- <div class="swiper-pagination"></div> --}}
                </div>

                <script>
                    var swiper = new Swiper(".creativeSwiper", {
                        spaceBetween: 30,
                        // centeredSlides: true,
                        slidesPerView: 1,
                        loop: true,
                        // autoplay: {
                        //     delay: 2500,
                        //     disableOnInteraction: false,
                        // },
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
@include('Frontend.partial.portfolio.similarIndustry')
    <!-- <section class="porfolio-text overflow-hidden space ">
        <div class="container">
            <div class="row">
                <h2 class="sec-title">Similar Industry,<br><span class="text-blue">We Worked On</span> </h2>

                <div class="col lg-4 col-md-4 col-12">
                    <a href="{{ route('social_media', ['client' => 'repute']) }}">
                        <img src="{{ asset('frontend-assets/img/work/banner/repute.jpg') }}" alt="repute" srcset=""
                            class="w-100">
                        <p class="sec-para text-center text-blue mt-2"><b>Repute</b></p>
                    </a>
                </div>
                <div class="col lg-4 col-md-4 col-12">
                    <a href="{{ route('social_media', ['client' => 'jivana']) }}">
                        <img src="{{ asset('frontend-assets/img/work/jivana/Jivana.jpg') }}" alt="jivana" srcset=""
                            class="w-100">
                        <p class="sec-para text-center text-blue mt-2"><b>Jivana</b></p>
                    </a>
                </div>

            </div>
        </div>
    </section> -->
@endsection
