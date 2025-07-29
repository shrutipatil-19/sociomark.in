@extends('Frontend.layout.app')
@section('content')
    <main id="industries">
        <section>
            <div class="full-width">
                <picture>
                    <source media="(min-width: 1400px)" srcset="https://placehold.co/1920x900">
                    <img src="https://placehold.co/1080x1080" alt="industry">
                </picture>
            </div>
        </section>
        <section class="overflow-hidden space" id="about-sec">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-content breadcrumb-light">
                            <h1 class="breadcumb-title">All Industries</h1>
                            <ul class="breadcumb-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li>All Industries</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
