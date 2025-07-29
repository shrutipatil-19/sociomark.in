@extends('Frontend.layout.app')
@section('content')
<section class="port-bann">
    <div class="container-fluid p-0">
        <div class="row mt-60">
            <div class="swiper caseStudySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="col-12">
                            <img src="{{ asset('frontend-assets/img/work/banner/Shahenaz.jpg') }}" alt="shahenaz -meher"
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
            <h1 class="text-blue sec-title mb-20">Shahenaz</h1>
            <p class="sec-para"><b>About the Brand:</b> </p>
            <p class="sec-para">
                With over 60 years of legacy, Shahenaz is a distinguished clothing brand rooted in timeless elegance and Indian artistry. Known for blending heritage with modern design, Shahenaz curates collections that highlight the beauty of handcrafted textiles and meticulous detailing. From luxurious ethnic wear to curated home décor, every piece reflects a deep respect for craftsmanship and a flair for contemporary sophistication. Designed for those who value authenticity and quiet luxury, Shahenaz continues to redefine tradition for the modern lifestyle.
            </p>
            <p class="sec-para"><b>Services Offered:</b> </p>
            <ul>
                <li class="sec-para">Social Media Management</li>
                <li class="sec-para">Videography(in-house & outdoor shoots for humanized reels)</li>
                <li class="sec-para">SEO (Search Engine Optimization)</li>
            </ul>
             @include('Frontend.partial.socialMediaLinkInPortfolio')
            <div class="mt-3">
                <a href="{{ route('shahenaz') }}" class="th-btn th-icon">READ OUR CASE STUDY</a>
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
                        <img src="{{ asset('frontend-assets/img/portfolio/shehnaz/3.png') }}" alt="shahenaz Creative" srcset=""
                            class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/shehnaz/4.png') }}" alt="shahenaz Creative" srcset=""
                            class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/shehnaz/2.png') }}" alt="shahenaz Creative" srcset=""
                            class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/shehnaz/5.jpeg') }}" alt="shahenaz Creative" srcset=""
                            class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/shehnaz/1.PNG') }}" alt="shahenaz Creative" srcset=""
                            class="w-100">
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

            <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'euro']) }}">
                    <img src="{{ asset('frontend-assets/img/work/euro/Euro.jpg') }}" alt="euro" srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>Euro</b></p>
                </a>
            </div>
            <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'sight-optiforecals']) }}">
                    <img src="{{ asset('frontend-assets/img/work/foresight-opticals/1.jpg') }}" alt="firesight Opticals" srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>Foresight Opticals</b></p>
                </a>
            </div>
        </div>
    </div>
</section> -->
@endsection