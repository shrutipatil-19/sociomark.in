@extends('Frontend.layout.app')
@section('content')
<section class="port-bann">
    <div class="container-fluid p-0">
        <div class="row mt-60">
            <div class="swiper caseStudySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="col-12">
                            <img src="{{ asset('frontend-assets/img/work/banner/qubero.jpg') }}" alt="qubero"
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
            <h1 class="text-blue sec-title mb-20">Qubero by Nirali BG</h1>
            <p class="sec-para"><b>About the Brand:</b> </p>
            <p class="sec-para">
                From the house of Nirali BG — a trusted name in the Indian kitchen sink space — Qubero brings over 30 years of expertise into the heart of modern homes. Backed by a legacy of precision, innovation, and craftsmanship, Qubero offers premium-quality, designer solutions crafted to simplify everyday kitchen tasks. With a diverse range of finishes and styles, the brand caters to the evolving needs of the modular furniture segment and seamlessly blends into the aesthetics of the Interior design industry. Thoughtfully designed and built to last, Qubero products are where function meets form.
            </p>
            <p class="sec-para"><b>Services Offered:</b> </p>
            <ul>
                <li class="sec-para">Social Media Management</li>
                <li class="sec-para">Content Creation</li>
                <li class="sec-para">On-Site Videography and Photography</li>
                <li class="sec-para">Graphic Design and Visual Content</li>
                <li class="sec-para">Performance Marketing Support</li>
                <li class="sec-para">Campaign Planning and Execution</li>
                <li class="sec-para">Community Management</li>
                <li class="sec-para">Strategy Consultation</li>
            </ul>
            @include('Frontend.partial.socialMediaLinkInPortfolio')

        </div>
    </div>
</section>

<section class="port-bann overflow-hidden space  bg-grey d-none">
    <div class="container-fluid">
        <div class="row">
            <h2 class=" sec-title text-center">The Mighty <span class="text-blue">Creative</span></h2>
            </h2>
            <div class="swiper creativeSwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/qubero/1.png') }}" alt="qubero Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/qubero/3.jpg') }}" alt="qubero Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/qubero/3.jpg') }}" alt="qubero Creative"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/portfolio/qubero/4.jpg') }}" alt="qubero Creative"
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
<!-- <section class="porfolio-text overflow-hidden space bg-grey">
    <div class="container">
        <div class="row">
            <h2 class="sec-title">Similar Industry,<br><span class="text-blue">We Worked On</span> </h2>

             <div class="col lg-4 col-md-4 col-12">
                <a href="{{ route('social_media', ['client'=>'bulid-track']) }}">
                <img src="{{ asset('frontend-assets/img/work/build track/Buildtrack.jpg') }}" alt="build track" srcset="" class="w-100">
                <p class="sec-para text-center text-blue mt-2"><b>BuildTrack</b></p>
                </a>
            </div>
            
        </div>
    </div>
</section> -->
@endsection