@extends('Frontend.layout.app')
@section('custome-style')
<!-- Plugin: LightGallery -->
<!-- Plugin: LightGallery -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/css/lightgallery-bundle.min.css"
    integrity="sha512-nUqPe0+ak577sKSMThGcKJauRI7ENhKC2FQAOOmdyCYSrUh0GnwLsZNYqwilpMmplN+3nO3zso8CWUgu33BDag=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js"
    integrity="sha512-jEJ0OA9fwz5wUn6rVfGhAXiiCSGrjYCwtQRUwI/wRGEuWRZxrnxoeDoNc+Pnhx8qwKVHs2BRQrVR9RE6T4UHBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.umd.min.js"
    integrity="sha512-VOQBxCIgNssJrB8+irZF7L8MvfpAshegc36C3H5QD7vmibXM4uCNaqJIaSNatD2z2ZQQJSx0k+q+m+xsSPp4Xw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/thumbnail/lg-thumbnail.umd.min.js"
    integrity="sha512-dc8xJSGs0ib9uo0fLT/v4wp2LG7+4OSzc+UpFiIKiv6QP/e4hZH/S8manUCTtO3tNVGzcje8uJjSdL+NH29blQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/zoom/lg-zoom.umd.min.js"
    integrity="sha512-OUF2jbRheQR5yXPCvXN71udWa5cvwPf+shcXM+5GrW1vtNurTn7az8LCP3hS50gm17ULXdh3cdkhiPa0Qqyczw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
    .breadcumb-title {
        color: #000000 !important;
    }

    #work-culture #about-sec {
        padding: 8px;
    }

    #work-culture .about-area2 .sec-para,
    #key-point-about-us .sec-para {
        line-height: 28px !important;
        font-size: 20px !important;
        letter-spacing: .10px !important;
        color: #797E88 !important;
    }

    /* key-point section 2 start */
    #key-point-about-us {
        background-color: #F5F5F5;
        padding: 90px 0px;
    }

    #key-point-about-us .card {
        position: relative;
        transition: all 0.3s ease;
        border-radius: 20px;
        /* box-shadow: 0 4px 8px rgba(0,0,0,0.1); */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: 2px solid transparent;
        padding: 20px 30px;
        height: 140px;
    }

    .card::before,
    .card::after {
        content: '';
        position: absolute;
        width: 50px;
        height: 2px;
        /* background-color: #106c97; */
        background: linear-gradient(45deg, #0a415a, #106c97);

        transition: width 0.3s ease;
        border-radius: 20px;
    }

    .card::before {
        top: 0;
        right: 0;
        border-top-right-radius: 20px;
    }

    .card::after {
        bottom: 0;
        left: 0;
        border-bottom-left-radius: 20px;
    }

    .card:hover::before,
    .card:hover::after {
        width: 100%;
    }

    #key-point-about-us .card-top-left,
    #key-point-about-us .card-bottom-right {
        position: absolute;
        width: 2px;
        height: 50px;
        /* background-color: #106c97; */
        background: linear-gradient(45deg, #0a415a, #106c97);
        transition: height 0.3s ease;
        border-radius: 20px;
    }

    #key-point-about-us .card-top-left {
        bottom: 0;
        left: 0;
        border-top-left-radius: 20px;
    }

    #key-point-about-us .card-bottom-right {
        top: 0;
        right: 0;
        border-bottom-right-radius: 20px;
    }

    #key-point-about-us .card:hover .card-top-left,
    #key-point-about-us .card:hover .card-bottom-right {
        height: 100%;
    }

    #key-point-about-us .card-icon {
        font-size: 40px;
        color: #106c97;
    }

    #key-point-about-us .card-title {
        font-weight: bold;
        text-align: left;
        font-size: 1.35rem;
    }

    #key-point-about-us .card-text {
        font-size: 16px;
        line-height: 1.50;
        text-align: left;
    }

    #key-point-about-us .position-absolute-img {
        position: absolute;
        top: -30px;
        /* z-index: 200; */
        background: antiquewhite;
        padding: 1rem;
        border-radius: 10px;
        transition: all 0.3s ease;
        border: 1px solid gainsboro;
    }

    #key-point-about-us .card:hover .position-absolute-img {
        background: antiquewhite;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border: 2px solid transparent;

    }

    #key-point-about-us .position-absolute-text {
        position: absolute;
        /* bottom: 11px; */
        bottom: 25px;
    }

    @media only screen and (max-width: 600px) {
        #key-point-about-us {
            padding: 50px 0px;
        }
    }

    /* key point section 2 end */

    /* gallary :start */
    .garally .filter-menu .tab-btn.active {
        border-radius: 27px !important;
        padding: 10px 25px !important;
        border: 1px solid black !important;
        background-color: #106c97;
        color: white;
        font-weight: 600;
        border: none !important;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background: #106c97;
    }

    .garally .filter-menu .tab-btn {
        border-radius: 27px !important;
        padding: 10px 25px !important;
        /* box-shadow: 0 4px 8px rgba(0,0,0,0.1); */
        /* border: 1px solid black; */
        outline: none;
        /* border: 2px solid transparent; */
    }

    .garally .filter-menu .tab-btn:not(:last-child):before {
        height: 0px;
    }

    .garally .garally-row-height {
        height: 748px;
    }

    .portfolio-area {}

    .garally .portfolio-area::-webkit-scrollbar {
        width: 3px;
        height: 30px;
    }

    /* Track */
    .garally .portfolio-area::-webkit-scrollbar-track {
        box-shadow: inset 0 0 5px grey;
        border-radius: 10px;
    }

    /* Handle */
    .garally .portfolio-area::-webkit-scrollbar-thumb {
        background: #106c97;
        border-radius: 10px;
    }

    /* Handle on hover */
    .garally .portfolio-area::-webkit-scrollbar-thumb:hover {
        background: #106c97;
    }

    .portfolio-area .filter-item {
        width: clamp(150px, 25%, 300px)
    }


    /* gallary end */
