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
                            <img src="{{ asset('frontend-assets/img/work/real-estate-awards/1.jpg') }}" alt="smarter india"
                                srcset="" class="w-100">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/real-estate-awards/2.jpg') }}" alt="smarter india"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/real-estate-awards/3.jpg') }}" alt="smarter india"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/real-estate-awards/4.jpg') }}" alt="smarter india"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/real-estate-awards/5.jpg') }}" alt="smarter india"
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
            <h1 class="text-blue sec-title mb-20">Mahindra World City and CNBC-Awaaz presents Smart Cities of India: Jaipur</h1>
            <p class="sec-para"><b>About the Brand:</b> Smart Cities Mission of the Government is a bold, new initiative. It is meant to set examples that can be replicated both within and outside the Smart City, catalyzing the creation of similar Smart Cities in various regions and parts of the country.</p>
            <p class="sec-para"><b>Services Offered:</b> social media creatives, content writing, e-invite, logo design, print design.</p>
            @include('Frontend.partial.socialMediaLinkInPortfolio')
            <div class="header-button mt-3">
                <a href="{{ route('smarterIndia') }}" class="th-btn th-icon">READ OUR CASE STUDY</a>
            </div>
        </div>
    </div>
</section>
@include('Frontend.partial.portfolio.similarIndustry')

@endsection