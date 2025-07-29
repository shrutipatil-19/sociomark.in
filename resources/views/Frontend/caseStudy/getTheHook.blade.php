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

    

    .strategy {
        background-color: #ff900b;
        color: white;
    }

    .orange {
        color: #ff900b;
    }
</style>

@endsection

@section('content')
<main>
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('frontend-assets/img/case-study/trollers.png') }}">
        <div class="container">
            <div class="breadcumb-content">

            </div>
        </div>
    </div>
    <div class="container space">

        <h1 class="sec-title text-center">OTH - Hotel <span class="text-blue">industry</span></h1>

        <h2 class="mt-4 sub-sec-title text-blue">About the Brand:</h2>

        <p class="sec-para">
            <strong>Off The Hook Grab & Go</strong> offers convenient, chef-curated meals with a focus on fresh, high-quality ingredients, including gluten-free options. Their sister brands include <strong>Trollers Fish & Chips,</strong> specializing in classic fish and chips; <strong> Off The Hook Nanaimo,</strong> offering a diverse seafood menu; <strong>Bare Bones Fish House & Smokery,</strong> known for smoked seafood; and <strong>Off The Hook Comox,</strong> featuring local seafood delights. These brands celebrate the best of coastal cuisine.

        </p>

        <h2 class="mt-4 sub-sec-title text-blue">Our Solution:</h2>
        <h3 class="fs-5 text-blue">90-Day Game Plan</h3>
        <div class="row">
            <div class="col-md-4 col-6">
                <table>
                    <tr>
                        <th>Our Mission</th>
                    </tr>
                    <tr>
                        <td class="sec-para">To increase sales and elevate brand awareness for Off The Hook by highlighting the premium quality, fresh ingredients, and West Coast culinary experience that define our seafood offerings.
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4 col-6">
                <table>
                    <tr>
                        <th>Our Vision</th>
                    </tr>
                    <tr>
                        <td class="sec-para">To increase sales and elevate brand awareness for Off The Hook by highlighting the premium quality, fresh ingredients, and West Coast culinary experience that define our seafood offerings.
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4 col-6">
                <table>
                    <tr>
                        <th>Our Goals</th>
                    </tr>
                    <tr>
                        <td class="sec-para">To increase sales and elevate brand awareness for Off The Hook by highlighting the premium quality, fresh ingredients, and West Coast culinary experience that define our seafood offerings.
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <h2 class="mt-4 sub-sec-title text-blue">Key Problem:</h2>
        <div class="row">

            <div class="col-12 col-md-6">
                <p class="sec-para">
                    Off The Hook struggled to achieve significant online performance. Their primary focus is to improve online visibility and customer engagement on Google My Business (GMB).
                </p>
                <ul>
                    <li class="sec-para">Insufficient content</li>
                    <li class="sec-para">Poor keyword optimization</li>
                    <li class="sec-para">Slow page speed</li>
                    <li class="sec-para">Unoptimized header and footer</li>
                    <li class="sec-para">Missing schema markup</li>
                    <li class="sec-para">Weak local SEO</li>
                    <li class="sec-para">Missing feature images</li>
                    <li class="sec-para">Non-mobile-friendly design</li>
                </ul>
            </div>
            
        </div>


        <h2 class="mt-4 sub-sec-title text-blue">Error We resolved</h2>
        <div class="row">
            <div class="col-12 col-md-6" style="height: 400px;">
                <div class="row h-100" >
                    <div class="col-6 h-100">
                        <img src="{{ asset('frontend-assets/img/case-study/Off the Hook/1.png') }}" alt="get the hook" class="w-100 h-100">
                    </div>
                    <div class="col-6 h-100">
                        <img src="{{ asset('frontend-assets/img/case-study/Off the Hook/2.png') }}" alt="get the hook" class="w-100 h-100">
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-6">
                <ul>
                    <li class="sec-para">Increased content depth and relevance</li>
                    <li class="sec-para">Enhanced keyword targeting</li>
                    <li class="sec-para">Improved page loading speed</li>
                    <li class="sec-para">Optimized header and footer navigation</li>
                    <li class="sec-para">Implemented schema markup for better SEO</li>
                    <li class="sec-para">Strengthened local SEO efforts</li>
                    <li class="sec-para">Added compelling feature images</li>
                    <li class="sec-para">Achieved mobile-friendly website design</li>
                </ul>
            </div>

        </div>
        <h2 class="sub-sec-title text-blue mt-5">Updated Meta title & description</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="imgs">
                    <img src="{{ asset('frontend-assets/img/case-study/Off the Hook/3.png') }}" alt="get the hook">
                </div>
            </div>
            <div class="col-md-6">
                <p class="sec-para"><strong>Before:</strong> Our website lacked optimized meta titles and meta descriptions, resulting in low search engine visibility and poor click-through rates</p>

            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6">

                <p class="sec-para"><strong> After:</strong>After optimizing our meta titles and descriptions, our website's search engine visibility and click-through rates improved significantly, attracting more visitors and boosting our SEO success.</p>

            </div>
            <div class="col-md-6">
                <div class="imgs">
                    <img src="{{ asset('frontend-assets/img/case-study/Off the Hook/4.png') }}" alt="get the hook">
                </div>
            </div>

        </div>

        <h2 class="sub-sec-title text-blue mt-5">Updated Robots.txt File</h2>
        <div class="row align-items-center ">
            <div class="col-md-6">
                <div class="imgs">
                    <img src="{{ asset('frontend-assets/img/case-study/Off the Hook/5.png') }}" alt="get the hook">
                </div>
            </div>
            <div class="col-md-6">
                <p class="sec-para"><strong>Before:</strong> Our website had numerous 404 errors, frustrating users and negatively impacting our SEO performance. </p>

            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6">

                <p class="sec-para"><strong> After:</strong>Addressing the 404 errors on our website, we saw a significant improvement in both user experience and SEO performance.</p>

            </div>
            <div class="col-md-6">
                <div class="imgs">
                    <img src="{{ asset('frontend-assets/img/case-study/Off the Hook/6.png') }}" alt="get the hook">
                </div>
            </div>

        </div>

        <h2 class="sub-sec-title text-blue mt-5">Optimized Website With Targeted Content</h2>
        <p class="sec-para">By integrating targeted content featuring high-volume keywords, our website experienced increased traffic, driven by enhanced search visibility and relevance.</p>

        <div class="row">
            <div class="col-4">
                <img src="{{ asset('frontend-assets/img/case-study/Off the Hook/7.png') }}" alt="get the hook" class="w-100 h-100">
            </div>
            <div class="col-4">
                <img src="{{ asset('frontend-assets/img/case-study/Off the Hook/8.png') }}" alt="get the hook" class="w-100 h-100">
            </div>
        </div>

        <div class="row mt-5">
            <h2 class="sub-sec-title text-blue">Our Achievements
            </h2>
            <div class="col-6 col-md-4">

                <div class="strategy text-center sec-para" style="border-radius: 100%;padding: 30px;width: fit-content;margin: 0 auto;">56K</div>
                <table>
                    <tr>
                        <th>Organic Traffic</th>
                    </tr>
                    <tr>
                        <td class="sec-para">56K of our website visitors came from generic search.</td>
                    </tr>
                </table>
            </div>
            <div class="col-6 col-md-4">

                <div class="strategy text-center sec-para" style="border-radius: 100%;padding: 30px;width: fit-content;margin: 0 auto;">23.15K</div>

                <table>
                    <tr>
                        <th>Organic Clicks</th>
                    </tr>
                    <tr>
                        <td class="sec-para">23.15K organic clicks show high engagement from SERP.
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-6 col-md-4">

                <div class="strategy text-center sec-para" style="border-radius: 100%;padding: 30px;width: fit-content;margin: 0 auto;">133K</div>
                <table>
                    <tr>
                        <th>Organic Impressions</th>
                    </tr>
                    <tr>
                        <td class="sec-para">133K organic impressions highlight strong search visibility.
                        </td>
                    </tr>
                </table>
            </div>

        </div>

        <div class="row mt-5">
            <h2 class="sub-sec-title text-blue">Optimized Google My Business Profile
            </h2>
            <div class="col-6 col-md-4">

                <div class="strategy text-center sec-para" style="border-radius: 100%;padding: 30px;width: fit-content;margin: 0 auto;">223K+</div>
                <table>
                    <tr>
                        <th>Platform and device breakdown </th>
                    </tr>
                    <tr>
                        <td class="sec-para">Google My Business data shows 223 k+ interactions across devices.
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-6 col-md-4">

                <img src="{{ asset('frontend-assets/img/case-study/Off the Hook/9.jpeg') }}" alt="get the hook" class="w-100 h-100">
            </div>
            <div class="col-6 col-md-4">

                <ul>
                    <li class="sec-para">Manage and regularly update <strong>5 Google My Business profiles.</strong>
                    </li>
                    <li class="sec-para">Optimize profiles with new information to ensure growth across all profiles.
                    </li>
                    <li class="sec-para">Daily updates on GMB, including:
                    </li>
                    <li class="sec-para">Posting offer details.</li>
                    <li class="sec-para">Updating product or campaign information to increase awareness of products and offers.
                    </li>
                </ul>
            </div>

        </div>

        <h2 class="mt-4 sub-sec-title text-blue">Keywords Growth
        </h2>

        <img src="{{ asset('frontend-assets/img/case-study/Off the Hook/10.jpeg') }}" alt="get the hook">
        <p class="sec-para">From February 2024 to July 2024, Offthehookgrabandgo’s organic keyword performance has improved significantly:</p>
        <ul class="mb-md-4">
            <li class="sec-para"><b>Top 3 Positions: </b>Increase in keywords.</li>
            <li class="sec-para"><b>Top 4-10 Positions: </b>Significant growth.</li>
            <li class="sec-para"><b>Top 11-20 Positions: </b>Gradual rise.</li>
            <li class="sec-para"><b>Top 21-50 Positions: </b>Noticeable improvement.</li>
            <li class="sec-para"><b>Top 51-100 Positions: </b>Consistent growth.</li>
        </ul>
        <p class="sec-para">The graph shows a steady upward trend, reflecting successful SEO strategies and enhanced search visibility.
        </p>

        <h2 class="mt-4 sub-sec-title text-blue">Within 6 Months We Achieved Traffic Growth

        </h2>

        <img src="{{ asset('frontend-assets/img/case-study/Off the Hook/11.jpeg') }}" alt="get the hook">
        <p class="sec-para">From February 2024 to July 2024, website demonstrated significant growth and visibility:
        </p>
        <ul class="mb-md-4">
            <li class="sec-para">Our strategic updates, including optimized banners and targeted content, have led to a noticeable increase in organic traffic.</li>
        </ul>

        <h2 class="mt-4 sub-sec-title text-blue">Keywords Growth In 6 Months
        </h2>
        <table>
            <tbody>
                <tr rowspan="4">
                    <!-- <th rowspan="2">Keywords Ranking</th> -->
                    <th colspan="5" class="text-center" style="background-color: #ff900b; color: white;">Keywords Ranking</th>
                <tr>
                    <th>OTH - Canada </th>
                    <th>Jan Feb</th>
                    <th>Mar Apr</th>
                    <th>May Jun</th>
                    <th>July</th>
                </tr>
                <tr>
                    <td class="sec-para">Bare bones fish house</td>
                    <td class="sec-para">Not in 100</td>
                    <td class="sec-para">3</td>
                    <td class="sec-para">4</td>
                    <td class="sec-para">7</td>
                </tr>
                <tr>
                    <td class="sec-para">Trollers fish and chips
                    </td>
                    <td class="sec-para">Not in 100</td>
                    <td class="sec-para">4</td>
                    <td class="sec-para">8</td>
                    <td class="sec-para">13</td>
                </tr>
                <tr>
                    <td class="sec-para">off the hook nanaimo
                    </td>
                    <td class="sec-para">Not in 100</td>
                    <td class="sec-para">7</td>
                    <td class="sec-para">9</td>
                    <td class="sec-para">12</td>
                </tr>
                <tr>
                    <td class="sec-para">off the hook comox
                    </td>
                    <td class="sec-para">Not in 100</td>
                    <td class="sec-para">4</td>
                    <td class="sec-para">8</td>
                    <td class="sec-para">12</td>
                </tr>
                <tr>
                    <td class="sec-para">off the hook grab and go
                    </td>
                    <td class="sec-para">Not in 100</td>
                    <td class="sec-para">6</td>
                    <td class="sec-para">9</td>
                    <td class="sec-para">12</td>
                </tr>
            </tbody>
        </table>
        <p class="sec-para">The journey from having no keywords in the top 100 to multiple keywords in the top positions demonstrates the success of our SEO strategies and the continuous improvement in our website’s search performance.

        </p>
       
    </div>
    @include('Frontend/partial/commonCaseStudy')

    @include('Frontend/partial/portfolioCommon')
</main>
@endsection