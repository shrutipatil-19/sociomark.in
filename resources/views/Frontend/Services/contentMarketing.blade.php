@extends('Frontend.layout.app')
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

@section('content')
    <main id="seo-service">
        <div class="breadcumb-wrapper p-0" style="margin-top: 66px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 p-0">
                        <img src="{{ asset('frontend-assets/img/ServicePages/Content Marketing/Hero.png') }}" alt="content marketing"
                            srcset="" width="100%">
                    </div>
                </div>
            </div>
        </div>

        <section class="overflow-hidden mb-md-5 md-2 pt-5" id="about-sec">
            <div class="container">
                <div class="row align-items-end justify-content-center">
                    <div class="col-lg-10 col-12 d-flex justify-content-center align-items-center flex-column">
                        <div class="title-area mb-md-3 mb-2 mt-n1">
                            <h1 class="text-center fw-bold sec-title my-3" data-aos="zoom-in" data-aos-delay="100"
                                data-aos-duration="1000" data-aos-easing="ease-in-out">
                                Turn Content into a Business Advantage with Our <span class="text-blue"> Content Marketing Agency in Ajman</span>
                            </h1>
                        </div>
                    </div>
                    <div class="col-lg-12 col-12 d-flex justify-content-center align-items-center flex-column">
                        <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                            data-aos-duration="1200" data-aos-easing="ease-in-out"> Words have power. And when they’re used
                            right, they can grow your business. We help brands do just that with effective content marketing agency in Ajman. From social posts to long-form <a href="{{ route('blog') }}"><b>blogs</b></a>, our aim is to make content that will
                            bring results. At Sociomark, our team blends creativity with data to form a competent digital
                                content strategy.
                        </p>
                        <p class="mt-n2 mb-25 sec-para text-left" data-aos="fade-down" data-aos-delay="200"
                            data-aos-duration="1200" data-aos-easing="ease-in-out">Every line we write and every design we
                            build is backed by purpose. Being a content marketing agency, telling stories isn’t just
                            what we do —we solve problems too. Need your brand to rank better or connect deeper? We’ll
                            handle that. With visuals, blogs, and smart messaging, your content becomes more than just
                            words. It becomes your best-performing asset.
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
                                The
                                <span class="text-blue"> remarkable way</span>
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
                                <img src="{{ asset('frontend-assets/img/ServicePages/Content Marketing/skills.png') }}"
                                    alt="Key" class="key-image mt-3">
                            </div>
                        </div>
                    </div>

                    <!-- Right Side -->
                    <div class="col-md-6 mt-4 mt-md-0">
                        <div id="benefits">
                            <div class="benefit-block border-start border-4">
                                <h4 class="sub-sec-title">Identify All Important Media Channels</h4>
                                <p class="sec-para">We find where your audience spends time so they are able to interact and
                                    see your content.
                                </p>
                            </div>
                            <div class="benefit-block border-start border-4">
                                <h4 class="sub-sec-title">Start Writing Blogs </h4>
                                <p class="sec-para">Our writers write blogs that does much more than just fill the space of
                                    the website, it educates and helps businesses capitalize visitors into customers.
                                </p>
                            </div>
                            <div class="benefit-block border-start border-4">
                                <h4 class="sub-sec-title">Create Videos</h4>
                                <p class="sec-para">Boost your <a href="{{ route('socialMedia') }}"><b>social media marketing engagement</b></a> with videos from us, ensuring your message is crystal clear and remembered.
                                </p>
                            </div>
                            <div class="benefit-block border-start border-4">
                                <h4 class="sub-sec-title">Identify Questions That Need Answering</h4>
                                <p class="sec-para">We look at what people are asking—and make sure your brand provides the
                                    answer.</p>
                            </div>
                            <div class="benefit-block border-start border-4">
                                <h4 class="sub-sec-title">Get Creative</h4>
                                <p class="sec-para">From format to tone, we explore bold and original ways to express your
                                    brand story.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="overflow-hidden space" id="about-sec3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="title-area text-center">
                            <h2 class="fw-bold mb-5 sec-title" data-aos="fade-right" data-aos-delay="100"
                                data-aos-duration="1000" data-aos-easing="ease-in-out">
                                Our roadmap to creating an <span class="text-blue">unforgettable impact</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="according-list-area">
                    <div class="according-list hover-item item-active">
                        <div class="accordion-item2">
                            <h3 class="box-title text-center text-md-start">Understand What Works</h3>
                        </div>
                        <div class="according-img">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Content Marketing/Service/Understand What Works.png') }}"
                                alt="understanding what works" class="rounded-overflow">
                            <p class="sec-para text">We begin with <a href="{{ route('seo') }}"><b>Keyword Research</b></a> to learn what your audience is
                                searching for.
                            </p>

                        </div>
                    </div>
                    <div class="according-list hover-item">
                        <div class="accordion-item2">
                            <h3 class="box-title text-center text-md-start">Smart Planning </h3>
                        </div>
                        <div class="according-img">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Content Marketing/Service/Smart Planning.png') }}"
                                alt="Smart Planning " class="rounded-overflow">
                            <p class="sec-para text"> Our content marketing strategy covers everything from what to
                                post to where and when.

                            </p>
                        </div>
                    </div>
                    <div class="according-list hover-item">
                        <div class="accordion-item2">
                            <h3 class="box-title text-center text-md-start">Create with Purpose</h3>
                        </div>
                        <div class="according-img">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Content Marketing/Service/Create with Purpose.png') }}"
                                alt="Create with Purpose" class="rounded-overflow">
                            <p class="sec-para text">We're a <a href="{{ route('photoVideography') }}"><b>photography and videography agency</b></a> dedicated to creating visuals that don't just inform, but truly stand out

                            </p>
                        </div>
                    </div>
                    <div class="according-list hover-item">
                        <div class="accordion-item2">
                            <h3 class="box-title text-center text-md-start">Reach the Right People</h3>
                        </div>
                        <div class="according-img">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Content Marketing/Service/Reach the Right People.png') }}"
                                alt="Reach the Right People" class="rounded-overflow">
                            <p class="sec-para text">We Promote your content through channels which will amplify and
                                enhance the reach and visibility.
                            </p>
                        </div>
                    </div>
                    <div class="according-list hover-item">
                        <div class="accordion-item2">
                            <h3 class="box-title text-center text-md-start">Build Trust Over Time </h3>
                        </div>
                        <div class="according-img">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Content Marketing/Service/Build Trust Over Time.png') }}"
                                alt="Build Trust Over Time " class="rounded-overflow">
                            <p class="sec-para text">We consistently build links to help your content rank better
                                and earn authority.

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
                <div class="row align-items-center">
                    <div class="col-xl-8" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1200"
                        data-aos-easing="ease-in-out">
                        <div class="title-area mb-20">
                            <h2 class="sec-title mb-md-3 mb-2">
                                How we make you win the <span class="text-blue">content game</span>
                            </h2>
                        </div>
                        <p class="sec-para d-none ">Our SEO strategies are designed to improve your website’s ranking on
                            major search engines like Google. By targeting high-intent keywords relevant to your business.
                        </p>
                        <div class="choose-feature-wrap">
                            <div class="choose-feature">
                                <div class="box-icon d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('frontend-assets/img/ServicePages/Content Marketing/icons/creative.png') }}"
                                        width="60" alt="Icon" class="w-100 h-100">
                                </div>
                                <div class="media-body">
                                    <h4 class="sub-sec-title">Creative That Clicks</h4>
                                    <p class="sec-para"> We turn complex ideas into fun, shareable content. That makes your
                                        audience stick around longer.
                                    </p>
                                </div>
                            </div>
                            <div class="choose-feature">
                                <div class="box-icon d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('frontend-assets/img/ServicePages/Content Marketing/icons/Strategy.png') }}"
                                        width="60" alt="Icon" class="w-100 h-100">
                                </div>
                                <div class="media-body">
                                    <h4 class="sub-sec-title">Strategy Meets Story</h4>
                                    <p class="sec-para"> As a team offering content marketing services, we build
                                        content that fits into your business goals, not the other way around.</p>
                                </div>
                            </div>
                            <div class="choose-feature">
                                <div class="box-icon d-flex justify-content-center align-items-center">
                                    <img src="{{ asset('frontend-assets/img/ServicePages/Content Marketing/icons/Story.png') }}"
                                        width="60" alt="Icon" class="w-100 h-100">
                                </div>
                                <div class="media-body">
                                    <h4 class="sub-sec-title">Always Optimized</h4>
                                    <p class="sec-para"> From headlines to hashtags, we ensure that the content is always
                                        producing results and working hard for you.
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
                                <img src="{{ asset('frontend-assets/img/ServicePages/Content Marketing/content game.png') }}"
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
                            <h3 class="box-number text-orange"><span class="counter-number">30</span>k<span
                                    class="plus">+</span>
                            </h3>
                            <div class="media-body">
                                <p class=" counter-text sec-para mb-n1"><b>Blogs</b></p>
                            </div>
                        </div>
                        <div class="divider"></div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                        <div class="counter-card pb-2">
                            <h3 class="box-number text-orange"><span class="counter-number">3</span>B<span
                                    class="plus">+</span>
                            </h3>
                            <div class="media-body">
                                <p class=" counter-text sec-para mb-n1"><b>Video Views</b></p>
                            </div>
                        </div>
                        <div class="divider"></div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                        <div class="counter-card pb-2">
                            <h3 class="box-number text-orange"><span class="counter-number">20</span>K<span
                                    class="plus">+</span>
                            </h3>
                            <div class="media-body">
                                <p class=" counter-text sec-para mb-n1"><b>Campaigns</b></p>
                            </div>
                        </div>
                        <div class="divider"></div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-6">
                        <div class="counter-card pb-2">
                            <h3 class="box-number text-orange"><span class="counter-number">50</span><span
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
                    What’s Included in Our <span class="text-blue"> Content Marketing Package</span>
                </h2>
                <!-- Feature Icons Row 1 -->
                <div class="row justify-content-evenly mt-5">
                    <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                        <div class="icon-img me-3">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Content Marketing/icons/website.png') }}"
                                alt="One-Click Reports" class="feature-icon">
                        </div>
                        <div class="sub-sec-title">Website Content</div>
                    </div>
                    <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                        <div class="icon-img me-3">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Content Marketing/icons/short_form.png') }}"
                                alt="Traffic Performance" class="feature-icon">
                        </div>
                        <div class="sub-sec-title">Short-form content</div>

                    </div>
                    <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                        <div class="icon-img me-3">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Content Marketing/icons/Blog.png') }}"
                                alt="CRM Module" class="feature-icon">
                        </div>
                        <div class="sub-sec-title">Blog & Article</div>

                    </div>
                </div>

                <!-- Feature Icons Row 2 -->
                <div class="row justify-content-evenly mt-3 mt-md-5">
                    <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                        <div class="icon-img me-3">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Content Marketing/icons/caption.png') }}"
                                alt="Keyword Performance" class="feature-icon">
                        </div>
                        <div class="sub-sec-title">Caption</div>

                    </div>
                    <div class="col-12 col-md-3 feature d-flex align-items-center justify-content-start mt-3 mt-md-0">
                        <div class="icon-img me-3">
                            <img src="{{ asset('frontend-assets/img/ServicePages/Content Marketing/icons/banner.png') }}"
                                alt="Marketing Activities" class="feature-icon">
                        </div>
                        <div class="sub-sec-title">Banners </div>

                    </div>
                </div>

                <!-- Dashboard Images -->
                <div class="mt-5" data-aos="zoom-in" data-tilt data-tilt-max="10" data-aos-delay="100"
                    data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <img src="{{ asset('frontend-assets/img/ServicePages/Content Marketing/Package.png') }}"
                        alt="Dashboard Screenshot" class="dashboard-img rounded-overflow">
                </div>
            </div>
        </section>

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
                                        data-bs-target="#collapse-1" aria-expanded="false"
                                        aria-controls="collapse-1">What is content marketing?
                                    </button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse show"
                                    aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="sec-para-faq">It's a strategy focused on creating and distributing
                                            valuable content to attract and retain a target audience.
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card ">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-2" aria-expanded="true" aria-controls="collapse-2">Why
                                        is content marketing important?
                                    </button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="sec-para-faq">It builds trust, educates consumers, and supports SEO
                                            efforts, leading to increased brand authority and customer engagement.
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-card ">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">How
                                        to do SEO for content marketing?
                                    </button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="sec-para-faq">SEO for content marketing means creating valuable,
                                            keyword-optimized content that ranks well, earns backlinks, and stays updated to
                                            attract ongoing traffic.</p>
                                    </div>
                                </div>
                            </div>
                             <div class="accordion-card ">
                                <div class="accordion-header" id="collapse-item-4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">What are the 5 C's of content marketing?
                                    </button>
                                </div>
                                <div id="collapse-4" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="sec-para-faq">The 5 C’s of content marketing are Clarity, Consistency, Creativity, Customer focus, and Conversion.</p>
                                    </div>
                                </div>
                            </div>
                             <div class="accordion-card ">
                                <div class="accordion-header" id="collapse-item-5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5"> How to start content marketing?
                                    </button>
                                </div>
                                <div id="collapse-5" class="accordion-collapse collapse "
                                    aria-labelledby="collapse-item-5" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="sec-para-faq">Start content marketing by defining your target audience, setting clear goals, and creating valuable content that addresses their needs.</p>
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
