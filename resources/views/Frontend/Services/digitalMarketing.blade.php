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
                            Gain an edge for your business with a smart
                            <span class="text-blue">
                                digital marketing agency</span>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-12 col-12 d-flex justify-content-center align-items-center flex-column">
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">A digital presence shouldn’t just be another thing in the checklist. It is your gateway for your brand to meet the world. We understand that in such a competitive world, every opportunity to have an interaction is important. This can be done with a recipe that requires proper proportions of creativity, technical expertise and strategy, ensuring that your brand is heard.
                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">As a trusted SEO agency in Mumbai, we have assisted businesses to gain attention and build an impactful online presence. Whether your need is for an expert search solution or a talented social media agency in Mumbai to connect to your target customers and help your brand grow, Sociomark is here to help. Coming to the website part, it is much more than just a page on the internet; it is a base of your presence. That’s why our website development team is dedicated to making responsive, search-optimized and user-friendly platforms that deliver the results our clients need.
                    </p>

                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">As a marketing agency, our scope of operation goes far beyond just creation. Our goal is to get your brand noticed and remembered. Our digital marketing services also include content strategies that not only provide value to the customers but also do so in a graceful way.
                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">Be it eye-catching visuals or product or corporate shoots, our team of skilled photographers and videographers are here to help your brand have a face and a voice that speaks with your target audience in an impactful way.

                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">At Sociomark, our goal is not to just offer solutions; we are here to build long-term partnerships. Our plans are made to suit your business needs so that all areas of your digital presence work in sync to help your brand flourish.
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
                            Our Process That Aligns Every Step
                            <span class="text-blue">with Your Goals</span>
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
                            <h4 class="sub-sec-title">A strong start with goals</h4>
                            <p class="sec-para">Understanding your business, including the audience as well as the end results. Because we believe clear goals equal a clear path.</p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Plan the Smart Way</h4>
                            <p class="sec-para">This stage transforms ideas into a structured approach, which aligns every action with your vision.</p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Creating for every platform</h4>
                            <p class="sec-para">From blog posts to social media campaigns, we make content that is suitable for each space and connects with the audience.
                            </p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Smarter distribution</h4>
                            <p class="sec-para">More than posting, it’s about putting your message where it will yield the best results.</p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Adapting to Keep You Ahead</h4>
                            <p class="sec-para">Digital trends shift quickly, so we refine and optimize to keep your brand on top.</p>
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
                            Balanced approach leads to
                            <span class="text-blue"> powerful outcomes</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="according-list-area">
                <div class="according-list hover-item item-active">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Dive Deep into the Brand</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Services/Understand the Brand Inside Out.png') }}"
                            alt="Understand the Brand Inside Out" class="rounded-overflow">
                        <p class="sec-para text">We study every detail to understand what truly defines you.
                        </p>
                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Analyse Rivals and Opportunities</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Services/Study Competitors and Gaps.png') }}"
                            alt="Understand the Brand Inside Out" class="rounded-overflow">
                        <p class="sec-para text">As a digital marketing company, research is a key part for us. Exploring the market helps us spot what others miss.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Craft a Detailed Roadmap</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Services/Plan with Precision.png') }}"
                            alt="Plan with Precision" class="rounded-overflow">
                        <p class="sec-para text">Every step is planned with clarity and direction.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Design with Purpose</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Services/Create with Intent.png') }}"
                            alt="Create with Intent" class="rounded-overflow">
                        <p class="sec-para text">Ideas are shaped to connect meaningfully with your audience.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Implement and Refine</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Services/Execute and Optimise.png') }}"
                            alt="Execute and Optimise" class="rounded-overflow">
                        <p class="sec-para text">We execute each campaign with focus and improve at every stage. This has helped us be one of the best digital marketing agency throughout the years.
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
                            The foundation of our reputation in the
                            <span class="text-blue text-center">digital marketing world</span>
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
                                <h4 class="sub-sec-title">Strategy leads</h4>
                                <p class="sec-para">We don’t rely on assumptions. Every plan of ours is backed by research and designed around your audience and goals, which ensures that each action makes an impact.</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Icons/Expertise.png') }}"
                                    width="60" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Mastery Across Every Channel</h4>
                                <p class="sec-para">From SEO and social to content and ads, we know the role each plays and how to align them for maximum results.
                                </p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/Digital marketing/Icons/Growth.png') }}"
                                    width="60" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Motivated by Growth</h4>
                                <p class="sec-para">Our approach is designed to adapt and expand with your business, keeping pace with your goals
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
                Your Complete
                <span class="text-blue"> Digital Marketing Toolkit</span>
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
  <section class="overflow-hidden space mb-md-5 md-2 pt-5" id="about-sec">
        <div class="container">
            <div class="row align-items-end justify-content-center">
                <div class="col-lg-9 col-12 d-flex justify-content-center align-items-center flex-column">
                    <div class="title-area mb-md-3 mb-2 mt-n1">
                        <h1 class="text-center fw-bold sec-title my-3" data-aos="zoom-in" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                           Proven Success Through 

                            <span class="text-blue">
                                Case Studies</span>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-12 col-12 d-flex justify-content-center align-items-center flex-column">
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">Every strategy is only as strong as the results it helps to gain. That’s why we share some of the best social media case studies to highlight the impact. Each digital marketing strategy case study and online marketing case study reflects how we have turned ideas into growth for our clients. From performance marketing campaigns to full-scale solutions from our advertising agency, these stories showcase what’s possible when good work is done with a proper approach. Read it here.
                    </p>
                    

                   
                </div>
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