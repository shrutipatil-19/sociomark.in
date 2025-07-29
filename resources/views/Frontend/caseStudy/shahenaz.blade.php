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

    td {
        border: none;
    }

    .strategy {
        background-color: #ff900b;
        color: white;
    }

    .orange {
        color: #ff900b;
    }
    .breadcumb-wrapper {
        margin-top: 4.3rem;
        background-color: #e2e2e2;
        background-size: contain;
    }
    #portfolioCommon{
        background-color: white !important;
    }
</style>

@endsection

@section('content')
<main>
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend-assets/img/case-study/shahenaz.png') }}">
        <div class="container">
            <div class="breadcumb-content">
               
            </div>
        </div>
    </div>
    <div class="container space">

        <h1 class="sec-title text-center">Shahenaz- Clothing & Home Decor <span class="text-blue">Brand</span></h1>
        <p class="sec-para">Shahenaz is a premium clothing and home decor brand that celebrates India's rich cultural heritage by blending Mughal elegance with modern designs. Specializing in hand block prints, Shahenaz has a legacy of more than 30 years. The brand believes in sustainability and is proudly made in India.</p>
        <h2 class="my-3 sec-title text-blue text-center"><span class="orange">SOCIAL</span> MEDIA</h2>
        <img src="{{ asset('frontend-assets/img/case-study/shahenaz/1 (2).jpeg') }}" alt="shahenaz">
        <h2 class="mt-4 sub-sec-title text-blue">The Problem:</h2>
        <h3 class="fs-5 text-blue">Limited Brand Awareness:</h3>
        <ul>
            <li class="sec-para">Despite being a 30-year-old brand, Shahenaz struggled to achieve significant sales on online platforms. Their primary focus was to increase sales and improve online performance.</li>
            <li class="sec-para">Shahenaz's social media account lacked trending videos and relied solely on professionally shot content. This limited engagement and did not fully capitalize on the dynamic nature of social media trends.</li>
            <li class="sec-para">Despite Shahenaz's strong brand presence, the lack of influencer collaborations on their social media pages limits potential enhancement of brand visibility, credibility, and engagement.</li>
        </ul>
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="imgs">
                    <img src="{{ asset('frontend-assets/img/case-study/shahenaz/1 (7).jpeg') }}" alt="shahenaz">
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="sub-sec-title">Website Banner</h2>
                <p class="sec-para">The website banner of Shahenaz appears simple and plain, lacking the visual appeal and richness that reflect the brand's premium and culturally vibrant ethos.</p>

            </div>
        </div>

        <h2 class="mt-4 sub-sec-title text-blue">Before We Entered:</h2>


        <div class="row">
            <div class="col-md-4 col-12">
                <h3 class="text-blue fs-5">Social Media Feed</h3>
                <p class="sec-para">Despite being a 30-year-old brand, Shahenaz struggled to achieve significant sales on online platforms. Their primary focus was to increase sales and improve online performance.
                </p>
                <p class="sec-para">Shahenaz's social media account lacked trending videos and relied solely on professionally shot content. This limited engagement and did not fully capitalize on the dynamic nature of social media trends.</p>
            </div>
            <div class="col-md-4 col-12">
                <h3 class="text-blue fs-5">Before</h3>
                <img src="{{ asset('frontend-assets/img/case-study/shahenaz/sheanaz_2.jpg') }}" alt="shahenaz">
            </div>
            <div class="col-md-4 col-12">
                <h3 class="text-blue fs-5">After</h3>
                <img src="{{ asset('frontend-assets/img/case-study/shahenaz/sheanaz_1.jpg') }}" alt="shahenaz">
            </div>
        </div>
        <h2 class="mt-4 sub-sec-title text-blue">Our Solution:</h2>
        <h3 class="fs-5 text-blue">90-Day Game Plan</h3>
        <div class="row">
            <div class="col-md-4 col-6">
                <table>
                    <tr>
                        <th>Our Mission</th>
                    </tr>
                    <tr>
                        <td class="sec-para">To increase sales and enhance brand awareness of Shahenaz by showcasing the premium quality and cultural richness of our ethnic wear.</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4 col-6">
                <table>
                    <tr>
                        <th>Our Vision</th>
                    </tr>
                    <tr>
                        <td class="sec-para">To become a leading premium ethnic wear brand that celebrates India's heritage through contemporary designs, known for its elegance and superior craftsmanship.</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4 col-6">
                <table>
                    <tr>
                        <th>Our Goals</th>
                    </tr>
                    <tr>
                        <td class="sec-para">To achieve a significant growth in sales and establish a strong brand presence in the market, resonating with customers who appreciate high-quality ethnic fashion.</td>
                    </tr>
                </table>
            </div>
        </div>


        <h2 class="mt-4 sub-sec-title text-blue">From Basic to Chic </h2>


        <div class="row">
            <div class="col-md-4 col-12">
                <h3 class="text-blue fs-5">Enhanced Feed Layout</h3>
                <p class="sec-para">Previously, the feed was simple and cluttered. We introduced a grid layout, making the page look cleaner and more aesthetically appealing.
                </p>
            </div>
            <div class="col-md-4 col-12">
                <h3 class="text-blue fs-5">Before</h3>
                <img src="{{ asset('frontend-assets/img/case-study/shahenaz/sheanaz_3.png') }}" alt="shahenaz">
            </div>
            <div class="col-md-4 col-12">
                <h3 class="text-blue fs-5">After</h3>
                <img src="{{ asset('frontend-assets/img/case-study/shahenaz/1 (11).jpeg') }}" alt="shahenaz">
            </div>
        </div>

        <h2 class="mt-4 sub-sec-title text-blue">Our Campaign</h2>
        <h3 class="text-blue fs-5">Shaan Hai Tumse</h3>
        <p class="sec-para">Shahenaz's Women's Day campaign celebrated the diversity and strength of women, featuring inspirational figures such as plus-size dancers and acid attack survivors. By highlighting these stories of resilience and empowerment, the campaign aimed to redefine beauty standards and promote inclusivity in the fashion industry.</p>

        <img src="{{ asset('frontend-assets/img/case-study/shahenaz/1 (10).jpeg') }}" alt="shahenaz">


        <div class="row mt-5">
            <div class="col-6 col-md-4">

                <div class="strategy text-center sec-para" style="border-radius: 100%;padding: 30px;width: fit-content;margin: 0 auto;">24.31%</div>
                <h3 class="text-center text-blue sub-sec-title mt-3">Impressions Increased By</h3>
                <table>
                    <tr>
                        <th>Enhanced Brand Image</th>
                    </tr>
                    <tr>
                        <td class="sec-para">The Women's Day campaign showcased Shahenaz as a brand that values diversity and empowerment, strengthening its reputation as an inclusive and socially conscious label.</td>
                    </tr>
                </table>
            </div>
            <div class="col-6 col-md-4">

                <div class="strategy text-center sec-para" style="border-radius: 100%;padding: 30px;width: fit-content;margin: 0 auto;">71.72%</div>
                <p class="text-center text-blue sub-sec-title mt-3">Impressions Increased By</p>
                <table>
                    <tr>
                        <th>Video Views Increased By</th>
                    </tr>
                    <tr>
                        <td class="sec-para">By featuring inspiring stories of plus-size dancers and acid attack survivors, the campaign resonated with a wide audience, leading to increased social media engagement and positive customer feedback.</td>
                    </tr>
                </table>
            </div>
            <div class="col-6 col-md-4">
                <div class="percentage">
                    <div class="strategy text-center" style="border-radius: 100%;padding: 30px;width: fit-content;margin: 0 auto;">120k+</div>
                    <h3 class="text-center fs-6 text-blue mt-3">Impressions</h3>
                </div>
                <div class="percentage">
                    <div class="strategy text-center" style="border-radius: 100%;padding: 30px;width: fit-content;margin: 0 auto;">63k+</div>
                    <h3 class="text-center fs-6 text-blue mt-3">Reach</h3>
                </div>
                <div class="percentage">
                    <div class="strategy text-center" style="border-radius: 100%;padding: 30px;width: fit-content;margin: 0 auto;">68k+</div>
                    <h3 class="text-center fs-6 text-blue mt-3">Video Views</h3>
                </div>
            </div>
        </div>




        <h2 class="mt-4 sub-sec-title text-blue">Mother's Day Campaign</h2>
        <h3 class="text-blue fs-5">Mulmul Sa Rishta</h3>
        <p class="sec-para">For Mother's Day, we created a series of vibrant, concept-based reels celebrating mother-daughter friendships, highlighting childhood memories and unconditional love. We utilized in-house talent for the shoot, with our team handling everything from production to execution.</p>

        <img src="{{ asset('frontend-assets/img/case-study/shahenaz/1 (12).jpeg') }}" alt="shahenaz">


        <div class="row mt-5">
            <div class="col-6 col-md-4">

                <div class="strategy text-center sec-para" style="border-radius: 100%;padding: 30px;width: fit-content;margin: 0 auto;">30.25%</div>
                <h3 class="text-center text-blue sub-sec-title mt-3">Impressions Increased By</h3>
                <table>
                    <tr>
                        <th>Booted Engagement</th>
                    </tr>
                    <tr>
                        <td class="sec-para">The Mother's Day campaign's heartfelt and relatable content led to high engagement levels, with the reels generating a significant number of likes, shares, and comments from our audience.</td>
                    </tr>
                </table>
            </div>
            <div class="col-6 col-md-4">

                <div class="strategy text-center sec-para" style="border-radius: 100%;padding: 30px;width: fit-content;margin: 0 auto;">31.56%</div>
                <p class="text-center text-blue sub-sec-title mt-3">Video Views Increased By</p>
                <table>
                    <tr>
                        <th>Strenghened Community Connection</th>
                    </tr>
                    <tr>
                        <td class="sec-para">By celebrating mother-daughter bonds, the campaign deepened our emotional connection with the audience, resulting in many positive comments and strengthening our brand community.</td>
                    </tr>
                </table>
            </div>
            <div class="col-6 col-md-4">
                <div class="percentage">
                    <div class="strategy text-center" style="border-radius: 100%;padding: 30px;width: fit-content;margin: 0 auto;">50k+</div>
                    <h3 class="text-center fs-6 text-blue mt-3">Impressions</h3>
                </div>
                <div class="percentage">
                    <div class="strategy text-center" style="border-radius: 100%;padding: 30px;width: fit-content;margin: 0 auto;">24k+</div>
                    <h3 class="text-center fs-6 text-blue mt-3">Reach</h3>
                </div>
                <div class="percentage">
                    <div class="strategy text-center" style="border-radius: 100%;padding: 30px;width: fit-content;margin: 0 auto;">20k+</div>
                    <h3 class="text-center fs-6 text-blue mt-3">Video Views</h3>
                </div>
            </div>
        </div>

        <h2 class="mt-4 sub-sec-title text-blue">Visually Pleasing Grids</h2>

        <div class="row">
            <div class="col-md-4 col-6">
                <img src="{{ asset('frontend-assets/img/case-study/shahenaz/1 (14).jpeg') }}" alt="shahenaz">
            </div>
            <div class="col-md-4 col-6">
                <img src="{{ asset('frontend-assets/img/case-study/shahenaz/1 (17).jpeg') }}" alt="shahenaz">
            </div>
            <div class="col-md-4 col-6">
                <img src="{{ asset('frontend-assets/img/case-study/shahenaz/1 (15).jpeg') }}" alt="shahenaz">
            </div>
        </div>



        <h2 class="mt-4 sub-sec-title text-blue">In-House Video Initiatives
        </h2>
        <p class="sec-para">We transitioned from professional videos to raw, relatable, and trending in-house videos, aiming to authentically showcase their products and brand story while enhancing engagement and demonstrating our commitment to quality and creativity.</p>

        <div class="row">
            <div class="col-md-4 col-6">

                <a href="https://www.instagram.com/p/C628kXAKbXD" target="_blank">
                    <img src="{{ asset('frontend-assets/img/case-study/shahenaz/1 (16).jpeg') }}" alt="shahenaz"></a>
            </div>
            <div class="col-md-4 col-6">
                <a href="https://www.instagram.com/p/C7O1uezIh0R" target="_blank">
                    <img src="{{ asset('frontend-assets/img/case-study/shahenaz/1 (19).jpeg') }}" alt="shahenaz"></a>

            </div>
            <div class="col-md-4 col-6">
                <a href="https://www.instagram.com/p/C6Wa6IvKft4" target="_blank">
                    <img src="{{ asset('frontend-assets/img/case-study/shahenaz/1 (18).jpeg') }}" alt="shahenaz"></a>

            </div>
        </div>

        <h2 class="mt-4 sec-title text-blue text-center mt-md-5"><span class="orange">SEO</span> OPTIMIZATION</h2>
        <h2 class="mt-4 sub-sec-title text-blue">Key Problem:</h2>
        <div class="row">

            <div class="col-12 col-md-6">
                <p class="sec-para">
                    Despite being a 30-year-old brand, Shahenaz struggled to achieve significant sales on online platforms. Their primary focus was to increase sales and improve online performance.
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
            <div class="col-12 col-md-6" style="height: 400px;">
                <img src="{{ asset('frontend-assets/img/case-study/shahenaz/2 (1).jpg') }}" alt="shahenaz" class="w-100 h-100">
            </div>
        </div>


        <h2 class="mt-4 sub-sec-title text-blue">Sales Performance</h2>
        <div class="row">

            <div class="col-12 col-md-6">
                <ul>
                    <li class="sec-para">Step 1: We began by focusing on 16 specific keywords for the website, resulting in a sales increase of 5-10%.</li>
                    <li class="sec-para">Step 2: In the next stage, we expanded the keyword list by adding 5 more, leading to a growth rate boost of 20-30%.</li>
                    <li class="sec-para">Step 3: Continuing our strategy, we introduced 6 additional keywords, which propelled sales to increase by 50%.</li>
                    <li class="sec-para">Step 4: Currently, we are optimizing for a total of 30 keywords each month, resulting in a remarkable 75% increase in sales.</li>

                </ul>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ asset('frontend-assets/img/case-study/shahenaz/2 (1).png') }}" alt="shahenaz">
            </div>
        </div>

        <h3 class="fs-5 text-blue">Our Achievements</h3>

        <div class="row mt-5">
            <div class="col-6 col-md-4">

                <div class="strategy text-center sec-para mb-md-4" style="border-radius: 100%;padding: 30px;width: fit-content;margin: 0 auto;">68%</div>

                <table>
                    <tr>
                        <th>Organic Traffic</th>
                    </tr>
                    <tr>
                        <td class="sec-para">68% of our website visitors came from generic search.</td>
                    </tr>
                </table>
            </div>
            <div class="col-6 col-md-4">

                <div class="strategy text-center sec-para mb-md-4" style="border-radius: 100%;padding: 30px;width: fit-content;margin: 0 auto;">20.4%</div>

                <table>
                    <tr>
                        <th>Organic Click </th>
                    </tr>
                    <tr>
                        <td class="sec-para">20.1k organic clicks show high engagement from SERP.</td>
                    </tr>
                </table>
            </div>
            <div class="col-6 col-md-4">

                <div class="strategy text-center sec-para mb-md-4" style="border-radius: 100%;padding: 30px;width: fit-content;margin: 0 auto;">1.55M</div>

                <table>
                    <tr>
                        <th>Orgnic Impression</th>
                    </tr>
                    <tr>
                        <td class="sec-para">1.54M organic impressions highlight strong search visibility.</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">

            <div class="col-12 col-md-6">

                <ul>
                    <li class="sec-para">Selected 30 important keywords to improve Shahenaz's online search visibility.</li>
                    <li class="sec-para">Ensured higher ranking on Google Maps for 13 different locations.
                    </li>
                    <li class="sec-para">Conducted product listings online to expand reach and accessibility.</li>
                    <li class="sec-para">Answered questions on platforms like Pinterest and Quora.</li>
                    <li class="sec-para">Wrote new blog posts to increase awareness.</li>
                    <li class="sec-para">Implemented Google tools to track website visitors and their sources for continuous improvement.</li>

                </ul>
            </div>
            <div class="col-12 col-md-6" style="height: 400px;">
                <img src="{{ asset('frontend-assets/img/case-study/shahenaz/2 (2).png') }}" alt="shahenaz" class="w-100 h-100">
            </div>
        </div>


        <h2 class="mt-4 sub-sec-title text-blue">Keywords Growth
        </h2>
        <p class="sec-para">From October 2022 to July 2024, Shahenaz's organic keyword performance has improved significantly:</p>
        <img src="{{ asset('frontend-assets/img/case-study/shahenaz/2 (3).png') }}" alt="shahenaz">

        <div class="col-md-12 my-md-4">
            <ul>
                <li class="sec-para"><b>Top 3 Positions: </b>Increase in keywords.</li>
                <li class="sec-para"><b>Top 4-10 Positions: </b>Significant growth.</li>
                <li class="sec-para"><b>Top 11-20 Positions: </b>Gradual rise. </li>
                <li class="sec-para"><b>Top 21-50 Positions: </b>Noticeable improvement.</li>
                <li class="sec-para"><b>Top 51-100 Positions: </b>Consistent growth.</li>
                <li class="sec-para"><b>SERP Features: </b>Continuous presence.</li>
            </ul>
            <p>The graph shows a steady upward trend, reflecting successful SEO strategies and enhanced search visibility.</p>
        </div>


        <h2 class="mt-4 sub-sec-title text-blue">Traffic Growth</h2>
        <p class="sec-para">From March 2023 to June 2024, Shahenaz's website demonstrated significant growth and visibility:</p>
        <img src="{{ asset('frontend-assets/img/case-study/shahenaz/2 (4).png') }}" alt="shahenaz">

        <ul class="mb-md-4">
            <li class="sec-para"><b>Total Clicks: </b>20.4K clicks, showing strong user engagement.</li>
            <li class="sec-para"><b>Total Impressions: </b>1.55M impressions, indicating high visibility in search results.</li>
        </ul>
        <p class="sec-para">The performance graph shows a steady increase in both clicks and impressions over the year, highlighting successful SEO efforts and growing interest in Shahenaz's offerings.</p>

        <h2 class="mt-4 sec-title text-blue text-center mt-md-5"><span class="orange"> OUR CREATIVE</span> WEBSITE BANNERS</h2>
        <h2 class="mt-4 sub-sec-title text-blue">Website Banners:</h2>




        <p class="sec-para">
            We created website banners that matched the ongoing social media grid, ensuring a consistent and visually appealing brand presence across all platforms.
        </p>
        <div class="row">
            <div class="col-md-4 col-6">
                <a href="https://www.instagram.com/p/C628kXAKbXD" target="_blank"><img src="{{ asset('frontend-assets/img/case-study/shahenaz/3 (1).png') }}" alt="shahenaz"></a>

            </div>
            <div class="col-md-4 col-6">
                <a href="https://www.instagram.com/p/C7O1uezIh0R" target="_blank"><img src="{{ asset('frontend-assets/img/case-study/shahenaz/3 (2).png') }}" alt="shahenaz"></a>
            </div>
            <div class="col-md-4 col-6">
                <a href="https://www.instagram.com/p/C6Wa6IvKft4" target="_blank"><img src="{{ asset('frontend-assets/img/case-study/shahenaz/3 (3).png') }}" alt="shahenaz"></a>

            </div>
        </div>
    </div>
    @include('Frontend/partial/commonCaseStudy')
    @include('Frontend/partial/portfolioCommon')
</main>
@endsection