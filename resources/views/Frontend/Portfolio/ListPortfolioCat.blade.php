@extends('Frontend.layout.app')
@section('title', 'Portfolio')
@section('author', 'Your Company Name')
@section('description', 'This is a dynamic description for the home page.')
@section('keywords', 'seo, marketing, agency, web design')
@section('robots', 'INDEX,FOLLOW')

@section('custome-style')
<style>
    #portfolio .contact-head {
        padding: 3rem 0rem 3rem 0rem;
    }

    #portfolio .sec-title {
        font-size: 35px;
        line-height: 42px;
    }

    #portfolio .head-text-div {
        margin: 0px;
    }

    #portfolio .sec-para {
        line-height: 28px !important;
        font-size: 20px !important;
        letter-spacing: .10px !important;
        color: #797E88 !important;
    }

    /* section2 */
    #portfolio #about-sec2 .split-hover-section {
        padding: 80px 0;
        background-color: #f9f9f9;
    }

    #portfolio #about-sec2 .hover-split-box {
        position: relative;
        overflow: hidden;
        height: 400px;
        cursor: pointer;
        transition: all 0.5s ease;
        border-radius: 10px;
    }

    /* Image + heading wrapper */
    #portfolio #about-sec2 .image-wrapper {
        position: relative;
        height: 100%;
        box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
        -webkit-box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
        -moz-box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
        border-radius: 10px;
    }

    #portfolio #about-sec2 .hover-img {
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }

    /* Heading on the image */
    #portfolio #about-sec2 .img-heading {
        position: absolute;
        top: 0px;
        width: 100%;
        height: 100%;
        color: white;
        font-size: 28px;
        background: rgba(0, 0, 0, 0.5);
        padding: 12px 20px;
        border-radius: 6px;
        transition: opacity 0.3s ease;
        z-index: 2;
    }

    #portfolio #about-sec2 .hover-content p {
        width: 46%;
    }

    #portfolio #about-sec2 .img-heading h3 {
        color: white;
    }

    #portfolio #about-sec2 .img-heading h3 {
        color: white;
    }

    /* Hidden content panel */
    #portfolio #about-sec2 .hover-content {
        position: absolute;
        top: 0;
        right: -100%;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.95);
        padding: 24px;
        transition: right 0.5s ease;
        display: flex;
        flex-direction: column;
        justify-content: center;
        z-index: 3;
    }

    /* Hover Effects */
    #portfolio #about-sec2 .hover-split-box:hover .hover-img {
        transform: scale(1.05);
        /* width: 50%; */
    }

    #portfolio #about-sec2 .hover-split-box:hover .hover-content {
        right: -50%;
        /* width: 50%; */
    }

    #portfolio #about-sec2 .hover-split-box:hover .img-heading {
        opacity: 0;
        /* width: 50%; */
    }

    #portfolio #about-sec2 .th-btn {
        padding: 15px;
        width: 30%;
    }

    /* section 2end */



    @media only screen and (max-width: 600px) {
        #portfolio .contact-head {
            padding: 2rem 0.5rem;
        }

        #portfolio .head-text-div {
            margin-bottom: 13px;
        }

        #portfolio .head-mbl-text,
        #portfolio .space-bottom .head-mbl-text {
            font-size: 30px;
            line-height: 31px;
        }

        #portfolio #about-sec2 .th-btn {
            padding: 12px;
            width: 40%;
        }
    }
