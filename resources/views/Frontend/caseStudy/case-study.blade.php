@extends('Frontend.layout.app')

@section('custome-style')
<style>
    /* gallary :start */
    .tab-icon-img {
        width: 40px;
        height: 40px;
        object-fit: contain;
        margin-bottom: 5px;
    }

    .nav-tabs .nav-link {
        text-align: center;
        border: none;
        color: #333;
        margin: 12px 15px;
        background: transparent;
        border-radius: 50px !important;
    }

    .nav-tabs .nav-link.active {
        background-color: #106c97;
        color: #fff !important;
    }

    .nav-tabs .nav-link.active .sec-para {
        color: #fff !important;
        padding: 3px 5px;
    }

    /* gallary end */

    /* card  */
    .card__article {
        position: static !important;
        height: 280px !important;
    }

    .card__img {
        border-radius: 10px;
    }

    .card__data {
        width: auto;
        background-color: white;
        padding: 1.5rem 2rem;
        border-radius: 1rem;
        bottom: -9rem;
        left: 0;
        right: 0;
        margin-inline: auto;
        opacity: 0;
        transition: opacity 1s 1s;
        box-shadow: 0 4px 8px #ff900b;
        ;
    }

    /* Naming animations in hover */
    .card__article .card__data {
        /* animation: show-data 1s forwards; */
        opacity: 1;
        transition: opacity .3s;
    }

    /* Card animation */
    @keyframes show-data {
        50% {
            transform: translateY(-10rem);
        }

        100% {
            transform: translateY(-2rem);
        }
    }

    /* card :end */
    #portfolio-sec i {
        font-size: 45px;
    }

    .img-fluid {
        object-fit: contain;
    }

    .sub-sec-title {
        font-size: 18px;
    }
</style>
@endsection

