@extends('Frontend.layout.app')

@section('custome-style')
<style>
    #about-us #about-process,
    #about-us #contact {
        /* background: radial-gradient(ellipse at top, #fff, transparent), radial-gradient(40% 40% at 50% 25%, #75b4d1, transparent), radial-gradient(ellipse at bottom, #fff, transparent); */
    }

    #our-founder,
    #about-flip {
        background-color: #f5f5f5
    }

    
</style>
@endsection
@section('content')
<main id="about-us">
    <div class="breadcumb-wrapper p-0">
        <div class="">
            <div class="w-100" style="height: 70vh;">
                <video playsinline src="{{ asset('frontend-assets/about.mp4') }}" loop autoplay muted class="w-100 h-100"
                    style="object-fit: cover;"></video>
            </div>
        </div>
    </div>
    <div class="about-area2 mb-md-5 mt-md-5 mt-5 md-5 overflow-hidden" id="about-sec">
        <div class="container">
            <div class="row align-items-end justify-content-center">
                <div class="col-lg-10 col-12 d-flex justify-content-center align-items-center flex-column">
                    <div class="title-area mb-md-3 mb-2 mt-n1">
                        <!-- <h2 class="sec-title text-center "> Our Comprehensive International SEO Solutions</h2> -->
                        <h1 class="text-center fw-bold sec-title my-3" data-aos="zoom-in" data-aos-delay="100">
                            Your Brand’s Digital Partner, <br><span class="text-blue"> Every Step of the Way</span>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-12 d-flex justify-content-center align-items-center flex-column">
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="100">
                        At Sociomark, we don’t believe in one-size-fits-all. For over 8 years, we’ve partnered with
                        brands across India and beyond—crafting tailored digital strategies that are as unique as their
                        stories. Be it SEO, social media, performance marketing, or full-stack development, our approach
                        is rooted in listening first, executing second, and always delivering what truly works.
                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="100">
                        As a full-service digital marketing agency, we bring together creativity, data, and strategy
                        under one roof. For us, success isn’t measured by vanity metrics—it's measured by real impact
                        and lasting relationships. While the world chases trends, we build brands with purpose and
                        precision. That’s what makes us truly reMARKable.
                    </p>
                </div>
                <div class="col-lg-9 col-12 d-flex justify-content-center align-items-center flex-column">
                    <div class="title-area mb-md-3 mb-2 mt-n1">
                        <!-- <h2 class="sec-title text-center "> Our Comprehensive International SEO Solutions</h2> -->
                        <h1 class="text-center fw-bold sec-title my-3" data-aos="zoom-in" data-aos-delay="100">
                            What <span class="text-blue">Drives Us</span>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-12 d-flex justify-content-center align-items-center flex-column">
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="100">
                        We're not just a team—we're a collective of curious minds, passionate storytellers, strategic
                        thinkers, and design junkies. Our power lies in how we mix insight with imagination and strategy
                        with soul. From 8 years of building brands across industries, we’ve learned that meaningful
                        marketing comes from meaningful intent.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="position-relative overflow-hidden space overflow-hidden d-none" id="process-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area text-center">
                        <div class="shadow-title">Process</div>
                        <span class="sub-title sub-title4 mb-4 mb-md-5">Work Process<span></span></span>
                        <h2 class="sec-title">From Brief to <span class="text-blue">Brilliance</span></h2>
                    </div>
                </div>
            </div>
            <div class="step-wrap">
                <div class="row g-3 g-md-4">
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="process-card">
                            <div class="box-wrapp">
                                <div class="box-icon">
                                    <img src="{{ asset('frontend-assets/img/icon/about/Pick.png') }}" alt="icon">
                                </div>
                                {{-- <div class="box-shape"><img src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                                alt="">
                            </div>
                            <div class="box-number">
                                01 </div> --}}
                        </div>
                        <div class="box-content">
                            <h2 class="box-title">Pick What You Need</h2>
                            <p class="box-text">Choose the service that fits your brand’s current goals.</p>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <div class="process-card">
                        <div class="box-wrapp">
                            <div class="box-icon">
                                <img src="{{ asset('frontend-assets/img/icon/about/Vision.png') }}" alt="icon">
                            </div>
                            {{-- <div class="box-shape"><img src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                            alt="">
                        </div>
                        <div class="box-number">
                            02 </div> --}}
                    </div>
                    <div class="box-content">
                        <h2 class="box-title">Share Your Vision</h2>
                        <p class="box-text">From campaign goals to creative vibes, the more you share, the
                            better we plan.</p>

                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
                <div class="process-card">
                    <div class="box-wrapp">
                        <div class="box-icon">
                            <img src="{{ asset('frontend-assets/img/icon/about/Talk.png') }}" alt="icon">
                        </div>
                        {{-- <div class="box-shape"><img src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                        alt="">
                    </div>
                    <div class="box-number">
                        03 </div> --}}
                </div>
                <div class="box-content">
                    <h2 class="box-title">Let’s Talk</h2>
                    <p class="box-text">We’ll schedule a call to align on vision, ideas, and execution.</p>

                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 col-12">
            <div class="process-card">
                <div class="box-wrapp">
                    <div class="box-icon">
                        <img src="{{ asset('frontend-assets/img/icon/about/Alive.png') }}" alt="icon">
                    </div>
                    {{-- <div class="box-shape"><img src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                    alt="">
                </div>
                <div class="box-number">
                    04 </div> --}}
            </div>
            <div class="box-content">
                <h2 class="box-title">Watch It Come Alive</h2>
                <p class="box-text"> Get the final solution, tailored to your brief and ready to roll.
                </p>

            </div>
        </div>
        </div>
        <!--<div class="col-xl-4 col-md-6 col-12">
                                                                                            <div class="process-card">
                                                                                                <div class="box-wrapp">
                                                                                                    <div class="box-icon">
                                                                                                        <img src="{{ asset('frontend-assets/img/icon/process_1_2.svg') }}" alt="icon">
                                                                                                    </div>
                                                                                                    <div class="box-shape"><img src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                                                                                                            alt=""></div>
                                                                                                    <div class="box-number">
                                                                                                        05 </div>
                                                                                                </div>
                                                                                                <div class="box-content">
                                                                                                    <h2 class="box-title">Plan Customization</h2>
                                                                                                    <p class="box-text">Conduct thorough market of the research to the fast target audience
                                                                                                        behaviors. Submit as many design tasks</p>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-xl-4 col-md-6 col-12">
                                                                                            <div class="process-card">
                                                                                                <div class="box-wrapp">
                                                                                                    <div class="box-icon">
                                                                                                        <img src="{{ asset('frontend-assets/img/icon/process_1_3.svg') }}"
                                                                                                            alt="icon">
                                                                                                    </div>
                                                                                                    <div class="box-shape"><img src="{{ asset('frontend-assets/img/icon/arrow.png') }}"
                                                                                                            alt=""></div>
                                                                                                    <div class="box-number">
                                                                                                        06 </div>
                                                                                                </div>
                                                                                                <div class="box-content">
                                                                                                    <h2 class="box-title">Finished &amp; User Testing</h2>
                                                                                                    <p class="box-text">Conduct thorough market of the research to the fast target audience
                                                                                                        behaviors. Submit as many design tasks</p>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>-->
        </div>
        </div>
        </div>
    </section>

    <style>
        li {
            color: black;
        }
    </style>

    <section class="overflow-hidden mb-md-3 mt-md-3 mt-0 md-0 bg-smoke2" id="about-process">
        <div class="container process-container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title-area text-center">
                        <!-- <div class="shadow-title">Process</div> -->
                        <!-- <span class="sub-title sub-title4 mb-4 mb-md-5">Work Process<span></span></span> -->
                        <h2 class="sec-title  ">From Brief to <span class="text-blue">Brilliance</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center gy-5 mt-md-4 mt-2">
                <!-- Step 1 -->
                <div class="col-md-3 col-sm-6 col-12 process-step zig-down" data-aos="fade-up" data-aos-delay="300">

                    <div class="img">
                        <div class="shadow-title">01</div>
                        <div class=" icon ">
                            <img src="{{ asset('frontend-assets/img/icon/about/Pick.png') }}" alt="">
                        </div>
                    </div>
                    <div class="text mt-1 mt-3 d-flex justify-content-center align-items-center flex-column">
                        <h4 class="sub-sec-title">Pick What You Need</h4>
                        <p class="sec-para">Choose the service that fits your brand’s current goals.</p>
                    </div>
                </div>

                <!-- Step 2 (reversed) -->
                <div class="col-md-3 col-sm-6 col-12 process-step d-flex flex-column-reverse flex-md-column zig-up"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="text d-flex justify-content-center align-items-center flex-column">
                        <h4 class="sub-sec-title">Share Your Vision</h4>
                        <p class="sec-para">From campaign goals to creative vibes, the more you share, the better we
                            plan.</p>
                    </div>
                    <div class="img mt-0 mt-md-3">
                        <div class="shadow-title">02</div>

                        <div class="icon">
                            <img src="{{ asset('frontend-assets/img/icon/about/Vision.png') }}" alt="">
                        </div>

                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-md-3 col-sm-6 col-12 process-step zig-down" data-aos="fade-up" data-aos-delay="500">
                    <div class="img ">
                        <div class="shadow-title">03</div>
                        <div class="icon">
                            <img src="{{ asset('frontend-assets/img/icon/about/Talk.png') }}" alt="">
                        </div>
                    </div>
                    <div class="text mt-1 mt-3 d-flex justify-content-center align-items-center flex-column">
                        <h4 class="sub-sec-title">Let’s Talk</h4>
                        <p class="sec-para">We’ll schedule a call to align on vision, ideas, and execution.</p>
                    </div>
                </div>

                <!-- Step 4 (reversed) -->
                <div class="col-md-3 col-sm-6 col-12 process-step d-flex flex-column-reverse flex-md-column"
                    data-aos="fade-up" data-aos-delay="600">
                    <div class="text d-flex justify-content-center align-items-center flex-column">
                        <h4 class="sub-sec-title">Watch It Come Alive</h4>
                        <p class="sec-para">Get the final solution, tailored to your brief and ready to roll.</p>
                    </div>
                    <div class="img mt-0 mt-md-3">
                        <div class="shadow-title">04</div>
                        <div class="icon position-absolute-img">
                            <img src="{{ asset('frontend-assets/img/icon/about/Alive.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="overflow-hidden space">
        <div class="container">
            <div class="row gy-5 align-items-center">
                <div class="col-xl-6">
                    <div class="title-area mb-35">
                        <h2 class="sec-title " data-aos="fade-right" data-aos-delay="200">90-Days <span
                                class="text-blue">Gameplan</span></h2>
                        <p class="mb-30 sec-para" data-aos="fade-right" data-aos-delay="200"><b>"A Growth Success
                                cycle formula created by Team Sociomark to give the
                                best results to its clients.</b></p>
                        <ol data-aos="fade-right" data-aos-delay="200">
                            <li class="sec-para">Learn from the past</li>
                            <li class="sec-para">Uncover the bottlenecks</li>
                            <li class="sec-para">Clear the mind to make room for new</li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-6 text-center" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('frontend-assets/img/about/90days.png') }}" alt="" class="w-100">
                </div>

            </div>
        </div>
    </section>


    <section class="ourwork overflow-hidden space" id="aboutUs-KEyPoints">
        <div class="container">
            <div class="text-center content-box">
                <!-- <h2 class="sec-title">Making a mark, one day at a time!</h2> -->
                <h2 class="fw-bold sec-title" data-aos="fade-up" data-aos-delay="200">
                    The Sociomark Universe <br> Built with <span class="text-blue">Ideas.</span> Backed by<span
                        class="text-blue"> Impact.</span>
                </h2>
            </div>

            <!-- Static Flex Image Layout -->
            <div class="image-gallery js-overlay gap-3 d-flex flex-column flex-lg-row justify-content-center">
                <div class="position-relative">
                    <img src="{{ asset('frontend-assets/img/bg/casestudies-700x500.jpg') }}"
                        class="gallery-img default-active" alt="Business Image">
                    <div class="img-overlay d-flex flex-column justify-content-between h-100 p-3">
                        <!-- Top content -->
                        <div class="top-content desc-text d-none">
                            {{-- <a href="about.html" class="th-btn th-btn-white no-hover p-2 px-3 mt-2">Semrush (SEO)</a>
                                <a href="about.html" class="th-btn th-btn-white no-hover p-2 px-3 mt-2">ChatGPT
                                    (Content)</a>
                                <a href="about.html" class="th-btn th-btn-white no-hover p-2 px-3 mt-2">Meta Ads
                                    (Advertising)</a>
                                <a href="about.html" class="th-btn th-btn-white no-hover p-2 px-3 mt-2">Adobe (Photography
                                    & Editing)</a> --}}
                        </div>

                        <!-- Bottom content -->
                        <div class="bottom-content">
                            <h4 class="text-white sub-sec-title">Case Studies</h4>
                            <div class="mb-2">
                                {{-- <p class="text-white text-start mb-0 sec-para">Proof over Promises</p>
                                    <p class="text-white text-start desc-text d-none sec-para">
                                        Real stories of brands we’ve transformed. Explore how we've helped brands grow.
                                    </p> --}}
                            </div>
                            <div class="">
                                <a href="{{ route('case-study') }}"
                                    class="th-btn th-btn-white th-icon d-flex justify-content-between">Explore More <i
                                        class="fa-solid fa-arrow-right ms-2"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="position-relative">
                    <img src="{{ asset('frontend-assets/img/bg/work-700x500.jpg') }}"
                        class="gallery-img default-active" alt="Business Image">

                    <div class="img-overlay h-100 p-3">
                        <!-- Top content -->
                        <div class="top-content desc-text d-none">
                            {{-- <a href="about.html" class="th-btn th-btn-white no-hover p-2 px-3 mt-2">+250% leads</a>
                                <a href="about.html" class="th-btn th-btn-white no-hover p-2 px-3 mt-2">60K new users</a>
                                <a href="about.html" class="th-btn th-btn-white no-hover p-2 px-3 mt-2">2k views</a>
                                <a href="about.html" class="th-btn th-btn-white no-hover p-2 px-3 mt-2">View Case
                                    Study</a> --}}
                        </div>

                        <!-- Bottom content -->
                        <div class="bottom-content">
                            <h4 class="text-white sub-sec-title">Portfolio</h4>
                            <div class="mb-2">
                                {{-- <p class="text-white text-start mb-0 sec-para">A culture of creativity, collaboration,
                                        and constant growth.
                                    </p>
                                    <p class="text-white text-start desc-text d-none sec-para">
                                        A culture of creativity, collaboration, and constant growth.
                                    </p> --}}
                            </div>
                            <div class="">
                                {{-- <a href="{{ route('team') }}" --}}
                                <a href="{{ route('portfolio') }}"
                                    class="th-btn th-btn-white th-icon d-flex justify-content-between">Explore More <i
                                        class="fa-solid fa-arrow-right ms-2"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="position-relative">
                    <img src="{{ asset('frontend-assets/img/bg/culture-700x500.jpg') }}"
                        class="gallery-img default-active" alt="Business Image">
                    <div class="img-overlay h-100 p-3">
                        <!-- Top content -->
                        <div class="top-content desc-text d-none">
                            {{-- <a href="about.html" class="th-btn th-icon text-white p-2 logo-info mt-2">Bold ideas</a>
                                <a href="about.html" class="th-btn th-icon text-white p-2 logo-info mt-2">Creatives</a>
                                <a href="about.html" class="th-btn th-icon text-white p-2 logo-info mt-2">Growth
                                    mindset</a>
                                <a href="about.html" class="th-btn th-icon text-white p-2 logo-info mt-2">People-first
                                    culture</a> --}}
                        </div>

                        <!-- Bottom content -->
                        <div class="bottom-content">
                            <h4 class="text-white sub-sec-title">Culture & Team</h4>
                            <div class="mb-2">
                                {{-- <p class="text-white text-start mb-0 sec-para">
                                        A culture of creativity, collaboration, and constant growth.
                                    </p>
                                    <p class="text-white text-start desc-text d-none sec-para">
                                        Behind every pixel, post, and plan is a passionate team driven by curiosity and
                                        creativity.
                                    </p> --}}
                            </div>
                            <div class="">
                                <a href="{{ route('workculture') }}"
                                    class="th-btn th-btn-white th-icon d-flex justify-content-between">Explore More <i
                                        class="fa-solid fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-area overflow-hidden position-relative p-0 d-none" id="about-banner"
        style="background-color: black;">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 p-0 position-relative">

                    <!-- Static Background Text Centered -->
                    <div class="static-text position-absolute top-50 start-50 translate-middle text-center w-100"
                        style="z-index: 0; pointer-events: none;">
                        <h1 style="font-size: 100px; color: white; font-weight: 900; white-space: nowrap;">
                            SINCE 2017
                        </h1>
                    </div>

                    <!-- Video Layer -->
                    <div class="img player-video" id="videoScaleDown" style="position: relative; z-index: 1;">
                        <video class="w-100" playsinline autoplay muted loop>
                            <source src="{{ asset('frontend-assets/test_video.mp4') }}">
                        </video>
                    </div>

                    @push('scripts')
                    <script>
                        gsap.set("#videoScaleDown", {
                            xPercent: 0,
                            yPercent: 0,
                            scale: 1.4,
                        });

                        gsap.to("#videoScaleDown", {
                            scale: 0.7,
                            transformOrigin: "center",
                            scrollTrigger: {
                                trigger: "#videoScaleDown",
                                // start: "40% 50%",
                                // end: "+=1000",
                                markers: false,
                                pin: true,
                                scrub: true
                            }
                        });
                    </script>
                    @endpush
                </div>
            </div>
        </div>
    </section>

    <section class="mb-2 founder space" id="our-founder">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 col-sm-12 col-12 position-relative img custom-top me-0"
                    data-aos="fade-right" data-aos-delay="100"
                    style="--tw-bg-opacity: 1; background-color: rgb(255 255 255 / var(--tw-bg-opacity)); padding: 1rem; border-radius: 30px;">
                    <img src="{{ asset('frontend-assets/img/team/founders.png') }}"
                        class="img-fluid rounded w-100 h-100 object-fit-cover" alt="Office Team">
                </div>
                <div class="col-md-6 col-sm-12 col-12 text-white p-4 ">
                    <h2 class="fw-bold mb-1 sec-title" data-aos="fade-left" data-aos-delay="100">
                        Meet Our <span class="text-blue"> Founders</span>
                    </h2>

                    <h4 class="sec-para text-uppercase sub-sec-title " data-aos="fade-left" data-aos-delay="100"><a
                            href="https://www.linkedin.com/in/vivek-baandal-7b478243/">Mr.
                            Vivek Baandal </a>& <a href="https://www.linkedin.com/in/hetadesai/">Mrs. Heta Desai
                            Baandal</a></h4>
                    <p class="sec-para" data-aos="fade-left">
                        From a shared mezzanine-floor office with two passionate dreamers to a vibrant team of 50+
                        overlooking the beautiful Palm Beach—this journey has been nothing short of magic. What began in
                        college as a spark between creativity and hustle has grown into a full-blown digital force.
                        Together, <b>Mr. Vivek Baandal and Mrs. Heta Desai Baandal</b> have shaped Sociomark into a
                        space where late-night brainstorms, potluck lunches, team townhalls and campaign features all
                        live in harmony. It's massy. It's classy. It’s us.
                    </p>
                    <p class="sec-para" data-aos="fade-left" data-aos-delay="200">
                        They’ve built an agency where ideas don’t just flow—they flourish. Where clients feel heard, and
                        brands grow loud. From guiding start-ups to scaling legacy brands, they continue to lead with
                        clarity, curiosity and purpose. And yes, the name Sociomark came in a dream. Some stories are
                        just meant to be...
                    </p>

                    <a href="{{route('workculture')}}" class="th-btn th-icon text-white p-3 logo-info mt-2" data-aos="fade-left"
                        data-aos-delay="100">See Our Work Culture</a>
                </div>
            </div>
        </div>
    </section>

    <section class="space" id="team">
        <div class="container">
            <div class="title-area text-center d-none">
                {{-- <span class="sub-title sub-title4 ">EXPERT TEAM <span></span></span> --}}
                <h2 class="sec-title ">Meet Our <span class="text-blue">Remarkables</span></h2>
            </div>
            <div class="d-none">
                <div class="team-collage position-relative">
                    <div class="team">
                        @for ($i = 0; $i < 16; $i++)
                            <div class="member" data-aos="zoom-in" data-aos-delay="{{ $i * 100 }}"
                            style="left: {{ -5 + $i * (100 / 16) }}%">
                            <img src="{{ asset('frontend-assets/img/team/person-placeholder.png') }}"
                                alt="Person">
                    </div>
                    @endfor
                    @for ($j = 0; $j < 13; $j++)
                        <div class="member" data-aos="zoom-in" data-aos-delay="{{ $i * 100 + $j * 100 }}"
                        style="margin-top: 100px; left: {{ $j * (100 / 15) }}%">
                        <img src="{{ asset('frontend-assets/img/team/person-placeholder.png') }}"
                            alt="Person">
                </div>
                @endfor
            </div>
        </div>
        </div>
        <div class="row g-3 d-none">
            <div class="col-12">
                <div class="swiper teamSwiper">
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
                </div>
            </div>
            @push('scripts')
            <script>
                new Swiper(".teamSwiper", {
                    spaceBetween: 30,
                    slidesPerView: 4,
                })
            </script>
            @endpush
        </div>
        </div>
        <div class="row g-3">
            <div class="col-12">
                <video loop muted playsinline autoplay class="w-100">
                    <source src="{{ asset('frontend-assets/core-team.mp4') }}">
                </video>
            </div>
        </div>
        </div>
    </section>
    <style>
        #about-flip .flip-box {
            /* width: 240px; */
            height: 320px;
        }
    </style>
    <section class="overflow-hidden position-relative space space-bottom" id="about-flip">
        <div class="container">
            <div class="row text-center d-flex justify-content-center justify-content-md-end mt-4">

                <div class="col-md-12 col-12 pe-0 pe-md-5">
                    <h2 class="fw-bold sec-title my-3" data-aos="fade-down" data-aos-delay="100">
                        What Makes Us <span class="text-blue"> Remarkable</span>
                    </h2>
                    <p class="sec-para" data-aos="fade-up" data-aos-delay="200">
                        We’re not just another digital agency—we’re storytellers, strategists, and serious brand nerds.
                        From brainstorming big ideas to building lasting impact, we bring the perfect mix of creativity,
                        strategy, and speed to the table.
                    </p>
                    <p class="sec-para" data-aos="fade-up" data-aos-delay="200">
                        Over the past 8 years, we’ve partnered with brands across India and beyond—crafting digital
                        journeys that are anything but ordinary. Whether it’s content, campaigns, or conversions—we keep
                        it fresh, we keep it focused, and we keep it fast.
                    </p>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-4" data-aos="fade-right" data-aos-delay="400">
                <div class="col-12 col-md-3 first-feature-card feature-card flip-box p-0 mt-3 mx-2"
                    data-aos="fade-left" data-aos-delay=" 300">
                    <div class="flip-box-inner h-100">
                        <div
                            class="flip-box-front first-feature-card h-100 d-flex align-items-center justify-content-center flex-column">
                            <img src="{{ asset('frontend-assets/img/icon/about/Quality Content.png') }}"
                                alt="" class="h-50 w-50">
                            <h4 class="sub-sec-title">Quality Content</h4>
                        </div>
                        <div class="flip-box-back d-flex justify-content-center align-items-center h-100">
                            <p class="sec-para">We create content that connects, converts and keeps your audience
                                coming back for more.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 second-feature-card feature-card flip-box p-0 mt-3 mx-2"
                    data-aos="fade-left" data-aos-delay="300">
                    <div class="flip-box-inner h-100">
                        <div
                            class="flip-box-front second-feature-card h-100 d-flex align-items-center justify-content-center flex-column">
                            <img src="{{ asset('frontend-assets/img/icon/about/Custumized Content.png') }}"
                                alt="" class="h-50 w-50">
                            <h4 class="sub-sec-title">Customized Strategy</h4>
                        </div>
                        <div class="flip-box-back d-flex justify-content-center align-items-center h-100">
                            <p class="sec-para">No one-size-fits-all here. Every strategy is made-to-measure for your
                                brand and its unique voice.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  feature-card flip-box p-0 mt-3 mx-2">
                    <div class="flip-box-inner h-100">
                        <div
                            class="flip-box-front first-feature-card h-100 d-flex align-items-center justify-content-center flex-column">
                            <img src="{{ asset('frontend-assets/img/icon/about/Result Driven.png') }}" alt=""
                                class="h-50 w-50">
                            <h4 class="sub-sec-title">Results-Driven</h4>
                        </div>
                        <div class="flip-box-back d-flex justify-content-center align-items-center h-100">
                            <p class="sec-para">We love creativity, but we love conversions more. Think ROI with a
                                creative twist.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  feature-card flip-box p-0 mt-3 mx-2" data-aos="fade-right"
                    data-aos-delay="400">
                    <div class="flip-box-inner h-100">
                        <div
                            class="flip-box-front second-feature-card h-100 d-flex align-items-center justify-content-center flex-column">
                            <img src="{{ asset('frontend-assets/img/icon/about/Creative distinction.png') }}"
                                alt="" class="h-50 w-50">
                            <h4 class="sub-sec-title">Creative Distinction</h4>
                        </div>
                        <div class="flip-box-back d-flex justify-content-center align-items-center h-100">
                            <p class="sec-para">Ideas that turn heads, visuals that stop scrolls—our creative game is
                                always a level up.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  feature-card flip-box p-0 mt-3 mx-2" data-aos="fade-right"
                    data-aos-delay="400">
                    <div class="flip-box-inner h-100">
                        <div
                            class="flip-box-front first-feature-card h-100 d-flex align-items-center justify-content-center flex-column">
                            <img src="{{ asset('frontend-assets/img/icon/about/Collaborative Growth.png') }}"
                                alt="" class="h-50 w-50">
                            <h4 class="sub-sec-title">Collaborative Growth</h4>
                        </div>
                        <div class="flip-box-back d-flex justify-content-center align-items-center h-100">
                            <p class="sec-para">We don’t just work for you—we work with you. Because real success is a
                                team sport.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  feature-card flip-box p-0 mt-3 mx-2" data-aos="fade-right"
                    data-aos-delay="400">
                    <div class="flip-box-inner h-100">
                        <div
                            class="flip-box-front second-feature-card h-100 d-flex align-items-center justify-content-center flex-column">
                            <img src="{{ asset('frontend-assets/img/icon/about/Quick Approach.png') }}"
                                alt="" class="h-50 w-50">
                            <h4 class="sub-sec-title">Quirky Approach </h4>
                        </div>
                        <div class="flip-box-back d-flex justify-content-center align-items-center h-100">
                            <p class="sec-para">A pinch of humour, a whole lot of hustle - That’s our recipe. We like
                                to keep things fun, fresh and fearlessly different.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  feature-card flip-box p-0 mt-3 mx-2" data-aos="fade-right"
                    data-aos-delay="400">
                    <div class="flip-box-inner h-100">
                        <div
                            class="flip-box-front first-feature-card h-100 d-flex align-items-center justify-content-center flex-column">
                            <img src="{{ asset('frontend-assets/img/icon/about/Turn-around.png') }}" alt=""
                                class="h-50 w-50">
                            <h4 class="sub-sec-title">Quick Turn Around Time</h4>
                        </div>
                        <div class="flip-box-back d-flex justify-content-center align-items-center h-100">
                            <p class="sec-para">Your deadlines are sacred. We move fast—without losing the magic.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('Frontend.partial.contactUs')

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

    // about-sec4

    document.addEventListener("DOMContentLoaded", function() {
        const images = document.querySelectorAll(".gallery-img");

        if (images.length > 0) {
            images.forEach(img => img.classList.remove("default-active"));
            images[0].classList.add("default-active");

            const firstOverlay = images[0].parentElement.querySelector(".img-overlay");
            const firstDescs = firstOverlay.querySelectorAll(".desc-text");

            firstDescs.forEach(desc => desc.classList.remove("d-none"));
            firstOverlay.classList.remove("justify-content-end");
            firstOverlay.classList.add("justify-content-between");
        }

        images.forEach((img) => {
            img.addEventListener("mouseenter", function() {
                // Remove active from all
                images.forEach((image) => image.classList.remove("default-active"));
                const allOverlays = document.querySelectorAll(".img-overlay");
                allOverlays.forEach(overlay => {
                    overlay.classList.remove("justify-content-between");
                    overlay.classList.add("justify-content-end");

                    const descs = overlay.querySelectorAll(".desc-text");
                    descs.forEach(desc => desc.classList.add("d-none"));
                });

                // Set active
                this.classList.add("default-active");
                const currentOverlay = this.parentElement.querySelector(".img-overlay");
                const currentDescs = currentOverlay.querySelectorAll(".desc-text");

                currentDescs.forEach(desc => desc.classList.remove("d-none"));

                currentOverlay.classList.remove("justify-content-end");
                currentOverlay.classList.add("justify-content-between");
            });
        });
    });


    // about-sec4 end
</script>
@endpush