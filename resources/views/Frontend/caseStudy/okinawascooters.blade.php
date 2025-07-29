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
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend-assets/img/case-study/OKINAWA.png') }}">
        <div class="container">
            <div class="breadcumb-content">

            </div>
        </div>
    </div>
    <div class="container space">
        <h1 class="sec-title text-blue">Okinawa </h1>
        <h2 class="mt-4 sub-sec-title text-blue">About Okinawa Scooters:</h2>
        <p class="sec-para">Okinawa Autotech Pvt. Ltd. is a 100% Indian electric two wheeler manufacturing company that was established in 2015 with a mission to create two wheelers that can drive our present towards a sustainable future.<br></p>
        <h2 class="mt-4 sub-sec-title text-blue">The Problem</h2>
        <p class="sec-para">When Okinawa Scooters came to Sociomark, they had one problem:<br>
            No increase in monthly traffic.
        </p>
        <table>
            <tbody>
                <tr>
                    <th>Month</th>
                    <th>Jan 2021</th>
                    <th>Feb 2021</th>
                    <th>March 2021</th>
                </tr>
                <tr>
                    <td class="sec-para">Organic Traffic</td>
                    <td class="sec-para">79,067</td>
                    <td class="sec-para">74,013</td>
                    <td class="sec-para">74,443</td>
                </tr>
            </tbody>
        </table><br>
        <table>
            <tbody>
                <tr>
                    <th>Bounce rate</th>
                    <td class="sec-para">37%</td>
                    <td class="sec-para">26%</td>
                    <td class="sec-para">16%</td>
                </tr>

            </tbody>
        </table><br>
        <p class="sec-para">They needed a strategy to increase their organic traffic similar to their competitors like TVS, Ather &amp; Hero.</p>
        <h2 class="mt-4 sub-sec-title text-blue">The Strategy:</h2>
        <p class="sec-para">We started with the content strategy of the website. Research transactional keywords and added keyword-based content on the website.<br>
            Increase Keyword Rich content<br>
            Competitors Analysis <br>
            Blogger Outreach <br>
            Add Blog section
        </p>
        <h2 class="mt-4 sub-sec-title text-blue">The Results</h2>
        <p class="sec-para">Let’s compare — Jan 2021 to October 2022.</p>

        <table>
            <tbody>
                <tr>
                    <th>Month</th>
                    <th>Jan 2021</th>
                    <th>Oct 2022</th>
                </tr>
                <tr>
                    <td class="sec-para">Organic Users</td>
                    <td class="sec-para">79,067</td>
                    <td class="sec-para">176,627</td>
                </tr>
            </tbody>
        </table><br>
        <p class="sec-para">Approx 120% increase in organic visitors within 8-12 months.</p>


        <h2 class="mt-4 sub-sec-title text-blue">Growth Snapshots</h2>
        <div class="row">
            <div class="col-6">
                <img src="{{ asset('frontend-assets/img/case-study/domain1.png') }}" alt="Social Media Agency in Mumbai">
            </div>

            <div class="col-6">
                <img src="{{ asset('frontend-assets/img/case-study/domain2.png') }}" alt="Social Media Services">
            </div>
        </div>
    </div>
    @include('Frontend/partial/commonCaseStudy')
    @include('Frontend/partial/portfolioCommon')

</main>
@endsection