@extends('Frontend.layout.app')

@section('custome-style')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<!-- Plugin: TypewriterJS -->
<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
<!-- Plugin: TypewriterJS -->
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Sociomark Digital Marketing Agency",
        "alternateName": "Sociomarkin",
        "url": "https://www.sociomark.ae/",
        "logo": "https://www.sociomark.ae/public/frontend-assets/img/logo/sociomark-new-logo.png",
        "sameAs": [
            "https://www.facebook.com/Sociomarkin",
            "https://www.instagram.com/sociomarkin/",
            "https://www.youtube.com/@sociomarkdigitalmarketing",
            "https://www.linkedin.com/company/sociomark/",
            "https://in.pinterest.com/Sociomarkin/",
            "https://www.sociomark.ae/",
            "https://x.com/sociomarkin"
        ]
    }
</script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Homepage",
            "item": "https://www.sociomark.ae/"
        }, {
            "@type": "ListItem",
            "position": 2,
            "name": "Services",
            "item": "https://www.sociomark.ae/services"
        }, {
            "@type": "ListItem",
            "position": 3,
            "name": "Portfolio",
            "item": "https://www.sociomark.ae/portfolio"
        }, {
            "@type": "ListItem",
            "position": 4,
            "name": "Work Culture",
            "item": "https://www.sociomark.ae/work-culture"
        }, {
            "@type": "ListItem",
            "position": 5,
            "name": "Case study",
            "item": "https://www.sociomark.ae/case-study"
        }]
    }
</script>
@endsection
@push('styles')
<style>
    #home .about-area2 .sec-title {
        width: 67rem;
    }

    /* section3 */
    .according-img {
        opacity: 0;
        transform: scale(0.8);
        /* Start smaller */
        transition: all 0.6s ease;
        pointer-events: none;
        height: 0;
        overflow: hidden;
    }

    .according-list.item-active .according-img {
        transform: scale(1);
        height: fit-content;
    }

    /* Zoom in on hover */
    .hover-item:hover .according-img {
        opacity: 1;
        transform: scale(1);
        /* Zoom to normal size */
        pointer-events: auto;
        height: fit-content;
        overflow: visible;
    }

    #home #about-sec3 .box-title {
        line-height: 32px;
        font-size: 25px;
        letter-spacing: .10px;
        font-weight: 500;
        padding-left: 0px;
    }

    #home #about-sec3 .according-list {
        width: 100%;
    }

    @media (min-width: 768px) {
        #home #about-sec3 .according-list {
            width: 50%;
        }
    }

    #home #about-sec3 .th-btn,
    #home #about-sec5 .th-btn {
        padding: 15px 18px;
    }

    /* #home #about-sec3 .sec-para{
                                                                                                                            font-weight: 400;
                                                                                                                        } */
    #home #about-sec3 .accordion-item2 {
        max-width: 510px;
    }

    #home #about-sec3 .according-list .according-img {
        max-width: 700px;
    }

    #home #about-sec3 .accordion-item2 {
        padding-bottom: 15px;
    }

    #home #about-sec3 .accordion-item2 .box-title:before {
        width: 0px;

    }

    #home #about-sec3 .according-list.hover-item.item-active .accordion-item2 {
        border-bottom-color: #106c97;
    }

    /* section3 end */


    /* blog */
    #home #about-sec5 .box {
        padding: 28px 20px;
        border-radius: 10px;
    }

    #home #about-sec5 .blog-single.has-post-thumbnail {
        background-color: white !important;
    }

    #home #about-sec5 .box-blog,
    #home #about-sec5 .box-blog img {
        border-radius: 10px;
        box-shadow: 0px -2px 12px -1px rgba(0, 0, 0, 0.17);
        -webkit-box-shadow: 0px -2px 12px -1px rgba(0, 0, 0, 0.17);
        -moz-box-shadow: 0px -2px 12px -1px rgba(0, 0, 0, 0.17);
        border: none
    }

    #home #about-sec5 .content-padding {
        padding: 20px;
    }

    #home #about-sec5 .recent_post_title {
        font-size: 16px;
        line-height: 18px;
    }

    #home #about-sec5 .swiper-slide {
        height: auto;
    }

    #home #about-sec5 .category-filter {
        display: grid !important;
    }

    #home #about-sec5 .blog-title-text {
        font-size: 23px;
        margin-bottom: 6px;
    }

    .swiper-pagination {
        bottom: -30px;
        /* Position at the bottom */
    }

    .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background-color: #ccc;
        opacity: 1;
    }

    .swiper-pagination-bullet-active {
        background-color: #106c97;
    }

    .swiper-pagination-bullets .swiper-pagination-bullet {
        width: 15px !important;
        height: 15px !important;
    }

    .swiper-pagination-bullets .swiper-pagination-bullet.swiper-pagination-bullet-active {
        background-color: #106c97 !important;
    }

    .swiper-wrapper {
        height: auto !important;
    }

    .swiper-pagination-bullets {
        margin: 0px !important;
    }

    /* blog end */

    /* contact form end */
    .tabbed-content .nav-pills .nav-link h3 {
        color: white !important;
        margin: 0;
    }

    .tabbed-content .nav-pills .nav-link.active {
        background-color: var(--theme-color);
    }

    .services-tab .sec-para {
        color: white;
    }

    #contact {
        background-color: white !important;
    }

    #contact .sec-title {
        color: black;
    }

    .accordion-card .accordion-button:after {
        color: white;
    }

    a:hover {
        color: white;

    }
</style>
@endpush

