@extends('Frontend.layout.app')
@section('custome-style')
<script type="application/ld+json">
    {
        "@context": "https://schema.org/",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Work portfolio",
            "item": "https://www.sociomark.ae/portfolio"
        }, {
            "@type": "ListItem",
            "position": 2,
            "name": "TATA PLAY",
            "item": "https://www.sociomark.ae/portfolio/tata-play/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 3,
            "name": "StemRx Bioscience",
            "item": "https://www.sociomark.ae/portfolio/stemrx-bioscience/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 4,
            "name": "JOP",
            "item": "https://www.sociomark.ae/portfolio/jop/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 5,
            "name": "Euro",
            "item": "https://www.sociomark.ae/portfolio/euro/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 6,
            "name": "Navi Mumbai Municipal Corporation",
            "item": "https://www.sociomark.ae/portfolio/nmmc/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 7,
            "name": "The Professional Couriers",
            "item": "https://www.sociomark.ae/portfolio/the-professional-couriers/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 8,
            "name": "BuildTrack",
            "item": "https://www.sociomark.ae/portfolio/bulid-track/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 9,
            "name": "Indian School of Media (ISM)",
            "item": "https://www.sociomark.ae/portfolio/ism/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 10,
            "name": "Qubero by Nirali BG",
            "item": "https://www.sociomark.ae/portfolio/qubero/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 11,
            "name": "TMC",
            "item": "https://www.sociomark.ae/portfolio/tmc/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 12,
            "name": "Repute",
            "item": "https://www.sociomark.ae/portfolio/repute/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 13,
            "name": "Ayu health",
            "item": "https://www.sociomark.ae/portfolio/ayu-health/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 14,
            "name": "Blue energy Motors",
            "item": "https://www.sociomark.ae/portfolio/bem/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 15,
            "name": "Cyber Power",
            "item": "https://www.sociomark.ae/portfolio/cyber-power/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 16,
            "name": "Jivana",
            "item": "https://www.sociomark.ae/portfolio/jivana/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 17,
            "name": "Markets4you",
            "item": "https://www.sociomark.ae/portfolio/m4u/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 18,
            "name": "New Horizon School",
            "item": "https://www.sociomark.ae/portfolio/nhss/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 19,
            "name": "Shahenaz",
            "item": "https://www.sociomark.ae/portfolio/shahenaz/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 20,
            "name": "NODWIN Gaming ( India, Africa)",
            "item": "https://www.sociomark.ae/portfolio/nodwin-gaming/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 21,
            "name": "Road to safety",
            "item": "https://www.sociomark.ae/portfolio/road-to-safety/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 22,
            "name": "Ayushakti Ayurved",
            "item": "https://www.sociomark.ae/portfolio/ayushakti/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 23,
            "name": "HUL & CNBC-TV18 presents L.I.M.E.",
            "item": "https://www.sociomark.ae/portfolio/lime/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 24,
            "name": "RP Sanjiv Goenka & Network18 presents Button Dabao Desh Banao",
            "item": "https://www.sociomark.ae/portfolio/button-dabao-desh-banao/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 25,
            "name": "Castrol Activ & Network18 presents Protect India’s Engine",
            "item": "https://www.sociomark.ae/portfolio/castrol/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 26,
            "name": "ICICI Prudential Life Insurance and CNBC-TV18 presents Mission Insure India",
            "item": "https://www.sociomark.ae/portfolio/mission-insure-india/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 27,
            "name": "Real estate awards",
            "item": "https://www.sociomark.ae/portfolio/real-estate-awards/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 28,
            "name": "Cosplay Genie",
            "item": "https://www.sociomark.ae/portfolio/cosplay-genie/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 29,
            "name": "Smarter India",
            "item": "https://www.sociomark.ae/portfolio/smarter-india/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 30,
            "name": "Mahindra First Choice Services",
            "item": "https://www.sociomark.ae/portfolio/mahindra-first-choice-services/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 31,
            "name": "MasterCard & Network18 presents Team Cashless India",
            "item": "https://www.sociomark.ae/portfolio/team-cashless-india/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 32,
            "name": "Sportz consult",
            "item": "https://www.sociomark.ae/portfolio/sportz-consult/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 33,
            "name": "AI Awards",
            "item": "https://www.sociomark.ae/portfolio/ai-awards/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 34,
            "name": "Grill box",
            "item": "https://www.sociomark.ae/portfolio/grill-box/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 35,
            "name": "Kolkata Rolls",
            "item": "https://www.sociomark.ae/portfolio/kolkata-rolls/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 36,
            "name": "Hollywood Opticians",
            "item": "https://www.sociomark.ae/portfolio/hollywood-opticians/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 37,
            "name": "Foresight Opticals",
            "item": "https://www.sociomark.ae/portfolio/foresight-opticals/social-media-work"
        }, {
            "@type": "ListItem",
            "position": 38,
            "name": "INIFD Vashi",
            "item": "https://www.sociomark.ae/portfolio/inifd-vashi/social-media-work"
        }]
    }
