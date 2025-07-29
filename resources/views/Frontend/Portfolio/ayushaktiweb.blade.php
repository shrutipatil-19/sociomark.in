@extends('Frontend.layout.app')
@section('content')
<section class="port-bann">
    <div class="container-fluid p-0">
        <div class="row mt-60">
            <div class="swiper caseStudySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="col-12">
                            <img src="{{ asset('frontend-assets/img/work/banner/Cyberpower.jpg') }}" alt="ayushakti"
                                srcset="" class="w-100">
                        </div>
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
            <p class="sec-para"><b>About the Brand:</b> </p>
            <p>
                With a legacy that dates back to 1987, Ayushakti has emerged as a globally trusted name in the Ayurvedic wellness space. Founded by Dr. Smita Pankaj Naram, the brand has built a strong international presence across the USA, Europe, Asia, and beyond. Operating within the broader healthcare sector, Ayushakti offers a range of traditional Ayurvedic services including Pulse Reading, Panchakarma detox, Marma therapy, herbal formulations, and personalized lifestyle consultations — all rooted in time-tested healing practices.

            </p>
            <p class="sec-para"><b>Services Offered:</b> </p>
            <ul>
                <li>Website Development</li>
                <li>Social Media Marketing</li>
                <li>Performance Marketing</li>
                <li>SEO</li>
                <li>Shoots</li>
                <li>Content Curation</li>
            </ul>
             @include('Frontend.partial.socialMediaLinkInPortfolio')

        </div>
    </div>
</section>

<section class="port-bann section-margin d-none">
    <div class="container-fluid">
        <div class="row mt-60">
            <h2 class=" sec-title text-center">The Mighty <span class="text-blue">Creative</span></h2>
            </h2>
            <div class="swiper creativeSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/cyberpower/1.png') }}" alt="ayushakti Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/cyberpower/2.png') }}" alt="ayushakti Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/cyberpower/3.png') }}" alt="ayushakti Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/cyberpower/4.png') }}" alt="ayushakti Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/cyberpower/5.png') }}" alt="ayushakti Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/cyberpower/6.jpg') }}" alt="ayushakti Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/cyberpower/7.jpg') }}" alt="ayushakti Creative"
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
<!-- 
<section class="porfolio-text section-margin">
    <div class="container">
        <div class="row">
            <h2 class="sec-title">Similar Industry,<br><span class="text-blue">We Worked On</span> </h2>

            <div class="col lg-4 col-md-4 col-12">
                <img src="{{ asset('frontend-assets/img/work/ayushakti/ayu1.jpeg') }}" alt="ayuhealth" srcset="" class="w-100">
                <p class="sec-para text-center text-blue mt-2"><b>Ayuhealth</b></p>
            </div>
            <div class="col lg-4 col-md-4 col-12">
                <img src="{{ asset('frontend-assets/img/work/jivana/Jivana.jpg') }}" alt="jivana" srcset="" class="w-100">
                <p class="sec-para text-center text-blue mt-2"><b>Shehanaz</b></p>
            </div>
            <div class="col lg-4 col-md-4 col-12">
                <img src="{{ asset('frontend-assets/img/work/cyberpwer/Cyberpower.jpg') }}" alt="cyber power" srcset="" class="w-100">
                <p class="sec-para text-center text-blue mt-2"><b>Cyber Power</b></p>
            </div>

        </div>
    </div>
</section> -->
@endsection