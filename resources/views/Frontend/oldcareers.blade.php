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

    .career-media {
        border: 3px solid #106c97;
        border-radius: 20px 20px 20px 20px;
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
            <div class="row justify-content-center">
                <div class="title-area text-center text-xl-center col-md-12 head-text-div mt-1">
                    <h1 class="sec-title" data-aos="fade-right" data-aos-delay="100"
                        data-aos-duration="1000" data-aos-easing="ease-in-out">
                        <span class="text-blue"> We Hire Crazy People</span>
                    </h1>
                    <p class="sec-para" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000"
                        data-aos-easing="ease-in-out">Sociomark always welcomes experienced as well as skilled
                        candidates who are able to work in challenging environment.
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="space-bottom d-none">
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

    <div class="space-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="row career-media align-items-center">
                        <div class="col-12">
                            @foreach($jobs as $job)
                            <div class="p-3">
                                <div class="media-body">
                                    <h4 class="sub-sec-title text-blue"><strong>{{ $job->title }}</strong></h4>
                                    <p class="">{{ $job->description }}</p>

                                    <div class="row g-3 g-md-4">
                                        <p class="col-md-auto col-12">
                                            <i class="fa fa-briefcase"></i>&nbsp;&nbsp;{{ $job->experience }} <br>
                                        </p>
                                        <p class="col-md-auto col-12">
                                            <i class="fa fa-map-marker"></i>&nbsp;&nbsp;{{ $job->location }}
                                        </p>
                                    </div>
                                    <a href="{{ route('business', $job->id) }}" class="th-btn th-icon">View More Description<i
                                            class="fa-solid fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

</main>
@endsection