@extends('Frontend.layout.app')
@section('title', 'Page Not Found!')
@section('content')
<main>
    <section class="default-spacing">
        <div class="container h-100">
            <div class="row height-50 g-3 align-items-center justify-content-center">
                <div class="col-12">
                    <h1 class="text-center">The page you're looking for can't be found.</h1>
                </div>
                <div class="col-12">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-auto"><a href="{{ route('home') }}" class="th-btn th-icon">Return to Home</a></div>
                        {{-- <div class="col-auto">or</div>
                        <div class="col-auto"><a href="">See Our Sitemap > </a></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection