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
            "name": "What is SEO?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "SEO involves optimizing a website to rank higher in search engine results, enhancing visibility and attracting organic traffic."
            }
        }, {
            "@type": "Question",
            "name": "Why is SEO important?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Higher search rankings lead to increased visibility, credibility, and potential customer engagement."
            }
        }, {
            "@type": "Question",
            "name": "How does SEO work?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "It works by improving website elements like content quality, keyword relevance, site speed, and backlinks to align with search engine algorithms."
            }
        }, {
            "@type": "Question",
            "name": "What are keywords in SEO?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Keywords are specific words or phrases users enter into search engines, which SEO strategies target to improve relevance and rankings."
            }
        }, {
            "@type": "Question",
            "name": "7. What is a backlink?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "A backlink is a link from another website to yours, signaling credibility and authority to search engines."
            }
        }, {
            "@type": "Question",
            "name": "What is local SEO?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Local SEO focuses on optimizing a business's online presence to attract more customers from relevant local searches."
            }
        }]
    }
</script>

@endsection
@section('content')
<main id="seo-service">
    <div class="breadcumb-wrapper p-0" style="margin-top: 66px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0">
                    <img src="{{ asset('frontend-assets/img/ServicePages/SEO/Hero.png') }}" alt="seo" srcset=""
                        width="100%">
                </div>
            </div>
        </div>
    </div>

    <section class="overflow-hidden mb-md-5 md-2 pt-5" id="about-sec">
        <div class="container">
            <div class="row align-items-end justify-content-center">
                <div class="col-lg-9 col-12 d-flex justify-content-center align-items-center flex-column">
                    <div class="title-area mb-md-3 mb-2 mt-n1">
                        <h1 class="text-center fw-bold sec-title my-3" data-aos="zoom-in" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            Accelerate your digital growth with a reliable <span class="text-blue"> SEO Agency in
                                UAE</span>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-12 col-12 d-flex justify-content-center align-items-center flex-column">
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">SEO is more than just showing up in
                        search results. It is about getting recognised by the audience that matters to you. No matter if
                        you are a new startup or an MNC company, at Sociomark, we make strategies that drive real
                        growth.
                    </p>
                    <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                        data-aos-duration="1200" data-aos-easing="ease-in-out">With our expertise in SEO in
                            Dubai, we tailor each approach to fit your unique goals. From local market
                        insights to global trends, we ensure that you gain visibility where it matters the most. We
                        focus on the things that create real, lasting results—like technical optimisation and <a href="{{ route('contentMarketing') }}"><b>content marketing</b> </a>
                        that speaks to your audience. We don't just chase rankings; we chase meaningful engagement.
                        Through our strategies, we help our clients to increase visibility, drive meaningful traffic and
                        enhance the user experience. As one of the top SEO companies in Dubai, we help
                        businesses across the world grow, not just appear on search engines.

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
                            Our Way of
                            <span class="text-blue"> Creating Impact</span>.
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
                            <img src="{{ asset('frontend-assets/img/ServicePages/SEO/Creating Impact.png') }}"
                                alt="Key" class="key-image mt-3">
                        </div>
                    </div>
                </div>

                <!-- Right Side -->
                <div class="col-md-6 mt-4 mt-md-0">
                    <div id="benefits">
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Competitor Analysis</h4>
                            <p class="sec-para">We deep-dive into what your competitors are doing—what’s working, what’s
                                not. These insights help shape a smarter strategy tailored to your goals, especially in
                                the space of search engine optimisation in Dubai and UAE. </p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Technical SEO Audit</h4>
                            <p class="sec-para">Identifying what’s slowing your site down or holding it back from
                                better
                                rankings. From crawling issues to broken links, we fix the technical gaps that matter.
                            </p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Content Strategy</h4>
                            <p class="sec-para">Crafting meaningful content that connects with the audience and aligns
                                with your brand voice. As an SEO optimisation agency, we ensure every
                                piece is polished to boost discoverability and delivers long-term value.</p>
                        </div>


                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">On Page SEO </h4>
                            <p class="sec-para">Optimisation of every element—meta tags, headers, internal links—to
                                make your pages more search-friendly. It's about making sure your content speaks clearly
                                to both users and search engines.</p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">GMB Optimisation</h4>
                            <p class="sec-para">We fine-tune your Google Business Profile to enhance visibility in
                                local searches. This is key for location-based traffic and local engagement.</p>
                        </div>
                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Off-Page SEO</h4>
                            <p class="sec-para">Building a strong online reputation with valuable backlinks from
                                trusted and reputed sources. Implementing strategies to increase your website’s
                                authority and credibility through external platforms.</p>
                        </div>

                        <div class="benefit-block border-start border-4">
                            <h4 class="sub-sec-title">Traffic Analysis</h4>
                            <p class="sec-para">Tracking how users reach your website and what they do once they land.
                                These insights help fine-tune performance and conversions over time for businesses
                                seeking a trusted SEO company in Abu Dhabi and UAE.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-hidden space mb-5 mb-md-0" id="about-sec3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center">
                        <h2 class="fw-bold mb-5 sec-title" data-aos="fade-right" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            SEO Solutions that are
                            <span class="text-blue"> Tailored for Every Industry</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="according-list-area">
                <div class="according-list hover-item item-active">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Ecommerce SEO</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/SEO/Services/Ecommerce Seo.png') }}"
                            alt="Ecommerce SEO" class="rounded-overflow">
                        <p class="sec-para text">Transform passive visitors into engaged customers.
                            Our strategies are designed to boost website traffic and conversions through a combination
                            of content optimization, in-depth website audits, and keyword research.
                            We'll help you dominate search engine results and attract quality leads.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">International SEO</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/SEO/Services/International Seo.png') }}"
                            alt="International SEO" class="rounded-overflow">
                        <p class="sec-para text">We excel in international SEO. Our strategies focus on key elements
                            like multilingual keyword research, in-depth audience analysis, and optimized website
                            structure. We also specialize in geo-targeting, ensuring your content reaches the right
                            people in the right places.

                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">App Store SEO</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/SEO/Services/Mobile Seo.png') }}"
                            alt="App Store SEO" class="rounded-overflow">
                        <p class="sec-para text"> Optimizing your app's visibility is key to attracting the right
                            users. By enhancing keywords, reviews, and user interaction, we ensure your app stands out
                            and gets more downloads.


                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">Local SEO</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/SEO/Services/Local Seo.png') }}"
                            alt="Local SEO" class="rounded-overflow">
                        <p class="sec-para text">We focus on enhancing customer engagement at the offline stores,
                            increasing their online audience who are often unaware of their local presence, and getting
                            them on the map with Google Listings.
                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">AI SEO</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/SEO/Services/Seo Audit.png') }}"
                            alt="AI SEO" class="rounded-overflow">
                        <p class="sec-para text">By leveraging AI, we enhance your website’s visibility with smart,
                            data-driven adjustments. This approach ensures you're always ahead of the curve, delivering
                            results that matter.

                        </p>

                    </div>
                </div>
                <div class="according-list hover-item">
                    <div class="accordion-item2">
                        <h3 class="box-title text-center text-md-start">GEO</h3>
                    </div>
                    <div class="according-img">
                        <img src="{{ asset('frontend-assets/img/ServicePages/SEO/Services/Goodle Analytics and Report.png') }}"
                            alt="GEO" class="rounded-overflow">
                        <p class="sec-para text">Crafting content that speaks your brand’s truth while aligning with
                            how AI engines search and rank. We focus on making your digital presence more authentic, visible, and valuable.
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


    <section class="overflow-hidden position-relative space bg-grey" id="about-flip">
        <div class="container">
            <div class="row text-center d-flex justify-content-center justify-content-md-end">

                <div class="col-md-12 col-12 pe-0 pe-md-5">
                    <h2 class="fw-bold sec-title my-3" data-aos="fade-down" data-aos-delay="100">
                        The Process That Sets Us Apart as an
                        <span class="text-blue"> SEO Expert in Ajman</span>
                    </h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-4" data-aos="fade-right" data-aos-delay="400">
                <div class="col-12 col-md-3 first-feature-card feature-card flip-box p-0 mt-3 mx-2"
                    data-aos="fade-left" data-aos-delay=" 300">
                    <div class="h-100">
                        <div
                            class="flip-box-front first-feature-card h-100 d-flex align-items-center justify-content-center flex-column">

                            <h4 class="sub-sec-title text-blue"><b>Free Audit</b></h4>
                            <p class="sec-para">Start with a thorough analysis of your website’s performance to uncover strengths, weaknesses, and opportunities. This audit is the basis on which we form a customised strategy.</p>
                        </div>
                        <!-- <div class="flip-box-back d-flex justify-content-center align-items-center h-100">
                            <p class="sec-para">Start with a thorough analysis of your website’s performance to uncover strengths, weaknesses, and opportunities. This audit is the basis on which we form a customised strategy.</p>
                        </div> -->
                    </div>
                </div>
                <div class="col-12 col-md-3 second-feature-card feature-card flip-box p-0 mt-3 mx-2"
                    data-aos="fade-left" data-aos-delay="300">
                    <div class="h-100">
                        <div
                            class="flip-box-front second-feature-card h-100 d-flex align-items-center justify-content-start flex-column">

                            <h4 class="sub-sec-title text-blue"><b>Strategy Development</b></h4>
                            <p class="sec-para">Based on the audit, an SEO strategy is developed that aligns with your business goals and target audiences. Our SEO services in Abu Dhabi and UAE are crafted to meet the specific needs of your industry.</p>
                        </div>
                        <!-- <div class="flip-box-back d-flex justify-content-center align-items-center h-100">
                            <p class="sec-para">Based on the audit, an SEO strategy is developed that aligns with your business goals and target audiences. Our <b>SEO services in Abu Dhabi</b> and UAE are crafted to meet the specific needs of your industry.</p>
                        </div> -->
                    </div>
                </div>
                <div class="col-12 col-md-3  feature-card flip-box p-0 mt-3 mx-2">
                    <div class="h-100">
                        <div
                            class="flip-box-front first-feature-card h-100 d-flex align-items-center justify-content-start flex-column">
                            <!-- <img src="{{ asset('frontend-assets/img/icon/about/Result Driven.png') }}" alt="Results-Driven"
                                class="h-50 w-50"> -->
                            <h4 class="sub-sec-title text-blue"><b>Implementation</b></h4>
                            <p class="sec-para">The strategy is put into action, which includes technical fixes, optimising existing content, creating new content, improving site structure, and applying SEO best practices.</p>
                        </div>
                        <!-- <div class="flip-box-back d-flex justify-content-center align-items-center h-100">
                            <p class="sec-para">The strategy is put into action, which includes technical fixes, optimising existing content, creating new content, improving site structure, and applying SEO best practices.</p>
                        </div> -->
                    </div>
                </div>
                <div class="col-12 col-md-3  feature-card flip-box p-0 mt-3 mx-2" data-aos="fade-right"
                    data-aos-delay="400">
                    <div class="h-100">
                        <div
                            class="flip-box-front second-feature-card h-100 d-flex align-items-center justify-content-start flex-column">

                            <h4 class="sub-sec-title text-blue"><b>Monitoring & Optimisation</b></h4>
                            <p class="sec-para">SEO requires continuous optimisation. <a href="{{ route('sem') }}"><b>Performance</b></a> is tracked, and strategies are adjusted to keep the website ahead in search engine rankings. Through our SEO services in Ajman, we ensure that the website remains competitive and effective.</p>
                        </div>
                        <!-- <div class="flip-box-back d-flex justify-content-center align-items-center h-100">
                            <p class="sec-para">SEO requires continuous optimisation. <a href="{{ route('sem') }}"><b>Performance</b></a> is tracked, and strategies are adjusted to keep the website ahead in search engine rankings. Through our <b>SEO services in Ajman,</b> we ensure that the website remains competitive and effective.</p>
                        </div> -->
                    </div>
                </div>
                <div class="col-12 col-md-3  feature-card flip-box p-0 mt-3 mx-2" data-aos="fade-right"
                    data-aos-delay="400">
                    <div class="h-100">
                        <div
                            class="flip-box-front first-feature-card h-100 d-flex align-items-center justify-content-start flex-column">

                            <h4 class="sub-sec-title text-blue"><b>Reporting</b></h4>
                            <p class="sec-para">Receive detailed yet clear reports every month, showing key performance metrics and the impact of the SEO strategy on website performance.</p>
                        </div>
                        <!-- <div class="flip-box-back d-flex justify-content-center align-items-center h-100">
                            <p class="sec-para">Receive detailed yet clear reports every month, showing key performance metrics and the impact of the SEO strategy on website performance.</p>
                        </div> -->
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="overflow-hidden space" id="about-sec2">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-8" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1200"
                    data-aos-easing="ease-in-out">
                    <div class="title-area mb-20">
                        <h2 class="sec-title mb-md-3 mb-2">
                            The impact of partnering with <span class="text-blue">Sociomark</span>
                        </h2>
                    </div>
                    <p class="sec-para d-none ">Our SEO strategies are designed to improve your website’s ranking on
                        major search engines like Google. By targeting high-intent keywords relevant to your business.
                    </p>
                    <div class="choose-feature-wrap">
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/SEO/icons/idea.png') }}"
                                    width="60" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Comprehensive Digital Solutions</h4>
                                <p class="sec-para"> We provide cost-effective SEO strategies that enhance your
                                    visibility and bring measurable growth to your business.</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/SEO/icons/Keyword.png') }}"
                                    width="60" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Tailored Strategies for Long-term Growth</h4>
                                <p class="sec-para">Our approach focuses on sustainable results, ensuring that your
                                    brand ranks higher and stays relevant in the market.</p>
                            </div>
                        </div>
                        <div class="choose-feature">
                            <div class="box-icon d-flex justify-content-center align-items-center">
                                <img src="{{ asset('frontend-assets/img/ServicePages/SEO/icons/integration.png') }}"
                                    width="60" alt="Icon">
                            </div>
                            <div class="media-body">
                                <h4 class="sub-sec-title">Perfect Integration of SEO and Web Development</h4>
                                <p class="sec-para"> By combining SEO with expert <a href="{{ route('website') }}"><b>web development</b> </a>, we
                                    ensure that your website is optimised for both performance and user experience.
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
                            <img src="{{ asset('frontend-assets/img/ServicePages/SEO/IMpact.png') }}" alt="Choose"
                                class="w-100">

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
                            <p class=" counter-text sec-para mb-n1"><b>Organic Keywords</b></p>
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
                            <p class=" counter-text sec-para mb-n1"><b>Revenue Generated</b></p>
                        </div>
                    </div>
                    <div class="divider"></div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                    <div class="counter-card pb-2">
                        <h3 class="box-number text-orange"><span class="counter-number">7</span><span
                                class="plus">%</span></h3>
                        <div class="media-body">
                            <p class=" counter-text sec-para mb-n1"><b>Minimum bounce rate</b></p>
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
                What’s Included in Our <span class="text-blue"> SEO Services</span>
            </h2>
            <!-- Feature Icons Row 1 -->
            <div class="row justify-content-evenly mt-5">
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/SEO/icons/Keyword.png') }}"
                            alt="One-Click Reports" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Keyword Research & Ranking</div>
                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/SEO/icons/Competitor.png') }}"
                            alt="Traffic Performance" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Organic Traffic Growth</div>

                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/SEO/icons/Link.png') }}"
                            alt="CRM Module" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Link Building</div>

                </div>
            </div>

            <!-- Feature Icons Row 2 -->
            <div class="row justify-content-evenly mt-3 mt-md-5">
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/SEO/icons/On page.png') }}"
                            alt="Keyword Performance" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">On-Page Optimization</div>

                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/SEO/icons/Technical audit.png') }}"
                            alt="Marketing Activities" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Technical Audit </div>

                </div>
                <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                    <div class="icon-img me-3">
                        <img src="{{ asset('frontend-assets/img/ServicePages/SEO/icons/Local_.png') }}"
                            alt="Leads Management" class="feature-icon">
                    </div>
                    <div class="sub-sec-title">Local SEO</div>

                </div>
            </div>

            <!-- Dashboard Images -->
            <div class="mt-5" data-aos="zoom-in" data-tilt data-tilt-max="10" data-aos-delay="100"
                data-aos-duration="1000" data-aos-easing="ease-in-out">
                <img src="{{ asset('frontend-assets/img/Services-page/seo/Footer_banner.png') }}"
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


    <div class="overflow-hidden space" id="about-sec6">
        <div class="container">
            <div class="title-area text-center mb-25">
                <!-- <h2 class="sec-title">Frequently Asked Questions</h2> -->
                <h2 class="fw-bold sec-title" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"
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
                                    data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">How
                                    long does it take to see results from SEO?</button>
                            </div>
                            <div id="collapse-1" class="accordion-collapse collapse show"
                                aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">SEO is an ongoing process, but you can expect to see
                                        initial improvements in website traffic and rankings within 3-6 months with a
                                        well-defined strategy. Long-term results and significant traffic growth. We are
                                        a five-star rated holistic full-service digital marketing agencies, serving
                                        thousands of clients. Our digital agency covers all aspects of internet
                                        marketing:</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">How
                                    will I be kept informed about my SEO progress?</button>
                            </div>
                            <div id="collapse-2" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">SEO is an ongoing process, but you can expect to see
                                        initial improvements in website traffic and rankings within 3-6 months with a
                                        well-defined strategy. Long-term results and significant traffic growth. We are
                                        a five-star rated holistic full-service digital marketing agencies, serving
                                        thousands of clients. Our digital agency covers all aspects of internet
                                        marketing:</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="false"
                                    aria-controls="collapse-3">What kind of SEO techniques do you use?</button>
                            </div>
                            <div id="collapse-3" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">SEO is an ongoing process, but you can expect to see
                                        initial improvements in website traffic and rankings within 3-6 months with a
                                        well-defined strategy. Long-term results and significant traffic growth. We are
                                        a five-star rated holistic full-service digital marketing agencies, serving
                                        thousands of clients. Our digital agency covers all aspects of internet
                                        marketing:</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="false"
                                    aria-controls="collapse-4">What happens if I don't see results after a
                                    while?</button>
                            </div>
                            <div id="collapse-4" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">SEO is an ongoing process, but you can expect to see
                                        initial improvements in website traffic and rankings within 3-6 months with a
                                        well-defined strategy. Long-term results and significant traffic growth. We are
                                        a five-star rated holistic full-service digital marketing agencies, serving
                                        thousands of clients. Our digital agency covers all aspects of internet
                                        marketing:</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">How
                                    do I get started with your agency?</button>
                            </div>
                            <div id="collapse-5" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">SEO is an ongoing process, but you can expect to see
                                        initial improvements in website traffic and rankings within 3-6 months with a
                                        well-defined strategy. Long-term results and significant traffic growth. We are
                                        a five-star rated holistic full-service digital marketing agencies, serving
                                        thousands of clients. Our digital agency covers all aspects of internet
                                        marketing:</p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-card ">
                            <div class="accordion-header" id="collapse-item-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-6" aria-expanded="false"
                                    aria-controls="collapse-6">What is your process for starting a new
                                    project?</button>
                            </div>
                            <div id="collapse-6" class="accordion-collapse collapse "
                                aria-labelledby="collapse-item-6" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <p class="sec-para-faq">SEO is an ongoing process, but you can expect to see
                                        initial improvements in website traffic and rankings within 3-6 months with a
                                        well-defined strategy. Long-term results and significant traffic growth. We are
                                        a five-star rated holistic full-service digital marketing agencies, serving
                                        thousands of clients. Our digital agency covers all aspects of internet
                                        marketing:</p>
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

@push('styles')
<style>
    #about-flip .flip-box {
        width: 400px;
        height: 320px;
    }

    #about-flip .flip-box-front {
        padding: 20px;
    }
</style>

@endpush