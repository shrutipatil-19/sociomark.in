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
                            <img src="{{ asset('frontend-assets/img/work/hollywood-opticians/1.jpg') }}" alt="hollywood opticians"
                                srcset="" class="w-100">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/hollywood-opticians/2.jpg') }}" alt="hollywood opticians"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/hollywood-opticians/3.jpg') }}" alt="hollywood opticians"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/hollywood-opticians/4.jpg') }}" alt="hollywood opticians"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/hollywood-opticians/5.jpg') }}" alt="hollywood opticians"
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
            <h1 class="text-blue sec-title mb-20">Hollywood Opticians</h1>
            <p class="sec-para"><b>About the Brand:</b> They are the first ISO certified optical company with over 43 outlets. We guarantee latest fashion with over 100+ international brands of luxury eye wear, lenses and frames.</p>
            <p class="sec-para"><b>Services Offered:</b> Social media Management, Content Writing, Social media Ads, Script Writing, Graphic Designs with 2D Animated Videos, ORM, Offline branding – Print Ads, Standee, In store branding includes - Flyers, Danglers, Brochure, Product sheet etc.</p>
            @include('Frontend.partial.socialMediaLinkInPortfolio')
        </div>
    </div>
</section>
@include('Frontend.partial.portfolio.similarIndustry')
@endsection