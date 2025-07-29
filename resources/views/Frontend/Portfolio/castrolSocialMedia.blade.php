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
                            <img src="{{ asset('frontend-assets/img/work/castrol/1.jpg') }}" alt="castrol"
                                srcset="" class="w-100">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/castrol/2.jpg') }}" alt="castrol"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/castrol/3.jpg') }}" alt="castrol"
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
            <h1 class="text-blue sec-title mb-20">Castrol Activ & Network18 presents Protect India’s Engine</h1>
            <p class="sec-para"><b>About the Brand:</b> The concept is to recognize the role of our neighborhood mechanics and create awareness around their plight through the pandemic. The end objective of the campaign is to have viewers pledge their support and nominate their local mechanic to benefit from the campaign. This initiative was executed with an idea of #ProtectIndiasEngine.</p>
            <p class="sec-para"><b>Services Offered:</b> Social media creatives and Content Writing ( Static, gif and Animated Videos),Email Design, Logo Adaptation, Tv Astons, GDN Banner Designs.</p>
            @include('Frontend.partial.socialMediaLinkInPortfolio')
        </div>
    </div>
</section>
@include('Frontend.partial.portfolio.similarIndustry')
@endsection