</style>
@endsection

@section('content')
<main id="work-culture">
    <section class="p-0" style="margin-top: 66px;">
        <div class="full-width">
            <picture>
                <source media="(min-width: 1400px)" srcset="{{ asset('frontend-assets/img/banners/work.jpg') }}"
                    class="w-100" loading="lazy">
                <img src="{{ asset('frontend-assets/img/banners/work.jpg') }}" alt="work-culture" class="w-100"
                    loading="lazy">
            </picture>
        </div>
    </section>
    <section class="overflow-hidden space">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content breadcrumb-light">
                        <h2 class="breadcumb-title">Work Culture</h2>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li>Work Culture</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-area2 overflow-hidden pb-md-5 pb-3 pt-2" id="about-sec">
        <div class="container">
            <div class="row flex-row-reverse align-items-start">
                <div class="col-lg-6 mb-30 mb-xl-0">
                    <div class="imgBox img-box2 me-xl-4 mt-lg-60" data-aos="fade-right" data-aos-delay="100">
                        <div class="img1 th-anim mb-35">
                            <img src="{{ asset('frontend-assets/img/team/home.jpg') }}" class="w-100" alt="About"
                                loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="">
                        <div class="title-area mb-35">
                            <!-- <span class="sub-title sub-title4 style1 mb-4 mb-md-5">Why Choose Sociomark</span> -->
                            <h1 class="sec-title ">More than just a <span class="text-orange">Workplace</span> </h1>
                            <p class="mb-30 sec-para">At Sociomark, work feels less like a duty and more like a shared
                                passion.
                                Our culture is built on creativity, collaboration, and a healthy dose of everyday fun.
                                We believe that the best ideas are born when people feel valued, inspired, and empowered
                                to bring their whole selves to work. From brainstorming sessions that spark innovation
                                to team lunches, festive celebrations, and spontaneous laugh sessions, every day here is
                                a blend of hustle and heart. Together, we’re not just growing brands; we’re building a
                                workplace where growth, ownership, and good vibes are non-negotiable.</p>

                            <a href="{{ route('about') }}" class="th-btn th-icon">About Us<i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- <section class="key-point-about-us mb-md-5 mb-3 d-none" id="key-point-about-us">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-4 pe-md-5">
                    <div class="row gy-4 flex-column">
                        <div class="">
                            <div class="media-body">
                                <h2 class="box-title" data-aos="fade-down" data-aos-delay="100">
                                    <span class="text-themeRed text-xl md:text-3xl font-medium">What Make</span><br>
                                    <span
                                        class="text-themeBlue text-xl md:text-5xl font-semibold sec-title text-blue">Us
                                        Special?</span>
                                </h2>
                                <p class="sec-para" data-aos="fade-down" data-aos-delay="100">Experience, Expertise, and
                                    an Excellent team fuel our growth and make us unique. Our passion for building
                                    long-lasting partnerships with our clients makes us a forerunner in digital
                                    marketing.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-5 mt-md-0">
                    <div class="row justify-content-center gx-4 gy-5 ">
                       
                        <div class="col-md-4 col-6">
                            <div class="card text-center" data-aos="zoom-in" data-aos-delay="300">
                                <div class="card-top-left"></div>
                                <div class="card-bottom-right"></div>
                                <div class="position-absolute-img">
                                    <img src="{{ asset('frontend-assets/img/ourCulture/1.png') }}" alt=""
                                        loading="lazy">
                                </div>
                                <div class="position-absolute-text">
                                    <h5 class="card-title">24/7 Support</h5>
                                </div>
                            </div>
                        </div>
             
                        <div class="col-md-4 col-6">
                            <div class="card text-center" data-aos="zoom-in" data-aos-delay="400">
                                <div class="card-top-left"></div>
                                <div class="card-bottom-right"></div>
                                <div class="position-absolute-img" style="background-color: rgb(255 235 245);">
                                    <img src="{{ asset('frontend-assets/img/ourCulture/2.png') }}" alt="">
                                </div>
                                <div class="position-absolute-text">
                                    <h5 class="card-title">Top Guide</h5>
                                </div>
                            </div>
                        </div>
                      
                        <div class="col-md-4 col-6">
                            <div class="card text-center" data-aos="zoom-in" data-aos-delay="500">
                                <div class="card-top-left"></div>
                                <div class="card-bottom-right"></div>
                                <div class="position-absolute-img" style="background-color: rgb(252 243 233);">
                                    <img src="{{ asset('frontend-assets/img/ourCulture/3.png') }}" alt="">
                                </div>
                                <div class="position-absolute-text">
                                    <h5 class="card-title">Best Course</h5>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-md-4 col-6">
                            <div class="card text-center" data-aos="zoom-in" data-aos-delay="600">
                                <div class="card-top-left"></div>
                                <div class="card-bottom-right"></div>
                                <div class="position-absolute-img" style="background-color: rgb(238 251 229);">
                                    <img src="{{ asset('frontend-assets/img/ourCulture/4.png') }}" alt="">
                                </div>
                                <div class="position-absolute-text">
                                    <h5 class="card-title">24/7 Support</h5>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-md-4 col-6">
                            <div class="card text-center" data-aos="zoom-in" data-aos-delay="700">
                                <div class="card-top-left"></div>
                                <div class="card-bottom-right"></div>
                                <div class="position-absolute-img" style="background-color: rgb(252 243 233);">
                                    <img src="{{ asset('frontend-assets/img/ourCulture/5.png') }}" alt="">
                                </div>
                                <div class="position-absolute-text">
                                    <h5 class="card-title">Top Guide</h5>
                                </div>
                            </div>
                        </div>
                 
                        <div class="col-md-4 col-6">
                            <div class="card text-center" data-aos="zoom-in" data-aos-delay="800">
                                <div class="card-top-left"></div>
                                <div class="card-bottom-right"></div>
                                <div class="position-absolute-img">
                                    <img src="{{ asset('frontend-assets/img/ourCulture/6.png') }}" alt="">
                                </div>
                                <div class="position-absolute-text">
                                    <h5 class="card-title">Best Course</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!-- 
    <section class="space bg-grey d-none">
        <div class="container-fluid">
            <div class="section-vertical">
                <div class="">
                    <div class="title-area text-center">
                        <div class="shadow-title">Journey</div>
                        {{-- <span class="sub-title sub-title4 mb-4 mb-md-5">Our Journey<span></span></span> --}}
                        <h2 class="sec-title">Our <span class="text-orange">reMARKable Journey</span></h2>
                    </div>
                    <div class="row justify-content-center mb-4">
                        <div class="col-xxl-8 col-xl-9 col-lg-10 col-12">
                            <p data-aos="fade-left">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus ad sapiente aliquid,
                                molestias quae suscipit sed facilis quidem atque dolorem, distinctio, nihil porro!
                                Delectus,
                                incidunt vitae quidem iusto quam error?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="horizontal-scroll-wrapper">
                <svg class="background-svg" viewBox="0 0 1000 100">
                    <path id="svgPath" d="M0 50 C250 0, 750 100, 1000 50"></path>
                </svg>
                <div class="horizontal-container">
                    <div class="horizontal-section">
                        <div class="container">
                            <div class="title-area">
                                <div class="shadow-title">2017-18</div>
                                {{-- <span class="sub-title sub-title4 mb-4 mb-md-5">Our Journey<span></span></span> --}}
                                <h2 class="sec-title">From Co-working to Our Own Space</h2>
                            </div>
                            <ul>
                                <li>Along with 2 employees, started in a co-working space</li>
                                <li>Shifted to a mezzanine floor office in the same year</li>
                                <li>Moved into our new office with 8 employees in 2018</li>
                            </ul>
                        </div>
                    </div>
                    <div class="horizontal-section">
                        <div class="container">
                            <div class="title-area">
                                <div class="shadow-title">2019</div>
                                {{-- <span class="sub-title sub-title4 mb-4 mb-md-5">Our Journey<span></span></span> --}}
                                <h2 class="sec-title">Awards & Impactful Campaigns</h2>
                            </div>
                            <ul>
                                <li><a href="">Diageo Road to Safety</a></li>
                                <li>TAVF Awards 2019</li>
                                <li>Best Digital Marketing Campaign</li>
                                <li>Best Use of Social Network</li>
                                <li><a href="">Button Dabao Desh Banao</a></li>
                                <li>DigiPub Awards 2019</li>
                                <li>Best Use of Social Media</li>
                                <li>Social Samosa shoutout for our <a href="">Diageo X
                                        Network18</a> campaign <a href="">Road to
                                        Safety</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="horizontal-section">
                        <div class="container">
                            <div class="title-area">
                                <div class="shadow-title">2020</div>
                                {{-- <span class="sub-title sub-title4 mb-4 mb-md-5">Our Journey<span></span></span> --}}
                                <h2 class="sec-title">Specific <span class="text-blue">reMARKable
                                        Headline</span></h2>
                            </div>
                            <ul>
                                <li>Maintained social distancing through WFH in the COVID period
                                </li>
                                <li>Social Samosa shoutout for our <a href="">NODWIN
                                        Gaming X
                                        Cosplaygenie</a>'s
                                    Halloween Campaign</li>
                            </ul>
                        </div>
                    </div>
                    <div class="horizontal-section">
                        <div class="container">
                            <div class="title-area">
                                <div class="shadow-title">2021</div>
                                {{-- <span class="sub-title sub-title4 mb-4 mb-md-5">Our Journey<span></span></span> --}}
                                <h2 class="sec-title">Specific <span class="text-blue">reMARKable
                                        Headline</span></h2>
                            </div>
                            <ul>
                                <li>Shifted to a 2000 sq. ft. area office, overseeing Navi
                                    Mumbai's
                                    beautiful Palm Beach</li>
                            </ul>
                        </div>
                    </div>
                    <div class="horizontal-section">
                        <div class="container">
                            <div class="title-area">
                                <div class="shadow-title">2022</div>
                                {{-- <span class="sub-title sub-title4 mb-4 mb-md-5">Our Journey<span></span></span> --}}
                                <h2 class="sec-title">Specific <span class="text-blue">reMARKable
                                        Headline</span></h2>
                            </div>
                            <ul>
                                <li>Our reMARKable pool grew to 30+ employees</li>
                                <li>Our illustrations for <a href="">NODWIN Gaming</a>'s
                                    BGMS were collaborated
                                    with
                                    Star Sports India</li>
                            </ul>
                        </div>
                    </div>
                    <div class="horizontal-section">
                        <div class="container">
                            <div class="title-area">
                                <div class="shadow-title">2023</div>
                                {{-- <span class="sub-title sub-title4 mb-4 mb-md-5">Our Journey<span></span></span> --}}
                                <h2 class="sec-title">Recognized Leadership, Key Collaborations, In-House Media</h2>
                            </div>
                            <ul>
                                <li>Heta Baandal, our founder, was named one of the 21 Rising
                                    Business
                                    Leaders of India 2023 by Startup Reporter</li>
                                <li>Multiple PR features on platforms like AdGully, Afaqs &
                                    Brand
                                    Equity
                                </li>
                                <li>Our illustrations for <a href="">NODWIN Gaming</a>'s
                                    VCSA were collaborated
                                    with
                                    Hyundai India</li>
                                <li>Started our own in-house photography & videography section
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="horizontal-section">
                        <div class="container">
                            <div class="title-area">
                                <div class="shadow-title">2024</div>
                                {{-- <span class="sub-title sub-title4 mb-4 mb-md-5">Our Journey<span></span></span> --}}
                                <h2 class="sec-title">Specific <span class="text-blue">reMARKable
                                        Headline</span></h2>
                            </div>
                            <ul>
                                <li>Bagged our 1st international client</li>
                                <li>Agency Head of the Year - Women Disruptors 2024</li>
                                <li>Our Boss Lady Heta Baandal was recognized by AdGully</li>
                                <li>Our first Infinity Canvas video for <a href="">Navi Mumbai Municipal
                                        Corporation</a>
                                    was played in a Swachh Survekshan LIVE event </li>
                            </ul>
                        </div>
                    </div>
                    <div class="horizontal-section">
                        <div class="container">
                            <div class="title-area">
                                <div class="shadow-title">2025</div>
                                {{-- <span class="sub-title sub-title4 mb-4 mb-md-5">Our Journey<span></span></span> --}}
                                <h2 class="sec-title">Specific <span class="text-blue">reMARKable
                                        Headline</span></h2>
                            </div>
                            <ul>
                                <li>We are now a team of 50+ Employees</li>
                                <li> Multiple Social Media Dissect features for our clients -
                                    <a href="">Markets4you</a> & <a href="">CyberPowerPC</a>
                                </li>
                                <li>International Expansion</li>
                                <li>Opened an office in Dubai</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @push('scripts')
            <script>
                // Register the ScrollTrigger plugin with GSAP
                gsap.registerPlugin(ScrollTrigger);

                // Select the main elements
                const horizontalScrollWrapper = document.querySelector(".horizontal-scroll-wrapper");
                const horizontalContainer = document.querySelector(".horizontal-container");
                const sections = gsap.utils.toArray(".horizontal-section");
                const svgPath = document.getElementById("svgPath");

                // Get the total length of the SVG path for stroke animation
                const pathLength = svgPath.getTotalLength();

                // Set initial stroke properties for the SVG path to hide it
                // stroke-dasharray creates dashes along the path. Setting it to pathLength makes one long dash.
                // stroke-dashoffset shifts the start of the dash. Setting it to pathLength hides the dash completely.
                gsap.set(svgPath, {
                    strokeDasharray: pathLength,
                    strokeDashoffset: pathLength
                });

                // Calculate the total width of all horizontal sections combined
                // This is crucial for determining the exact horizontal scroll distance.
                let totalSectionsWidth = 0;
                sections.forEach(section => {
                    totalSectionsWidth += section.offsetWidth;
                });

                // The actual horizontal distance the container needs to move.
                // It's the total width of all sections minus one viewport width,
                // because the first section is already visible at the start.
                const horizontalMovementDistance = totalSectionsWidth - window.innerWidth;

                // Create a master GSAP timeline to synchronize all animations
                const masterTimeline = gsap.timeline();

                // Add the horizontal movement animation to the master timeline
                // We use 'x' for pixel-based translation.
                masterTimeline.to(horizontalContainer, {
                    x: -horizontalMovementDistance, // Move left by the calculated distance
                    ease: "none", // Linear ease for smooth scrubbing with scroll
                    duration: 1 // Relative duration within this timeline
                });

                // Add the SVG stroke animation to the master timeline
                // Animating strokeDashoffset from its full length (hidden) to 0 (fully drawn).
                // The '0' as the third parameter ensures this animation starts at the very beginning of the masterTimeline,
                // synchronizing it with the horizontal movement.
                masterTimeline.to(svgPath, {
                    strokeDashoffset: 0, // Draw the stroke completely
                    ease: "power1.inOut", // A nice ease for drawing effect
                    duration: 1 // Same relative duration as horizontal movement for perfect sync
                }, 0); // Start at the beginning of the masterTimeline

                // Attach ScrollTrigger to the master timeline
                ScrollTrigger.create({
                    trigger: horizontalScrollWrapper, // The element that defines the scroll area for pinning
                    pin: true, // Pin the wrapper to the viewport while the animation plays
                    scrub: 1, // Link animation to scroll (1 second delay to catch up)
                    snap: 1 / (sections.length - 1), // Snap to each section for a smooth landing
                    animation: masterTimeline, // Link this ScrollTrigger to our master timeline
                    // The 'end' defines how much vertical scroll is needed to complete the animation.
                    // We set it to the exact horizontal movement distance to avoid extra whitespace.
                    end: () => `+=${horizontalMovementDistance}`
                });
            </script>
            @endpush
        </div>
    </section> -->

    <section class="space bg-grey">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-8">
                    <div class="title-area text-center">
                        <div class="shadow-title">Journey</div>
                        {{-- <span class="sub-title sub-title4 mb-4 mb-md-5">Our Journey<span></span></span> --}}
                        <h2 class="sec-title  ">Our <span class="text-orange">reMARKable Journey</span></h2>
                    </div>
                </div>
            </div>

            <div class="process-cards-deck">
                <div class="process-mobile">
                    <div class="swiper journeySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="process-card style-01">
                                    <div class="box-wrap">
                                        <div class="box-badge">
                                            <div class="badge-content">2017</div>
                                        </div>
                                        <div class="box-content">
                                            {{-- <h2 class="box-title">Lorem ipsum dolor sit amet.</h2> --}}
                                            <div class="process-text">
                                                <div class="text-content">
                                                    <ul>
                                                        <li>Along with 2 employees, started in a co-working space</li>
                                                        <li>Shifted to a mezzanine floor office in the same year</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="process-card style-01">
                                    <div class="box-wrap">
                                        <div class="box-badge">
                                            <div class="badge-content">2018</div>
                                        </div>
                                        <div class="box-content">
                                            {{-- <h2 class="box-title">Lorem ipsum dolor sit amet.</h2> --}}
                                            <div class="process-text">
                                                <div class="text-content">
                                                    <ul>
                                                        <li>Moved into our new office with 8 employees</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="process-card style-01">
                                    <div class="box-wrap">
                                        <div class="box-badge">
                                            <div class="badge-content">2019</div>
                                        </div>
                                        <div class="box-content">
                                            {{-- <h2 class="box-title">Lorem ipsum dolor sit amet.</h2> --}}
                                            <div class="process-text">
                                                <div class="text-content">
                                                    <ul>
                                                        <li><a href="">Diageo Road to Safety</a></li>
                                                        <li>TAVF Awards 2019</li>
                                                        <li>Best Digital Marketing Campaign</li>
                                                        <li>Best Use of Social Network</li>
                                                        <li>Button Dabao Desh Banao</li>
                                                        <li>DigiPub Awards 2019</li>
                                                        <li>Best Use of Social Media</li>
                                                        <li>Social Samosa shoutout for our <a href="">Diageo X
                                                                Network18</a> campaign <a href="">Road to
                                                                Safety</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="process-card style-01">
                                    <div class="box-wrap">
                                        <div class="box-badge">
                                            <div class="badge-content">2020</div>
                                        </div>
                                        <div class="box-content">
                                            {{-- <h2 class="box-title">Lorem ipsum dolor sit amet.</h2> --}}
                                            <div class="process-text">
                                                <div class="text-content">
                                                    <ul>
                                                        <li>Maintained social distancing through WFH in the COVID period
                                                        </li>
                                                        <li>Social Samosa shoutout for our <a href="">NODWIN
                                                                Gaming X
                                                                Cosplaygenie</a>'s
                                                            Halloween Campaign</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="process-card style-01">
                                    <div class="box-wrap">
                                        <div class="box-badge">
                                            <div class="badge-content">2021</div>
                                        </div>
                                        <div class="box-content">
                                            {{-- <h2 class="box-title">Lorem ipsum dolor sit amet.</h2> --}}
                                            <div class="process-text">
                                                <div class="text-content">
                                                    <ul>
                                                        <li>Shifted to a 2000 sq. ft. area office, overseeing Navi
                                                            Mumbai's
                                                            beautiful Palm Beach</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="process-card style-01">
                                    <div class="box-wrap">
                                        <div class="box-badge">
                                            <div class="badge-content">2022</div>
                                        </div>
                                        <div class="box-content">
                                            {{-- <h2 class="box-title">Lorem ipsum dolor sit amet.</h2> --}}
                                            <div class="process-text">
                                                <div class="text-content">
                                                    <ul>
                                                        <li>Our reMARKable pool grew to 30+ employees</li>
                                                        <li>Our illustrations for <a href="">NODWIN Gaming</a>'s
                                                            BGMS were collaborated
                                                            with
                                                            Star Sports India</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="process-card style-01">
                                    <div class="box-wrap">
                                        <div class="box-badge">
                                            <div class="badge-content">2023</div>
                                        </div>
                                        <div class="box-content">
                                            {{-- <h2 class="box-title">Lorem ipsum dolor sit amet.</h2> --}}
                                            <div class="process-text">
                                                <div class="text-content">
                                                    <ul>
                                                        <li>Heta Baandal, our founder, was named one of the 21 Rising
                                                            Business
                                                            Leaders of India 2023 by Startup Reporter</li>
                                                        <li>Multiple PR features on platforms like AdGully, Afaqs &
                                                            Brand
                                                            Equity
                                                        </li>
                                                        <li>Our illustrations for <a href="">NODWIN Gaming</a>'s
                                                            VCSA were collaborated
                                                            with
                                                            Hyundai India</li>
                                                        <li>Started our own in-house photography & videography section
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="process-card style-01">
                                    <div class="box-wrap">
                                        <div class="box-badge">
                                            <div class="badge-content">2024</div>
                                        </div>
                                        <div class="box-content">
                                            {{-- <h2 class="box-title">Lorem ipsum dolor sit amet.</h2> --}}
                                            <div class="process-text">
                                                <div class="text-content">
                                                    <ul>
                                                        <li>Bagged our 1st international client</li>
                                                        <li>Agency Head of the Year - Women Disruptors 2024</li>
                                                        <li>Our Boss Lady Heta Baandal was recognized by AdGully</li>
                                                        <li>Our first Infinity Canvas video for Navi Mumbai Municipal
                                                            Corporation
                                                            was played in a Swachh Survekshan LIVE event </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="process-card style-01">
                                    <div class="box-wrap">
                                        <div class="box-badge">
                                            <div class="badge-content">2025</div>
                                        </div>
                                        <div class="box-content">
                                            {{-- <h2 class="box-title">Lorem ipsum dolor sit amet.</h2> --}}
                                            <div class="process-text">
                                                <div class="text-content">
                                                    <ul>
                                                        <li>We are now a team of 50+ Employees</li>
                                                        <li> Multiple Social Media Dissect features for our clients -
                                                            <a href="">Markets4you</a> & <a
                                                                href="">CyberPowerPC</a>
                                                        </li>
                                                        <li>International Expansion</li>
                                                        <li>Opened an office in Dubai</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination">
                        </div>
                        {{-- <span class="swiper-progress-percentage">0%</span> --}}
                    </div>
                    @push('scripts')
                    <script>
                        new Swiper('.journeySwiper', {
                            spaceBetween: 10,
                            slidesPerView: 1,
                            pagination: {
                                el: ".swiper-pagination",
                                type: "progressbar",
                            },
                            // autoplay: {
                            //     delay: 2500,
                            //     disableOnInteraction: false,
                            // },
                            breakpoints: {
                                768: {
                                    slidesPerView: 2,
                                    spaceBetween: 20,
                                },
                                1024: {
                                    slidesPerView: 3,
                                    spaceBetween: 30,
                                },
                            },
                        })
                    </script>
                    @endpush
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="overflow-hidden arrow-wrap" id="team-sec">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-end d-none">
                <div class="col-lg-7">
                    <div class="title-area text-center text-lg-start pe-xl-5">
                        <div class="shadow-title style3">Team</div>
                        <span class="sub-title sub-title4 style1 mb-4 mb-md-5">Expert Team Members</span>
                        <h2 class="sec-title ">Building Our Future</h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <p class="ps-xl-5 text-center text-lg-start">We start with a comprehensive analysis of your
                        business, industry, target audience, and current
                        digital presence. Through this process, we identify opportunities.</p>
                    <div class="sec-btn text-end">
                        <div class="icon-box">
                            <button data-slider-prev="#teamSwiper" class="slider-arrow prev style4 default"><i
                                    class="fas fa-arrow-left"></i></button>
                            <button data-slider-next="#teamSwiper" class="slider-arrow next style4 default"><i
                                    class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div> <!-- / Title row -->

            {{-- <div class="swiper teamSwiper d-none">
                <div class="swiper-wrapper">
                    @for ($i = 0; $i < 10; $i++)
                        <div class="swiper-slide">
                        <div class="th-team team-card style1 mb-3">
                            <div class="box-img">
                                <img src="https://placehold.co/300x400" alt="Team">
                            </div>
                            <div class="box-content">
                                <div>
                                    <h3 class="box-title"><a href="team-details.html">Lorem, ipsum.</a>
                                    </h3>
                                    <span class="team-desig">Web Developer</span>
                                </div>
                                <div class="team-social">
                                    <div class="icon-btn"><i class="fa-light fa-plus"></i></div>
                                    <div class="th-social">
                                        <a target="_blank" href="https://facebook.com/"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i
                                                class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i
                                                class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                </div>
                @endfor
            </div> --}}
        </div>
        @push('scripts')
        <script>
            new Swiper(".teamSwiper", {
                spaceBetween: 30,
                slidesPerView: 4,
                loop: true,
                navigation: {
                    nextEl: ".slider-arrow.next",
                    prevEl: ".slider-arrow.prev",
                },
            })
        </script>
        @endpush
        <div class="video-wrapper lazy-loading">
            <video loop muted autoplay class="w-100"
                poster="{{ asset('frontend-assets/img/posters/team_video_poster.jpg') }}">
                <source src="{{ asset('frontend-assets/team-video.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        </div>
    </section>

    <section class="position-relative space garally bg-grey" id="portfolio-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <!-- <div class="shadow-title">Culture</div> -->
                        <!-- <span class="sub-title sub-title4 mb-4 mb-md-5">Our Culture<span></span></span> -->
                        <h2 class="sec-title mb-2">Work <span class="text-orange">Culture</span></h2>
                    </div>
                </div>
            </div>
            <div class="portfolio-area">
                <div class="filter-menu filter-menu-active mt-5 mb-5">
                    <button data-filter="*" class="tab-btn active" type="button">All Moments</button>
                    <button data-filter=".cat-2025" class="tab-btn" type="button">2025</button>
                    <button data-filter=".cat-2024" class="tab-btn" type="button">2024</button>
                    <button data-filter=".cat-2022, .cat-2023" class="tab-btn" type="button">2023 - 2022</button>
                    <button data-filter=".cat-2020" class="tab-btn" type="button">2022 - 2018</button>
                    <button data-filter=".cat-old" class="tab-btn" type="button">2017</button>
                </div>
                <div class="masonary-gallery-active" id="masonary-gallery">
                    @for ($i = 1; $i <= 25; $i++)
                        <a href="{{ asset('frontend-assets/img/gallery/workplace/2020 (' . $i . ').jpg') }}"
                        class="filter-item mb-3 cat-2020 project-item box-img">
                        <img src="{{ asset('frontend-assets/img/gallery/workplace/2020 (' . $i . ').jpg') }}"
                            class="w-100" alt="Workplace 2020 - Image {{ $i }}" loading="lazy">
                        </a>
                        @endfor
                        @for ($i = 1; $i <= 6; $i++)
                            <a href="{{ asset('frontend-assets/img/gallery/workplace/2022 (' . $i . ').jpg') }}"
                            class="filter-item mb-3 cat-2022 project-item box-img">
                            <img src="{{ asset('frontend-assets/img/gallery/workplace/2022 (' . $i . ').jpg') }}"
                                class="w-100" alt="Workplace 2022 - Image {{ $i }}" loading="lazy">
                            </a>
                            @endfor
                            @for ($i = 1; $i <= 3; $i++)
                                <a href="{{ asset('frontend-assets/img/gallery/workplace/2023 (' . $i . ').jpg') }}"
                                class="filter-item mb-3 cat-2023 project-item box-img">
                                <img src="{{ asset('frontend-assets/img/gallery/workplace/2023 (' . $i . ').jpg') }}"
                                    class="w-100" alt="Workplace 2023 - Image {{ $i }}" loading="lazy">
                                </a>
                                @endfor
                                @for ($i = 1; $i <= 37; $i++)
                                    <a href="{{ asset('frontend-assets/img/gallery/workplace/2024 (' . $i . ').jpg') }}"
                                    class="filter-item mb-3 cat-2024 project-item box-img">
                                    <img src="{{ asset('frontend-assets/img/gallery/workplace/2024 (' . $i . ').jpg') }}"
                                        class="w-100" alt="Workplace 2024 - Image {{ $i }}" loading="lazy">
                                    </a>
                                    @endfor
                                    @for ($i = 1; $i <= 22; $i++)
                                        <a href="{{ asset('frontend-assets/img/gallery/workplace/2025 (' . $i . ').jpg') }}"
                                        class="filter-item mb-3 cat-2025 project-item box-img">
                                        <img src="{{ asset('frontend-assets/img/gallery/workplace/2025 (' . $i . ').jpg') }}"
                                            class="w-100" alt="Workplace 2025 - Image {{ $i }}" loading="lazy">
                                        </a>
                                        @endfor
                </div>
                <!-- <div class="project-btn mt-60"><a href="portfolio.html" class="th-btn th-radius">View All Portfolio</a>
                                                                                                                                                                                                                </div> -->
                @push('scripts')
                <script>
                    $(".masonary-gallery-active").imagesLoaded(function() {
                        var $filter = ".masonary-gallery-active",
                            $filterItem = ".filter-item",
                            $filterMenu = ".filter-menu-active";

                        if ($($filter).length > 0) {
                            var $grid = $($filter).isotope({
                                itemSelector: $filterItem,
                                filter: "*",
                                masonry: {
                                    // use outer width of grid-sizer for columnWidth

                                    gutter: 24,
                                    columnWidth: 4,
                                    fitWidth: true
                                    // horizontalOrder: true
                                },
                            });

                            // filter items on button click
                            $($filterMenu).on("click", "button", function() {
                                var filterValue = $(this).attr("data-filter");
                                $grid.isotope({
                                    filter: filterValue,
                                });
                            });

                            // Menu Active Class
                            $($filterMenu).on("click", "button", function(event) {
                                event.preventDefault();
                                $(this).addClass("active");
                                $(this).siblings(".active").removeClass("active");
                            });
                        }

                    }).progress(function() {

                    });
                    var gallery = lightGallery(document.getElementById('masonary-gallery'), {
                        plugins: [lgZoom, lgThumbnail],
                        speed: 500,
                    });
                </script>
                @endpush
            </div>
        </div>
    </section>
</main>
@endsection