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
            "name": "What is digital marketing?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Digital marketing encompasses all marketing efforts that use electronic devices or the internet, including channels like search engines, social media, email, and websites."
            }
        }, {
            "@type": "Question",
            "name": "Why is digital marketing important?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It allows businesses to reach a broader audience, target specific demographics, and measure campaign effectiveness in real-time."
            }
        }, {
            "@type": "Question",
            "name": "What are the main types of digital marketing?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Key types include Search Engine Optimization (SEO), Pay-Per-Click (PPC) advertising, content marketing, social media marketing, email marketing, and affiliate marketing."
            }
        }, {
            "@type": "Question",
            "name": "How does digital marketing differ from traditional marketing?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Digital marketing is primarily online, offering real-time analytics and targeted outreach, whereas traditional marketing uses offline channels like print and TV without immediate feedback."
            }
        }, {
            "@type": "Question",
            "name": "How do I measure the success of digital marketing campaigns?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Success is gauged using metrics like website traffic, conversion rates, click-through rates (CTR), and return on investment (ROI)."
            }
        }, {
            "@type": "Question",
            "name": "What is a digital marketing funnel?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It's a model illustrating the customer journey from awareness to conversion, guiding strategies at each stage to optimize engagement and sales."
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
                    <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Digital Marketing.png') }}"
                        alt="digital marketing" srcset="" width="100%">
                </div>
            </div>
        </div>
    </div>


    <section class="overflow-hidden space mb-md-5 md-2 pt-5" id="about-sec">
        <div class="container">
            <div class="row align-items-end justify-content-center">
                <div class="col-lg-9 col-12 d-flex justify-content-center align-items-center flex-column">
                    <div class="title-area mb-md-3 mb-2 mt-n1">
                        <h1 class="text-center fw-bold sec-title my-3" data-aos="zoom-in" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            Achieve a Significant Growth in your Business with the power of <span class="text-blue">
                                Digital Marketing</span>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-12 col-12 d-flex justify-content-center align-items-center flex-column">
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">Your digital presence is more than just a checklist. It's an ongoing conversation between your brand and the world. At Sociomark, we understand that every touchpoint matters, and we bring a blend of strategy, creativity, and technical know-how to make sure your brand stands out.
                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">We offer the best options for you, whether you're looking for professional SEO services in Dubai to increase your online presence or a smart social media marketing in Ajmal to interact with and expand your audience. We are aware that your website is the foundation of your online presence and is more than just a page. Therefore, the creation of user-friendly, responsive, and SEO-optimized websites that have a lasting effect and produce tangible results is the main goal of our website development services.
                    </p>
                    
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">We don't just create; we ensure your brand gets noticed and converts. Amplify your reach with our paid advertising services in the UAE, expertly designed to drive engagement and conversions. Because content is key, our content marketing services in the Ajmal ensure you deliver value to your audience while powerfully telling your brand's story.
                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">Need captivating visuals? Our professional photography and video production services bring your brand's unique personality to life in the most engaging way possible, from corporate video services in Dubai to product photography . Let us help your brand shine!

                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">Sociomark doesn't just offer services, we offer a partnership to help you grow. As per your needs we customize our plan of action so that every piece of your online presence works together to help you shine.
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
                            Our Method to make the
                            <span class="text-blue">magic happen</span>
                        </h2>
                        {{-- <p class="sec-para">Here are a few of the SEO strategies that we as a Leading Digital Marketing
                                Agency in Mumbai
                                implement, so that the website that we build for our clients stand out from the rest. This
                                in turn gives them a major advantage over its competitors.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <!-- Left Side -->
                <div class="col-md-6 text-center">
                    <div class="circle-wrapper" data-aos="fade-right" data-aos-delay="200" data-tilt data-tilt-max="10">
                        <div class="circle" data-tilt data-tilt-max="10">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Magic.png') }}"
                                alt="Key" class="key-image mt-3">
                        </div>
                    </div>
                </div>
                <!-- Right Side -->
                <div class="col-md-6 mt-4 mt-md-0">
                    <div id="benefits">
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Start with Goals</h4>
                            <p class="sec-para">We begin by understanding your business, your audience, and what is the
                                end result you are aiming for. Clear goals = clear path. </p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Craft the Plan</h4>
                            <p class="sec-para">No cut-paste templates. We build a strategy that fits your voice and
                                serves your growth, step by step.</p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Create for Every Channel</h4>
                            <p class="sec-para"> From blogs to visuals to ads, we design content that’s right for each
                                space—and connects instantly.
                            </p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Distribute Smartly</h4>
                            <p class="sec-para"> We don’t just post. We promote with purpose, making sure the right eyes
                                land on your message.</p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Refine as We Go</h4>
                            <p class="sec-para"><a href="{{ route('digitalMarketing') }}"><b>Digital Marketing</b></a> is always moving. We monitor, analyse, and tweak regularly to
                                keep your growth steady.</p>
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
                            Our Approach is All About
                            <span class="text-blue"> Balance</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="according-list-area">
                <div class="according-list hover-item item-active">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Understand the Brand Inside Out</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Services/Understand the Brand Inside Out.png') }}"
                            alt="Understand the Brand Inside Out" class="rounded-overflow">
                        <p class="sec-para text">We dive into your business, market, and audience to know exactly what makes your brand tick.
                        </p>
                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Study Competitors and Gaps</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Services/Study Competitors and Gaps.png') }}"
                            alt="Understand the Brand Inside Out" class="rounded-overflow">
                        <p class="sec-para text">We study what others in your space are doing—and how we can help you stand out.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Plan with Precision</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Services/Plan with Precision.png') }}"
                            alt="Plan with Precision" class="rounded-overflow">
                        <p class="sec-para text"> We build detailed plans with timelines and touchpoints so everything flows smoothly from day one.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Create with Intent</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Services/Create with Intent.png') }}"
                            alt="Create with Intent" class="rounded-overflow">
                        <p class="sec-para text"> Every creative is built to speak your brand’s language, and every
                            word is placed with purpose.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Execute and Optimise</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Services/Execute and Optimise.png') }}"
                            alt="Execute and Optimise" class="rounded-overflow">
                        <p class="sec-para text">We run your campaigns, track results, and keep fine-tuning so every
                            effort moves the needle.
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
                        <h2 class="fw-bold mb-5 sec-title">
                            The Roots of Our <span class="text-blue text-center">Trusted Reputation</span>
                        </h2>
                    </div>
                    <p class="sec-para d-none ">Our SEO strategies are designed to improve your website’s ranking on
                        major search engines like Google. By targeting high-intent keywords relevant to your business.
                    </p>
                    <div class="choose-feature-wrap">
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Icons/Strategy.png') }}"
                                    width="60" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Sharp Strategy First</h4>
                                <p class="sec-para"> We don’t guess. We research, plan, and build strategies that are
                                    tailored to your goals and audience. That’s how we drive real impact.</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Icons/Expertise.png') }}"
                                    width="60" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Channel-by-Channel Expertise</h4>
                                <p class="sec-para">From SEO to social to content and ads—we understand how each piece
                                    works. More importantly, how they work together.
                                </p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Icons/Growth.png') }}"
                                    width="60" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Built to Grow</h4>
                                <p class="sec-para"> Our approach is long-term. Everything we do is structured to scale
                                    with your business and its ambitions.
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
                            <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Trusted_.png') }}"
                                alt="Choose" class="w-100">

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
                        <h3 class="box-number text-orange"><span class="counter-number">123</span>M<span
                                class="plus">+</span>
                        </h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Organic Traffic</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">412</span>K<span
                                class="plus">+</span>
                        </h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Organic Keywords Growth</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">2.4</span>M<span
                                class="plus">+</span>
                        </h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Organic Revenue Generated</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">48</span><span
                                class="plus">+</span></h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Happy Customers</b></p>
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
                What’s Included in Our <span class="text-blue"> Digital Marketing Package</span>
            </h2>
            <!-- Feature Icons Row 1 -->
            <div class="row justify-content-evenly mt-5">
                <div class="col-12 col-md-4 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Icons/Search Engine Optimization.png') }}"
                            alt="One-Click Reports" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Search Engine Optimization</div>
                </div>
                <div class="col-12 col-md-4 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Icons/Social Media marketing.png') }}"
                            alt="Traffic Performance" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Social Media Marketing</div>

                </div>
                <div class="col-12 col-md-4 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Icons/Website development.png') }}"
                            alt="CRM Module" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Website Development </div>

                </div>
                <div class="col-12 col-md-4 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Icons/Performance marketing.png') }}"
                            alt="Traffic Performance" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Performance Marketing</div>

                </div>
                <div class="col-12 col-md-4 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Icons/photography & video production.png') }}"
                            alt="CRM Module" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Photography & Video Production
                    </div>

                </div>
            </div>
            <!-- Dashboard Images -->
            <div class="mt-5" data-aos="zoom-in" data-tilt data-tilt-max="10" data-aos-delay="100"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Package.png') }}"
                    alt="Dashboard Screenshot" class="dashboard-img rounded-overflow">
            </div>
        </div>
    </section>

    <!-- <section class="overflow-hidden space" id="services-tab">
                                        <div class="container-fluid">
                                            <div class="row">

                                                <div class="title-area mb-md-3 mb-2">
                                                    <h2 class="fw-bold mb-5 sec-title text-center"
                                                        data-aos="fade-up"
                                                        data-aos-delay="100"
                                                        data-aos-duration="1000"
                                                        data-aos-easing="ease-in-out">
                                                        International Seo <span class="text-blue"> Roadmap</span>
                                                    </h2>
                                                </div>

                                                <div class="d-lg-flex ps-0">
                                                    <div class="col-lg-3 col-12" data-aos="fade-right"
                                                        data-aos-delay="200"
                                                        data-aos-duration="1200"
                                                        data-aos-easing="ease-in-out">
                                                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                                            aria-orientation="vertical">
                                                            <button class="nav-link p-3 fs-5 " data-bs-toggle="pill"
                                                                data-bs-target="#" type="button" role="tab"
                                                                aria-controls="v-pills-profile" aria-selected="false"><span class="border-bottom border-4 d-inline-block">Services</span></button>
                                                            <button class="nav-link active p-3 fs-5" id="v-pills-home-tab" data-bs-toggle="pill"
                                                                data-bs-target="#v-pills-home" type="button" role="tab"
                                                                aria-controls="v-pills-home" aria-selected="true">Education institutions</button>
                                                            <button class="nav-link p-3 fs-5" id="v-pills-profile-tab" data-bs-toggle="pill"
                                                                data-bs-target="#v-pills-profile" type="button" role="tab"
                                                                aria-controls="v-pills-profile" aria-selected="false">Healthcare industry</button>
                                                            <button class="nav-link p-3 fs-5" id="v-pills-messages-tab" data-bs-toggle="pill"
                                                                data-bs-target="#v-pills-messages" type="button" role="tab"
                                                                aria-controls="v-pills-messages" aria-selected="false">Technology companies</button>
                                                            <button class="nav-link p-3 fs-5" id="v-pills-settings-tab" data-bs-toggle="pill"
                                                                data-bs-target="#v-pills-settings" type="button" role="tab"
                                                                aria-controls="v-pills-settings" aria-selected="false">Publication</button>
                                                            <button class="nav-link p-3 fs-5" id="v-pills-settings-tab" data-bs-toggle="pill"
                                                                data-bs-target="#v-pills-settings" type="button" role="tab"
                                                                aria-controls="v-pills-settings" aria-selected="false">E-commerce businesses</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-9 col-12">
                                                        <div class="tab-content" id="v-pills-tabContent">
                                                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                                                aria-labelledby="v-pills-home-tab" tabindex="0">
                                                                <div class="row ">
                                                                    <div class="col-lg-6 col-12 text-center side-padding-mbl" data-aos="zoom-in"
                                                                        data-aos-delay="200"
                                                                        data-aos-duration="1200"
                                                                        data-aos-easing="ease-in-out">
                                                                        <div class="page-img mt-md-0 mt-3">
                                                                            <img class="w-50" src="https://www.gbim.com/seo/local_seo.webp" alt="service">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-12 side-padding-mbl" data-aos="fade-left"
                                                                        data-aos-delay="200"
                                                                        data-aos-duration="1200"
                                                                        data-aos-easing="ease-in-out">
                                                                        <h4 class="mb-20 text-blue">How We Can Help</h4>
                                                                        <p class="mt-n1 mb-4 blog-text sec-para">Our designers translate your brand identity into a captivating visual language, ensuring consistency across all
                                                                            touchpoints.
                                                                        </p>
                                                                        <div class="checklist style4 mb-20">
                                                                            <ul>
                                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Increased User
                                                                                    Engagement &
                                                                                    Conversion Rates</li>
                                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Enhanced Brand
                                                                                    Perception
                                                                                </li>
                                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Improved Global Reach &
                                                                                    Accessibility</li>
                                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Reduced Development
                                                                                    Costs
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                                                aria-labelledby="v-pills-profile-tab" tabindex="0">

                                                                <div class="row ">
                                                                    <div class="col-lg-6 col-12 text-center side-padding-mbl">
                                                                        <div class="row mt-md-0 mt-3">
                                                                            <div class="col-lg-6 col-6 page-img" data-aos="fade-right" data-aos-duration="5000">
                                                                                <img class="w-75" src="https://www.gbim.com/seo/local_seo.webp" alt="service">
                                                                            </div>
                                                                            <div class="col-lg-6 col-6 page-img side-padding-mbl" data-aos="fade-right" data-aos-duration="5000">
                                                                                <img class="w-75" src="https://www.gbim.com/seo/local_seo.webp" alt="service">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-lg-6 col-12 side-padding-mbl">
                                                                        <h4 class="mb-20 text-blue">How We Can Help</h4>
                                                                        <p class="mt-n1 mb-4 blog-text sec-para">Our designers translate your brand identity into a captivating visual language, ensuring consistency across all
                                                                            touchpoints.
                                                                        </p>
                                                                        <div class="checklist style4 mb-20">
                                                                            <ul>
                                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Increased User
                                                                                    Engagement &
                                                                                    Conversion Rates</li>
                                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Enhanced Brand
                                                                                    Perception
                                                                                </li>
                                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Improved Global Reach &
                                                                                    Accessibility</li>
                                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Reduced Development
                                                                                    Costs
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                                                aria-labelledby="v-pills-messages-tab" tabindex="0">
                                                                <div class="row ">
                                                                    <div class="col-lg-6 col-12 text-center side-padding-mbl">
                                                                        <div class="page-img mt-md-0 mt-3">
                                                                            <img class="w-50" src="https://www.gbim.com/seo/local_seo.webp" alt="service">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-12 side-padding-mbl">
                                                                        <h4 class="mb-20 text-blue">How We Can Help</h4>
                                                                        <p class="mt-n1 mb-4 blog-text sec-para">Our designers translate your brand identity into a captivating visual language, ensuring consistency across all
                                                                            touchpoints.
                                                                        </p>
                                                                        <div class="checklist style4 mb-20">
                                                                            <ul>
                                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Increased User
                                                                                    Engagement &
                                                                                    Conversion Rates</li>
                                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Enhanced Brand
                                                                                    Perception
                                                                                </li>
                                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Improved Global Reach &
                                                                                    Accessibility</li>
                                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Reduced Development
                                                                                    Costs
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                                                aria-labelledby="v-pills-settings-tab" tabindex="0">

                                                                <div class="row ">
                                                                    <div class="col-lg-6 col-12 text-center side-padding-mbl">
                                                                        <div class="row mt-md-0 mt-3">
                                                                            <div class="col-lg-6 col-6 page-img" data-aos="fade-right" data-aos-duration="5000">
                                                                                <img class="w-75" src="https://www.gbim.com/seo/local_seo.webp" alt="service">
                                                                            </div>
                                                                            <div class="col-lg-6 col-6 page-img" data-aos="fade-right" data-aos-duration="5000">
                                                                                <img class="w-75" src="https://www.gbim.com/seo/local_seo.webp" alt="service">
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-lg-6 col-12 side-padding-mbl">
                                                                        <h4 class="mb-20 text-blue">How We Can Help</h4>
                                                                        <p class="mt-n1 mb-4 blog-text sec-para">Our designers translate your brand identity into a captivating visual language, ensuring consistency across all
                                                                            touchpoints.
                                                                        </p>
                                                                        <div class="checklist style4 mb-20">
                                                                            <ul>
                                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Increased User
                                                                                    Engagement &
                                                                                    Conversion Rates</li>
                                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Enhanced Brand
                                                                                    Perception
                                                                                </li>
                                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Improved Global Reach &
                                                                                    Accessibility</li>
                                                                                <li class="sec-para-list"><i class="fa-solid fa-shield-check"></i>Reduced Development
                                                                                    Costs
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section> -->

    @include('Frontend.partial.clientList')

    {{-- Testimonials --}}
    @include('Frontend.partial.testimonial.layout-02')

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
                                    data-bs-target="#collapse-1" aria-expanded="false"
                                    aria-controls="collapse-1">What is digital marketing?</button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Digital marketing encompasses all marketing efforts that
                                        use electronic devices or the internet, including channels like search engines,
                                        social media, email, and websites.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">Why
                                    is digital marketing important?</button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">It allows businesses to reach a broader audience, target
                                        specific demographics, and measure campaign effectiveness in real-time.</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="false"
                                    aria-controls="collapse-3">What are the main types of digital marketing?</button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Key types include Search Engine Optimization (SEO),
                                        Pay-Per-Click (PPC) advertising, content marketing, social media marketing,
                                        email marketing, and affiliate marketing.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">How
                                    does digital marketing differ from traditional marketing?</button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Digital marketing is primarily online, offering real-time
                                        analytics and targeted outreach, whereas traditional marketing uses offline
                                        channels like print and TV without immediate feedback.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">How
                                    do I measure the success of digital marketing campaigns?
                                </button>
                            </div>
                            <div id="collapse-5" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">Success is gauged using metrics like website traffic,
                                        conversion rates, click-through rates (CTR), and return on investment (ROI).</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-6" aria-expanded="false"
                                    aria-controls="collapse-6">What is a digital marketing funnel?
                                </button>
                            </div>
                            <div id="collapse-6" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">It's a model illustrating the customer journey from
                                        awareness to conversion, guiding strategies at each stage to optimize engagement
                                        and sales.</p>
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