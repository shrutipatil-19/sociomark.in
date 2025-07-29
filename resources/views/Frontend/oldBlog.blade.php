@extends('Frontend.layout.app')
@section('title', 'Home Page')
@section('author', 'Your Company Name')
@section('description', 'This is a dynamic description for the home page.')
@section('keywords', 'seo, marketing, agency, web design')
@section('robots', 'INDEX,FOLLOW')

@section('content')

<style>
    #Blog_Section .box {
        padding: 28px 20px;
        border-radius: 0px;
    }

    #Blog_Section .box-blog,
    #Blog_Section .box-blog img {
        border-radius: 0px;
    }

    #Blog_Section .content-padding {
        padding: 20px;
    }

    #Blog_Section .recent_post_title {
        font-size: 16px;
        line-height: 18px;
    }
</style>

<main>
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend-assets/img/bg/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Blog</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-seo-agency.html">Home</a></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Blog Area
==============================-->
    <section class="th-blog-wrapper space-top space-extra-bottom" id="Blog_Section">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-9">

                    @if($firstBlog)
                    <div class="box-blog th-blog blog-single has-post-thumbnail">
                        <div class="blog-img box-blog th-slider" data-slider-options='{"effect":"fade"}'>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="">
                                        <img src="{{ asset($firstBlog->image) }}" alt="Blog Image">
                                    </a>
                                </div>
                            </div>
                            <button class="slider-arrow slider-prev"><i class="fas fa-arrow-left"></i></button>
                            <button class="slider-arrow slider-next"><i class="fas fa-arrow-right"></i></button>
                        </div>
                        <div class="blog-content content-padding">
                            <div class="blog-meta">

                                <a href="#"><i class="fa-regular fa-clock"></i>08 min read</a>
                                <a href="#"><i class="fa-light fa-tags"></i> {{ $firstBlog->category }}</a>
                            </div>
                            <h3 class="blog-title">
                                <a href="">{{ $firstBlog->title }}</a>
                            </h3>
                            <p class="blog-text">{{ Str::limit($firstBlog->content, 100) }}</p>
                            <a href="" class="th-btn black-border th-icon th-radius">
                                Read More <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                    @endif

                    <div class="row">
                        @foreach($otherBlogs as $blog)
                        <div class="col-6">
                            <div class="box-blog th-blog blog-single has-post-thumbnail">
                                <div class="blog-img box-blog">
                                    <a href="">
                                        <img src="{{ asset($blog->image) }}" alt="Blog Image">
                                    </a>
                                </div>
                                <div class="blog-content content-padding">
                                    <div class="blog-meta">

                                        <a href="#"><i class="fa-regular fa-clock"></i>08 min read</a>
                                        <a href="#"><i class="fa-light fa-tags"></i> {{ $blog->category }}</a>
                                    </div>
                                    <h3 class="blog-title">
                                        <a href="">{{ $blog->title }}</a>
                                    </h3>
                                    <p class="blog-text">{{ Str::limit($blog->content, 100) }}</p>
                                    <a href="" class="th-btn black-border th-icon th-radius">
                                        Read More <i class="fa-solid fa-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>


                    <div class="th-pagination">
                        {{ $blogs->links() }}
                    </div>



                    <!-- <div class="th-pagination ">
                        <ul>
                            <li><a href="blog.html">1</a></li>
                            <li><a href="blog.html">2</a></li>
                            <li><a href="blog.html">3</a></li>
                            <li><a href="blog.html">3</a></li>
                            <li><a href="blog.html"><i class="fa-solid fa-arrow-right"></i></a></li>
                        </ul>
                    </div> -->
                </div>
                <div class="col-xxl-4 col-lg-3">
                    <aside class="sidebar-area">
                        <div class="box widget widget_search   ">
                            <form class="search-form">
                                <input type="text" placeholder="Enter Keyword">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="box widget widget_categories  ">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                @foreach ($categories as $category)
                                <li>
                                    <a href="blog.html">{{$category->category_name }}</a>
                                </li>
                                @endforeach


                            </ul>
                        </div>
                        <div class="widget box ">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="{{ asset('frontend-assets/img/blog/recent-post-1-1.jpg')}}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fa-sharp fa-solid fa-calendar-days"></i>21 Sep, 2025</a>
                                        </div>
                                        <h4 class="post-title recent_post_title"><a class="text-inherit" href="blog-details.html">The Ever-Evolving Land cape of</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="{{ asset('frontend-assets/img/blog/recent-post-1-1.jpg')}}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fa-sharp fa-solid fa-calendar-days"></i>21 Sep, 2025</a>
                                        </div>
                                        <h4 class="post-title recent_post_title"><a class="text-inherit" href="blog-details.html">The Ever-Evolving Land cape of</a></h4>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="{{ asset('frontend-assets/img/blog/recent-post-1-1.jpg')}}" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fa-sharp fa-solid fa-calendar-days"></i>21 Sep, 2025</a>
                                        </div>
                                        <h4 class="post-title recent_post_title"><a class="text-inherit" href="blog-details.html">The Ever-Evolving Land cape of</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box widget widget_tag_cloud   ">
                            <h3 class="widget_title">Popular Tags</h3>
                            <div class="tagcloud">
                                <a href="blog.html">SEO Marketing</a>
                                <a href="blog.html">Design</a>
                                <a href="blog.html">Marketing</a>
                                <a href="blog.html">Branding</a>
                                <a href="blog.html">Development</a>
                                <a href="blog.html">UI/UX</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section><!--==============================
Brand Area
==============================-->

    <div class="brand-sec overflow-hidden space-bottom">
        <div class="container th-container">
            <div class="slider-area text-center">
                <div class="swiper th-slider" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"476":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"4"},"1400":{"slidesPerView":"6"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_5.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_5.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_6.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_6.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_5.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_5.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-item">
                                <a href="">
                                    <img class="original" src="{{ asset('frontend-assets/img/brand/brand_1_6.svg')}}" alt="Brand Logo">
                                    <img class="gray" src="{{ asset('frontend-assets/img/brand/brand_1_6.svg')}}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>

@endsection