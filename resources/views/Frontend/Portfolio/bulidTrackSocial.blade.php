@extends('Frontend.layout.app')
@section('content')
<section class="port-bann">
    <div class="container-fluid p-0">
        <div class="row mt-60">
            <div class="swiper caseStudySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="col-12">
                            <img src="{{ asset('frontend-assets/img/work/build track/Buildtrack.jpg') }}" alt="build track - the aura of glass"
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
        <h1 class="text-blue sec-title mb-20">BuildTrack</h1>
        <p class="sec-para"><b>About the Brand:</b> </p>
        <p class="sec-para">
            BuildTrack is at the forefront of innovation in the <strong>Home automation industry, </strong>
            delivering advanced solutions that transform how India lives and works. Catering to residential,
            commercial, hospitality, and healthcare spaces, BuildTrack offers a range of smart technologies — from
            intelligent touch switches to comprehensive home management systems. Focused on enhancing comfort,
            efficiency, and security, the brand brings <strong>Modern living solutions</strong> to life with a
            strong emphasis on quality, design, and customer satisfaction.
        </p>
        <p class="sec-para"><b>Services Offered:</b> </p>
        <p class="sec-para">
            Social Media Management Including <strong>content</strong> like reels and Influencer marketing
            Videography(in-house shoots for humanized reels)
        </p>
        @include('Frontend.partial.socialMediaLinkInPortfolio')
        <div class="mt-3">
            <a href="{{ route('buildTrack') }}" class="th-btn th-icon">READ OUR CASE STUDY</a>
        </div>

    </div>
    </div>
</section>

<section class="port-bann overflow-hidden space bg-grey">
    <div class="container">
        <div class="row">
            <h2 class=" sec-title text-center">The Mighty <span class="text-blue">Creative</span></h2>
            </h2>
            <div class="swiper creativeSwiper">
                <div class="swiper-wrapper">
                    @for ($i = 1; $i <= 9; $i++)
                        <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/Build Track/' . $i . '.jpg') }}" alt="build track creatives - {{ $i }}"
                            srcset="" class="w-100">
                </div>
                @endfor
            </div>
            <!--<div class="swiper-button-next"></div>-->
            <!--<div class="swiper-button-prev"></div>-->
            {{-- <div class="swiper-pagination"></div> --}}
        </div>

        <script>
            var swiper = new Swiper(".creativeSwiper", {
                spaceBetween: 0,
                centeredSlides: true,
                slidesPerView: 3,
                slidesPerGroup: 1,
                loop: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    375: {
                        slidesPerView: 1,
                        slidesPerGroup: 1

                    },
                    768: {
                        slidesPerView: 1,
                        slidesPerGroup: 1

                    },
                    1024: {
                        slidesPerView: 3,
                        slidesPerGroup: 3

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

            <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client' => 'qubero']) }}">
                    <img src="{{ asset('frontend-assets/img/work/banner/qubero.jpg') }}" alt="qubero"
                        srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>Qubero</b></p>
                </a>
            </div>

        </div>
    </div>
</section> -->
@endsection