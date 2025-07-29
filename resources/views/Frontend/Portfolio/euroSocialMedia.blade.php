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
                            <img src="{{ asset('frontend-assets/img/work/euro/Euro.jpg') }}" alt="euro"
                                srcset="" class="w-100">
                        </div>
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
                    // 	navigation: {
                    // 		nextEl: ".caseStudySwiper .swiper-button-next",
                    // 		prevEl: ".caseStudySwiper .swiper-button-prev",
                    // 	},
                });
            </script>
        </div>
    </div>
</section>

<section class="porfolio-text overflow-hidden space ">
    <div class="container">
        <div class="row">
            <h1 class="text-blue sec-title mb-20">Euro</h1>
            <p class="sec-para"><b>About the Brand:</b> <br> Euro is a premium brand from the house of Rupa. It is quite a famous brand in India, know to redefine style and functionality in the <strong>innerwear segment.</strong> It is very well known for its designs and fabric. Euro offers products that blend fashion with everyday ease. From vests to trunks, each of the pieces is tailored for modern lifestyles. With a strong focus on <strong>comfort wear,</strong> the brand brings a fresh, confident attitude to daily essentials.
            </p>
            <p class="sec-para"><b>Services Offered:</b> </p>
            <ul>
                <li class="sec-para">Social media marketing</li>
                <li class="sec-para">Instagram Reels</li>
                <li class="sec-para">product shoots new</li>
            </ul>
            @include('Frontend.partial.socialMediaLinkInPortfolio')
            <div class="mt-3 d-none">
                <a href="#" class="th-btn th-icon">READ OUR CASE STUDY</a>
            </div>
        </div>
    </div>
</section>

<section class="port-bann overflow-hidden space bg-grey">
    <div class="container-fluid">
        <div class="row">
            <h2 class=" sec-title text-center">The Mighty <span class="text-blue">Creative</span></h2>
            </h2>
            <div class="swiper creativeSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/EURO/Basketball_2.jpg') }}" alt="euro creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/EURO/Chumbak_1.jpg') }}" alt="euro creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/EURO/Comfort redefine.jpg') }}" alt="euro creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/EURO/Kartik_2.jpg') }}" alt="euro creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/EURO/Light effect_Kartik.jpg') }}" alt="euro creative"
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
@include('Frontend.partial.portfolio.similarIndustry')
<!-- <section class="porfolio-text overflow-hidden space ">
    <div class="container">
        <div class="row">
            <h2 class="sec-title">Similar Industry,<br><span class="text-blue">We Worked On</span> </h2>

            <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'shahenaz']) }}">
                    <img src="{{ asset('frontend-assets/img/work/banner/Shahenaz.jpg') }}" alt="shahenaz" srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>Shahenaz</b></p>
                </a>
            </div>
            <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'sight-optiforecals']) }}">
                    <img src="{{ asset('frontend-assets/img/work/foresight-opticals/1.jpg') }}" alt="foresight opticals" srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>Foreesight Opticals</b></p>
                </a>
            </div>

        </div>
    </div>
</section> -->
@endsection