@section('content')
<main id="home">
    {{-- Video Section --}}
    <section class="overflow-hidden video-heading height-full mb-md-3">
        <div class="content video-bg">
            <video playsinline class="w-100" autoplay muted loop>
                <source src="{{ asset('frontend-assets/video.mp4') }}">
            </video>
        </div>
        <div class="content text-content">
            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-xxl-9 col-xl-9 col-md-9 col-12">
                        <div class="big-title text-center">
                            <p data-aos="fade-right" data-aos-duration="2000">
                                <span>No Noise</span>
                            </p>
                            <p data-aos="fade-right " data-aos-delay="2500" data-aos-duration="1000">
                                <span class="result">#JustResults</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @push('styles')
        <style>
            #home .result {
                color: white;
                transition: color 0.3s ease 0.2s;
            }

            #home .result:hover {
                color: #ff900b;
            }

            #home .video-heading {
                position: relative;
            }

            #home .video-heading::after {
                position: absolute;
                bottom: 0;
                left: 0;
                content: '';
                width: 100%;
                height: calc(max(20%, 10rem));
                background: #000000;
                background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(0, 0, 0, 0) 90%);
            }

            #home .video-heading .content {
                position: absolute;
                height: 100vh;
                width: 100%;
            }

            #home .video-heading .text-content {
                z-index: 1;
            }

            #home .video-heading .video-bg {
                position: absolute;
                height: 100vh;
                width: 100%;
            }

            #home .video-heading .video-bg video {
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: center;
            }
        </style>
        @endpush
    </section>

    {{-- About Section --}}
    <section class="choose-area" id="about-sec2">
        <div class="container">
            <div class="row g-4 g-md-5 align-items-center">
                <div class="col-xl-6 pe-5">
                    <div class="title-area mb-20">
                        <h1 class="sec-title hero-title" data-aos="fade-right" data-aos-delay="300">Hello, we are<br>Sociomark -
                            <span class="text-orange"> A Digital Marketing Company in <span
                                    class="">India</span></span>
                        </h1>
                        <!-- <h1>{{ __('home.welcome') }}</h1> -->
                        <!-- <h1 class="sec-title hero-title" data-aos="fade-right" data-aos-delay="300">{{ __('messages.welcome') }}</h1> -->

                    </div>
                    <p class="sec-para text-white-50" data-aos="fade-right" data-aos-delay="300">In today's digital age, a strong online presence is no longer a luxury but a necessity. Sociomark is your trusted partner in navigating the tough digital landscape. As a leading digital marketing agency based in Navi Mumbai, we are committed to driving tangible results for your business.</p>
                    <p class="sec-para text-white-50" data-aos="fade-right" data-aos-delay="300">
                        Our expertise spans a wide range of services, including social media marketing, SEO, graphic design, website development, performance marketing, etc. We understand that every business is unique, and therefore, we tailor our strategies to meet your specific goals and objectives.

                    </p>
                    <!-- <p class="sec-para text-white-50" data-aos="fade-right" data-aos-delay="300">{{ __('messages.about') }}</p> -->
                    <a href="{{ route('about') }}" class="th-btn white-border th-icon th-radius">
                        Read More <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                </div>
                <div class="col-xl-6" data-aos="fade-left">
                    <div class="choose-image">
                        <div class="rounded-overflow" data-tilt data-tilt-max="10">
                            <img loading="lazy" src="{{ asset('frontend-assets/img/team/home.jpg') }}" alt="Team of Digital Marketing Experts">
                        </div>
                    </div>
                </div>
                <div class="col-12 ">
                    <div class="counter-box -wrap">
                        <div class="row g-3 gx-5 justify-content-between text-center mt-4 mt-md-0">
                            <div class="col-xl-auto col-lg-6 col-6 my-4 my-md-0">
                                <div class="counter-box ">
                                    <h3 class="box-number text-orange"><span class="counter-number">8</span>+</h3>
                                    <div class="media-body">
                                        <p class="text-white counter-text mb-n1">Years</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-auto col-lg-6 col-6 my-4 my-md-0">
                                <div class="counter-box ">
                                    <h3 class="box-number text-orange"><span class="counter-number">50</span>+</h3>
                                    <div class="media-body">
                                        <p class="text-white counter-text mb-n1">Employees</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-auto col-lg-6 col-6 my-4 my-md-0">
                                <div class="counter-box ">
                                    <h3 class="box-number text-orange"><span class="counter-number">70</span>+</h3>
                                    <div class="media-body">
                                        <p class="text-white counter-text mb-n1">Brands</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-auto col-lg-6 col-6 my-4 my-md-0">
                                <div class="counter-box ">
                                    <h3 class="box-number text-orange"><span class="counter-number">200</span>+</h3>
                                    <div class="media-body">
                                        <p class="text-white counter-text mb-n1">Campaigns</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-auto col-lg-6 col-6 my-4 my-md-0">
                                <div class="counter-box ">
                                    <h3 class="box-number text-orange"><span class="counter-number">10</span>+</h3>
                                    <div class="media-body">
                                        <p class="text-white counter-text mb-n1">Global Clients</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-auto col-lg-6 col-6 my-4 my-md-0">
                                <div class="counter-box ">
                                    <h3 class="box-number text-orange"><span class="counter-number">3</span></h3>
                                    <div class="media-body">
                                        <p class="text-white counter-text mb-n1">Awards</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="space-extra2-bottom d-none">
        <div class="container">
            <div class="row text-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">8</span>+</h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Years</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">50</span>+</h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Employees</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">70</span>+</h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Brands</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">200</span>+</h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Campiagn</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">10</span>+</h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Global Clients</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">3</span></h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Awards</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- <section class="overflow-hidden height-full mb-md-3">
            <div class="container h-100">
                <div class="row h-100 flex-row-reverse align-items-center">
                    <div class="col-xl-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="choose-image">
                            <div class="rounded-overflow" data-tilt data-tilt-max="10">
                                <img loading="lazy" src="https://placehold.co/804x610" alt="Choose">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="big-title">
                            <h2 data-aos="fade-right" data-aos-duration="2000">
                                <span>No Noise</span>
                            </h2>
                            <h2 data-aos="fade-right" data-aos-delay="2500" data-aos-duration="1000">
                                <span class="text-white">Just</span>
                            </h2>
                            <h2 data-aos="fade-right" data-aos-delay="3000" data-aos-duration="1000">
                                <span class="text-white">Results</span>
                            </h2>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}

    @push('scripts')
    <script>
        const init = () => {
            const marquee = document.querySelectorAll('.marquee')

            if (!marquee) return

            marquee.forEach(item => {
                const marqueeInner = item.querySelector('.marquee__inner')
                const marqueeContent = marqueeInner.querySelector('.marquee__content')

                // Duration
                const duration = item.getAttribute('data-marquee-duration')

                // Element Clone
                const marqueeContentClone = marqueeContent.cloneNode(true)
                marqueeInner.append(marqueeContentClone)

                // Marquee animation
                const marqueeContentAll = marqueeInner.querySelectorAll('.marquee__content')
                marqueeContentAll.forEach(element => {
                    gsap.to(element, {
                        x: "-101%",
                        repeat: -1,
                        duration: duration,
                        ease: 'linear'
                    })
                })
            })
        }

        document.addEventListener('DOMContentLoaded', init)
    </script>
    @endpush

    {{-- Video Scroll --}}
    <section class="about-area d-none d-md-block" id="about-sec">
        <div class="container-fluid overflow-hidden">
            <div class="row justify-content-center">
                <div class="col-12 p-0">
                    <div class="img player-video" id="videoScaleDown">
                        {{-- <iframe width="100%" height="800"
                            src="https://www.youtube.com/embed/fUcECL2KLeg?controls=0&autoplay=1&mute=1"
                            title="Sociomark Showreel" frameborder="0" allow="autoplay;  picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
                        <video preload="auto" class="w-100" playsinline autoplay muted loop>
                            <source src="{{ asset('frontend-assets/sociomark_showreel.mp4') }}">
                        </video>
                    </div>
                    @push('scripts')
                    <script>
                        gsap.set("#videoScaleDown", {
                                xPercent: 0,
                                yPercent: 0,
                                scale: 1.4,
                            }),
                            gsap.to("#videoScaleDown", {
                                scale: 0.7,
                                // x: "-10%",
                                transformOrigin: "center",
                                scrollTrigger: {
                                    trigger: "#videoScaleDown",
                                    start: "40% 50%",
                                    end: "+=1000",
                                    // markers: true,
                                    pin: true,
                                    scrub: true
                                }
                            })
                    </script>
                    @endpush
                </div>
                <div class="col-12">
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="space" id="about-sec3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="title-area text-center">
                            <h2 class="fw-bold mb-5 sec-title" data-aos="fade-up" data-aos-delay="100">
                                Services We Provide To <span class="text-orange"> Grow Your Brand’s</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="according-list-area">
                    <div class="according-list hover-item item-active">
                        <div class="accordion-item2">
                            <h3 class="box-title">Keyword research and localization</h3>
                        </div>
                        <div class="according-img">
                            <div class="rounded-overflow">
                                <img loading="lazy" src="{{ asset('frontend-assets/img/service/DM.png') }}" alt="">
    </div>
    <p class="sec-para text">Appeals to clients looking for innovative and creative digital
        solutions,
        positioning the agency as a leader in creativity. Conveys a collaborative approach,
        suggesting that the agency works closely with clients to achieve their digital
        goals.
    </p>
    <a href="" class="th-btn white-border th-icon th-radius">
        Read More
    </a>
    </div>

    </div>
    <div class="according-list hover-item">
        <div class="accordion-item2">
            <h3 class="box-title">International website structure and URL optimization</h3>
        </div>
        <div class="according-img">
            <div class="rounded-overflow">
                <img loading="lazy" src="{{ asset('frontend-assets/img/service/SEO.png') }}" alt="">
            </div>
            <p class="sec-para text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde
                reiciendis nesciunt perferendis dignissimos accusantium nostrum, laboriosam cupiditate
                dolores tenetur blanditiis.
            </p>
            <a href="" class="th-btn white-border th-icon th-radius">
                Read More </a>
        </div>
    </div>
    <div class="according-list hover-item">
        <div class="accordion-item2">
            <h3 class="box-title">Multilingual content creation and translation</h3>
        </div>
        <div class="according-img">
            <div class="rounded-overflow">
                <img loading="lazy" src="{{ asset('frontend-assets/img/service/SEM.png') }}" alt="">
            </div>
            <p class="sec-para text">Appeals to clients looking for innovative and creative digital
                solutions,
                positioning the agency as a leader in creativity. Conveys a collaborative approach,
                suggesting that the agency works closely with clients to achieve their digital
                goals.
            </p>
            <a href="" class="th-btn white-border th-icon th-radius">
                Read More </a>
        </div>
    </div>
    <div class="according-list hover-item">
        <div class="accordion-item2">
            <h3 class="box-title">Hreflang implementation</h3>
        </div>
        <div class="according-img">
            <div class="rounded-overflow">
                <img loading="lazy" src="{{ asset('frontend-assets/img/service/VP.png') }}" alt="">
            </div>
            <p class="sec-para text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo
                tempora adipisci provident, magnam cupiditate quod voluptatibus consequuntur eaque
                voluptatem, animi totam repudiandae facilis facere quo tempore, ad laudantium ducimus sunt?
            </p>
            <a href="" class="th-btn white-border th-icon th-radius">
                Read More </a>
        </div>
    </div>
    <div class="according-list hover-item">
        <div class="accordion-item2">
            <h3 class="box-title">Country-specific domain or subdomain strategy</h3>
        </div>
        <div class="according-img">
            <div class="rounded-overflow">
                <img loading="lazy" src="{{ asset('frontend-assets/img/service/WD.png') }}" alt="">
            </div>
            <p class="sec-para text">Appeals to clients looking for innovative and creative digital
                solutions,
                positioning the agency as a leader in creativity. Conveys a collaborative approach,
                suggesting that the agency works closely with clients to achieve their digital
                goals.
            </p>
            <a href="" class="th-btn white-border th-icon th-radius">
                Read More </a>
        </div>
    </div>
    <div class="according-list hover-item">
        <div class="accordion-item2">
            <h3 class="box-title">International link building and outreach</h3>
        </div>
        <div class="according-img">
            <div class="rounded-overflow">
                <img loading="lazy" src="{{ asset('frontend-assets/img/service/DM.png') }}" alt="">
            </div>
            <p class="sec-para text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                similique modi accusantium odit recusandae laudantium, vel, illo rerum cum sequi, minima
                eaque mollitia quos odio beatae iste nam temporibus accusamus.
            </p>
            <p class="sec-para text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                similique modi accusantium odit recusandae laudantium, vel, illo rerum cum sequi, minima
                eaque mollitia quos odio beatae iste nam temporibus accusamus.
            </p>
            <a href="" class="th-btn white-border th-icon th-radius">
                Read More </a>
        </div>
    </div>
    </div>
    </div>
    <div class="shape-mockup spin d-none d-lg-block" data-top="5%" data-right="2%"><img loading="lazy"
            src="assets/img/shape/shape-9.png" alt=""></div>
    <div class="shape-mockup d-none d-lg-block" data-top="2%" data-left="0%"><img loading="lazy"
            src="assets/img/shape/shape-13.png" alt=""></div>
    <div class="shape-mockup d-none d-lg-block" data-bottom="0%" data-left="50%"><img loading="lazy"
            src="assets/img/shape/shape-14.png" alt=""></div>
    </section> --}}

    {{-- Stripe --}}
    <div class="" style="padding: calc(max(5%, 2rem)) 0">
        <div class="marquee" data-marquee-duration="30">
            <div class="marquee__inner">
                <div class="marquee__content">
                    <div class="content">
                        <span>Digital Marketing</span>
                        <span>Search Engine Optimization</span>
                        <span>Social Media Marketing</span>
                        <span>Website Development</span>
                        <span>Content Marketing</span>
                        <span>Performance Marketing</span>
                        <span>Photography & Video Production</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Services --}}
    <section class="space" id="about-sec3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="title-area text-center">
                        <h2 class="fw-bold mb-5 sec-title" data-aos="fade-up" data-aos-delay="100">
                            Effective Solutions <br>for <span id="workTitle" class="text-orange">Lasting
                                Impressions</span>
                        </h2>
                    </div>
                    <script>
                        new Typewriter('#workTitle', {
                            strings: ['Lasting Impressions', 'Digital Marketing', 'Search Engine Optimization',
                                'Social Media Marketing', 'Website Development', 'Content Marketing', 'Performance Marketing',
                                'Photography',
                                'Video Production'
                            ],
                            autoStart: true,
                            loop: true,
                            cursor: "",
                        });
                    </script>
                </div>
            </div>
            <div class="services-tab tabbed-content tab-dark d-none d-md-block">
                <div class="row">
                    {{-- <div class="d-flex align-items-start"> --}}
                    <div class="col-lg-4">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-digital-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-digital" type="button" role="tab"
                                aria-controls="v-pills-digital" aria-selected="true">
                                <h3 class="sub-sec-title">Digital Marketing</h3>
                            </button>
                            <button class="nav-link" id="v-pills-seo-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-seo" type="button" role="tab"
                                aria-controls="v-pills-seo" aria-selected="false">
                                <h3 class="sub-sec-title">Search Engine Optimization</h3>
                            </button>
                            <button class="nav-link" id="v-pills-social-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-social" type="button" role="tab"
                                aria-controls="v-pills-social" aria-selected="false">
                                <h3 class="sub-sec-title">Social Media Marketing</h3>
                            </button>
                            <button class="nav-link" id="v-pills-website-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-website" type="button" role="tab"
                                aria-controls="v-pills-website" aria-selected="false">
                                <h3 class="sub-sec-title">Website Development</h3>
                            </button>
                            <button class="nav-link" id="v-pills-performance-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-performance" type="button" role="tab"
                                aria-controls="v-pills-performance" aria-selected="false">
                                <h3 class="sub-sec-title">Performance Marketing</h3>
                            </button>
                            <button class="nav-link" id="v-pills-content-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-content" type="button" role="tab"
                                aria-controls="v-pills-content" aria-selected="false">
                                <h3 class="sub-sec-title">Content Marketing</h3>
                            </button>
                            <button class="nav-link" id="v-pills-production-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-production" type="button" role="tab"
                                aria-controls="v-pills-production" aria-selected="false">
                                <h3 class="sub-sec-title">Photography & Video Production</h3>
                            </button>

                        </div>
                    </div>
                    <div class="offset-xl-1 col-xl-7 col-lg-8">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-digital" role="tabpanel"
                                aria-labelledby="v-pills-digital-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="service-image rounded-overflow"
                                            style="--background-image: url('{{ asset('frontend-assets/img/service/DM_bg.jpg') }}')">
                                            <h3 class="text-center text-orange">Digital Marketing</h3>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="sec-para mt-3">Helping businesses get noticed online through smart ideas, engaging content, and the right digital tools.
                                        </p>
                                        <a href="{{ route('digitalMarketing') }}"
                                            class="th-btn white-border th-icon th-radius">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-social" role="tabpanel"
                                aria-labelledby="v-pills-social-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="service-image rounded-overflow"
                                            style="--background-image: url('{{ asset('frontend-assets/img/service/SM_bg.jpg') }}')">
                                            <h3 class="text-center text-orange">Social Media Marketing</h3>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="sec-para mt-3">Creating content that attracts visibility, brand loyalty and organic results.
                                        </p>
                                        <a href="{{ route('socialMedia') }}"
                                            class="th-btn white-border th-icon th-radius">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-seo" role="tabpanel"
                                aria-labelledby="v-pills-seo-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="service-image rounded-overflow"
                                            style="--background-image: url('{{ asset('frontend-assets/img/service/SEO_bg.jpg') }}')">
                                            <h3 class="text-center text-orange">Search Engine Optimization</h3>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="sec-para mt-3">Higher rankings and more traffic. Boost your visibility with smart search engine optimization strategies.
                                        </p>
                                        <a href="{{ route('seo') }}" class="th-btn white-border th-icon th-radius">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-website" role="tabpanel"
                                aria-labelledby="v-pills-website-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="service-image rounded-overflow"
                                            style="--background-image: url('{{ asset('frontend-assets/img/service/WD_bg.jpg') }}')">
                                            <h3 class="text-center text-orange">Web Development</h3>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="sec-para mt-3"> Every business needs a strong online home. Our websites are thoughtfully designed to support your goals.
                                        </p>
                                        <a href="{{ route('website') }}"
                                            class="th-btn white-border th-icon th-radius">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-performance" role="tabpanel"
                                aria-labelledby="v-pills-performance-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="service-image rounded-overflow"
                                            style="--background-image: url('{{ asset('frontend-assets/img/service/PM_bg.jpg') }}')">
                                            <h3 class="text-center text-orange">Performance Marketing</h3>
                                        </div>
                                    </div>
                                    <div class="col-">
                                        <p class="sec-para mt-3">Targeted ad campaigns that reach the right audience, maximize ROI, and turn clicks into conversions.
                                        </p>
                                        <a href="{{ route('sem') }}" class="th-btn white-border th-icon th-radius">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-content" role="tabpanel"
                                aria-labelledby="v-pills-content-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="service-image rounded-overflow"
                                            style="--background-image: url('{{ asset('frontend-assets/img/service/CM_bg.jpg') }}')">
                                            <h3 class="text-center text-orange">Content Marketing</h3>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="sec-para mt-3">Stories that captivate, connect, and convert, turning content into a powerful growth tool.
                                        </p>
                                        <a href="{{ route('contentMarketing') }}"
                                            class="th-btn white-border th-icon th-radius">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-production" role="tabpanel"
                                aria-labelledby="v-pills-production-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="service-image rounded-overflow"
                                            style="--background-image: url('{{ asset('frontend-assets/img/service/VP_bg.jpg') }}')">
                                            <h3 class="text-center text-orange">Photography & Video Production</h3>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="sec-para mt-3">Great visuals tell better stories. We capture photos and videos that bring your brand to life.
                                        </p>
                                        <a href="{{ route('photoVideography') }}"
                                            class="th-btn white-border th-icon th-radius">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center mt-5 mobile-service d-md-none d-block">
                <div class="col-xl-12 mt-35 mt-xl-0 h-auto" id="faqAccordion">
                    <div class="accordion-area accordion">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button text-white" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="false"
                                    aria-controls="collapse-1">Digital Marketing</button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-120">
                                            <div class="service-image rounded-overflow"
                                                style="--background-image: url('{{ asset('frontend-assets/img/service/DM_bg.jpg') }}')">
                                                <h3 class="text-center text-orange">Digital Marketing</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <p class="sec-para mt-3 text-white">Want to go viral and drive sales?
                                                Discover the strategies
                                                that turn browsers into buyers and brands into buzzwords.
                                            </p>
                                            <a href="{{ route('digitalMarketing') }}"
                                                class="th-btn white-border th-icon th-radius">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed text-white" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true"
                                    aria-controls="collapse-2">Social Media Marketing</button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <div class="row align-items-center">
                                        <div class="col-12">
                                            <div class="service-image rounded-overflow"
                                                style="--background-image: url('{{ asset('frontend-assets/img/service/SM_bg.jpg') }}')">
                                                <h3 class="text-center text-orange">Social Media Marketing</h3>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p class="sec-para mt-3 text-white">Don’t just show up—stand out. We turn
                                                your social feed
                                                into your strongest marketing weapon.
                                            </p>
                                            <a href="{{ route('socialMedia') }}"
                                                class="th-btn white-border th-icon th-radius">
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card ">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed text-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false"
                                        aria-controls="collapse-3">Search Engine Optimization</button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <div class="service-image rounded-overflow"
                                                    style="--background-image: url('{{ asset('frontend-assets/img/service/SEO_bg.jpg') }}')">
                                                    <h3 class="text-center text-orange">Search Engine Optimization</h3>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <p class="sec-para mt-3 text-white">Struggling to show up on Google?
                                                    We’ve cracked the code to
                                                    page one rankings—and your competitors aren’t ready for it.
                                                </p>
                                                <a href="{{ route('seo') }}"
                                                    class="th-btn white-border th-icon th-radius">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card ">
                                <div class="accordion-header" id="collapse-item-4">
                                    <button class="accordion-button collapsed text-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false"
                                        aria-controls="collapse-4">Web Development</button>
                                </div>
                                <div id="collapse-4" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <div class="service-image rounded-overflow"
                                                    style="--background-image: url('{{ asset('frontend-assets/img/service/WD_bg.jpg') }}')">
                                                    <h3 class="text-center text-orange">Web Development</h3>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <p class="sec-para mt-3 text-white"> Is your website your best
                                                    salesperson? If not, you’re
                                                    losing money. We build websites that work 24/7 to grow your
                                                    business.

                                                </p>
                                                <a href="{{ route('website') }}"
                                                    class="th-btn white-border th-icon th-radius">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card ">
                                <div class="accordion-header" id="collapse-item-5">
                                    <button class="accordion-button collapsed text-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false"
                                        aria-controls="collapse-5">Performance Marketing</button>
                                </div>
                                <div id="collapse-5" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <div class="service-image rounded-overflow"
                                                    style="--background-image: url('{{ asset('frontend-assets/img/service/PM_bg.jpg') }}')">
                                                    <h3 class="text-center text-orange">Performance Marketing</h3>
                                                </div>
                                            </div>
                                            <div class="col-">
                                                <p class="sec-para mt-3 text-white">Tired of burning the budget with
                                                    zero ROI? Get campaigns
                                                    that don’t just perform—they outperform. See how we make every click
                                                    count.

                                                </p>
                                                <a href="{{ route('sem') }}"
                                                    class="th-btn white-border th-icon th-radius">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card ">
                                <div class="accordion-header" id="collapse-item-6">
                                    <button class="accordion-button collapsed text-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false"
                                        aria-controls="collapse-6">Content Marketing</button>
                                </div>
                                <div id="collapse-6" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <div class="service-image rounded-overflow"
                                                    style="--background-image: url('{{ asset('frontend-assets/img/service/CM_bg.jpg') }}')">
                                                    <h3 class="text-center text-orange">Content Marketing</h3>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <p class="sec-para mt-3 text-white">Content that pulls, persuades and
                                                    performs. From blogs to
                                                    banners—we make every word work for you.

                                                </p>
                                                <a href="{{ route('contentMarketing') }}"
                                                    class="th-btn white-border th-icon th-radius">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card ">
                                <div class="accordion-header" id="collapse-item-7">
                                    <button class="accordion-button collapsed text-white" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false"
                                        aria-controls="collapse-7">Photography & Video Production</button>
                                </div>
                                <div id="collapse-7" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-7" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <div class="row align-items-center">
                                            <div class="col-12">
                                                <div class="service-image rounded-overflow"
                                                    style="--background-image: url('{{ asset('frontend-assets/img/service/VP_bg.jpg') }}')">
                                                    <h3 class="text-center text-orange">Photography & Video Production
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <p class="sec-para mt-3 text-white">If it doesn't stop the scroll, it's
                                                    not us. Let's turn
                                                    your brand into a visual story that people will remember.

                                                </p>
                                                <a href="{{ route('photoVideography') }}"
                                                    class="th-btn white-border th-icon th-radius">
                                                    Read More
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        {{-- </div> --}}
        <script>
            // $(document).ready(function() {
            //     $("#about-sec3 .nav-link").mouseenter(function() {
            //         $(this).tab('show');
            //     });
            // });
        </script>
        </div>
    </section>
    <style>
        #portfolio-sec .sub-sec-title {
            font-size: calc(max(1.5vmax, 1rem));
        }

        #portfolio-sec .sec-para {
            font-size: calc(max(1vmax, 0.8rem));
        }
    </style>
    {{-- Portfolio --}}
    <section class="overflow-hidden position-relative space-extra-top space-bottom garally " id="portfolio-sec">
        <div class="container">
            <div class="title-area text-center mb-25">
                <h2 class="fw-bold mb-5 sec-title" data-aos="fade-up" data-aos-delay="100">
                    Our <span class="text-orange"> Portfolio</span>
                </h2>
            </div>
            {{-- <div class="filter-menu filter-menu-active mt-5 mb-4">
                <button data-filter="*" class="tab-btn active" type="button">All</button>
                <button data-filter=".cat1" class="tab-btn" type="button">Social Media</button>
                <button data-filter=".cat2" class="tab-btn" type="button">Development</button>
                <button data-filter=".cat3" class="tab-btn" type="button">Digital Creatives</button>
            </div> --}}
            <div class="portfolio-area">
                <div class="row g-3 g-md-4 justify-content-center">
                    <div class="col-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-delay="100">
                        <a href="{{ route('social_media', ['client' => 'team-cashless-india']) }}">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img loading="lazy"
                                            src="{{ asset('frontend-assets/img/portfolio/Mastercard.jpg') }}"
                                            class="w-100" alt="Team Cashless India" />
                                    </div>
                                    <div class="flip-box-back">
                                        <h4 class="sub-sec-title">Team Cashless India </h4>
                                        <p class="sec-para text-center">Crafted in perfect sync with Mastercard’s signature
                                            circles—where every post was a swipe of seamless design.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-delay="100">
                        <a href="{{ route('social_media', ['client' => 'nodwin-gaming']) }}">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img loading="lazy" src="{{ asset('frontend-assets/img/portfolio/Nodwin.jpg') }}"
                                            class="w-100" alt="NODWIN Gaming" class="w-100" />
                                    </div>
                                    <div class="flip-box-back">
                                        <h4 class="sub-sec-title">NODWIN Gaming</h4>
                                        <p class="sec-para text-center">From nostalgic 90s vibes to viral memes, our
                                            designs merged
                                            gaming culture with creative flair, making every campaign/series a high-score
                                            hit.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-delay="100">
                        <a href="{{ route('social_media', ['client' => 'shahenaz']) }}">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img loading="lazy"
                                            src="{{ asset('frontend-assets/img/portfolio/Shahenaz.jpg') }}"
                                            class="w-100" alt="Shahenaz" />
                                    </div>
                                    <div class="flip-box-back">
                                        <h4 class="sub-sec-title">Shahenaz</h4>
                                        <p class="sec-para text-center">A grid as graceful as the brand—designed to drape
                                            your feed in
                                            elegance.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-delay="100">
                        <a href="{{ route('social_media', ['client' => 'ayushakti']) }}">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img loading="lazy"
                                            src="{{ asset('frontend-assets/img/portfolio/Ayushakti.jpg') }}"
                                            class="w-100" alt="Ayushakti" />
                                    </div>
                                    <div class="flip-box-back">
                                        <h4 class="sub-sec-title">Ayushakti</h4>
                                        <p class="sec-para text-center">Healing through design—our creatives spoke the
                                            language of
                                            trust, care and Ayurveda.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-delay="100">
                        <a href="{{ route('social_media', ['client' => 'jivana']) }}">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img loading="lazy" src="{{ asset('frontend-assets/img/portfolio/Jivana.jpg') }}"
                                            class="w-100" alt="Jivana" />
                                    </div>
                                    <div class="flip-box-back">
                                        <h4 class="sub-sec-title">Jivana</h4>
                                        <p class="sec-para text-center">Captured the essence of authenticity, turning
                                            everyday
                                            ingredients into visual delights.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-delay="100">
                        <a href="{{ route('social_media', ['client' => 'the-professional-couriers']) }}">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img loading="lazy" src="{{ asset('frontend-assets/img/portfolio/TPC.jpg') }}"
                                            class="w-100" alt="The Professional Couriers" />
                                    </div>
                                    <div class="flip-box-back">
                                        <h4 class="sub-sec-title">The Professional Couriers</h4>
                                        <p class="sec-para text-center">We kept it clean, clear and customer-first—just
                                            like their
                                            deliveries.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-delay="100">
                        <a href="{{ route('social_media', ['client' => 'euro']) }}">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img loading="lazy" src="{{ asset('frontend-assets/img/portfolio/Euro.jpg') }}"
                                            class="w-100" alt="EURO" />
                                    </div>
                                    <div class="flip-box-back">
                                        <h4 class="sub-sec-title">EURO</h4>
                                        <p class="sec-para text-center">Styled comfort with star power—our creatives echoed
                                            Kartik
                                            Aaryan's charisma.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-xl-3" data-aos="zoom-in" data-aos-delay="100">
                        <a href="{{ route('social_media', ['client' => 'jop']) }}">
                            <div class="flip-box">
                                <div class="flip-box-inner">
                                    <div class="flip-box-front">
                                        <img loading="lazy" src="{{ asset('frontend-assets/img/portfolio/Jop.jpg') }}"
                                            class="w-100" alt="JOP Group" />
                                    </div>
                                    <div class="flip-box-back">
                                        <h4 class="sub-sec-title">JOP Group</h4>
                                        <p class="sec-para text-center">Visualized spaces that speak—our designs mirrored
                                            JOP's
                                            architectural elegance. Crafted visuals that captured the essence of modern
                                            living and timeless design.</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12">
                        <div class="text-center">
                            <a href="{{ route('portfolio') }}" class="th-btn white-border th-icon th-radius">
                                View All Portfolio
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .flip-box-front img {
            object-position: top;
        }

        .flip-box-front {
            background-color: black;
        }
    </style>
    {{-- Stripe --}}
    <div class="" style="padding: calc(max(5%, 2rem)) 0">
        <div class="marquee" data-marquee-duration="30">
            <div class="marquee__inner">
                <div class="marquee__content">
                    <div class="content">
                        <span>Digital Marketing</span>
                        <span>Search Engine Optimization</span>
                        <span>Social Media Marketing</span>
                        <span>Website Development</span>
                        <span>Content Marketing</span>
                        <span>Performance Marketing</span>
                        <span>Photography & Video Production</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Testimonials --}}
    <section class="overflow-hidden position-relative space-extra-top space-bottom garally" id="testi-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area text-center">
                        <h2 class="fw-bold sec-title my-3" data-aos="fade-up" data-aos-delay="100">
                            <span class="text-orange">Client Satisfaction</span><br> our favourite kind of ROI
                        </h2>

                    </div>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-10 col-xl-10 col-md-10 col-12">
                    <div class="slider-area">
                        <div class="swiper testimonial testimonialSwiper has-shadow">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide testimonial-card">
                                    <div class=" ">
                                        {{-- <div class="box-review">
                                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                        class="fa-solid fa-star"></i>
                                                </div> --}}
                                        <div class="sec-para">
                                            <div class="testimonial-message mb-3 mb-md-4">
                                                <p class="">
                                                    Ever since we started working with Sociomark, <strong>our return on
                                                        investment on marketing have significantly improved, almost
                                                        doubled</strong>. Sociomark is literally <strong>our partner in
                                                        digital marketing</strong>.
                                                </p>
                                                <div class="d-none d-md-block">
                                                    They help us in creating a robust marketing strategy. They also
                                                    create those creatives which raise people's eyeballs when they watch
                                                    it on social media and the likes are only increasing month and month
                                                    because of that. Sociomark is so committed that they always deliver
                                                    what they promise each month. I am extremely happy working with
                                                    them. <strong> Best of luck Sociomark! </strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-wrapp">
                                            <div class="box-profile">
                                                <div class="box-author">
                                                    <img loading="lazy"
                                                        src="https://ui-avatars.com/api/?name=Smita%20Naram"
                                                        alt="Avater">
                                                </div>
                                                <div class="box-info">
                                                    <h3 class="box-title text-black">Dr. Smita Naram</h3>
                                                    <span class="box-desig text-black">Founder, Ayushakti
                                                        Ayurveda</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide testimonial-card">
                                    <div class=" ">
                                        <div class="sec-para">
                                            <div class="testimonial-message mb-3 mb-md-4">
                                                <p class="">
                                                    Sociomark's ability to understand our brand's voice and translate it
                                                    into visually appealing content is unmatched.
                                                </p>
                                                <div class="d-none d-md-block">
                                                    <p>
                                                        Working with Sociomark has been an absolute pleasure. They have
                                                        consistently exceeded my expectations in handling The
                                                        WorldGrad's social media creative needs, from stunning static
                                                        images to engaging reels and videos. Their creativity and
                                                        attention to detail have truly brought our brand's vision to
                                                        life across all platforms.
                                                    </p>
                                                </div>
                                                <strong class="text-black">We highly recommend Sociomark to anyone in
                                                    need of top-notch creative services!</strong>
                                            </div>
                                        </div>
                                        <div class="box-wrapp">
                                            <div class="box-profile">
                                                <div class="box-author">
                                                    <img loading="lazy"
                                                        src="https://ui-avatars.com/api/?name=Suyash%20Birje"
                                                        alt="Avater">
                                                </div>
                                                <div class="box-info">
                                                    <h3 class="box-title text-black">Suyash Birje</h3>
                                                    <span class="box-desig text-black">Ex Marketing Manager, The WorldGrad</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide testimonial-card">
                                    <div class=" ">
                                        <div class="sec-para">
                                            <div class="testimonial-message mb-3 mb-md-4">
                                                <p class="">
                                                    We worked with Sociomark for almost all our websites for our
                                                    Times Influence events.
                                                </p>
                                                <div class="d-none d-md-block">
                                                    <p>
                                                        I've been most closely associated with
                                                        the Leaders of Tomorrow website. Working with the Sociomark team
                                                        is like working with a partner who will go the extra mile to
                                                        deliver their bits. Their team's sense of design,
                                                        functionalities and logic and the ability to forecast challenges
                                                        is truly commendable. Kudos
                                                    </p>
                                                </div>
                                                {{-- <strong class="text-black">We highly recommend Sociomark to anyone in
                                                        need of top-notch creative services!</strong> --}}
                                            </div>
                                        </div>
                                        <div class="box-wrapp">
                                            <div class="box-profile">
                                                <div class="box-author">
                                                    <img loading="lazy"
                                                        src="https://ui-avatars.com/api/?name=Suyash%20Jadhav"
                                                        alt="Avater">
                                                </div>
                                                <div class="box-info">
                                                    <h3 class="box-title text-black">Shubhankar Jadhav</h3>
                                                    <span class="box-desig text-black">Manager, Times Network</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide testimonial-card">
                                    <div class=" ">
                                        <div class="sec-para">
                                            <div class="testimonial-message mb-3 mb-md-4">
                                                <p class="">
                                                    Working with SocioMark for about 3 years now. <strong> Lovely people to work with.</strong>.
                                                </p>
                                                <div class="d-none d-md-block">
                                                    They have hardly ever missed any deadlines.The best part about them
                                                    is that they no longer feel like an external agency but someone who
                                                    is a part of Network18 group.We know whenever we are in trouble or
                                                    that late night call for an urgent creative SocioMark will always be
                                                    there.They have set benchmarks for others by their creative work
                                                    done for the Road to safety campaign.</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-wrapp">
                                            <div class="box-profile">
                                                <div class="box-author">
                                                    <img loading="lazy"
                                                        src="https://ui-avatars.com/api/?name=Apurva%20Shah"
                                                        alt="Avater">
                                                </div>
                                                <div class="box-info">
                                                    <h3 class="box-title text-black">Apurva Shah</h3>
                                                    <span class="box-desig text-black">AGM, Marketing</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide testimonial-card">
                                    <div class=" ">
                                        <div class="sec-para">
                                            <div class="testimonial-message mb-3 mb-md-4">
                                                <p class="">
                                                    Its a pleasure working with Sociomark for social media marketing of
                                                    our brand GrillBox through Facebook and Instagram.
                                                </p>
                                                <div class="d-none d-md-block">
                                                    Sociomark helped us to reach many users through their creative
                                                    contents. They were easy to work with and were flexible with meeting
                                                    our needs.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-wrapp">
                                            <div class="box-profile">
                                                <div class="box-author">
                                                    <img loading="lazy"
                                                        src="https://ui-avatars.com/api/?name=Shafeeq%20Mareen"
                                                        alt="Avater">
                                                </div>
                                                <div class="box-info">
                                                    <h3 class="box-title text-black">Shafeeq Mareen</h3>
                                                    <span class="box-desig text-black">Founder, GrillBox</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide testimonial-card">
                                    <div class=" ">
                                        <div class="sec-para">
                                            <div class="testimonial-message mb-3 mb-md-4">
                                                <p class="">
                                                    Sociomark team is absolutely very professional in their work yet
                                                    bring in high flexibility in terms of ownership in delivery.
                                                </p>
                                                <div class="d-none d-md-block">
                                                    All the tasks and works are delivered with utmost commitment and
                                                    dedication and on time. they never said no and always valued and
                                                    worked on our feedbacks we have had a long term engagement with them
                                                    and they are an absolute pleasure to work with!
                                                </div>

                                            </div>
                                        </div>
                                        <div class="box-wrapp">
                                            <div class="box-profile">
                                                <div class="box-author">
                                                    <img loading="lazy"
                                                        src="https://ui-avatars.com/api/?name=Siju%20Thomas"
                                                        alt="Avater">
                                                </div>
                                                <div class="box-info">
                                                    <h3 class="box-title text-black">Siju Thomas</h3>
                                                    <span class="box-desig text-black">CEO, The Professional
                                                        Couriers</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @push('scripts')
            <script>
                new Swiper(".testimonialSwiper", {
                    effect: "cards",
                    grabCursor: true,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                })
            </script>
            @endpush
        </div>
    </section>

    {{-- PR --}}
    <section class="th-blog-wrapper space-top space-extra-bottom" id="about-sec5">
        <div class="container">
            <div class="title-area text-center mb-25">
                <h2 class="fw-bold sec-title my-3" data-aos="fade-up" data-aos-delay="100">
                    <span class="text-orange">PR Sociopedia</span><br>A library that goes beyond the brief
                </h2>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    @foreach ($prs as $pr)

                    <div class="swiper-slide">
                        <div class="box-blog th-blog blog-single has-post-thumbnail">
                            <div class="blog-img box-blog w-100">
                                <a href="{{url($pr->link)  }}">
                                    <img loading="lazy"
                                        src="{{ url('storage/app/public/' . ($pr->img?? 'default.jpg')) }}"
                                        alt="pr Image - {{ $pr->card_title }}" class="w-100 h-100 object-fit-cover">
                                </a>
                            </div>
                            <div class="blog-content content-padding">
                                <div class="blog-meta">
                                    <p class="sec-para fs-6">Posted on <i class="fa-light fa-calendar"></i>
                                        {{ $pr->post_date }}
                                    </p>
                                </div>
                                <h3 class="blog-title blog-title-text">
                                    <a href="{{url($pr->link)  }}">
                                        {{ $pr->card_title}}
                                    </a>
                                </h3>

                                <p class="blog-text d-none">{{ Str::limit(strip_tags($pr->description), 50) }}</p>

                            </div>
                        </div>
                    </div>

                    @endforeach


                </div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>

    {{-- PR Agents --}}
    <section class="space-extra-top space-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area text-center">
                        <h2 class="fw-bold sec-title my-3" data-aos="fade-up" data-aos-delay="100">
                            Always in the <span class="text-orange">news</span>
                        </h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="swiper prSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="">
                                    <img src="{{ asset('frontend-assets/img/logo/pr/socialsamosa.jpg') }}"
                                        alt="social samosa" class="w-100">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <img src="{{ asset('frontend-assets/img/logo/pr/storyboard.jpg') }}"
                                        alt="story board" class="w-100">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <img src="{{ asset('frontend-assets/img/logo/pr/adgully.jpg') }}" alt="adgully"
                                        class="w-100">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <img src="{{ asset('frontend-assets/img/logo/pr/yf.jpg') }}" alt="yf"
                                        class="w-100">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <img src="{{ asset('frontend-assets/img/logo/pr/etbeq.jpg') }}" alt="ET"
                                        class="w-100">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <img src="{{ asset('frontend-assets/img/logo/pr/4p.jpg') }}" alt="PR"
                                        class="w-100">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <img src="{{ asset('frontend-assets/img/logo/pr/bmi.jpg') }}" alt="BMI"
                                        class="w-100">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <img src="{{ asset('frontend-assets/img/logo/pr/mb.jpg') }}" alt="MB"
                                        class="w-100">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <img src="{{ asset('frontend-assets/img/logo/pr/prsync.jpg') }}" alt="PRSYNC"
                                        class="w-100">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="">
                                    <img src="{{ asset('frontend-assets/img/logo/pr/zada.jpg') }}" alt="ZADA"
                                        class="w-100">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @push('scripts')
                <script>
                    new Swiper(".prSwiper", {
                        loop: true,
                        autoplay: {
                            delay: 1000,
                            disableOnInteraction: false,
                        },
                        slidesPerView: 2,
                        spaceBetween: 20,
                        breakpoints: {
                            640: {
                                slidesPerView: 4,
                                spaceBetween: 20,
                            },
                            768: {
                                slidesPerView: 5,
                                spaceBetween: 40,
                            },
                            1024: {
                                slidesPerView: 6,
                                spaceBetween: 50,
                            },
                            1400: {
                                slidesPerView: 6,
                                spaceBetween: 50,
                            },
                        },
                    })
                </script>
                @endpush
            </div>
        </div>
    </section>

    {{-- Blogs --}}
    <section class="th-blog-wrapper space-top space-extra-bottom" id="about-sec5">
        <div class="container">
            <div class="title-area text-center mb-25">
                <h2 class="fw-bold sec-title my-3" data-aos="fade-up" data-aos-delay="100">
                    <span class="text-orange">Sociopedia</span><br>A library that goes beyond the brief
                </h2>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    @foreach ($blogs as $blog)

                    <div class="swiper-slide">
                        <div class="box-blog th-blog blog-single has-post-thumbnail">
                            <div class="blog-img box-blog w-100">
                                <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}">
                                    @php
                                    $images = is_string($blog->images) ? json_decode($blog->images, true) : $blog->images;
                                    $firstImage = $images[0] ?? null;
                                    @endphp

                                    @if (!empty($blog->imagefile1))
                                    <img src="{{ asset('frontend-assets/img/media/' . $blog->imagefile1) }}" alt="{{ $blog->title }}">
                                    @elseif (!empty($firstImage))
                                    <img src="{{ url('storage/app/public/' . $firstImage) }}" alt="{{ $blog->title }}">
                                    @else
                                    <img src="{{ url('storage/app/public/default.jpg') }}" alt="{{ $blog->title }}">
                                    @endif
                                </a>
                            </div>
                            <div class="blog-content content-padding">
                                <div class="blog-meta">
                                    <a href="#"><i class="fa-light fa-calendar"></i>
                                        {{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}
                                    </a>
                                    <a href="#"><i class="fa-light fa-tags"></i> {{ implode(', ', $blog->category_names->toArray()) }}</a>
                                </div>
                                <h3 class="blog-title blog-title-text">
                                    <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}">
                                        {{ $blog->card_title}}
                                    </a>
                                </h3>

                                <p class="blog-text d-none">{{ Str::limit(strip_tags($blog->content), 80) }}</p>
                                <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}"
                                    class="th-btn white-border th-icon th-radius">
                                    Read More <i class="fa-solid fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    @endforeach


                </div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>

    {{-- Contact --}}
    @push('scripts')
    {{-- <script>
        $(window).resize(function() {
            /*Bind an event handler to the "resize"*/
            if ($(window).width() < 786 || $(window).height() < 480) {
                gsap.to("#contact", {
                    onStart: () => {
                        console.log("Started");
                        new bootstrap.Modal(document.getElementById("homeContactModal"), {}).show();
                    },
                    scrollTrigger: {
                        trigger: "#contact",
                        start: "0% 50%",
                        end: "+=1",
                        // markers: true,
                        pin: true,
                        scrub: true
                    }
                })
            }
        })
    </script> --}}
    @endpush
    @include('Frontend.partial.contactUs')

    <style>
        label {
            font-weight: 600;
        }
    </style>
    <div class="modal fade d-none" id="homeContactModal" tabindex="-1" aria-labelledby="homeContactModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title fs-5" id="homeContactModalLabel">Modal title</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body contact-form style2">
                    <form action="{{ route('contact.store') }}" method="POST" class="">
                        @csrf

                        <div class="row g-2">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" id="name" placeholder="Enter your Name"
                                    value="{{ old('name') }}">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                {{-- <i class="fas fa-envelope"></i> --}}
                                <label for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="email" placeholder="Enter your Email"
                                    value="{{ old('email') }}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                {{-- <i class="fal fa-phone"></i> --}}
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                    name="phone" id="phone" placeholder="Enter your Phone"
                                    value="{{ old('phone') }}">
                                @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">

                                <label for="service">Service you want?</label>
                                <select class="form-select @error('service') is-invalid @enderror" id="service"
                                    name="service">
                                    <option selected disabled>Choose an option</option>
                                    <option value="Search Engine Optimization">Search Engine Optimization</option>
                                    <option value="Website Development">Website Development</option>
                                    <option value="Social Media">Social Media</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="Conetnt Marketing">Conetnt Marketing</option>
                                    <option value="SEM">Performance Marketing</option>
                                    <option value="Photography & Video Production">Photography & Video Production
                                    </option>
                                </select>

                                @error('service')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">

                                <label for="budget">Marketing Budget</label>
                                <select class="form-select @error('budget') is-invalid @enderror" id="budget"
                                    name="budget">
                                    <option selected disabled>Choose an option</option>
                                    <option value="Under ₹ 50000">Under ₹ 50,000</option>
                                    <option value="₹ 50,000 - ₹ 1,00,000">₹ 50,000 - ₹ 1,00,000</option>
                                    <option value="Above ₹ 1,00,000">Above ₹ 1,00,000</option>
                                    <option value="Have not Estimated Yet">Have not Estimated Yet</option>
                                </select>
                                @error('budget')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">

                                <label for="aboutUs">How did you hear about Us?</label>
                                <select class="form-select @error('aboutUs') is-invalid @enderror" id="aboutUs"
                                    name="aboutUs">
                                    <option selected disabled>Choose an option</option>
                                    <option value="Through Search Engines(Google, Bing etc.)">Through Search
                                        Engines(Google, Bing etc.)</option>
                                    <option value="Social Media(Facebook, Instagram etc.)">Social Media(Facebook,
                                        Instagram etc.)</option>
                                    <option value="Word of Mouth/ Referral">Word of Mouth/ Referral</option>
                                    <option value="Other">Other</option>
                                </select>
                                @error('aboutUs')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group col-12">

                                <label for="messageforus">Your Message</label>
                                <textarea class="form-control @error('messageforus') is-invalid @enderror" id="messageforus"
                                    placeholder="Enter your message" rows="4" name="messageforus"></textarea>
                                {{-- <i class="fal fa-pencil"></i> --}}
                                @error('messageforus')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 form-group mb-0 text-center">
                                <button class="th-btn th-radius">Submit Message</button>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            {{-- <i class="fas fa-envelope"></i> --}}
                            <label for="email">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                name="email" id="email" placeholder="Enter your Email"
                                value="{{ old('email') }}">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            {{-- <i class="fal fa-phone"></i> --}}
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                name="phone" id="phone" placeholder="Enter your Phone"
                                value="{{ old('phone') }}">
                            @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">

                            <label for="service">Service you want?</label>
                            <select class="form-select @error('service') is-invalid @enderror" id="service"
                                name="service">
                                <option selected disabled>Choose an option</option>
                                <option value="Search Engine Optimization">Search Engine Optimization</option>
                                <option value="Website Development">Website Development</option>
                                <option value="Social Media">Social Media</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Conetnt Marketing">Conetnt Marketing</option>
                                <option value="SEM">Performance Marketing</option>
                                <option value="Photography & Video Production">Photography & Video Production
                                </option>
                            </select>

                            @error('service')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">

                            <label for="budget">Marketing Budget</label>
                            <select class="form-select @error('budget') is-invalid @enderror" id="budget"
                                name="budget">
                                <option selected disabled>Choose an option</option>
                                <option value="Under ₹ 25000">Under ₹ 25000</option>
                                <option value="₹ 25,000 - ₹ 1,00,000">₹ 25,000 - ₹ 1,00,000</option>
                                <option value="Above ₹ 1,00,000">Above ₹ 1,00,000</option>
                                <option value="Have not Estimated Yet">Have not Estimated Yet</option>
                            </select>
                            @error('budget')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">

                            <label for="aboutUs">How did you hear about Us?</label>
                            <select class="form-select @error('aboutUs') is-invalid @enderror" id="aboutUs"
                                name="aboutUs">
                                <option selected disabled>Choose an option</option>
                                <option value="Through Search Engines(Google, Bing etc.)">Through Search
                                    Engines(Google, Bing etc.)</option>
                                <option value="Social Media(Facebook, Instagram etc.)">Social Media(Facebook,
                                    Instagram etc.)</option>
                                <option value="Word of Mouth/ Referral">Word of Mouth/ Referral</option>
                                <option value="Other">Other</option>
                            </select>
                            @error('aboutUs')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-12">

                            <label for="messageforus">Your Message</label>
                            <textarea class="form-control @error('messageforus') is-invalid @enderror" id="messageforus"
                                placeholder="Enter your message" rows="4" name="messageforus"></textarea>
                            {{-- <i class="fal fa-pencil"></i> --}}
                            @error('messageforus')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 form-group mb-0 text-center">
                            <button class="th-btn th-radius">Submit Message</button>
                        </div>
                </div>

                </form>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection

