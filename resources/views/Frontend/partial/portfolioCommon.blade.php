<section class="space bg-grey" id="portfolioCommon">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="title-area text-center">
                    <h2 class="fw-bold sec-title"
                        data-aos="fade-up"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        View Our <span class="text-blue"> Portfolio</span>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="swiper caseStudySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="{{ route('social_media', ['client'=>'cyber-power']) }}" class="portfolio-item">
                            <img src="{{ asset('frontend-assets/img/portfolio/cyberpower/2.png') }}" alt="Cyber Power" class="w-100">
                            <div class="portfolio-title d-flex justify-content-center align-items-center">
                                <h4 class="sub-sec-title text-white">Cyber Power</h4>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide d-none">
                        <a href="{{ route('social_media', ['client'=>'bulid-track']) }}" class="portfolio-item">
                            <img src="{{ asset('frontend-assets/img/portfolio/Build Track/2.jpg') }}" alt="Build Track"
                                class="img-fluid">
                            <div class="portfolio-title d-flex justify-content-center align-items-center">
                                <h4 class="sub-sec-title text-white">Build Track</h4>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ route('social_media', ['client'=>'the-professional-couriers']) }}" class="portfolio-item">
                            <img src="{{ asset('frontend-assets/img/portfolio/tpc/1.png') }}" alt="TPC"
                                class="img-fluid">
                            <div class="portfolio-title d-flex justify-content-center align-items-center">
                                <h4 class="sub-sec-title text-white">The Professional Couriers</h4>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="{{ route('social_media', ['client'=>'ayu-health']) }}" class="portfolio-item">
                            <img src="{{ asset('frontend-assets/img/portfolio/ayuhealth/1.png') }}" alt="AYUHEALTH"
                                class="img-fluid">
                            <div class="portfolio-title d-flex justify-content-center align-items-center">
                                <h4 class="sub-sec-title text-white">Ayu Health</h4>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide d-none">
                        <a href="{{ route('social_media', ['client'=>'nmmc']) }}" class="portfolio-item">
                            <img src="{{ asset('frontend-assets/img/portfolio/nmmc/1.jpg') }}" alt="NMMC"
                                class="img-fluid">
                            <div class="portfolio-title d-flex justify-content-center align-items-center">
                                <h4 class="sub-sec-title text-white">NMMC</h4>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ route('social_media', ['client'=>'euro']) }}" class="portfolio-item">
                            <img src="{{ asset('frontend-assets/img/portfolio/EURO/Basketball_2.jpg') }}" alt="EURO"
                                class="img-fluid">
                            <div class="portfolio-title d-flex justify-content-center align-items-center">
                                <h4 class="sub-sec-title text-white">Euro</h4>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="{{ route('social_media', ['client'=>'jop']) }}" class="portfolio-item">
                            <img src="{{ asset('frontend-assets/img/portfolio/jop/2.png') }}" alt="JOP"
                                class="img-fluid">
                            <div class="portfolio-title d-flex justify-content-center align-items-center">
                                <h4 class="sub-sec-title text-white">JOP</h4>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="{{ route('social_media', ['client'=>'nodwin']) }}" class="portfolio-item">
                            <img src="{{ asset('frontend-assets/img/portfolio/nodwin/1.png') }}" alt="Nodwin"
                                class="img-fluid">
                            <div class="portfolio-title d-flex justify-content-center align-items-center">
                                <h4 class="sub-sec-title text-white">Nodwin</h4>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide d-none">
                        <a href="{{ route('social_media', ['client'=>'bem']) }}" class="portfolio-item">
                            <img src="{{ asset('frontend-assets/img/portfolio/bem/1.jpeg') }}" alt="BEM"
                                class="img-fluid">
                            <div class="portfolio-title d-flex justify-content-center align-items-center">
                                <h4 class="sub-sec-title text-white">BEM</h4>
                            </div>
                        </a>
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
                        el: ".caseStudySwiper .swiper-pagination",
                        clickable: true,
                    },
                });
            </script>
        </div>

        <div class="mt-5 d-flex align-items-center justify-content-center">
            <a href="{{ route('portfolio') }}" class="th-btn th-icon">View all Portfolio</a>
        </div>
    </div>
</section>