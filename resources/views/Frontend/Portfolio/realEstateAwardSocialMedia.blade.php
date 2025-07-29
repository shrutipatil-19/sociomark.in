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
                            <img src="{{ asset('frontend-assets/img/work/real-estate-awards/1.jpg') }}" alt="real estate award"
                                srcset="" class="w-100">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/real-estate-awards/2.jpg') }}" alt="real estate award"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/real-estate-awards/3.jpg') }}" alt="real estate award"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/real-estate-awards/4.jpg') }}" alt="real estate award"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/real-estate-awards/5.jpg') }}" alt="real estate award"
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
            <h1 class="text-blue sec-title mb-20">RR Kabel & CNBC-Awaaz Presents’ Real Estate Awards</h1>
            <p class="sec-para"><b>About the Brand:</b> To boost the real estate enthusiasm in India, and reward it’s excellent performances, CNBC-AWAAZ, presents the 13th Real Estate Awards 2018-19 presented by RR Kabel. These awards identify and honor professionals who have envisioned and created marvels in the real estate industry.</p>
            <p class="sec-para"><b>Services Offered:</b> Complete Marketing Strategy (Online + Offline), Social Media Management, Print Design, ORM, Content Writing, Social media Ads, Googles Ads, Website Development & Management, Search Engine Optimization(SEO), Twitter Trending.</p>
            @include('Frontend.partial.socialMediaLinkInPortfolio')
            <div class="header-button mt-3">
                <a href="{{ route('realestateawards') }}" class="th-btn th-icon">READ OUR CASE STUDY</a>
            </div>
        </div>
    </div>
</section>
@include('Frontend.partial.portfolio.similarIndustry')

@endsection