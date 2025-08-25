@extends('Frontend.layout.app')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
@section('custome-style')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "What is performance marketing?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It involves building and maintaining websites, encompassing aspects like web design, content creation, and coding."
            }
        }, {
            "@type": "Question",
            "name": "How does performance marketing differ from traditional marketing?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Performance marketing is results-driven and measurable, focusing on ROI, unlike traditional marketing's broader brand awareness goals."
            }
        }, {
            "@type": "Question",
            "name": "What channels are used in performance marketing?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Common channels include affiliate marketing, search engine marketing (SEM), and social media advertising."
            }
        }, {
            "@type": "Question",
            "name": "How do I measure performance marketing success?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Success is measured through metrics like cost per acquisition (CPA), return on ad spend (ROAS), and conversion rates."
            }
        }, {
            "@type": "Question",
            "name": "What is affiliate marketing?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It's a performance-based strategy where affiliates earn commissions by promoting a company's products or services."
            }
        }]
    }
</script>

@endsection
@section('content')
<main id="seo-service">
    <div class="breadcumb-wrapper p-0" style="margin-top: 66px;">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('frontend-assets/img/ServicePages/Performance Marketing/hero.png') }}" alt="perfomance marketing" srcset="" width="100%">
                </div>
            </div>
        </div>
    </div>


    <section class="overflow-hidden mb-md-5 md-2 pt-5" id="about-sec">
        <div class="container">
            <div class="row align-items-end justify-content-center">
                <div class="col-lg-10 col-12 d-flex justify-content-center align-items-center flex-column">
                    <div class="title-area mb-md-3 mb-2 mt-n1">
                        {{-- <h1 class="text-center fw-bold sec-title my-3" data-aos="zoom-in" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            Get <span class="text-blue">Seen</span>, Get <span class="text-blue">Clicked</span>, Get
                            <span class="text-blue">Results </span>
                        </h1> --}}
                        <h1 class="text-center fw-bold sec-title my-3" data-aos="zoom-in" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <span class="text-blue">Performance Marketing Agency
                            </span> Driving Smarter Growth
                        </h1>
                    </div>
                </div>
                <div class="col-lg-12 col-12 d-flex justify-content-center align-items-center flex-column">
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">Your audience is out there scrolling, searching, and comparing to make the final choice. Paid ads are a faster way you can capture their attention, but success isn’t just about being present. It’s about being in the right place, with the right message, at the right time. That’s where Sociomark comes in. As a performance marketing agency, we create ads that stop scrolls, spark curiosity, and persuade action. From search and display to video campaigns, every click is powered by strategy, creativity, and continuous optimization.
                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">We’re not a one-size-fits-all creative agency. Your goals shape the roadmap. Whether you want to increase traffic, boost sales, or capture leads, there’s a paid solution designed for you. With SEM, you gain visibility that converts. From Google Ads to LinkedIn advertising, we help your brand shine on the platforms that matter most for your niche.
                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">Alongside our social media marketing services, our expertise as a social marketing agency ensures every ad feels authentic. With us, your budget works the best, your campaigns perform smarter, and your brand gets the spotlight.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <style>
        .benefit-block:hover {
            border-left: 5px solid #106c97 !important;
        }

        .benefit-block:hover .sub-sec-title {
            color: #106c97 !important;
        }

        #benefits {
            max-height: 60vh;
        }
    </style>
    <section class="overflow-hidden space bg-grey" id="work-flow">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center">
                        <h2 class="fw-bold mb-5 sec-title" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            Beyond Reach and Towards
                            <span class="text-blue">Real Impact</span>
                        </h2>
                        {{-- <p class="sec-para">Here are a few of the SEO strategies that we as a Leading Digital Marketing
                                Agency in Mumbai
                                implement, so that the website that we build for our clients stand out from the rest. This
                                in turn gives them a major advantage over its competitors.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row align-items-start">
                <!-- Left Side -->
                <div class="col-md-6 text-center">
                    <div class="circle-wrapper" data-aos="fade-right" data-aos-delay="200" data-tilt data-tilt-max="10">
                        <div class="circle" data-tilt data-tilt-max="10">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Performance Marketing/Deliver Impact.png') }}" alt="Key"
                                class="key-image mt-3">
                        </div>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="col-md-6 mt-4 mt-md-0">
                    <div id="benefits">
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Goals Come First</h4>
                            <p class="sec-para">We start by understanding where you want to go. Every campaign is built around clear objectives.</p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Targeting That Works</h4>
                            <p class="sec-para"> We go deeper than age or location. With paid search, we focus on behaviour, intent, and real interests that matter.
                            </p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Creative That Drives Action</h4>
                            <p class="sec-para">People get tired of the same ads. That’s why we design fresh creatives, whether it’s video ads or carousel posts.</p>
                        </div>


                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Smarter Use of Budget</h4>
                            <p class="sec-para">Every rupee counts. From Google Ads to retargeting, we make sure your budget works in the smartest way possible.</p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Reports You Can Understand</h4>
                            <p class="sec-para">No confusing terms, just clear data. You’ll always know what’s working and what comes next. When it comes to results, performance marketing companies like ours focus on making every step smart and effective.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-hidden space" id="about-sec3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center">
                        <h2 class="fw-bold mb-5 sec-title" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            Steps to Smarter

                            <span class="text-blue"> Paid Ad</span> Campaigns
                        </h2>
                    </div>
                </div>
            </div>
            <div class="according-list-area">
                <div class="according-list hover-item item-active">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Know Your Audience</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Performance Marketing/Services/Understand the Audience.png') }}"
                            alt="Understand the Audience" class="rounded-overflow">
                        <p class="sec-para text">We learn who they are, what they need, and where they spend time online.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Explore the Right Keywords</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Performance Marketing/Services/Dig Into Keywords.png') }}"
                            alt="Dig Into Keywords" class="rounded-overflow">
                        <p class="sec-para text">Finding the words people search helps your brand appear when it matters most.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Create Campaigns with Purpose</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Performance Marketing/Services/Build Campaigns That Fit.png') }}" alt="Build Campaigns That Fit"
                            class="rounded-overflow">
                        <p class="sec-para text">Every ad is designed to match your goals and speak to your audience clearly.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Test, Track, Improve</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Performance Marketing/Services/Launch, Monitor, Adapt.png') }}" alt="Launch, Monitor, Adapt"
                            class="rounded-overflow">
                        <p class="sec-para text">We keep a close eye on performance and make changes that improve results.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start"> Keep Evolving </h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Performance Marketing/Services/Stay On Top.png') }}"
                            alt="Stay On Top" class="rounded-overflow">
                        <p class="sec-para text">As trends shift, we adapt so your campaigns always stay relevant and effective.
                        </p>

                    </div>
                </div>
            </div>


        </div>
        <!-- <div class="shape-mockup spin d-none d-lg-block" data-top="5%" data-right="2%"><img
                src="assets/img/shape/shape-9.png" alt=""></div>
        <div class="shape-mockup d-none d-lg-block" data-top="2%" data-left="0%"><img
                src="assets/img/shape/shape-13.png" alt=""></div>
        <div class="shape-mockup d-none d-lg-block" data-bottom="0%" data-left="50%"><img
                src="assets/img/shape/shape-14.png" alt=""></div> -->

    </section>

    <section class="overflow-hidden space bg-grey" id="about-sec2">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-8" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="title-area mb-20">
                        <h2 class="sec-title mb-md-3 mb-2">
                            From Attention to Authentic
                            <span class="text-blue">Action – Our expertise</span>
                        </h2>
                    </div>
                    <p class="sec-para d-none ">Our SEO strategies are designed to improve your website’s ranking on
                        major search engines like Google. By targeting high-intent keywords relevant to your business.
                    </p>
                    <div class="choose-feature-wrap">
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Performance Marketing/icons/strategy.png') }}" width="60" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title"> Purposeful Planning</h4>
                                <p class="sec-para">We don’t run random ads and hope that it lands perfectly. Our campaigns are backed by intent and insight with the goal of achieving tangible results.</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Performance Marketing/icons/Platfortm.png') }}" width="60" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Right Platforms</h4>
                                <p class="sec-para"> From YouTube paid promotion to Facebook paid ads, we understand what is best for each of the platforms.</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Performance Marketing/icons/Optimizing.png') }}" width="60" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Always Optimizing</h4>
                                <p class="sec-para">We track performance, adjust, and refine campaigns to maximize impact.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="choose-image">
                        <div class="tilt-active">
                            {{-- <img src="{{ asset('frontend-assets/img/Services-page/Why choose Seo.png') }}"
                            alt="Choose" class="w-100"> --}}
                            <img src="{{ asset('frontend-assets/img/ServicePages/Performance Marketing/Advertising Expertise.png') }}" alt="Choose" class="w-100">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="space-extra2-bottom">
        <div class="container">
            <div class="row text-center">
                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">1.4</span>B<span class="plus">+</span>
                        </h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Paid Ads Expression(Google Ads)</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">10</span>M<span class="plus">+</span>
                        </h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Paid Ads Expression(Meta Ads)</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">367</span>K<span class="plus">+</span>
                        </h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Leads Generated</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">19</span><span class="plus">%</span></h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Conv.Rate</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

            </div>
        </div>
    </div>

    <section class="overflow-hidden space bg-grey" id="Features">
        <div class="container">
            <!-- Header Text -->
            <h2 class="fw-bold mb-5 sec-title text-center" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                What’s Included in Our <span class="text-blue"> Performance Marketing Package</span>
            </h2>
            <!-- Feature Icons Row 1 -->
            <div class="row justify-content-evenly mt-5">
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Performance Marketing/icons/Branding.png') }}" alt="One-Click Reports"
                            class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Branding</div>
                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Performance Marketing/icons/Awareness.png') }}" alt="Traffic Performance"
                            class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Awarness</div>

                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Performance Marketing/icons/Video Ads_.png') }}" alt="CRM Module" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Video Ads</div>

                </div>
            </div>

            <!-- Feature Icons Row 2 -->
            <div class="row justify-content-evenly mt-3 mt-md-5">
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Performance Marketing/icons/Lead Generation.png') }}" alt="Keyword Performance"
                            class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Lead Generation</div>

                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Performance Marketing/icons/Conversion rate.png') }}" alt="Marketing Activities"
                            class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Conversion Rate Optimization (CRO) </div>

                </div>
            </div>

            <!-- Dashboard Images -->
            <div class="mt-5" data-aos="zoom-in" data-tilt data-tilt-max="10" data-aos-delay="100"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <img src="{{ asset('frontend-assets/img/ServicePages/Performance Marketing/Package.png') }}" alt="Dashboard Screenshot"
                    class="dashboard-img rounded-overflow">
            </div>
        </div>
    </section>


    @include('Frontend.partial.clientList')

    {{-- Testimonials --}}


    <div class="overflow-hidden space" id="about-sec6">
        <div class="container">
            <div class="title-area text-center mb-25">
                <!-- <h2 class="sec-title">Frequently Asked Questions</h2> -->
                <h2 class="fw-bold sec-title my-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"
                    data-aos-easing="ease-in-out">
                    Frequently Asked <span class="text-blue"> Questions</span>
                </h2>
            </div>
            <div class="row justify-content-center align-items-center mt-5">
                {{-- <div class="col-xl-5">
                    <div class="me-xl-5 pe-xl-3">
                        <div class="title-area mb-30 text-center text-xl-start">
                            <img src="https://www.gbim.com/about-us/sm_faq.png" alt="" data-aos="zoom-in"
                                data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out">
                        </div>

                    </div>
                </div> --}}
                <div class="col-xl-12 mt-35 mt-xl-0 h-auto" id="faqAccordion">
                    <div class="accordion-area accordion">
                        <div class="accordion-card">
                            <div class="accordion-header" id="collapse-item-1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1"> What is performance marketing?
                                </button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">It's a digital marketing strategy where advertisers pay for specific actions, like clicks or conversions, rather than impressions.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">How does performance marketing differ from traditional marketing?
                                </button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Performance marketing is results-driven and measurable, focusing on ROI, unlike traditional marketing's broader brand awareness goals.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="false"
                                    aria-controls="collapse-3">What channels are used in performance marketing?
                                </button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Common channels include affiliate marketing, search engine marketing (SEM), and social media advertising.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="false"
                                    aria-controls="collapse-4">How do I measure performance marketing success?
                                </button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Success is measured through metrics like cost per acquisition (CPA), return on ad spend (ROAS), and conversion rates.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">What is affiliate marketing? </button>
                            </div>
                            <div id="collapse-5" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">It's a performance-based strategy where affiliates earn commissions by promoting a company's products or services.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('Frontend.partial.blog')


    @include('Frontend/partial/contactUs')
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