</style>
@endsection
@section('content')
<main id="portfolio">
    <section>
        <div class="full-width">
            <picture>
                <source media="(min-width: 1400px)" srcset="{{ asset('frontend-assets/img/banners/portfolio.jpg') }}">
                <img src="{{ asset('frontend-assets/img/banners/portfolio.jpg')}}" alt="portfolio">
            </picture>
        </div>
    </section>
    <section class="overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content breadcrumb-light">
                        <h2 class="breadcumb-title">Portfolios</h2>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Portfolios</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="overflow-hidden space contact-head" id="about-sec1">
        <div class="container">
            <div class="row">
                <div class="title-area text-center text-xl-start col-md-4 head-text-div">
                    <h1 class="sec-title head-text head-mbl-text"
                        data-aos="fade-right"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">
                        Don’t hesitate to <span class="text-blue"> contact us</span> for any information.
                    </h1>
                </div>
                <div class="text-center text-xl-start col-md-8">
                    <p class="sec-para" data-aos="fade-left"
                        data-aos-delay="100"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">We identify the most relevant and high-traffic keywords for your business. Our
                        team conducts thorough research to understand.</p>
                    <p class="sec-para" data-aos="fade-left"
                        data-aos-delay="200"
                        data-aos-duration="1000"
                        data-aos-easing="ease-in-out">We identify the most relevant and high-traffic keywords for your business. Our
                        team conducts thorough research to understand yourer.</p>
                </div>
            </div>
        </div>

    </div>

    <section class="overflow-hidden bg-smoke2 space split-hover-section" id="about-sec2">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 mt-3">
                    <div class="hover-split-box">
                        <div class="image-wrapper" data-aos="zoom-in"
                            data-aos-delay="100"
                            data-aos-duration="1200"
                            data-aos-easing="ease-in-out">
                            <img src="https://www.digitalnexa.com/hubfs/shutterstock_1067423849%20copy.jpg" alt="About" class="hover-img w-100 h-100">
                            <div class="img-heading d-flex justify-content-center align-items-center">
                                <h3>Social Media</h3>
                            </div>
                        </div>
                        <div class="hover-content">
                            <!-- <h3>Who We Are</h3> -->
                            <p class="blog-text">We are a digital marketing agency focused on innovation and results. Our expertise delivers impactful campaigns across all digital platforms.</p>
                            <a href="{{ route('portfolioSocio') }}" class="th-btn black-border th-icon th-radius">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6  mt-3">
                    <div class="hover-split-box">
                        <div class="image-wrapper" data-aos="zoom-in"
                            data-aos-delay="100"
                            data-aos-duration="1200"
                            data-aos-easing="ease-in-out">
                            <img src="https://www.digitalnexa.com/hubfs/Screen%20Shot%202021-09-16%20at%2012.47.59%20PM.png" alt="About" class="hover-img w-100 h-100">
                            <div class="img-heading d-flex justify-content-center align-items-center"">
                                <h3>Seo</h3>
                            </div>
                        </div>
                        <div class=" hover-content">
                                <!-- <h3>Who We Are</h3> -->
                                <p class="blog-text">We are a digital marketing agency focused on innovation and results. Our expertise delivers impactful campaigns across all digital platforms.</p>
                                <a href="#" class="th-btn black-border th-icon th-radius">Read More</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6  mt-3">
                        <div class="hover-split-box">
                            <div class="image-wrapper" data-aos="zoom-in"
                                data-aos-delay="100"
                                data-aos-duration="1200"
                                data-aos-easing="ease-in-out">
                                <img src="https://www.digitalnexa.com/hubfs/shutterstock_1067423849%20copy.jpg" alt="About" class="hover-img w-100 h-100">
                                <div class="img-heading d-flex justify-content-center align-items-center"">
                                <h3>Graphics</h3>
                            </div>
                        </div>
                        <div class=" hover-content">
                                    <!-- <h3>Who We Are</h3> -->
                                    <p class="blog-text">We are a digital marketing agency focused on innovation and results. Our expertise delivers impactful campaigns across all digital platforms.</p>
                                    <a href="#" class="th-btn black-border th-icon th-radius">Read More</a>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4 col-sm-6  mt-3">
                            <div class="hover-split-box">
                                <div class="image-wrapper" data-aos="zoom-in"
                                    data-aos-delay="100"
                                    data-aos-duration="1200"
                                    data-aos-easing="ease-in-out">
                                    <img src="https://www.digitalnexa.com/hubfs/shutterstock_1067423849%20copy.jpg" alt="About" class="hover-img w-100 h-100">
                                    <div class="img-heading d-flex justify-content-center align-items-center">
                                        <h3>Website</h3>
                                    </div>
                                </div>
                                <div class="hover-content">
                                    <!-- <h3>Who We Are</h3> -->
                                    <p class="blog-text">We are a digital marketing agency focused on innovation and results. Our expertise delivers impactful campaigns across all digital platforms.</p>
                                    <a href="#" class="th-btn black-border th-icon th-radius">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6  mt-3">
                            <div class="hover-split-box">
                                <div class="image-wrapper" data-aos="zoom-in"
                                    data-aos-delay="100"
                                    data-aos-duration="1200"
                                    data-aos-easing="ease-in-out">
                                    <img src="https://www.digitalnexa.com/hubfs/Screen%20Shot%202021-09-16%20at%2012.47.59%20PM.png" alt="About" class="hover-img w-100 h-100">
                                    <div class="img-heading d-flex justify-content-center align-items-center"">
                                <h3>Seo</h3>
                            </div>
                        </div>
                        <div class=" hover-content">
                                        <!-- <h3>Who We Are</h3> -->
                                        <p class="blog-text">We are a digital marketing agency focused on innovation and results. Our expertise delivers impactful campaigns across all digital platforms.</p>
                                        <a href="#" class="th-btn black-border th-icon th-radius">Read More</a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4 col-sm-6 mt-3">
                                <div class="hover-split-box">
                                    <div class="image-wrapper" data-aos="zoom-in"
                                        data-aos-delay="100"
                                        data-aos-duration="1200"
                                        data-aos-easing="ease-in-out">
                                        <img src="https://www.digitalnexa.com/hubfs/shutterstock_1067423849%20copy.jpg" alt="About" class="hover-img w-100 h-100">
                                        <div class="img-heading d-flex justify-content-center align-items-center"">
                                <h3>Graphics</h3>
                            </div>
                        </div>
                        <div class=" hover-content">
                                            <!-- <h3>Who We Are</h3> -->
                                            <p class="blog-text">We are a digital marketing agency focused on innovation and results. Our expertise delivers impactful campaigns across all digital platforms.</p>
                                            <a href="#" class="th-btn black-border th-icon th-radius">Read More</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
    </section>

    @include('Frontend/partial/clientList')
</main>
@endsection