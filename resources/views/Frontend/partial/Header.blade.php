<!--==============================
Mobile Menu
============================== -->

<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <!-- Wrap Ganpati + Confetti -->
        <div class="confetti-wrapper d-inline-block d-lg-none">
            <!-- Confetti pieces -->
            <div class="confetti"></div>
            <div class="confetti"></div>
            <div class="confetti"></div>
            <div class="confetti"></div>
            <div class="confetti"></div>
            <div class="confetti"></div>

            <!-- Ganpati Image -->
            <img src="{{ asset('frontend-assets/img/nav-element/gnpti-bappa1.png') }}" alt="ladu plate" height="50" style="width: 100px; height: 100px;" class="bappa-animate d-inline-block d-lg-none">
        </div>

        <div class="mobile-logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('frontend-assets/img/logo/sociomark-new-logo.png') }}" alt="Image Not Found"
                    height="50">
            </a>

        </div>

        <div class="th-mobile-menu">
            <ul>
                <li class=""><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('portfolio') }}">Work Portfolio</a></li>
                <li class="menu-item-has-children">
                    <a href="{{ route('services') }}">Services</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('digitalMarketing') }}">Digital Marketing</a></li>
                        <li><a href="{{ route('seo') }}">SEO</a></li>
                        <li><a href="{{ route('socialMedia') }}">Social Media Marketing</a></li>
                        <li><a href="{{ route('website') }}">Website Development</a></li>
                        <li><a href="{{ route('contentMarketing') }}">Content Marketing</a></li>
                        <li><a href="{{ route('sem') }}">Performance Marketing</a></li>
                        <li><a href="{{ route('photoVideography') }}">Photography & Video Production</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Industries</a>
                    <ul class="sub-menu">
                        <li><a href="{{ route('industry_single', ['segment' => 'education']) }}">Education</a></li>
                        <li><a href="{{ route('industry_single', ['segment' => 'healthcare']) }}">Healthcare</a></li>
                        <li><a href="{{ route('industry_single', ['segment' => 'fmcg']) }}">FMCG</a></li>
                        <li><a href="{{ route('industry_single', ['segment' => 'news-media']) }}">News & Media</a></li>
                        <li><a href="{{ route('industry_single', ['segment' => 'real-estate']) }}">Real Estate</a></li>
                        {{-- <li><a href="{{ route('industry_single', ['segment' => 'logistics']) }}">Logistics</a>
                </li> --}}
                <li><a href="{{ route('industry_single', ['segment' => 'fashion']) }}">Fashion & Lifestyle</a></li>
                <li><a href="{{ route('industry_single', ['segment' => 'gaming']) }}">Gaming</a></li>
                <li><a href="{{ route('industry_single', ['segment' => 'home-interior']) }}">Home & Interior</a></li>
                <li><a href="{{ route('industry_single', ['segment' => 'automobile']) }}">Automobile</a></li>
                {{-- <li><a href="{{ route('industry_single', ['segment' => "b2b"]) }}">B2B</a></li> --}}
                {{-- <li><a href="{{ route('industry_single', ['segment' => "travel"]) }}">Travel</a></li> --}}
                <li><a href="{{ route('industry_single', ['segment' => 'public-sector']) }}">Government
                        Bodies</a>
                </li>
            </ul>
            </li>
            </ul>


        </div>
    </div>
