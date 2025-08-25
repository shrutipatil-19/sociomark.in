{{-- Clients Portfolio --}}
@php
    // Check if there is at least one client with an image
    $hasImages = collect($clients)->contains(function($client) {
        return !empty($client['image']);
    });
@endphp

@if($hasImages)
<section class="overflow-hidden space garally" id="portfolio-sec">
    <div class="container">
        <div class="title-area text-center mb-25">
            <h2 class="fw-bold sec-title my-3" data-aos="fade-up" data-aos-delay="100">
                Clients We've <span class="text-blue"> Worked With</span>
            </h2>
        </div>

        <div class="filter-menu d-none filter-menu-active mt-md-5 mb-md-4">
            <button data-filter="*" class="tab-btn active" type="button">All</button>
            <button data-filter=".cat1" class="tab-btn" type="button">Digital Marketing</button>
            <button data-filter=".cat2" class="tab-btn" type="button">Search Engine Optimization</button>
            <button data-filter=".cat3" class="tab-btn" type="button">Social Media Marketing</button>
            <button data-filter=".cat4" class="tab-btn" type="button">Website Development</button>
            <button data-filter=".cat5" class="tab-btn" type="button">Content Marketing</button>
            <button data-filter=".cat6" class="tab-btn" type="button">Performance Marketing</button>
            <button data-filter=".cat6" class="tab-btn" type="button">Production & Photography</button>
        </div>

        <div class="portfolio-area" data-aos="zoom-in" data-aos-delay="200">
            <div class="row gy-4 filter-active garally-row-height mt-md-0 mt-4">
                @foreach ($clients as $slug => $client)
                    @if(!empty($client['image']))
                        <div class="col-md-3 col-6 col-xl-auto filter-item cat4 cat6">
                            <a href="{{ route('social_media', $slug) }}" target="_blank" class="project-item d-block">
                                <img src="{{ asset($client['image']) }}" alt="{{ $slug }} project image" class="w-100">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
