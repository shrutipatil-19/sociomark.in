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
                            <img src="https://placehold.co/600x400" alt="desi avtar"
                                srcset="" class="w-100">
                        </div>
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


<section class="porfolio-text overflow-hidden space bg-grey">
    <div class="container">
        <div class="row">
            <h1 class="text-blue sec-title mb-20">Desi Avatar</h1>
            <p class="sec-para"><b>About the Brand:</b> Desi Avatar is a clothing brand that combines traditional Indian designs with modern styles. The brand offers fusion wear that blends <strong>ethnic wear</strong> with contemporary fashion. It creates collections for Gen Z and Millennials, with a focus on <strong>traditional craftsmanship.</strong> Desi Avatar makes clothing that reflects both culture and modern trends, bringing them together in a simple, stylish way.
            </p>
            <p class="sec-para"><b>Services Offered:</b>

            <ul>
                <li class="sec-para"> Social Media Management</li>
                <li class="sec-para">Videography (in-house & outdoor shoots for humanized reels) </li>
                <li class="sec-para"> SEO (Search Engine Optimization)</li>
            </ul>
            </p>

            @include('Frontend.partial.socialMediaLinkInPortfolio')
        </div>
    </div>
</section>
@include('Frontend.partial.portfolio.similarIndustry')
<!-- <section class="porfolio-text overflow-hidden space ">
    <div class="container">
        <div class="row">
            <h2 class="sec-title">Similar Industry,<br><span class="text-blue">We Worked On</span> </h2>

            <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'ayushakti']) }}">
                    <img src="{{ asset('frontend-assets/img/work/ayushakti/ayu1.jpeg') }}" alt="desi avtar" srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>Ayushakti</b></p>
                </a>
            </div>
            <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'jivana']) }}">
                    <img src="{{ asset('frontend-assets/img/work/jivana/Jivana.jpg') }}" alt="desi avtar" srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>Jivana</b></p>
                </a>
            </div>
            <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'cyber-power']) }}">
                    <img src="{{ asset('frontend-assets/img/work/cyberpwer/Cyberpower.jpg') }}" alt="desi avtar" srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>Cyber Power</b></p>
                </a>
            </div>

        </div>
    </div>
</section> -->
@endsection