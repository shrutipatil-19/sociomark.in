@extends('Frontend.layout.app')
@section('content')
<section class="port-bann">
    <div class="container-fluid p-0">
        <div class="row mt-60">
            <div class="swiper caseStudySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="col-12">
                            <img src="{{ asset('frontend-assets/img/work/banner/Cyberpower.jpg') }}" alt="cyber power - pick your pc and pay"
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
            <h1 class="text-blue sec-title mb-20">Cyber Power</h1>
            <p class="sec-para"><b>About the Brand:</b> </p>
            <p class="sec-para">
                CyberPowerPC India is more than a <strong>gaming PC</strong> brand — it’s a creator of immersive gaming experiences. Known for its high-performance machines built with authentic components, expert craftsmanship, and meticulous testing, CyberPowerPC delivers <strong>computer systems</strong> that people from the esports industry can truly rely on. Each PC is assembled on-site, comes pre-installed with genuine Microsoft Windows, and is supported by full warranties and free on-site service. From casual gamers to competitive pros, CyberPowerPC India ensures every player is always Play Ready—redefining what it means to game with the best.
            </p>
            <p class="sec-para"><b>Services Offered:</b> </p>
            <ul>
                <li class="sec-para">Social media marketing
                </li>
                <li class="sec-para">videography and shoots</li>
                <li class="sec-para">content creation.</li>
            </ul>
            @include('Frontend.partial.socialMediaLinkInPortfolio')
            <div class="mt-3">
                <a href="{{ route('cyberPower') }}" class="th-btn th-icon">READ OUR CASE STUDY</a>
            </div>

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
                        <img src="{{ asset('frontend-assets/img/portfolio/cyberpower/1.png') }}" alt="cyber power creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/cyberpower/2.png') }}" alt="cyber power creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/cyberpower/3.png') }}" alt="cyber power creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/cyberpower/4.png') }}" alt="cyber power creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/cyberpower/5.png') }}" alt="cyber power creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/cyberpower/6.jpg') }}" alt="cyber power creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/cyberpower/7.jpg') }}" alt="cyber power creative"
                            srcset="" class="w-100">
                    </div>
                </div>
                <!--<div class="swiper-button-next"></div>-->
                <!--<div class="swiper-button-prev"></div>-->
                {{-- <div class="swiper-pagination"></div> --}}
            </div>

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
<!-- <section class="porfolio-text overflow-hidden space ">
    <div class="container">
        <div class="row">
            <h2 class="sec-title">Similar Industry,<br><span class="text-blue">We Worked On</span> </h2>
        </div>
        <div class="col lg-4 col-md-4 col-12">
            <a href="{{ route('social_media', ['client'=>'nodwin-gaming']) }}">
                <img src="{{ asset('frontend-assets/img/work/nodwin/1.jpg') }}" alt="nodwin gaming" srcset="" class="w-100">
                <p class="sec-para text-center text-blue mt-2"><b>Nodwin Gaming</b></p>
            </a>
        </div>

    </div>
    </div>
</section> -->
@endsection