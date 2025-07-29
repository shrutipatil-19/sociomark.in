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

    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend-assets/img/case-study/ace tatto.png') }}">
        <div class="container">
            <div class="breadcumb-content">

            </div>
        </div>
    </div>
    <div class="container space">
        <h1 class="sec-title text-blue">Ace Tattooz </h1>
        <h2 class="mt-4 sub-sec-title text-blue">About the Brand:</h2>
        <p class="sec-para">Ace Tattooz is an award winning Tattoo Studio based in Mumbai having its presence across two locations,Colaba and Ghatkopar. This leading Tattoo Studio has been appreciated by various Bollywood celebrities and have won many awards for their intricate designs, however they were facing issues when it came to creating awareness to people around their location and wanted to increase their footfalls.Their main objective was to:
        <ul>
            <li class="sec-para">Increase Website Traffic.</li>
            <li class="sec-para">Increase organic Lead .</li>
            <li class="sec-para">Keywords Ranking on 1st page for the most searched keywords related to tattoos.</li>
        </ul>

        </p>
        <h2 class="mt-4 sub-sec-title text-blue">Obstacles:</h2>
        <p class="sec-para">The main obstacles Ace Tattooz were facing was a fluctuating website traffic, and less keywords ranking on the 1st SERP page. Understanding the bottlenecks and loopholes of the brands, Sociomark devices a 6-month strategy to increase the traffic by implementing both On-page and off-Page optimization.</p>

        <h2 class="mt-4 sub-sec-title text-blue">Our Objective was simple, Let’s get the errors our first!:</h2>
        <p class="sec-para">And then Create Brand awareness, increase website traffic, keywords ranking and lead generation by showcasing their portfolio of different types of tattoos they have made, and attract the right kind of audience who wish to get a tattoo done on their body.</p>

        <h2 class="mt-4 sub-sec-title text-blue">Our Solutions Offered:</h2>
        <p class="sec-para">SEO strategy for our client which includes-</p>
        <ul>
            <li class="sec-para">Content Writing</li>
            <li class="sec-para">SEO Strategy</li>
            <li class="sec-para">Technical update</li>
            <li class="sec-para">Off page Buildup</li>
            <li class="sec-para">Creating Relevant Backlinks</li>
            <li class="sec-para">Guest Posting</li>

        </ul>

        <h2 class="mt-4 sub-sec-title text-blue">Results:</h2>
        <ul>
            <li class="sec-para">9 keywords were ranking on 1st SERP in just 4 months</li>
            <li class="sec-para">8 keywords were ranking on 2nd SERP in just 4 months</li>
        </ul>

        <div class="imgs">
            <img src="{{ asset('frontend-assets/img/case-study/result ace.jpeg') }}" alt="Social Media Company in Mumbai">
        </div>
        <ul>
            <li class="sec-para">In just 3 months we saw an incremental change across traffic, New user, bounce rate and Lead generated</li>
            <li class="sec-para">9% in overall traffic and 15% in New User Traffic</li>
            <li class="sec-para">The Bounce rate was reduced to 2.58% from 3.14% and 24 leads were generated organically compared to 18 leads</li>
        </ul>

        <div class="imgrow">

            <h2 class="mt-4 sub-sec-title text-blue">Here is screenshot of of before and after numbers </h2>
            <div class="imgs">
                <img src="{{ asset('frontend-assets/img/case-study/before after number.jpeg') }}" alt="Social Media Agency in Mumbai">
            </div>




            <h2 class="mt-4 sub-sec-title text-blue">Improved Traffic </h2>
            <div class="imgs">
                <img src="{{ asset('frontend-assets/img/case-study/improved traffic.jpeg') }}" alt="Social Media Services">
            </div>

        </div>



        <h2 class="mt-4 sub-sec-title text-blue">Read this story of our Co-founder Heta Baandal, on <a href="https://www.adgully.com/the-rules-of-seo-are-constantly-evolving-heta-baandal-128964.html" target="_blank">Why SEO Plays an important role for an brand growth</a>!</h2>
        <h2 class="mt-4 sub-sec-title text-blue">
            If you wish to grow your brand organically, connect with us today!
        </h2>
    </div>

    @include('Frontend/partial/commonCaseStudy')
    @include('Frontend/partial/portfolioCommon')

</main>
@endsection