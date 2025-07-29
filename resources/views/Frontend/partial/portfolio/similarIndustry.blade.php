<section class="porfolio-text overflow-hidden space">
    <div class="container">
        <div class="row">
            <h2 class="sec-title">Similar Industry,<br><span class="text-blue">We Worked On</span></h2>

            @forelse($relatedClients as $slug => $client)
            @if(!empty($client['portfolio-image']))
            <div class="col-lg-4 col-md-4 col-12 mb-4">
                <a href="{{ route('social_media', ['client' => $slug]) }}">
                    <img src="{{ asset($client['portfolio-image']) }}" alt="{{ $client['name'] }}" class="w-100">
                    <p class="sec-para text-center text-blue mt-2"><b>{{ $client['name'] }}</b></p>
                </a>
            </div>
            @endif
            @empty
            <p class="text-center text-muted">No other clients in this industry yet.</p>
            @endforelse

            <div class="mt-3">
                <a href="{{ route('portfolio') }}" class="th-btn th-icon">View Our Portfolio</a>
            </div>
        </div>
    </div>
</section>