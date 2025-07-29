@extends('Frontend.layout.app')
@section('title', 'Blog')
@section('author', 'Your Company Name')
@section('description', 'This is a dynamic description for the home page.')
@section('keywords', 'blog, marketing, agency, web design')
@section('robots', 'INDEX,FOLLOW')
@section('custome-style')
<style>
    #Blog_Section .box {
        padding: 28px 20px;
        border-radius: 10px;
    }

    #Blog_Section .box-blog,
    #Blog_Section .box-blog img {
        border-radius: 10px;
        box-shadow: 0px -2px 12px -1px rgba(0, 0, 0, 0.17);
        -webkit-box-shadow: 0px -2px 12px -1px rgba(0, 0, 0, 0.17);
        -moz-box-shadow: 0px -2px 12px -1px rgba(0, 0, 0, 0.17);
        border: none
    }

    #Blog_Section .content-padding {
        padding: 20px;
    }

    #Blog_Section .recent_post_title {
        font-size: 16px;
        line-height: 18px;
    }

    #Blog_Section .th-btn {
        padding: 15px 18px;
    }

    #Blog_Section .swiper-slide {
        height: auto;
    }

    #Blog_Section .category-filter {
        display: grid !important;
    }

    #Blog_Section .blog-title-text {
        font-size: 23px;
        margin-bottom: 6px;
    }

    #Blog_Section .recent_blog_img {
        height: 85px;
        object-fit: cover;
        border-radius: 10px;
    }

    #Blog_section .widget_categories a:hover,
    #Blog_section .tagcloud a:hover,
    #Blog_Section .widget_categories a.active,
    #Blog_section .tagcloud a:active {
        background-color: #106c97 !important;
        color: white !important;
    }

    .recent-post .media-img img {
        object-fit: cover !important;
    }

    .blog-img {
        width: 400px;
        height: 230px;
    }

    .blog-single {
        margin-right: 0px !important;
    }

    #Blog_Section .box-blog img {
        object-fit: contain !important;
    }
</style>
@endsection
@section('content')
<main>

    <section style="margin-top: 68px;">
        <div class="full-width">
            <picture>
                <source media="(min-width: 1400px)" srcset="{{ asset('frontend-assets/img/blog/Blogs.png')}}" loading="lazy">
                <img src="{{ asset('frontend-assets/img/blog/Blogs.png')}}" alt="" loading="lazy">
            </picture>
        </div>
    </section>
    <section class="th-blog-wrapper space-top space-extra-bottom" id="Blog_Section">
        <div class="container">
            <div class="row">

                <!-- Group blogs in pairs -->
                @foreach($p_r_s as $pr)
                <div class="col-xxl-4 col-lg-4 col-12">

                    <div class="box-blog th-blog blog-single has-post-thumbnail">
                        <div class="blog-img box-blog">
                            <a href="{{url($pr->link)  }}">
                                <img loading="lazy"
                                    src="{{ url('storage/app/public/' . ($pr->img?? 'default.jpg')) }}"
                                    alt="pr Image" class="w-100 h-100 object-fit-cover">
                            </a>
                        </div>
                        <div class="blog-content content-padding">
                            <div class="blog-meta">
                                <p class="sec-para fs-6">Posted on <i class="fa-light fa-calendar"></i>
                                    {{ $pr->post_date }}
                                </p>
                            </div>
                            <h3 class="blog-title blog-title-text">
                                <a href="{{url($pr->link)  }}">
                                    {{ $pr->card_title}}
                                </a>
                            </h3>
                            <p class="blog-text">{{ Str::limit(strip_tags($pr->description), 50) }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </section>
</main>

@endsection