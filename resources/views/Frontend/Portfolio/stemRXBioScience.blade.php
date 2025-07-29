@extends('Frontend.layout.app')
@section('content')
<section class="port-bann">
    <div class="container-fluid p-0">
        <div class="row mt-60">
            <div class="swiper caseStudySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="col-12">
                            <img src="{{ asset('frontend-assets/img/work/banner/stemrx.jpg') }}" alt="stemrx Bioscience"
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

<section class="porfolio-text overflow-hidden space ">
    <div class="container">
        <div class="row">
            <h1 class="text-blue sec-title mb-20">StemRx Bioscience</h1>
            <p class="sec-para"><b>About the Brand:</b> StemRx Bioscience is a pioneering healthcare brand focused on advanced, research-driven treatments. With a strong foundation in <strong>regenerative medicine,</strong> it offers innovative solutions that go beyond conventional care. Backed by science and clinical expertise, StemRx provides personalized therapies to support long-term healing. Its work in <strong>cell therapy</strong> is helping redefine recovery across various medical conditions, offering new hope to patients in India and beyond.
            </p>
            <p class="sec-para"><b>Services Offered:</b> </p>
            <ul>
                <li class="sec-para">Search Engine Optimization
                </li>
                <li class="sec-para">Social Media Marketing</li>
            </ul>
            @include('Frontend.partial.socialMediaLinkInPortfolio')
            <div class="mt-3">
                <a href="{{ route('stemrxbio') }}" class="th-btn th-icon">READ OUR CASE STUDY</a>
            </div>

        </div>
    </div>
</section>

<section class="port-bann overflow-hidden space bg-grey d-none">
    <div class="container-fluid">
        <div class="row ">
            <h2 class=" sec-title text-center">The Mighty <span class="text-blue">Creative</span></h2>
            </h2>
            <div class="swiper creativeSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/stemrx/1.png') }}" alt="stemrx Bioscience creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/stemrx/2.png') }}" alt="stemrx Bioscience creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/stemrx/3.png') }}" alt="stemrx Bioscience creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/stemrx/4.png') }}" alt="stemrx Bioscience creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/stemrx/5.png') }}" alt="stemrx Bioscience creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/stemrx/6.jpg') }}" alt="stemrx Bioscience creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/stemrx/7.jpg') }}" alt="stemrx Bioscience creative"
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

<section class="porfolio-text overflow-hidden space d-none">
    <div class="container">
        <div class="row">
            <h2 class="sec-title">Similar Industry,<br><span class="text-blue">We Worked On</span> </h2>

            <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'ayu-health']) }}">
                    <img src="{{ asset('frontend-assets/img/work/ayu health/ayu health.jpg') }}" alt="ayu shakti" srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>Ayuhealth</b></p>
                </a>
            </div>
            <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'ayushakti']) }}">
                    <img src="{{ asset('frontend-assets/img/work/ayushakti/ayushakti1.jpg') }}" alt="ayushakti" srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>Ayushkati</b></p>
                </a>
            </div>
            <div class="mt-3">
                <a href="{{ route('ayushakti') }}" class="th-btn th-icon">View Our Porfolio</a>
            </div>

        </div>
    </div>
</section>
@include('Frontend.partial.portfolio.similarIndustry')

@endsection