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
                            <img src="{{ asset('frontend-assets/img/work/mission-insure-india/1.jpg') }}" alt="mission Insure india"
                                srcset="" class="w-100">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/mission-insure-india/2.jpg') }}" alt="mission Insure india"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/mission-insure-india/3.jpg') }}" alt="mission Insure india"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/mission-insure-india/4.jpg') }}" alt="mission Insure india"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/mission-insure-india/5.jpg') }}" alt="mission Insure india"
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
            <h1 class="text-blue sec-title mb-20">ICICI Prudential Life Insurance and CNBC-TV18 presents Mission Insure India</h1>
            <p class="sec-para"><b>About the Brand:</b> Mission Insure India is a joint initiative between ICICI Prudential Life Insurance and CNBC TV18 powered by Moneycontrol to help you understand the importance of life insurance and the role it plays in financially safeguarding you and your family.</p>
            <p class="sec-para"><b>Services Offered:</b> Marketing Strategy, Social Media Management, ORM, Content Writing, Social media Ads, Youtube Ads, Blog writing.</p>
             @include('Frontend.partial.socialMediaLinkInPortfolio')
        </div>
    </div>
</section>
@include('Frontend.partial.portfolio.similarIndustry')
@endsection