@section('content')
<main id="case-study">
    <section style="margin-top: 68px;">
        <div class="full-width">
            <picture>
                <source media="(min-width: 1400px)" srcset="{{ asset('frontend-assets/img/banners/case-studies.png') }}" loading="lazy">
                <img src="{{ asset('frontend-assets/img/banners/case-studies.png') }}" alt="case study" loading="lazy">
            </picture>
        </div>
    </section>
    <section class="py-md-5 py-4 d-none" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content breadcrumb-light">
                        <h1 class="breadcumb-title text-center text-md-start">Case Studies</h1>
                        <ul class="breadcumb-menu d-none">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Case Studies</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-area2 overflow-hidden space garally" id="portfolio-sec">
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="title-area text-center">
                        <h2 class="fw-bold mb-5 sec-title" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1000" data-aos-easing="ease-in-out">
                            How Our SEO Process <span class="text-blue"> Delivers Results</span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="filter-menu filter-menu-active nav nav-tabs justify-content-center mb-4">


                <button data-filter="*"
                    class=" nav-link active d-flex flex-column justify-content-around align-items-center"
                    type="button">
                    <div class="tab-label sec-para">Digital Media</div>
                </button>

                <button data-filter=".cat1"
                    class="nav-link d-flex flex-column justify-content-around align-items-center" type="button">
                    <div class="tab-label sec-para">Search Engine Optimization</div>
                </button>

                <button data-filter=".cat2"
                    class="nav-link d-flex flex-column justify-content-around align-items-center" type="button">
                    <div class="tab-label sec-para">Performance marketing</div>
                </button>
            </div>

            <!-- Tab Content -->
            <div class="portfolio-container">
                <div class="filter-active row h-auto g-4">
                    <article class="card__article filter-item cat1 cat3 col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="w-100">
                            <a href="{{ route('stemrxbio') }}">
                                <img src="{{ asset('frontend-assets/img/case-study/thumbs/stemrx.jpg') }}" alt="image"
                                    class="card__img img-fluid w-100" loading="lazy">
                            </a>
                        </div>
                        <div class="card__data">
                            <h4 class="sub-sec-title">StemRx Bioscience</h4>
                            <a href="{{ route('stemrxbio') }}" class="card__button text-blue">Read More</a>
                        </div>
                    </article>
                    <article class="card__article filter-item cat1 cat3 col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="w-100">
                            <a href="{{ route('buildTrack') }}">
                                <img src="{{ asset('frontend-assets/img/case-study/thumbs/buildtrack.jpg') }}" alt="image"
                                    class="card__img img-fluid w-100" loading="lazy">
                            </a>
                        </div>
                        <div class="card__data">
                            <h4 class="sub-sec-title">Build Track</h4>
                            <a href="{{ route('buildTrack') }}" class="card__button text-blue">Read More</a>
                        </div>
                    </article>
                    <article class="card__article filter-item cat1 cat3 col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="w-100">
                            <a href="{{ route('cyberPower') }}">
                                <img src="{{ asset('frontend-assets/img/case-study/thumbs/cyberpower.png') }}" alt="image"
                                    class="card__img img-fluid w-100" loading="lazy">
                            </a>
                        </div>
                        <div class="card__data">
                            <h4 class="sub-sec-title">Cyber Power</h4>
                            <a href="{{ route('cyberPower') }}" class="card__button text-blue">Read More</a>
                        </div>
                    </article>
                    <article class="card__article filter-item cat1 cat3 col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="w-100">
                            <a href="{{ route('nhs') }}">
                                <img src="{{ asset('frontend-assets/img/case-study/thumbs/nhhs.png') }}" alt="image"
                                    class="card__img img-fluid w-100" loading="lazy">
                            </a>
                        </div>
                        <div class="card__data">
                            <h4 class="sub-sec-title">New Horizon School</h4>
                            <a href="{{ route('nhs') }}" class="card__button text-blue">Read More</a>
                        </div>
                    </article>
                    {{-- <article class="card__article filter-item cat1 cat3 col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="w-100">
                            <img src="{{ asset('frontend-assets/img/case-study/thumbs/m4u.png') }}" alt="image"
                    class="card__img img-fluid w-100" loading="lazy">
                </div>
                <div class="card__data">
                    <h4 class="sub-sec-title">Markets4you</h4>
                    <a href="{{ route('nhs') }}" class="card__button text-blue">Read More</a>
                </div>
                </article> --}}
                <article class="card__article filter-item cat1 cat3 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="{{ route('getTheHook') }}">
                            <img src="{{ asset('frontend-assets/img/case-study/thumbs/offthehook.png') }}" alt="image"
                                class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>
                    <div class="card__data">
                        <h4 class="sub-sec-title">Offthohook</h4>
                        <a href="{{ route('getTheHook') }}" class="card__button text-blue">Read More</a>
                    </div>
                </article>
                <article class="card__article filter-item cat2 cat1 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="{{ route('expert4travel') }}">
                            <img src="{{ asset('frontend-assets/img/case-study/thumbs/expert4travel.jpg') }}"
                                alt="image" class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>
                    <div class="card__data">
                        <h4 class="sub-sec-title">Expert4travel</h4>
                        <a href="{{ route('expert4travel') }}" class="card__button text-blue">Read More</a>
                    </div>
                </article>

                <article class="card__article filter-item cat3 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="{{ route('eduauraa') }}">
                            <img src="{{ asset('frontend-assets/img/case-study/thumbs/eduauraa.jpg') }}" alt="image"
                                class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>
                    <div class="card__data">
                        <h4 class="sub-sec-title">Eduauraa</h4>
                        <a href="{{ route('eduauraa') }}" class="card__button text-blue">Read More</a>
                    </div>
                </article>

                <article class="card__article filter-item cat1 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="{{ route('shahenaz') }}">
                            <img src="{{ asset('frontend-assets/img/case-study/thumbs/shahenaz.jpg') }}" alt="image"
                                class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>
                    <div class="card__data">
                        <h4 class="sub-sec-title">Shahenaz</h4>
                        <a href="{{ route('shahenaz') }}" class="card__button text-blue">Read More</a>
                    </div>
                </article>

                <article class="card__article filter-item cat2 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="{{ route('okinawascooters') }}">
                            <img src="{{ asset('frontend-assets/img/case-study/thumbs/okinawa.jpg') }}" alt="image"
                                class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>
                    <div class="card__data">
                        <h4 class="sub-sec-title">Okinawa scooters</h4>
                        <a href="{{ route('okinawascooters') }}" class="card__button text-blue">Read More</a>
                    </div>
                </article>



                <article class="card__article filter-item cat3 cat2 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="{{ route('ayushaktiNew') }}">
                            <img src="{{ asset('frontend-assets/img/case-study/thumbs/ayushakti.jpg') }}"
                                alt="image" class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>
                    <div class="card__data">
                        <h4 class="sub-sec-title">Ayushakti Ayurved</h4>
                        <a href="{{ route('ayushaktiNew') }}" class="card__button text-blue">Read More</a>
                    </div>
                </article>

                <article class="card__article filter-item cat1 cat3 cat2 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="{{ route('nodwinGaming') }}">
                            <img src="{{ asset('frontend-assets/img/case-study/thumbs/nodwin-gaming.jpg') }}"
                                alt="image" class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>
                    <div class="card__data">
                        <h4 class="sub-sec-title">Nodwin Gaming</h4>
                        <a href="{{ route('nodwinGaming') }}" class="card__button text-blue">Read More</a>
                    </div>
                </article>
                <article class="card__article filter-item cat2 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="{{ route('smarterIndia') }}">
                            <img src="{{ asset('frontend-assets/img/case-study/thumbs/smarter-india.jpg') }}"
                                alt="image" class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>
                    <div class="card__data">
                        <h4 class="sub-sec-title">Smarter India</h4>
                        <a href="{{ route('smarterIndia') }}" class="card__button text-blue">Read More</a>
                    </div>
                </article>

                <article class="card__article filter-item cat1 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="{{ route('realestateawards') }}">
                            <img src="{{ asset('frontend-assets/img/case-study/thumbs/real-estate-awards.jpg') }}"
                                alt="image" class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>
                    <div class="card__data">
                        <h4 class="sub-sec-title">Real Estate Awards</h4>
                        <a href="{{ route('realestateawards') }}" class="card__button text-blue">Read More</a>
                    </div>
                </article>

                <article class="card__article filter-item cat3 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="{{ route('buttondabaodeshbanao') }}">
                            <img src="{{ asset('frontend-assets/img/case-study/thumbs/button-dabao-desh-banao.jpg') }}"
                                alt="image" class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>
                    <div class="card__data">
                        <h4 class="sub-sec-title">Button Dabao Desh Banao</h4>
                        <a href="{{ route('buttondabaodeshbanao') }}" class="card__button text-blue">Read
                            More</a>
                    </div>
                </article>

                <article class="card__article filter-item cat2 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="{{ route('roadtosafetyinitiative') }}">
                            <img src="{{ asset('frontend-assets/img/case-study/thumbs/road-to-safety.jpg') }}"
                                alt="image" class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>
                    <div class="card__data">
                        <h4 class="sub-sec-title">Road To Safty Initiative</h4>
                        <a href="{{ route('roadtosafetyinitiative') }}" class="card__button text-blue">Read
                            More</a>
                    </div>
                </article>
                <article class="card__article filter-item cat1 cat3 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="{{ route('the-professional-couriers') }}">
                            <img src="{{ asset('frontend-assets/img/case-study/thumbs/the-professional-couriers.jpg') }}"
                                alt="image" class="card__img img-fluid w-100 h-100">
                        </a>
                    </div>
                    <div class="card__data">
                        <h4 class="sub-sec-title">The Professional Couriers</h4>
                        <a href="{{ route('the-professional-couriers') }}" class="card__button text-blue">Read
                            More</a>
                    </div>
                </article>

                <article class="card__article filter-item cat2 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="{{ route('lime') }}">
                            <img src="{{ asset('frontend-assets/img/case-study/thumbs/lime.jpg') }}" alt="image"
                                class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>
                    <div class="card__data">
                        <h4 class="sub-sec-title">Lime XII</h4>
                        <a href="{{ route('lime') }}" class="card__button text-blue">Read More</a>
                    </div>
                </article>

                <article class="card__article filter-item cat2 col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="w-100">
                        <a href="{{ route('acetattoz') }}">
                            <img src="{{ asset('frontend-assets/img/case-study/thumbs/ace-tattooz.jpg') }}"
                                alt="image" class="card__img img-fluid w-100" loading="lazy">
                        </a>
                    </div>
                    <div class="card__data">
                        <h4 class="sub-sec-title">Ace Tattooz</h4>
                        <a href="{{ route('acetattoz') }}" class="card__button text-blue">Read More</a>
                    </div>
                </article>
            </div>
        </div>
        </div>
    </section>

    @include('Frontend/partial/portfolioCommon')

</main>
@endsection