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