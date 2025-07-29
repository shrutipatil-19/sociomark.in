@extends('Frontend.layout.app')
@section('custome-style')
<style>
    .sub-sec-title {
        font-size: 25px;
    }

    .breadcumb-wrapper {
        margin-top: 4.3rem;
        background-color: #e2e2e2;
        background-size: contain;
    }

    #portfolioCommon {
        background-color: white !important;
    }

    th {
        background-color: #106c97;
        color: white;

    }

    td {
        border: none;
    }
</style>

@endsection

@section('content')
<main>
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend-assets/img/case-study/nhss/nhss.png') }}">
        <div class="container">
            <div class="breadcumb-content">

            </div>
        </div>
    </div>
    <div class="container space">

        <h1 class="sec-title text-center">Educational <span class="text-blue">Brand</span></h1>

        <h2 class="mt-4 sub-sec-title text-blue">About the Brand:</h2>

        <p class="sec-para">
            New Horizon Group of School’s is an <strong>educational institution</strong> committed to providing holistic education to its students. With <strong>seven schools across Mumbai,</strong> they are dedicated to foster <strong>academic excellence, character building, and the overall development</strong> of its students.

        </p>
        <h2 class="mt-4 sub-sec-title text-blue">The Problem they had:</h2>
        <h3 class="fs-5 text-blue">Less Admission</h3>
        <ol type="1">
            <li class="sec-para">
                <h3 class="fs-5">Weak Social Media Engagement</h3>
                <p class="sec-para">Social media feed was not appealing to the target audience with no brand identity .</p>
            </li>
            <li class="sec-para">
                <h3 class="fs-5">Lack of SEO based content on website</h3>
                <p class="sec-para">Website content was missing .</p>
            </li>
            <li class="sec-para">
                <h3 class="fs-5">Inconsistent Admissions</h3>
                <p class="sec-para">Schools struggled to attract admissions because they didn't effectively used advertising platforms like Meta and Google Ads, missing chances to reach and convert prospective parents and students efficiently </p>
            </li>
        </ol>
    </div>
    <div class="header-button mb-5 d-flex align-items-center justify-content-center">
        <a href="{{ route('social_media', ['client'=>'nhss']) }}" class="th-btn th-icon">View Portfolio</a>
    </div>
    @include('Frontend/partial/commonCaseStudy')

    @include('Frontend/partial/portfolioCommon')
</main>
@endsection