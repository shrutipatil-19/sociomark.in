<section class="overflow-hidden space garally" id="portfolio-sec">
    <div class="container">
        <div class="title-area text-center mb-25">
            <h2 class="fw-bold sec-title my-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                Clients We've <span class="text-blue"> Worked With</span>
            </h2>
        </div>
        <div class="filter-menu filter-menu-active mt-md-5 mb-md-4">
            @foreach ($industries as $industry)
             @if (array_key_exists($clients,$industry['id']))

             @endif
            @endforeach
            <button data-filter="*" class="tab-btn active" type="button">All</button>
            <button data-filter=".cat1" class="tab-btn" type="button">Education</button>
            <button data-filter=".cat2" class="tab-btn" type="button">Healthcare</button>
            <button data-filter=".cat3" class="tab-btn" type="button">News & Media</button>
            <button data-filter=".cat4" class="tab-btn" type="button">Real Eastate</button>
            <button data-filter=".cat5" class="tab-btn" type="button">Logistics</button>
            <button data-filter=".cat6" class="tab-btn" type="button">Gaming</button>

        </div>
        <div class="portfolio-area" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1200"
            data-aos-easing="ease-in-out">
            <div class="row gy-4 filter-active garally-row-height mt-md-0 mt-4">
                <div class="col-md-3 col-xl-auto filter-item cat1 cat5 cat7 cat3">
                    <a href="" class="project-item d-block">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend-assets/img/clients/ayuhealth.jpg') }}"
                                alt="project image">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-auto filter-item cat5 cat5 cat8 cat1">
                    <a href="" class="project-item d-block">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend-assets/img/clients/ayushakti.jpg') }}"
                                alt="project image">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-auto filter-item cat5 cat3 cat2">
                    <a href="" class="project-item d-block">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend-assets/img/clients/buildtrack (1).png') }}"
                                alt="project image">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-auto filter-item cat4 cat1 cat6">
                    <a href="" class="project-item d-block">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend-assets/img/clients/bumchums.jpg') }}"
                                alt="project image">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-auto filter-item cat4 cat6">
                    <a href="" class="project-item d-block">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend-assets/img/clients/eduauraa.jpg') }}"
                                alt="project image">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-auto filter-item cat1 cat6">
                    <a href="" class="project-item d-block">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend-assets/img/clients/euro.jpg') }}" alt="project image">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-auto filter-item cat2">
                    <a href="" class="project-item d-block">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend-assets/img/clients/jivana.jpg') }}" alt="project image">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-auto filter-item cat3 cat2">
                    <a href="" class="project-item d-block">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend-assets/img/clients/network18.jpg') }}"
                                alt="project image">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-auto filter-item cat3 cat4">
                    <a href="" class="project-item d-block">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend-assets/img/clients/nhs_logo.png') }}"
                                alt="project image">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-auto filter-item cat5 cat1">
                    <a href="" class="project-item d-block">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend-assets/img/clients/nodwin.jpg') }}" alt="project image">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-auto filter-item cat4 cat6">
                    <a href="" class="project-item d-block">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend-assets/img/clients/okinawa.jpg') }}"
                                alt="project image">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-auto filter-item cat1 cat3">
                    <a href="" class="project-item d-block">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend-assets/img/clients/pare.png') }}" alt="project image">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-auto filter-item cat5 cat1">
                    <a href="" class="project-item d-block">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend-assets/img/clients/shahenaz.jpg') }}"
                                alt="project image">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-auto filter-item cat4 cat6">
                    <a href="" class="project-item d-block">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend-assets/img/clients/stemrx.jpg') }}" alt="project image">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-auto filter-item cat1 cat3">
                    <a href="" class="project-item d-block">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend-assets/img/clients/tataplay.png') }}"
                                alt="project image">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-auto filter-item cat1 cat3">
                    <a href="" class="project-item d-block">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend-assets/img/clients/times.jpg') }}" alt="project image">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-auto filter-item cat5 cat1">
                    <a href="" class="project-item d-block">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend-assets/img/clients/totalfood.png') }}"
                                alt="project image">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-xl-auto filter-item cat4 cat6">
                    <a href="" class="project-item d-block">
                        <div class="box-img global-img">
                            <img src="{{ asset('frontend-assets/img/clients/watch.jpg') }}" alt="project image">
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>