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

        .plan {
            background-color: #106c97;
            color: white;
            padding: 10px;
        }

        .img-border {
            border: 3px solid #106c97;
            border-radius: 20px 10px;
            padding: 10px;
        }
    </style>
@endsection

@section('content')
    <main>
        <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend-assets/img/case-study/stembio.png') }}">
            <div class="container">
                <div class="breadcumb-content">

                </div>
            </div>
        </div>
        <div class="container space">

            <h1 class="sec-title text-center">Transforming Market Presence with a <span class="text-blue">90-Day Game
                    Plan</span> for Success</h1>

            <h2 class="mt-4 sub-sec-title text-blue">About the Brand:</h2>

            <ul>
                <li class="sec-para">This brand delivers effective, high-quality products with a focus on safety and
                    integrity.</li>
                <li class="sec-para">Committed to science and innovation, they research novel ingredients and use premium
                    botanicals and Ayurvedic knowledge.</li>
                <li class="sec-para">They ensure transparency by sharing all product research online, blending traditional
                    Indian herbs with modern science.</li>
            </ul>


            <h2 class="mt-4 sub-sec-title text-blue">Objectives of the Brand:</h2>

            <ul>
                <li class="sec-para">Increase in Sales</li>
                <li class="sec-para">Increase in Website Traffic</li>
                <li class="sec-para">Social Media Presence</li>
                <li class="sec-para">Onboarding on Marketplaces</li>
            </ul>


            <h2 class="mt-4 sub-sec-title text-blue">Problems faced by the Brand:</h2>

            <ul>
                <li class="sec-para">Website was not SEO optimized.</li>
                <li class="sec-para">Zero orders on marketplace</li>
                <li class="sec-para">Social media was inactive</li>
            </ul>


            <h2 class="mt-4 sub-sec-title text-blue">Our Strategy:</h2>
            <p class="sec-para">We Worked On A 90 Day Game Plan</p>

            <div class="row">
                <div class="col-lg-4 mt-2">
                    <div class="sec-para plan text-center">
                        We Analyzed The Problem
                    </div>
                </div>
                <div class="col-lg-4  mt-2">
                    <div class="sec-para plan text-center">
                        We Created The Solution
                    </div>
                </div>
                <div class="col-lg-4  mt-2">
                    <div class="sec-para plan text-center">
                        Put That Into Execution
                    </div>
                </div>
            </div>


            <h2 class="mt-4 sub-sec-title text-blue">Modifications We Made On Amazon:</h2>
            <p class="sec-para">Focused On Our Main Marketplace- Amazon Modifications We Made On Amazon</p>

            <ul>
                <li class="sec-para">High Ranked Keyword Optimization</li>
                <li class="sec-para">Enhanced Product Titles & Descriptions</li>
                <li class="sec-para">High-Quality Images With Their Specifications</li>
                <li class="sec-para">Use of Amazon FBA</li>
            </ul>

            {{-- <h2 class="mt-4 sub-sec-title text-blue">Changed Title On Amazon</h2>
        <p class="sec-para">We Worked On A 90 Day Game Plan</p>

        <ul>
            <li class="sec-para">Simplified Content</li>
            <li class="sec-para">SEO-Friendly Content</li>
            <li class="sec-para">High-Ranked Keywords</li>
        </ul> --}}


            <h2 class="mt-4 sub-sec-title text-blue">The Results We Got</h2>
            <div class="row">
                <div class="col-md-6 col-12">
                    <ul>
                        <li class="sec-para">Modifications on Amazon helped us in increasing the sales.
                            Total Sale from Sept 2023 to May 2024 was 1.5M.</li>
                        <li class="sec-para">Changes in Titles on Amazon resulted in 50% increase in orders.</li>
                        <li class="sec-para">Enhanced titles helped in better user understanding of the product
                            and Optimized titles improved ranking on Amazon.</li>
                    </ul>
                </div>
                <div class="col-md-4 col-12">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/sale_growth.png') }}" alt="stemrxbio">
                </div>
            </div>

            <div class="row align-items-center">

                <div class="col-md-4 col-12">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/title_on_amazon.png') }}" alt="stemrxbio"
                        class="img-border">
                </div>
                <div class="col-md-6 col-12 offset-lg-1">
                    <h2 class="mt-4 sub-sec-title text-blue">Changed Title On Amazon</h2>
                    <ul>
                        <li class="sec-para">Simplified Content</li>
                        <li class="sec-para">SEO-Friendly Content</li>
                        <li class="sec-para">High-Ranked Keywords</li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <h2 class="mt-4 sub-sec-title text-blue">We Created A Store Front on Amazon</h2>
                <ul>
                    <li class="sec-para">Creation of Amazon Store Front increased the online presence of business, customer
                        reach and sales growth.</li>
                    <li class="sec-para">Customers able to view all products in a single page of view</li>
                </ul>
                <div class="col-12 text-center">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/store_front_amaz.webp') }}" alt="stemrxbio"
                        class="img-border">
                </div>
            </div>
            <div class="row">
                <h2 class="mt-4 sub-sec-title text-blue text-center">We Created A+ Listings on Amazon
                </h2>
                <div class="col-12 text-center">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/a_plus_amaz.webp') }}" alt="stemrxbio"
                        class="img-border">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-12">
                    <h2 class="mt-4 sub-sec-title text-blue">Listings Were Eligible For Fulfilment By Amazon</h2>
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/listing.png') }}" alt="stemrxbio"
                        class="img-border">
                </div>
                <div class="col-md-6 col-12">
                    <h2 class="mt-4 sub-sec-title text-blue">Amazon Choice Tag Achieved</h2>
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/choice_tag.png') }}" alt="stemrxbio"
                        class="img-border">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-12">
                    <h2 class="mt-4 sub-sec-title text-blue">Products ranked in TOP 100 as Best Selling Products</h2>
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/best_selling.png') }}" alt="stemrxbio"
                        class="img-border">
                </div>
                <div class="col-md-6 col-12">
                    <h2 class="mt-4 sub-sec-title text-blue">We Recieved Excellent Feedbacks From Customers On All 28
                        Products </h2>
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/feedback.webp') }}" alt="stemrxbio"
                        class="img-border">
                </div>
            </div>

            <h2 class="mt-4 sub-sec-title text-blue">And Then We Expanded</h2>
            <p class="sec-para">Built Marketplace OnResulted In Overall Order Increase By 30%</p>
            <div class="row text-center">
                <div class="col-md-4 col-12">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/flipkart.jpg') }}" alt="stemrxbio"
                        class="img-border">
                </div>
                <div class="col-md-4 col-12">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/tatamg.png') }}" alt="stemrxbio"
                        class="img-border">
                </div>
                <div class="col-md-4 col-12">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/herbkart.jpg') }}" alt="stemrxbio"
                        class="img-border">
                </div>
            </div>

            <h2 class="sec-title text-center pt-5">What We Did For <span class="text-blue">Our
                    Website?</h2>
            <div class="row g-3">
                <div class="col-12">
                    <h2 class="mt-4 sub-sec-title text-blue">
                        We Focused Working On Content
                    </h2>
                    <p class="sec-para">We added 30 key-words on website
                    </p>
                </div>
                <div class="col-md-6 col-12">
                    <h2 class="mt-4 sub-sec-title text-blue">Before</h2>
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/review_before.png') }}" alt="stemrxbio"
                        class="img-border">
                </div>
                <div class="col-md-6 col-12">
                    <h2 class="mt-4 sub-sec-title text-blue">After</h2>
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/review_After.png') }}" alt="stemrxbio"
                        class="img-border">
                </div>

                <div class="col-lg-5 col-md-6 col-12">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/product_desc.png') }}" alt="stemrxbio"
                        class="img-border">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/faq.png') }}" alt="stemrxbio"
                        class="img-border">
                    <div class="col-12">
                        <div class="pt-3">
                            <ul>
                                <li class="sec-para">We Updated Product Descriptions With
                                    High-Search-Volume Keywords.</li>
                                <li class="sec-para">We used high-volume keywords in titles to
                                    boost SERP value and enhance search
                                    visibility.</li>
                                <li class="sec-para">Updated FAQs to help users resolve their
                                    queries more effectively.</li>
                                <li class="sec-para">We optimized the footer with clear links to
                                    key pages like "Contact Us," "Privacy Policy,"
                                    and "Terms of Service," along with internal
                                    links to important pages and blog posts for
                                    easy navigation.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center pt-3">
                <div class="col-md-6 col-12">
                    <h2 class="mt-4 sub-sec-title text-blue">Website Traffic Growth</h2>
                    <ul>
                        <li class="sec-para">From November 2023 to May 2024, we gained 129% in organic traffic.</li>
                        <li class="sec-para">From No sales to Organically getting sales of 10,000 in every month.</li>
                        <li class="sec-para">Increase in organic clicks and impressions.</li>
                        <li class="sec-para">Created Brand awareness in SERP features.</li>
                    </ul>
                </div>
                <div class="col-md-6 col-12">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/website_traffic.jpg') }}" alt="stemrxbio"
                        class="img-border">
                </div>
            </div>

            <div class="row">
                <h2 class="mt-4 sub-sec-title text-blue">Updated Blogs</h2>
                <p class="sec-para">We added blogs to our previously blog-free website, enhancing
                    freshness and relevance. This boosted search engine rankings
                    and attracted visitors.</p>
                <p class="sec-para">Each new post targets relevant keywords, significantly
                    increasing organic traffic and drawing potential customers.</p>
                <div class="col-12 text-center">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/blog.jpg') }}" alt="stemrxbio"
                        class="img-border">
                </div>
            </div>




            <div class="row align-items-center pt-3">
                <div class="col-md-6 col-12">
                    <h2 class="mt-4 sub-sec-title text-blue">Added Google Reviews</h2>
                    <ul>
                        <li class="sec-para">Added Google reviews to the
                            website to build user trust this
                            enhanced the website's domain
                            authority.</li>
                        <li class="sec-para">Improved site structure to facilitate
                            better crawling by search engines.</li>
                    </ul>
                </div>
                <div class="col-md-4 col-12">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/google_review.png') }}" alt="stemrxbio"
                        class="img-border">
                </div>
            </div>



            <h2 class="mt-4 sub-sec-title text-blue">Listings Were Eligible For Fulfilment By Amazon</h2>
            <h2 class="mt-4 sub-sec-title text-blue">Social Media Analysis</h2>

            <p class="sec-para">We added Influencer videos on a website to leverage the influencer's credibility & reach to
                build trust and engage with the audience.</p>


            <div class="row">
                <div class="col-md-6 col-12">
                    <h2 class="mt-4 sub-sec-title text-blue">Before</h2>
                    <p class="sec-para">
                        Before the brand came to us, their feed was lacking vibrant colors and focus on the ingredients of
                        the product.
                    </p>
                    <p class="sec-para">
                        Their posts were more of inforgraohic we transformed it to product centric in visually appealing way
                    </p>
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/before_sm.png') }}" alt="stemrxbio">
                </div>
                <div class="col-md-6 col-12">
                    <h2 class="mt-4 sub-sec-title text-blue">After</h2>
                    <p class="sec-para">
                        We added more vibrant colors and focused on the ingredients of the products.
                    </p>
                    <p class="sec-para">
                        We made it more quirky and visually appealing.
                    </p>
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/after_sm.png') }}" alt="stemrxbio">
                </div>
            </div>


            <h2 class="mt-4 sub-sec-title text-blue">9Days9Benefits- Campaign For Navratri</h2>
            <div class="row">
                <div class="col-md-3 col-6 mt-3">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/vit_c.png') }}" alt="stemrxbio">
                </div>
                <div class="col-md-3 col-6 mt-3">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/pqq.png') }}" alt="stemrxbio">
                </div>
                <div class="col-md-3 col-6 mt-3">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/Phospha.png') }}" alt="stemrxbio">
                </div>
                <div class="col-md-3 col-6 mt-3">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/coenzy (1).png') }}" alt="stemrxbio">
                </div>
                <div class="col-md-3 col-6 mt-3">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/heart_armour (1).png') }}" alt="stemrxbio">
                </div>
                <div class="col-md-3 col-6 mt-3">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/berberine (1).png') }}" alt="stemrxbio">
                </div>
                <div class="col-md-3 col-6 mt-3">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/sabuck.png') }}" alt="stemrxbio">
                </div>
                <div class="col-md-3 col-6 mt-3">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/joint_armour.png') }}" alt="stemrxbio">
                </div>
            </div>
            <h2 class="mt-4 sub-sec-title text-blue">Created A Unique Organ-Led Post To Promote The Efficacy Of The
                Product.</h2>
            <div class="row">
                <div class="col-md-3 col-6 mt-3">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/summer.png') }}" alt="stemrxbio">
                </div>
                <div class="col-md-3 col-6 mt-3">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/upset_stomach.png') }}" alt="stemrxbio">
                </div>
                <div class="col-md-3 col-6 mt-3">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/fisten.png') }}" alt="stemrxbio">
                </div>
                <div class="col-md-3 col-6 mt-3">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/mitochondrial.png') }}" alt="stemrxbio">
                </div>
            </div>

            <h2 class="mt-4 sub-sec-title text-blue">We Used The Ingredient Of The Product To Showcase Our Benefits</h2>
            <div class="row">
                <div class="col-md-6 col-6 mt-3">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/vita_c.png') }}" alt="stemrxbio">
                </div>
                <div class="col-md-6 col-6 mt-3">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/avocado.png') }}" alt="stemrxbio">
                </div>
            </div>

            <h2 class="mt-4 sub-sec-title text-blue">Topical Days Posts</h2>
            <div class="row">
                <div class="col-md-6 col-6 mt-3">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/mental.png') }}" alt="stemrxbio">
                </div>
                <div class="col-md-6 col-6 mt-3">
                    <img src="{{ asset('frontend-assets/img/case-study/stemrx/republic.png') }}" alt="stemrxbio">
                </div>
            </div>


            <h2 class="mt-4 sub-sec-title text-blue"> We Also Worked On Human-Based Reels As The Page Was Missing Any
                Human-Based Content.</h2>
            <p class="sec-para">Which resulted in a growth in views from two digits to six digits, boosting the sales of
                the website.</p>
            <img src="{{ asset('frontend-assets/img/case-study/stemrx/stem1.png') }}" alt="stemrxbio">
        </div>
        <div class="header-button mb-5 d-flex align-items-center justify-content-center">
            <a href="{{ route('social_media', ['client' => 'stemrx-bioscience']) }}" class="th-btn th-icon">View
                Portfolio</a>
        </div>
        @include('Frontend/partial/commonCaseStudy')

        @include('Frontend/partial/portfolioCommon')
    </main>
@endsection
