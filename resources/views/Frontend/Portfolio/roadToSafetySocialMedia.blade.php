@extends('Frontend.layout.app')
@section('content')
<section class="port-bann">
    <div class="container-fluid">
        <div class="row mt-60">
            </h2>
            <div class="swiper caseStudySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="col-12">
                            <img src="{{ asset('frontend-assets/img/work/rts/1.jpg') }}" alt="road to safty"
                                srcset="" class="w-100">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/rts/2.jpg') }}" alt="road to safty"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/rts/3.jpg') }}" alt="road to safty"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/rts/4.jpg') }}" alt="road to safty"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/rts/5.jpg') }}" alt="road to safty"
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
            <h1 class="text-blue sec-title mb-20">Diageo & Network 18 Presents’ Road to Safety</h1>
            <p class="sec-para"><b>About the Brand:</b> Diageo is a multinational beverage company that comes up with the unique collections of brands across spirit and beer. Diageo in association with Network18 initiates a road to safety campaign that educates the crowd to safe driving. This initiative hopes to inculcate the importance of Road to Safety practices and to contribute in saving lives by educating the citizens.</p>
            <p class="sec-para"><b>Services Offered:</b> Complete Marketing Strategy (Online + Offline), Social Media Management, ORM, Content Writing, Search Engine Optimization(SEO),Social media Ads, Googles Ads, Influencer Activity, Twitter Trending, OOH& Print Design, Website Management.</p>
             @include('Frontend.partial.socialMediaLinkInPortfolio')
            <div class="header-button mt-3">
                <a href="{{ route('roadtosafetyinitiative') }}" class="th-btn th-icon">READ OUR CASE STUDY</a>
            </div>
        </div>
    </div>
</section>
@include('Frontend.partial.portfolio.similarIndustry')

@endsection