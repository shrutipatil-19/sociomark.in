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
                            <img src="{{ asset('frontend-assets/img/work/inifd-vashi/1.jpg') }}" alt="inifd vashi"
                                srcset="" class="w-100">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/inifd-vashi/2.jpg') }}" alt="inifd vashi"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/inifd-vashi/3.jpg') }}" alt="inifd vashi"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/inifd-vashi/4.jpg') }}" alt="inifd vashi"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/inifd-vashi/5.jpg') }}" alt="inifd vashi"
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
            <h1 class="text-blue sec-title mb-20">INIFD Vashi</h1>
            <p class="sec-para"><b>About the Brand:</b> An exclusive digitized design institution catering to guiding you through all the aspects of fashion and interior designing.</p>
            <p class="sec-para"><b>Services Offered:</b> Social media Management, Content Writing, Graphic Designs with 2D Animated Videos, ORM, Google Ads, Search Engine Optimization(SEO).</p>
            @include('Frontend.partial.socialMediaLinkInPortfolio')
        </div>
    </div>
</section>
@include('Frontend.partial.portfolio.similarIndustry')
<!-- <section class="porfolio-text overflow-hidden space bg-grey">
    <div class="container">
        <div class="row">
            <h2 class="sec-title">Similar Industry,<br><span class="text-blue">We Worked On</span> </h2>

            <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'nhss']) }}">
                    <img src="{{ asset('frontend-assets/img/work/banner/NHS.jpg') }}" alt="inifd vashi" srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>New Horizon School</b></p>
                </a>
            </div>
            <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'ism']) }}">
                    <img src="{{ asset('frontend-assets/img/work/banner/ism.jpg') }}" alt="inifd vashi" srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>ISM</b></p>
                </a>
            </div>
        </div>
    </div>
</section> -->
@endsection