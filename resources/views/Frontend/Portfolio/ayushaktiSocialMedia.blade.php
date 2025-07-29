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
                    {{-- <div class="swiper-slide">
                            <div class="col-12">
                                <img src="{{ asset('frontend-assets/img/work/ayushakti/ayushakti.jpg') }}" alt="ayushakti"
                    srcset="" class="w-100">
                </div>
            </div> --}}
            <div class="swiper-slide">
                <div class="col-12">
                    <img src="{{ asset('frontend-assets/img/work/ayushakti/ayu1.jpeg') }}" alt="ayushakti"
                        srcset="" class="w-100">
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('frontend-assets/img/work/ayushakti/ayu2.jpeg') }}" alt="ayushakti"
                    srcset="" class="w-100">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('frontend-assets/img/work/ayushakti/ayu3.jpeg') }}" alt="ayushakti"
                    srcset="" class="w-100">
            </div>
        </div>
        <!--<div class="swiper-button-next"></div>-->
        <!--<div class="swiper-button-prev"></div>-->
        {{-- <div class="swiper-pagination"></div> --}}
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
<style>
    .porfolio-text b {
        font-weight: 600;
    }

    .porfolio-text h2 {
        font-weight: 600;
    }

    @media only screen and (min-width: 767px) {
        .section-margin {
            margin-top: 120px;
            margin-bottom: 120px;
        }
    }

    @media only screen and (max-width: 767px) {
        .port-bann {
            margin-top: 68px;
        }
    }
</style>
<section class="porfolio-text section-margin">
    <div class="container">
        <div class="row">
            <h1 class="text-blue sec-title mb-20">Ayushakti Ayurved</h1>
            <p class="sec-para"><b>About the Brand:</b>
                Ayushakti is a global leader in providing ayurvedic healthcareservices
                and holistic wellness solutions. Its authentic powerful herbal treatments have successfully helped lakhs
                of people, around 108 countries for the past 32 years.</p>
            <p class="sec-para"><b>Services Offered:</b> </p>
            <ul>
                <li class="sec-para">Website Development</li>
                <li class="sec-para">Social Media Marketing</li>
                <li class="sec-para">Performance Marketing</li>
                <li class="sec-para">SEO</li>
                <li class="sec-para">Shoots</li>
                <li class="sec-para">Content Curation</li>
            </ul>
            @include('Frontend.partial.socialMediaLinkInPortfolio')
            <div class="mt-3">
                <a href="{{ route('ayushakti') }}" class="th-btn th-icon">READ OUR CASE STUDY</a>
            </div>
        </div>
    </div>
</section>

<section class="port-bann section-margin">
    <div class="container-fluid">
        <div class="row mt-60">
            <h2 class=" sec-title text-center">The Mighty <span class="text-blue">Creative</span></h2>
            </h2>
            <div class="swiper creativeSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/ayushkati/1.png') }}" alt="ayushakti Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/ayushkati/2.png') }}" alt="ayushakti Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/ayushkati/3.png') }}" alt="ayushakti Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/ayushkati/4.png') }}" alt="ayushakti Creative"
                            srcset="" class="w-100">
                    </div>
                </div>
                <!--<div class="swiper-button-next"></div>-->
                <!--<div class="swiper-button-prev"></div>-->
                {{-- <div class="swiper-pagination"></div> --}}
            </div>
            <div class="header-button mt-3 justify-content-center">
                <a href="{{ route('ayushakti') }}" class="th-btn th-icon">VIEW OUR CASE STUDY</a>
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
                <a href="{{ route('social_media', ['client'=>'ayu-health']) }}">
                    <img src="{{ asset('frontend-assets/img/work/ayu health/ayu health.jpg') }}" alt="ayuhealth" srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>Ayuhealth</b></p>
                </a>
            </div>
            <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'stemrx-bioscience']) }}">
                    <img src="{{ asset('frontend-assets/img/work/banner/stemrx.jpg') }}" alt="stemx bioscience" srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>StemRx</b></p>
                </a>
            </div>
            <div class="header-button mt-3">
                <a href="{{ route('ayushakti') }}" class="th-btn th-icon">View Our Porfolio</a>
            </div>

        </div>
    </div>
</section> -->


@endsection