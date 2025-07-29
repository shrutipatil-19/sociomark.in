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
                            <img src="{{ asset('frontend-assets/img/work/sportz-consult/1.jpg') }}" alt="sportz Consult"
                                srcset="" class="w-100">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/sportz-consult/2.jpg') }}" alt="sportz Consult"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/sportz-consult/3.jpg') }}" alt="sportz Consult"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/sportz-consult/4.jpg') }}" alt="sportz Consult"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/sportz-consult/5.jpg') }}" alt="sportz Consult"
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
            <h1 class="text-blue sec-title mb-20">Sportz Consult</h1>
            <p class="sec-para"><b>About the Brand:</b> Sportz Consult Is India’s Premier Sports Management Company Based Out Of Mumbai, India. With 100% Focused On Sports, Sportz Consult Are Proud To Have Served India’s Most Popular Brands, Companies, Leagues, Franchises, Federations & Associations.</p>
            <p class="sec-para"><b>Services Offered:</b> Social media creatives, Offline creatives include: Event creatives, Brochure, boards etc. Social media Strategy, Email Design and Management.</p>
            @include('Frontend.partial.socialMediaLinkInPortfolio')

        </div>
    </div>
</section>
@include('Frontend.partial.portfolio.similarIndustry')

@endsection