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
    #portfolioCommon{
        background-color: white !important;
    }
</style>

@endsection

@section('content')
<main>
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend-assets/img/case-study/theprofessional.png') }}">
        <div class="container">
            <div class="breadcumb-content">

            </div>
        </div>
    </div>
    <div class="container space">

        <h1 class="sec-title text-center">Strategy planning & implementation for india's largest <span class="text-blue">Courier company</span> </h1>
        <h2 class="mt-4 sub-sec-title text-blue">Brief:</h2>
        <p class="sec-para"><b>The Professional Couriers</b>, is amongst India's Largest Courier companies, which has been established since 1987. They aimed to focalise on rendering the customers with digital customer services i.e.- ORM and with quirky, service-based, metaphoric content across all digital platforms.</p>
        <h2 class="mt-4 sub-sec-title text-blue">Obstacles:</h2>
        <p class="sec-para">Because of the widespread network across the globe, there were many pages on the social media platforms which made the end customer confused, as to which one should they approach. Along with this, customers had a fallacy about the services. They were under the impression that TPC is a post office. Through the digital platform, we characterized the company services &amp; it helped build a network for franchisees to connect and make new connections.</p>

        <h2 class="mt-4 sub-sec-title text-blue">Objective:</h2>
        <p class="sec-para">We aimed at creating content which is easy to remember and which speaks about the brand &amp; its attributes. Along with brand awareness, we concentrated on the queries from the end-users and updated them about their consignment inquiries &amp; other significant matter about the brand.</p>

        <h2 class="mt-4 sub-sec-title text-blue">Our Services Offered:</h2>
        <p class="sec-para">We executed social media marketing, ORM for building customer loyalty and Facebook, YouTube ads. They were run especially during the festive season to raise the brand awareness.</p>
        <h2 class="mt-4 sub-sec-title text-blue">Platform Offered:</h2>
        <ul>
            <li class="sec-para">Facebook</li>
            <li class="sec-para">Twitter</li>
            <li class="sec-para">LinkedIn</li>
            <li class="sec-para">Instagram</li>
        </ul>
        <h2 class="mt-4 sub-sec-title text-blue">Execution:</h2>
        <p class="sec-para">To portray the brand’s image and increase awareness about their services, we developed a social media strategy focused on promoting the services provided and catering to the customers to provide a seamless experience, helping the brand become a market leader in the courier industry. The social media strategy included different types of content pegs, such as:</p>
        <ul>
            <li class="sec-para">Topical posts</li>
            <li class="sec-para">Metaphoric posts</li>
            <li class="sec-para">Celebratory days posts</li>
            <li class="sec-para">Service-centric posts</li>
        </ul>
        <p class="sec-para">We also ensured that the brand was present on all platforms such as Facebook, Instagram, Twitter &amp; LinkedIn &amp; also catered to B2B customers. Below are the categories that we explored while creating content for The Professional Couriers-</p>

        <div class="clearfix"></div>
        <h2 class="mt-4 sub-sec-title text-blue">1. Topical Posts:</h2>
        <p class="sec-para">Topical posts are posts that are trending and make use of moment marketing to promote the brand.</p>
        <div class="row justify-content-center">
            <div class="col-md-3 col-12">
               <img src="{{ asset('frontend-assets/img/case-study/tpc/tropical1.jpg') }}" alt="the professional couriers">
            </div>
            <div class="col-md-3 col-12">
                <img src="{{ asset('frontend-assets/img/case-study/tpc/tropical2.jpg') }}" alt="the professional couriers">
            </div>
        </div>
        <div class="clearfix"></div>

        <h2 class="mt-4 sub-sec-title text-blue">2. Metaphoric Posts:</h2>
        <p class="sec-para">Posts that used symbolism so the audience could relate the service to speedy and timely delivery.</p>

        <div class="row justify-content-center">
            <div class="col-md-3 col-12">
                <img src="{{ asset('frontend-assets/img/case-study/tpc/metaphoic1.jpg') }}" alt="the professional couriers">
            </div>
            <div class="col-md-3 col-12">
               <img src="{{ asset('frontend-assets/img/case-study/tpc/metaphoric2.jpg') }}" alt="the professional couriers">
            </div>
        </div>
        <div class="clearfix"></div>

        <h2 class="mt-4 sub-sec-title text-blue">3. Raksha Bandhan Campaign:</h2>
        <!-- <p class="sec-para">Celebratory posts are posts that revolve around holidays and festival wishing.</p> -->
        <div class="row justify-content-center">
            <div class="col-md-4 col-12">
                <img src="{{ asset('frontend-assets/img/case-study/tpc/rakshabandhan1.jpg') }}" alt="the professional couriers">
            </div>
            <div class="col-md-4 col-12">
               <img src="{{ asset('frontend-assets/img/case-study/tpc/rakshabandhan2.jpg') }}" alt="the professional couriers">
            </div>
             <div class="col-md-4 col-12">
               <img src="{{ asset('frontend-assets/img/case-study/tpc/rakshabandhan3.jpg') }}" alt="the professional couriers">
            </div>
        </div>
         <div class="row justify-content-center">
            <div class="col-md-4 col-12">
                <img src="{{ asset('frontend-assets/img/case-study/tpc/rakshabandhan4.jpg') }}" alt="the professional couriers">
            </div>
            <div class="col-md-4 col-12">
               <img src="{{ asset('frontend-assets/img/case-study/tpc/rakshabandhan5.jpg') }}" alt="the professional couriers">
            </div>
             <div class="col-md-4 col-12">
               <img src="{{ asset('frontend-assets/img/case-study/tpc/rakshabandhan6.jpg') }}" alt="the professional couriers">
            </div>
        </div>
        
        <h2 class="mt-4 sub-sec-title text-blue">4. Christmus Campaign:</h2>
        <!-- <p class="sec-para">Promotion of their services through social media creatives.</p> -->
        <div class="row justify-content-center">
            <div class="col-md-4 col-12">
                <img src="{{ asset('frontend-assets/img/case-study/tpc/christmus1.jpg') }}" alt="the professional couriers">
            </div>
            <div class="col-md-4 col-12">
                <img src="{{ asset('frontend-assets/img/case-study/tpc/christmus2.jpg') }}" alt="the professional couriers">
            </div>
            <div class="col-md-4 col-12">
                <img src="{{ asset('frontend-assets/img/case-study/tpc/christmus3.jpg') }}" alt="the professional couriers">
            </div>
        </div>
        <h2 class="mt-4 sub-sec-title text-blue">Valentines Day Campaign:</h2>
        <div class="row justify-content-center">
            <div class="col-md-4 col-12">
                <img src="{{ asset('frontend-assets/img/case-study/tpc/Valentines1.jpg') }}" alt="the professional couriers">
            </div>
            <div class="col-md-4 col-12">
               <img src="{{ asset('frontend-assets/img/case-study/tpc/Valentines2.jpg') }}" alt="the professional couriers">
            </div>
             <div class="col-md-4 col-12">
               <img src="{{ asset('frontend-assets/img/case-study/tpc/Valentines3.jpg') }}" alt="the professional couriers">
            </div>
        </div>
         <div class="row justify-content-center">
            <div class="col-md-4 col-12">
                <img src="{{ asset('frontend-assets/img/case-study/tpc/Valentines4.jpg') }}" alt="the professional couriers">
            </div>
            <div class="col-md-4 col-12">
               <img src="{{ asset('frontend-assets/img/case-study/tpc/Valentines5.jpg') }}" alt="the professional couriers">
            </div>
             <div class="col-md-4 col-12">
               <img src="{{ asset('frontend-assets/img/case-study/tpc/Valentines6.jpg') }}" alt="the professional couriers">
            </div>
        </div>
        <h2 class="mt-4 sub-sec-title text-blue">Mothers Day Campaign:</h2>
        <div class="row justify-content-center">
            <div class="col-md-4 col-12">
                <img src="{{ asset('frontend-assets/img/case-study/tpc/Mothers1.jpg') }}" alt="the professional couriers">
            </div>
            <div class="col-md-4 col-12">
               <img src="{{ asset('frontend-assets/img/case-study/tpc/Mothers2.jpg') }}" alt="the professional couriers">
            </div>
             <div class="col-md-4 col-12">
               <img src="{{ asset('frontend-assets/img/case-study/tpc/Mothers3.jpg') }}" alt="the professional couriers">
            </div>
        </div>
         <div class="row justify-content-center">
            <div class="col-md-4 col-12">
                <img src="{{ asset('frontend-assets/img/case-study/tpc/Mothers4.jpg') }}" alt="the professional couriers">
            </div>
            <div class="col-md-4 col-12">
               <img src="{{ asset('frontend-assets/img/case-study/tpc/Mothers5.jpg') }}" alt="the professional couriers">
            </div>
             <div class="col-md-4 col-12">
               <img src="{{ asset('frontend-assets/img/case-study/tpc/Mothers6.jpg') }}" alt="the professional couriers">
            </div>
        </div>
        <h2 class="mt-4 sub-sec-title text-blue">What numbers did we achieve overall:</h2>
        <div class="row" style="text-align: center">
            <div class="col-sm-3 col-6">
                <h2 class="mt-4 sub-sec-title text-blue">25K+</h2>
                <p class="sec-para">Instagram Reach</p>

            </div>
            <div class="col-sm-3 col-6">
                <h2 class="mt-4 sub-sec-title text-blue">80k+</h2>
                <p class="sec-para">Social Media Overall Community Reach</p>
            </div>
            <div class="col-sm-3 col-6">
                <h2 class="mt-4 sub-sec-title text-blue">37k+</h2>
                <p class="sec-para">Social Media Impressions</p>
            </div>
              <div class="col-sm-3 col-6">
                <h2 class="mt-4 sub-sec-title text-blue">10k+</h2>
                <p class="sec-para">Social Media Views</p>
            </div>

        </div>

    </div>
    <div class="header-button mb-5 d-flex align-items-center justify-content-center">
        <a href="{{ route('social_media', ['client'=>'the-professional-couriers']) }}" class="th-btn th-icon">View Portfolio</a>
    </div>
    @include('Frontend/partial/commonCaseStudy')

    @include('Frontend/partial/portfolioCommon')

</main>
@endsection