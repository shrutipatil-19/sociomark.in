@include('Frontend/partial/CTA')
<!--==============================
 Footer Area
==============================-->
<footer class="footer-wrapper bg-title footer-layout1 footer-layout2">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between mb-3">
                <div class="col-md-6 col-xxl-3 col-xl-4">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo text-center">
                                <a class="icon-masking" href="{{ route('home') }}">
                                    {{-- <img src="{{ asset('frontend-assets/img/logo/sc-white-horizontal.png') }}" alt="sociomark"> --}}
                                    <img src="{{ asset('frontend-assets/img/logo/sociomark-new-logo.png') }}"
                                        height="160" alt="sociomark">
                                </a>
                            </div>
                            {{-- <p class="about-text">Saor, meaning "free" in Gaelic, embodies our dedication to liberating your brand's potential in the digital realm. Founded in 1995, we boast a rich history.</p> --}}
                            <div class="th-social text-center">
                                <a href="https://www.facebook.com/Sociomarkin" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/sociomarkin/" target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="https://in.pinterest.com/Sociomarkin/" target="_blank"><i
                                        class="fab fa-pinterest"></i></a><br>
                                <a href="https://www.youtube.com/@sociomarkdigitalmarketing" target="_blank"><i
                                        class="fab fa-youtube"></i></a>
                                <a href="https://twitter.com/sociomarkin" target="_blank"><i
                                        class="fa-brands fa-x-twitter"></i></a>
                                <a href="https://www.linkedin.com/company/sociomark/" target="_blank" class="mt-10"><i
                                        class="fab fa-linkedin-in"></i></a>
                                {{-- <a href="https://api.whatsapp.com/send?phone=919819988640&text=Hello!%20I%20just%20came%20across%20your%20website.%20I%20am%20very%20much%20impressed%20by%20the%20services%20you%20provide.%20I%20want%20to%20know%20more%20about%20your%20services%20as%20I%20am%20interested%20in%20working%20with%20you%20for%20the%20growth%20of%20my%20business." target="_blank" class="mt-10"><i class="fab fa-whatsapp"></i></a> --}}
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Services</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="{{ route('digitalMarketing') }}">Digital Marketing</a></li>
                                <li><a href="{{ route('seo') }}">SEO</a></li>
                                <li><a href="{{ route('socialMedia') }}">Social Media Marketing</a></li>
                                <li><a href="{{ route('website') }}">Website Development</a></li>
                                <li><a href="{{ route('contentMarketing') }}">Content Marketing</a></li>
                                <li><a href="{{ route('sem') }}">Performance Marketing</a></li>
                                <li><a href="{{ route('photoVideography') }}">Photography & Video Production</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Quick Links</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="{{ route('portfolio') }}">Portfolios</a></li>
                                <li><a href="{{ route('case-study') }}">Case Studies</a></li>
                                <li><a href="{{ route('workculture') }}">Work Culture</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>

                                {{-- <li><a href="{{ route('about') }}">About Us</a></li> --}}
                                {{-- <li><a href="#">Services</a></li> --}}
                                {{-- <li><a href="#">Creator</a></li> --}}


                                <li><a href="{{ route('blog') }}">Blogs</a></li>
                                <li><a href="{{ route('careers') }}">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Contact Info</h3>
                        <div class="th-widget-contact">
                            <div class="info-box">
                                <div class="th-social">
                                    {{-- <img src="assets/img/icon/location.svg" alt=""> --}}
                                    <a><i class="fa fa-map-marker"></i></a>
                                </div>
                                <div class="box-text">
                                    <a class="box-link">C1 - 1F - SF10283, Ajman Free Zone C1 Building,
                                        Business district - Ajman Free Zone</a>
                                </div>
                            </div>
                            <div class="info-box">
                                <div class="th-social">
                                    <a><i class="fa fa-phone"></i></a>
                                    {{-- <img src="assets/img/icon/call.svg" alt=""> --}}
                                </div>
                                <div class="box-text">
                                    <a href="tel:+971504266118" class="box-link">+971 50 426 6118</a>
                                </div>
                            </div>
                            <div class="info-box">
                                <div class="th-social">
                                    {{-- <img src="assets/img/icon/mail.svg" alt=""> --}}
                                    <a><i class="fa fa-envelope"></i></a>
                                </div>
                                <div class="box-text">
                                    <!-- <a href="mailto:business@sociomark.in" class="box-link">business@sociomark.in</a> -->
                                    <a href="mailto:&#98;&#117;&#115;&#105;&#110;&#101;&#115;&#115;&#64;&#115;&#111;&#99;&#105;&#111;&#109;&#97;&#114;&#107;&#46;&#105;&#110;" class="box-link">
                                        &#98;&#117;&#115;&#105;&#110;&#101;&#115;&#115;&#64;&#115;&#111;&#99;&#105;&#111;&#109;&#97;&#114;&#107;&#46;&#105;&#110;
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="accordion accordion-transparent no-title">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button text-center collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body px-0">
                                    <p class="text-white-50">
                                        seo firms near me | seo agency dubai | seo Company in dubai | digital marketing companies in dubai |
                                        website design dubai | advertising companies in dubai | web design agency dubai
                                        | seo in dubai | best seo companies in dubai | seo expert in dubai | best seo
                                        agency in dubai | best seo company in dubai | best seo services in dubai | best
                                        digital marketing agency in dubai | best digital marketing company in dubai |
                                        social media marketing companies in dubai | digital marketing Agency in UAE |
                                        seo services | digital marketing companies in abu dhabi | best marketing agency
                                        in dubai | seo Agency in UAE | top digital marketing agencies in dubai |
                                        advertising agency in uae | seo company in abu dhabi | best digital marketing
                                        agency in uae | marketing company in uae | seo companies in uae | seo consultant
                                        in dubai | marketing agency in uae | ecommerce website design | digital
                                        marketing agency in sharjah | digital marketing services in sharjah | best seo
                                        services in uae | seo agency in abu dhabi | Seo services in UAE | seo
                                        optimization companies | top seo companies in dubai | best seo in dubai | e
                                        commerce seo services | search engine optimization company in dubai | search
                                        engine optimization in dubai | seo optimization agency | website companies in
                                        dubai | best seo agencies in dubai | best seo expert in dubai | local seo in
                                        dubai | local seo services in dubai | digital marketing agency in dubai |
                                        performance marketing agency | Advertising company In Dubai | seo service in
                                        dubai | digital marketing agency | social media marketing | search engine
                                        marketing | digital marketing company dubai | best digital marketing agency
                                        dubai | best web design company in dubai | Website development agency | website
                                        development company in dubai | social media agency dubai | digital marketing
                                        company | seo agency uae | website development services | seo specialist | web
                                        design companies near me | best seo companies | seo company | social media
                                        marketing companies in uae | best social media marketing agency in dubai |
                                        social media marketing services in dubai | digital marketing companies in uae |
                                        top digital marketing companies in dubai | website development in uae | Web
                                        Development Agency in Dubai | Content marketing agency dubai | content marketing
                                        services
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row gy-2 align-items-center justify-content-between">
                <div class="col-md-6">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> {{ date('Y') }} <a
                            href="#">Sociomark</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-links">
                        <ul>
                            <li><a href="{{ route('privacyAndPolicy') }}">Privacy Policy</a></li>
                            <li><a href="{{ route('termsAndcondition') }}">Terms & Condition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Scroll To Top -->

<style>
    .th-widget-contact {
        max-width: 100%;
    }

    .th-widget-contact .info-box {
        align-items: center;
        margin-bottom: 15px;
    }
</style>
<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
            style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg>
</div>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>