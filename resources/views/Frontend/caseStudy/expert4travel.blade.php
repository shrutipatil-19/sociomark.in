@extends('Frontend.layout.app')
@section('custome-style')
<style>
    .sub-sec-title {
        font-size: 25px;
    }

    th {
        background-color: #106c97;
        color: white;
    }

    .breadcumb-wrapper {
        margin-top: 4.3rem;
        background-color: #e2e2e2;
        background-size: contain;
    }

    #portfolioCommon {
        background-color: white !important;
    }
</style>

@endsection

@section('content')
<main>
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend-assets/img/case-study/E4T.png') }}">
        <div class="container">
            <div class="breadcumb-content">

            </div>
        </div>
    </div>
    <div class="container space">

        <!-- <h1 class="sec-title text-blue text-center">StemRx Bioscience: Transforming Market Presence with a 90-Day Game Plan for Success</h1> -->
        <h1 class="sec-title text-blue">Expert4Travel </h1>
        <h2 class="mt-4 sub-sec-title text-blue">The Problem:</h2>
        <p class="sec-para">When Expert4Travel came to Sociomark, they had 2 objectives:</p>
        <ul>
            <li class="sec-para">They had extremely low website visitors.</li>
            <li class="sec-para">Need to increase organic traffic and organic ranking.</li>

        </ul>
        <p class="sec-para">Expert4Travel believes in leveraging human expertise, a platform that offers a range of features such as search options for suitable trip ideas & inspiration from the travel tales crafted by a community of travel experts.</p>

        <h2 class="mt-4 sub-sec-title text-blue">The Strategy:</h2>
        <p class="sec-para">Our first step was creating a content strategy based on the below category.</p>
        <ul>
            <li class="sec-para">Places to visit</li>
            <li class="sec-para">Hotel Reviews</li>
            <li class="sec-para">Famous foods reviews as per location</li>

        </ul>
        <p class="sec-para">
            We then added content related to “Places to visit” as it has high monthly searches.
        </p>
        <p class="sec-para">
            We then took these types of keywords, examined the search behavior behind them, and wrote website and blog copy to target the search intent behind the people using them.
        </p>
        <p class="sec-para">
            We also started publishing web stories that helped us gain traffic from Google Discover.
        </p>

        <h2 class="mt-4 sub-sec-title text-blue">The Results:</h2>
        <p class="sec-para">
            Let’s compare — April 2022 to Sept 2022.
        </p>

        <table>
            <tr>
                <th>Month</th>
                <th>April 2022</th>
                <th>May 2022</th>
                <th>June 2022</th>
                <th>July 2022</th>
                <th>August 2022</th>
                <th>Sept 2022</th>
            </tr>
            <tr>
                <td class="sec-para">
                    Organic Users
                </td>
                <td class="sec-para">
                    100
                </td>
                <td class="sec-para">
                    140
                </td>
                <td class="sec-para">
                    144
                </td>
                <td class="sec-para">
                    5089
                </td>
                <td class="sec-para">
                    1190
                </td>
                <td class="sec-para">
                    3051
                </td>
            </tr>
        </table>
        <p class="sec-para">Approx 3000% increase in organic visitors within 6 months.</p>
        <h2 class="mt-4 sub-sec-title text-blue">Growth Snapshots</h2>
        <div class="row">
            <div class="col-6"><img src="{{ asset('frontend-assets/img/case-study/growth1.png') }}" alt="Growth Snapshots"></div>
            <div class="col-6"><img src="{{ asset('frontend-assets/img/case-study/growth2.png') }}" alt="Growth Snapshots"></div>
        </div>
    </div>
    @include('Frontend/partial/commonCaseStudy')
    @include('Frontend/partial/portfolioCommon')
</main>
@endsection