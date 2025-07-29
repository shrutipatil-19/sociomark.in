@extends('Frontend.layout.app')
@section('content')
<section class="port-bann">
    <div class="container-fluid p-0">
        <div class="row mt-60">
            <div class="swiper caseStudySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="col-12">
                            <img src="{{ asset('frontend-assets/img/work/banner/BEM.png') }}" alt="bem - peaceful rides, powerfil impact"
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
            <h1 class="text-blue sec-title mb-20">Blue energy Motors </h1>
            <p class="sec-para"><b>About the Brand:</b> </p>
            <p class="sec-para">Blue Energy Motors is a clean <strong>Truck Manufacturing</strong> company that designs and manufactures zero-emission trucks. Focused on reducing the carbon footprint of the <strong>transportation sector,</strong> the brand offers eco-friendly vehicles that also make strong economic sense for businesses.
                By combining innovation with sustainability, Blue Energy Motors provides an immediate solution to cut down emissions from freight transport, which is one of the biggest contributors to air pollution. The company’s goal is to support the shift towards greener mobility while improving operational efficiency for its customers.
            </p>
            <p class="sec-para"><b>Services Offered:</b> </p>
            <ul>
                <li class="sec-para">Social Media Management</li>
                <li class="sec-para">Content Marketing</li>
                <li class="sec-para">Search Engine Optimization (SEO)</li>
            </ul>
            @include('Frontend.partial.socialMediaLinkInPortfolio')
            {{-- <div class="header-button mt-3">
                    <a href="#" class="th-btn th-icon">READ OUR CASE STUDY</a>
                </div> --}}
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
                        <img src="{{ asset('frontend-assets/img/portfolio/bem/1.jpeg') }}" alt="bem creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/bem/2.jpeg') }}" alt="bem creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/bem/3.jpeg') }}" alt="bem creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/bem/4.jpeg') }}" alt="bem creative"
                            srcset="" class="w-100">
                    </div>
                </div>
                <!--<div class="swiper-button-next"></div>-->
                <!--<div class="swiper-button-prev"></div>-->
                {{-- <div class="swiper-pagination"></div> --}}
            </div>
            {{-- <div class="header-button mt-3 justify-content-center">
                    <a href="{{ route('') }}" class="th-btn th-icon">VIEW OUR CASE STUDY</a>
        </div> --}}
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
@endsection
