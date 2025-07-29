@extends('Frontend.layout.app')
@section('custome-style')
<style>
    #contact .contact-head {
        padding: 4rem 4rem 1rem 4rem;
    }

    #contact .head-text {
        font-size: 35px;
        line-height: 42px;
    }

    #contact .head-text-div {
        margin: 0px;
    }

    #contact .space-bottom {
        padding-bottom: 35px;
    }

    #contact .contact-form {
        background: transparent;
        border-radius: 10px;
        padding: 45px 23px;
        /* box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                                                                                    border: 2px solid transparent; */
        box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
        -webkit-box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
        -moz-box-shadow: 0px 3px 11px -4px rgba(0, 0, 0, 0.59);
    }

    #contact .space-bottom .form-head {
        font-size: 2rem;
        line-height: 2.5rem;
    }

    #contact .space-bottom .contact-media {
        border: none;
        padding: 20px;
    }

    #contact .contact-media .icon-btn {
        width: 46px;
        height: 46px;
        border-radius: 10px;
        background: #106c97;
        color: white;
    }

    #contact .business-contact,
    #contact .careers-contact {
        font-size: 17px;
        margin-bottom: 2px;
        font-weight: 500;
    }

    #contact #map {
        margin: 0px 0px 2rem 0px;
    }

    @media only screen and (max-width: 600px) {
        #contact .contact-head {
            padding: 2rem 0.5rem;
        }

        #contact .head-text-div {
            margin-bottom: 13px;
        }

        #contact .head-mbl-text,
        #contact .space-bottom .head-mbl-text {
            font-size: 30px;
            line-height: 31px;
        }
    }

    .invalid-feedback {
        color: red;
        display: block;
    }

    #contactform .sec-para {
        font-size: 18px;
        font-weight: 500;
    }
</style>
<!-- form 2 start Plugin: JQuery Validator  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"
    integrity="sha512-WMEKGZ7L5LWgaPeJtw9MBM4i5w5OSBlSjTjCtSnvFJGSVD26gE5+Td12qN5pvWXhuWaWcVwF++F7aqu9cvqP0A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/additional-methods.min.js"
    integrity="sha512-TiQST7x/0aMjgVTcep29gi+q5Lk5gVTUPE9XgN0g96rwtjEjLpod4mlBRKWHeBcvGBAEvJBmfDqh2hfMMmg+5A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Plugin: JQuery Validator  -->

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Sociomark",
        "description": "Digital Marketing Agency in UAE offering SEO, Web Development, Social Media, Performance & Content Marketing, Photography & Video Production.",
        "url": "https://www.sociomark.ae/",
        "logo": "https://www.sociomark.ae/public/frontend-assets/img/logo/sc-colored-horizontal.png",
        "image": "https://www.sociomark.ae/public/frontend-assets/img/banners/contact-us.jpg",
        "telephone": "+971504266118",
        "email": "business@sociomark.in",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "C1 - 1F - SF10283, Ajman Free Zone C1 Building, Business district",
            "addressLocality": "Ajman Free Zone",
            "addressRegion": "Ajman",
            "addressCountry": "AE"
        },
        "openingHoursSpecification": [{
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday"
            ],
            "opens": "10:00",
            "closes": "19:00"
        }],
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+971504266118",
            "contactType": "Business",
            "areaServed": "AE",
            "availableLanguage": ["English", "Hindi", "Arabic"]
        },
        "sameAs": [
            "https://www.instagram.com/sociomarkae/",
            "https://www.facebook.com/people/Sociomark-UAE/"
        ]
    }
</script>
@endsection
@section('content')
<main id="contact">
    <section style="margin-top: 66px;">
        <div class="full-width">
            <picture>
                <source media="(min-width: 1400px)" srcset="{{ asset('frontend-assets/img/banners/contact-us.jpg') }}">
                <img src="{{ asset('frontend-assets/img/banners/contact-us.jpg') }}" alt="contact" class="w-100">
            </picture>
        </div>
    </section>

    <div class="overflow-hidden space contact-head">
        <div class="container">
            <div class="row justify-content-between">
                <div class="title-area text-center text-xl-start col-md-4 head-text-div mt-1">
                    <h1 class="sec-title head-text head-mbl-text " data-aos="fade-right" data-aos-delay="100"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        Have a plan? We are all ears!<span class="text-blue"> contact us</span> to get things rolling!

                    </h1>
                </div>
                <div class="text-center text-xl-start col-md-8 pl-40">
                    <p class="sec-para" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000"
                        data-aos-easing="ease-in-out">Got an idea or need more details? Don’t hesitate to reach out.
                        We’re eager to hear what’s on your mind and explore how we can help. Whether you’re starting a
                        new project or need some advice, we’re here to offer the support you need. Get in touch, and
                        let’s see how we can work together to achieve your goals.
                    </p>

                </div>
            </div>
        </div>
        <hr>
    </div>


    <div class="space-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="contact-media">
                        <div class="icon-btn d-flex justify-content-center align-items-center">
                            <i class="fa-sharp fa-light fa-location-dot"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="sub-sec-title">Our Address</h4>
                            <p class="sec-para">C1 - 1F - SF10283, Ajman Free Zone C1 Building,
                                Business district - Ajman Free Zone</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="contact-media">
                        <div class="icon-btn d-flex justify-content-center align-items-center">
                            <i class="fa-light fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="sub-sec-title">Contact Number</h4>
                            <h6 class="business-contact">For Business</h6>
                            <p class="sec-para">
                                Mobile: <a href="tel:+971504266118">+971 50 426 6118</a><br>
                                Email: <a href="mailto:business@sociomark.in">business@sociomark.in</a>
                            </p>
                            <!--
                                    <h6 class="careers-contact">For Careers</h6>
                                    <p class="sec-para">
                                        Mobile: <a href="tel:+971504266118">+971 50 426 6118</a><br>
                                        Email: <a href="mailto:hr@sociomark.in">hr@sociomark.in</a>
                                    </p>
                                    -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="contact-media">
                        <div class="icon-btn d-flex justify-content-center align-items-center">
                            <i class="fa-light fa-clock"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="sub-sec-title">Opening Hour</h4>
                            <p class="sec-para">Monday - Friday: 10:00 - 19:00</p>
                            <p class="sec-para">Saturday - Sunday: Closed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="space">
        <div class="container">
            <div class="row g-3 g-md-4">
                <div class="col-12">
                    <h3 class="text-center mb-15 form-head head-mbl-text">Please Fill In The Form Below</h3>
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                </div>
                <div class="col-12">
                    @include('Frontend.partial.contactUsForm')
                </div>
            </div>
        </div>
    </section>

    <div id="map">
        <div class="container text-center">
            <div class="ratio ratio-16x9 ">
                {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.8354345093706!2d-122.41941548468129!3d37.77492927975967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c5a2ff8fb%3A0xe4c2f0cfe65f3f3!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1617843256256!5m2!1sen!2sus"
                    allowfullscreen="" loading="lazy"></iframe> --}}
                {{-- <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7542.256306381804!2d72.998308!3d19.0581023!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c3b0d769ff69%3A0xf839749e6fda79fc!2sSociomark!5e0!3m2!1sen!2sin!4v1743758528511!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe> --}}

                <iframe src="https://www.google.com/maps/d/embed?mid=1bY2NcKFXkbZaH1vzvSDwY51bT_fXqDo&ehbc=2E312F"
                    width="640" height="480"></iframe>
            </div>
        </div>
    </div>
</main>
@endsection