</script>

<style>
    #brand .contact-head {
        padding: 3rem 0rem 3rem 0rem;
    }


    #brand .head-text-div {
        margin: 0px;
    }

    @media only screen and (max-width: 600px) {
        #brand .contact-head {
            padding: 2rem 0.5rem;
        }

        #brand .head-text-div {
            margin-bottom: 13px;
        }



        #brand #about-sec2 .th-btn {
            padding: 12px;
            width: 40%;
        }
    }

    /* brand list */
    #brand-list .brand-item {
        height: 160px;
        margin-left: 0px;
    }

    #brand-list .box {
        padding: 7px 14px !important;
    }

    #brand-list .box a {
        width: 100%;
        height: 100%;
        background-color: white;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    #brand-list .box img {
        width: 100%;
        height: 100%;
    }

    #brand-list .box img {
        transition: transform 0.3s ease;
    }

    #brand-list .box:hover img {
        transform: scale(1.1);
    }

    /* brand list end */
</style>
@endsection
@section('content')
<main id="brand">
    <section style="margin-top:68px;">
        <div class="full-width">
            <picture>
                <source media="(min-width: 1400px)" srcset="{{ asset('frontend-assets/img/banners/portfolio.jpg') }}" class="w-100">
                <img src="{{ asset('frontend-assets/img/banners/portfolio.jpg') }}" alt="porfolio" class="w-100">
            </picture>
        </div>
    </section>
    <section class="py-md-5 py-4 d-none" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content breadcrumb-light">
                        <h2 class="breadcumb-title">Portfolios</h2>
                        <ul class="breadcumb-menu d-none">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Portfolios</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="overflow-hidden space contact-head">
        <div class="container">
            <div class="row justify-content-between">
                <div class="title-area text-center text-xl-start col-md-4 head-text-div mt-1">
                    <h1 class="sec-title head-text head-mbl-text" data-aos="fade-right" data-aos-delay="100"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        Our Work <span class="text-blue">Speaks Louder</span> Than Words
                    </h1>
                </div>
                <div class="text-center text-xl-start col-md-8 pl-40">
                    <p class="sec-para" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000"
                        data-aos-easing="ease-in-out">We love what we do, and it shows in our work. Every project is a chance to create something special. Check out the projects we’ve worked on and see how we help brands grow. Our portfolio reflects our passion for creativity and results. Each project tells a unique story of collaboration and success. We’re proud of what we’ve built and excited for what’s next!
                    </p>

                </div>
            </div>
        </div>

    </div>
    <div class="brand-sec bg-smoke2 overflow-hidden shape-mockup-wrap" id="brand-list">
        <div class="container">
            <div class="row">
                @foreach ($activeClients as $slug => $client)
                <div class="col-6 col-md-4 d-flex justify-content-center align-items-center box" data-aos="zoom-in"
                    data-aos-delay="100" data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <a href="{{ route('social_media', ['client' => $slug]) }}">
                        <img src="{{ asset($client['portfolio-image']) }}" alt="{{ $client['name'] }} Logo"
                            class="img-fluid">
                    </a>
                </div>
                @endforeach
            </div>


        </div>
    </div>
</main>
@endsection