@extends('Frontend.layout.app')
@section('content')
<section class="port-bann">
    <div class="container-fluid p-0">
        <div class="row mt-60">
            <div class="swiper caseStudySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="col-12">
                            <img src="{{ asset('frontend-assets/img/work/banner/vedco.png') }}" alt="vedco"
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
            <h1 class="text-blue sec-title mb-20">VEDCO</h1>
            <p class="sec-para"><b>About the Brand:</b> Vedco is an Indian brand dedicated to crafting eco-conscious <strong>wooden products </strong> that blend utility with aesthetics. Specializing in <strong>brushes and combs</strong> made from natural materials, Vedco promotes sustainable living through everyday essentials. Each product is designed to offer a tactile, durable alternative to plastic, supporting a cleaner planet. With a focus on natural grooming, Vedco delivers tools that are gentle on both you and the environment.
            </p>
            <p class="sec-para"><b>Services Offered:</b> </p>
            <ul>
                <li class="sec-para">Social Media Marketing
                </li>
                <li class="sec-para">Content Creation</li>
                <li class="sec-para">Search Engine Optimization (SEO)</li>
            </ul>
            @include('Frontend.partial.socialMediaLinkInPortfolio')
        </div>
    </div>
</section>

<section class="port-bann overflow-hidden space bg-grey d-none">
    <div class="container-fluid">
        <div class="row">
            <h2 class=" sec-title text-center">The Mighty <span class="text-blue">Creative</span></h2>
            </h2>
            <div class="swiper creativeSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/vedco/1.png') }}" alt="vedco creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/vedco/2.png') }}" alt="vedco creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/vedco/3.png') }}" alt="vedco creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/vedco/4.png') }}" alt="vedco creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/vedco/5.png') }}" alt="vedco creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/vedco/6.jpg') }}" alt="vedco creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/vedco/7.jpg') }}" alt="vedco creative"
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
<!-- <section class="porfolio-text overflow-hidden space bg-grey">
    <div class="container">
        <div class="row">
            <h2 class="sec-title">Similar Industry,<br><span class="text-blue">We Worked On</span> </h2>

            <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'ayushakti']) }}">
                    <img src="{{ asset('frontend-assets/img/work/ayushakti/ayu1.jpeg') }}" alt="ayushakti" srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>Ayushakti</b></p>
                </a>
            </div>
            <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'jivana']) }}">
                    <img src="{{ asset('frontend-assets/img/work/jivana/Jivana.jpg') }}" alt="jivana" srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>Jivana</b></p>
                </a>
            </div>
            <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'cyber-power']) }}">
                    <img src="{{ asset('frontend-assets/img/work/cyberpwer/Cyberpower.jpg') }}" alt="cyber power" srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>Cyber Power</b></p>
                </a>
            </div>

        </div>
    </div>
</section> -->
@endsection