@push('scripts')
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            // when window width is >= 0px
            0: {
                slidesPerView: 1,
            },
            // when window width is >= 768px
            768: {
                slidesPerView: 2,
            },
            // when window width is >= 992px
            992: {
                slidesPerView: 3,
            }
        }
    });
    // services tab
    const tabTriggers = document.querySelectorAll('[data-bs-toggle="pill"]');

    tabTriggers.forEach(trigger => {
        trigger.addEventListener('shown.bs.tab', (event) => {
            const targetPaneId = event.target.getAttribute('data-bs-target');
            const targetPane = document.querySelector(targetPaneId);

            // Animate text content
            const textCols = targetPane.querySelectorAll('.col-lg-6.col-12.side-padding-mbl');
            textCols.forEach(col => {
                col.classList.remove('animate-slide-in-right');
                void col.offsetWidth;
                col.classList.add('animate-slide-in-right');
            });

            // Animate images
            const images = targetPane.querySelectorAll('.page-img img');
            if (images.length === 1) {
                images[0].classList.remove('animate-zoom-in');
                void images[0].offsetWidth;
                images[0].classList.add('animate-zoom-in');
            } else if (images.length === 2) {
                images[0].classList.remove('animate-slide-in-left');
                images[1].classList.remove('animate-slide-in-right');
                void images[0].offsetWidth; // force reflow
                void images[1].offsetWidth;
                images[0].classList.add('animate-slide-in-left');
                images[1].classList.add('animate-slide-in-right');
            }
        });
    });
    // services tab end
</script>
@endpush