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
                            <img src="{{ asset('frontend-assets/img/work/team-cashless-india/1.jpg') }}" alt="team cashless india"
                                srcset="" class="w-100">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/team-cashless-india/2.jpg') }}" alt="team cashless india"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/team-cashless-india/3.jpg') }}" alt="team cashless india"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/team-cashless-india/4.jpg') }}" alt="team cashless india"
                            srcset="" class="w-100">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('frontend-assets/img/work/team-cashless-india/5.jpg') }}" alt="team cashless india"
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
            <h1 class="text-blue sec-title mb-20">MasterCard & Network18 presents Team Cashless India</h1>
            <p class="sec-para"><b>About the Brand:</b> Network 18 and MasterCard’s endeavour to provide impetus the digital economy in sync with the governments initiatives.The campaign aims to help merchants across India go cashless. Citizens get involved by nominating their neighbourhood mom and pop stores to get digitized under the campaign, the nominated merchants will be helped by Mastercard and their bank partners go cashless. Both the citizens and merchants stand a chance to be gratified throughout the campaign and ultimately meet Mahendra Singh Dhoni and play a friendly match with him.</p>
            <p class="sec-para"><b>Services Offered:</b> Social media creatives and Content Writing.</p>

            @include('Frontend.partial.socialMediaLinkInPortfolio')
        </div>
    </div>
</section>
@include('Frontend.partial.portfolio.similarIndustry')
@endsection