</div><!--==============================
Header Area
==============================-->
<header class="th-header header-layout1 header-absolute">
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="container-fluid th-container">
            <!-- <div class="menu-area"> -->
            <div class="">
                <div class="row py-1 align-items-center justify-content-between">
                    <div class="col-auto d-flex justify-content-center align-items-center">
                        <!-- Wrap Ganpati + Confetti -->
                        <div class="confetti-wrapper d-none d-lg-inline-block">
                         
                            <div class="confetti"></div>
                            <div class="confetti"></div>
                            <div class="confetti"></div>
                            <div class="confetti"></div>
                            <div class="confetti"></div>
                            <div class="confetti"></div>

                        
                            <img src="{{ asset('frontend-assets/img/nav-element/gnpti-bappa1.png') }}" alt="ladu plate" height="50" style="width: 100px; height: 100px;" class="bappa-animate d-none d-lg-inline-block">
                        </div>


                        <div class="d-flex flex-column align-items-start">
                            <div>
                                <div class="confetti-wrapper d-inline-block d-lg-none">
                                  
                                    <div class="confetti"></div>
                                    <div class="confetti"></div>
                                    <div class="confetti"></div>
                                    <div class="confetti"></div>
                                    <div class="confetti"></div>
                                    <div class="confetti"></div>
                                    <img src="{{ asset('frontend-assets/img/nav-element/gnpti-bappa2.png') }}" alt="ladu plate" height="50" style="width: 60px; height: 60px;" class="bappa-animate d-inline-block d-lg-none">
                                </div>
                                <img src="{{ asset('frontend-assets/img/nav-element/modak2.png') }}" alt="ladu plate" class="modak d-none">
                            </div>


                            <div class="header-logo ">
                                <a href="{{ route('home') }}">
                                    <picture>

                                        <source media="(min-width: 1024px)"
                                            srcset="{{ asset('frontend-assets/img/logo/sc-colored-horizontal.png') }}">
                                        <img src="{{ asset('frontend-assets/img/logo/sc-colored-horizontal.png') }}"
                                            alt="Image Not Found" height="30">
                                    </picture>
                                </a>

                            </div>
                        </div>


                    </div>
                    <div class="col-auto">
                        <nav class="main-menu style2 d-none d-lg-inline-block">
                            <ul>
                                <li class=""><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('portfolio') }}">Work Portfolio</a></li>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('services') }}">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('digitalMarketing') }}">Digital Marketing</a></li>
                                        <li><a href="{{ route('seo') }}">SEO</a></li>
                                        <li><a href="{{ route('socialMedia') }}">Social Media Marketing</a></li>
                                        <li><a href="{{ route('website') }}">Website Development</a></li>
                                        <li><a href="{{ route('contentMarketing') }}">Content Marketing</a></li>
                                        <li><a href="{{ route('sem') }}">Performance Marketing</a></li>
                                        <li><a href="{{ route('photoVideography') }}">Photography & Video Production</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Industries</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('industry_single', ['segment' => 'education']) }}">Education</a></li>
                                        <li><a href="{{ route('industry_single', ['segment' => 'healthcare']) }}">Healthcare</a></li>
                                        <li><a href="{{ route('industry_single', ['segment' => 'fmcg']) }}">FMCG</a></li>
                                        <li><a href="{{ route('industry_single', ['segment' => 'news-media']) }}">News & Media</a></li>
                                        <li><a href="{{ route('industry_single', ['segment' => 'real-estate']) }}">Real Estate</a></li>
                                        {{-- <li><a href="{{ route('industry_single', ['segment' => 'logistics']) }}">Logistics</a>
                                </li> --}}
                                <li><a href="{{ route('industry_single', ['segment' => 'fashion']) }}">Fashion & Lifestyle</a></li>
                                <li><a href="{{ route('industry_single', ['segment' => 'gaming']) }}">Gaming</a></li>
                                <li><a href="{{ route('industry_single', ['segment' => 'home-interior']) }}">Home & Interior</a></li>
                                <li><a href="{{ route('industry_single', ['segment' => 'automobile']) }}">Automobile</a></li>
                                {{-- <li><a href="{{ route('industry_single', ['segment' => "b2b"]) }}">B2B</a></li> --}}
                                {{-- <li><a href="{{ route('industry_single', ['segment' => "travel"]) }}">Travel</a></li> --}}
                                <li><a href="{{ route('industry_single', ['segment' => 'public-sector']) }}">Government
                                        Bodies</a>
                                </li>
                            </ul>
                            </li>
                            </ul>
                        </nav>
                        <div class="header-button">
                            <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i
                                    class="fas fa-bars"></i></button>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-button">
                            <!-- <button type="button" class="icon-btn searchBoxToggler"><i class="fal fa-search"></i></button> -->
                            <!-- <a href="#" class="th-btn th-icon" data-bs-toggle="modal" data-bs-target="#getAQuoteModal">Get A Quote <i class="fa-solid fa-arrow-right ms-2"></i></a>  -->
                            <a href="{{ route('contact') }}" class="th-btn th-icon">Get A Quote <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <!-- <div class="col-auto d-none d-lg-block">
                       <form>
                        <select id="language" onchange="changeLanguage(this.value)">
                            <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                            <option value="hi" {{ app()->getLocale() == 'hi' ? 'selected' : '' }}>हिन्दी</option>
                            <option value="ar" {{ app()->getLocale() == 'ar' ? 'selected' : '' }}>عربي</option>
                        </select>
                    </form>
                    </div> -->





                    {{-- <div class="col-auto d-none d-lg-block">
                        <div id="google_translate_element"></div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</header>

<!-- popup modal  start-->
<!-- Modal -->
<!-- <div class="modal fade" id="getAQuoteModal" tabindex="-1" aria-labelledby="getAQuoteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content contact-form style2">
            <div class="modal-header">
                <h2 class="modal-title fs-5" id="getAQuoteModalLabel">Please Fill In The Form Below</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                   
                    <form action="{{ route('popUpContact.store') }}" method="POST" id="popupForm">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" id="popName" placeholder="Enter your Name"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    name="email" id="popEmail" placeholder="Enter your Email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                    name="phone" id="popPhone" placeholder="Enter your Phone"
                                    value="{{ old('phone') }}" maxlength="10" pattern="\d{10}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12 form-group mb-0 text-center">
                                <button type="submit" class="th-btn th-radius">Submit Message</button>
                            </div>
                        </div>
                    </form>
                    <script type="text/javascript">
                        $.validator.addMethod("emailregex", function(value, element) {
                            return this.optional(element) || /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/i.test(value);
                        });

                        $.validator.addMethod("letters", function(value, element) {
                            return this.optional(element) || /^[a-zA-Z\s']*$/i.test(value);
                        });

                        $.validator.addMethod("numbers", function(value, element) {
                            return this.optional(element) || /^[0-9]{10}$/.test(value);
                        });

                        $('#popupForm').validate({
                            rules: {
                                name: {
                                    required: true,
                                    letters: true,
                                },
                                email: {
                                    required: true,
                                    emailregex: true,
                                },
                                phone: {
                                    required: true,
                                    numbers: true,
                                    minlength: 10,
                                    maxlength: 10,
                                },

                            },
                            messages: {
                                name: {
                                    required: 'This Name field is required',
                                    letters: 'Only Letters & Spaces are Allowed.'
                                },
                                phone: {
                                    required: 'This Phone field is required',
                                    numbers: 'Please enter 10 digits',
                                    minlength: 'Phone number must be 10 digits',
                                    maxlength: 'Phone number must be 10 digits',
                                },

                                email: 'Please enter a Valid Email Id',

                            },
                            submitHandler: function(form) {
                                form.submit();
                            }
                        });
                    </script>


                </div>
            </div>
            <div class="modal-footer d-none">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> -->
<!-- popup modal  end-->

<style>
    .modal {
        position: fixed;
        z-index: 99;
    }

    @keyframes bappaFloat {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-8px);
        }

        100% {
            transform: translateY(0);
        }
    }

    .bappa-animate {
        animation: bappaFloat 3s ease-in-out infinite;
        display: inline-block;
        /* needed so transform works on img */
    }

    .modak {
        right: -28px;
        position: relative;
        top: 9px;
        height: 35px;
    }

    @media only screen and (max-width: 576px) {
        .modak {
            right: -5px;
            height: 20px;
        }

        .confetti {
            position: absolute;
            width: 10px !important;
            height: 10px Im !important;
        }
    }

    @keyframes bappaFloat {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-8px);
        }

        100% {
            transform: translateY(0);
        }
    }

    .bappa-animate {
        animation: bappaFloat 3s ease-in-out infinite;
        display: inline-block;
        position: relative;
        z-index: 2;
    }


    .confetti-wrapper {
        position: relative;
        display: inline-block;
    }

    /* .confetti {
        position: absolute;
        width: 6px;
        height: 6px;
        background-color: red;
        opacity: 0.8;
        animation: fall linear infinite;
    }
    .confetti:nth-child(2) {
        left: 20%;
        background-color: yellow;
        animation-duration: 3s;
        animation-delay: 0.2s;
    }

    .confetti:nth-child(3) {
        left: 40%;
        background-color: green;
        animation-duration: 4s;
        animation-delay: 0.4s;
    }

    .confetti:nth-child(4) {
        left: 60%;
        background-color: blue;
        animation-duration: 3.5s;
        animation-delay: 0.6s;
    }

    .confetti:nth-child(5) {
        left: 80%;
        background-color: pink;
        animation-duration: 4.2s;
        animation-delay: 0.8s;
    }

    .confetti:nth-child(6) {
        left: 50%;
        background-color: orange;
        animation-duration: 3.8s;
        animation-delay: 1s;
    }

    @keyframes fall {
        0% {
            transform: translateY(-10px) rotate(0deg);
            opacity: 1;
        }

        100% {
            transform: translateY(120px) rotate(360deg);
            opacity: 0;
        }
    } */
    /* Petal pieces */
    .confetti {
        position: absolute;
        width: 15px;
        height: 15px;
        background-image: url('{{ asset("frontend-assets/img/nav-element/flower3.png") }}');
        background-size: contain;
        background-repeat: no-repeat;
        opacity: 0.9;
        animation: fallPetal linear infinite;
    }

    .confetti:nth-child(2) {
        left: 20%;
        animation-duration: 4s;
        animation-delay: 0.3s;
    }

    .confetti:nth-child(3) {
        left: 40%;
        animation-duration: 5s;
        animation-delay: 0.6s;
    }

    .confetti:nth-child(4) {
        left: 60%;
        animation-duration: 3.5s;
        animation-delay: 0.9s;
    }

    .confetti:nth-child(5) {
        left: 80%;
        animation-duration: 4.2s;
        animation-delay: 1.2s;
    }

    .confetti:nth-child(6) {
        left: 50%;
        animation-duration: 3.8s;
        animation-delay: 1.5s;
    }

    @keyframes fallPetal {
        0% {
            transform: translateY(-10px) rotate(0deg) scale(1);
            opacity: 1;
        }

        50% {
            transform: translateY(60px) rotate(180deg) scale(1.1);
            opacity: 0.8;
        }

        100% {
            transform: translateY(120px) rotate(360deg) scale(0.9);
            opacity: 0;
        }
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