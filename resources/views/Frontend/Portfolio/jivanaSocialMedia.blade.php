@extends('Frontend.layout.app')
@section('content')
<section class="port-bann">
    <div class="container-fluid p-0">
        <div class="row mt-60">
            <div class="swiper caseStudySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="col-12">
                            <img src="{{ asset('frontend-assets/img/work/banner/Jivana.jpg') }}" alt="jivana"
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
            <h1 class="text-blue sec-title mb-20">Jivana</h1>
            <p class="sec-para"><b>About the Brand:</b> </p>
            <p class="sec-para">
                Jivana, from Somiya Foods Group, is a growing brand in the <a href="">FMCG Industry</a> known for
                strong brand building and product awareness. Focused on retaining the purity and goodness of natural
                ingredients, Jivana offers essential products like spices, jaggery variants, and sugar powders. Their
                flagship product, Classic Sugar, is loved for its natural purity and quality. Proudly, Jivana has
                crossed ₹15+ crores in revenue, reflecting the trust of its customers across the consumer packaged goods
                segment.
            </p>
            <p class="sec-para"><b>Services Offered:</b> </p>
            <p class="sec-para">
                We manage Jivana's social media with a growing community of 5,000+ followers, creating engaging content
                through static posts, reels, shoots, and more. Our focus is on promoting brand identity and product
                value to the target audience, while boosting reach with effective SEO strategies and ad campaigns. We
                also build a strong virtual presence and handle offline branding projects, from printing to execution.
            </p>
            @include('Frontend.partial.socialMediaLinkInPortfolio')
        </div>
    </div>
</section>

<section class="port-bann overflow-hidden space bg-grey">
    <div class="container-fluid">
        <div class="row ">
            <h2 class=" sec-title text-center">The Mighty <span class="text-blue">Creative</span></h2>
            </h2>
            <div class="swiper creativeSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/jivana/1.png') }}" alt="jivana Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/jivana/2.png') }}" alt="jivana Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/jivana/3.png') }}" alt="jivana Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/jivana/4.png') }}" alt="jivana Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/jivana/5.png') }}" alt="jivana Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/jivana/6.png') }}" alt="jivana Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/jivana/7.png') }}" alt="jivana Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/jivana/8.png') }}" alt="jivana Creative"
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

            <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'repute']) }}">
                    <img src="{{ asset('frontend-assets/img/work/banner/repute.jpg') }}" alt="repute" srcset="" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>Repute</b></p>
                </a>
            </div>
            {{-- <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'jivana']) }}">
            <img src="{{ asset('frontend-assets/img/work/jivana/Jivana.jpg') }}" alt="jivana" srcset="" class="w-100">
            <p class="sec-para text-center text-blue mt-2"><b>Jivana</b></p>
            </a>
        </div> --}}
        <div class="col lg-4 col-md-4 col-12">
            <a href="{{ route('social_media', ['client'=>'grill-box']) }}">
                <img src="{{ asset('frontend-assets/img/work/grill-box/grill3.jpeg') }}" alt="grill box" srcset="" class="w-100">
                <p class="sec-para text-center text-blue mt-2"><b>Grill Box</b></p>
            </a>
        </div>

    </div>
    </div>
</section> -->
@endsection