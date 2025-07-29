@extends('Frontend.layout.blogapp')


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

    #Blog_Section .content-padding {
        padding: 0px 20px 20px 20px;
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

    .widget_categories a:hover,
    .widget_categories a.active,
    .tagcloud a:hover,
    .tagcloud a:active {
        background-color: #106c97 !important;
        color: white !important;
    }

    .recent-post .media-img img {
        object-fit: cover !important;
    }

    .blog-img {
        width: 100%;
        height: 100%;
    }

    .blog-single {
        margin-right: 0px !important;
    }

    #Blog_Section .box-blog img {
        object-fit: contain !important;
    }

    p {
        line-height: 28px;
        font-size: 20px !important;
        /* font-size: calc(max(3vmax, 1rem)); */
        line-height: calc(1.56 * 1em) important;
        letter-spacing: 0.1px !important;
        color: rgb(19, 20, 20) !important;
        font-weight: 400 !important;
    }

    h3 {
        font-size: 22px !important;
        /* font-size: calc(min(5vw, 2rem)); */
        line-height: 30px;
        color: #121212 !important;
        font-weight: 600 !important;
    }
</style>
@endsection
@section('content')



<main>

    <div class="breadcumb-wrapper " data-bg-src="{{ url('storage/app/public/' . ($blog->imagefile1[0] ?? 'default.jpg')) }}" style="margin-top: 66px;">
        <div class="container">
            <!-- <div class="breadcumb-content">
                <h1 class="breadcumb-title">Blog</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-seo-agency.html">Home</a></li>
                    <li>Blog</li>
                </ul>
            </div> -->
        </div>
    </div>
    <section class="th-blog-wrapper space-top space-extra-bottom" id="Blog_Section">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-8">
                    <div class="col-md-12">
                        <div class="blog-content mb-3">
                            <div class="blog-meta">
                                <a href="#"><i class="fa-light fa-calendar"></i> {{ $blog->created_at  }}</a>

                            </div>
                            <h1 class=" blog-title blog-title-text"><a href="" class="sec-title">{{ $blog->title }}</a></h1>

                        </div>
                        <div class="box-blog th-blog blog-single has-post-thumbnail">
                            <div class="blog-img box-blog">
                                <a href="">
                                    @php
                                    $images = json_decode($blog->images, true);
                                    $firstImage = $images[0] ?? null;
                                    @endphp

                                    @if (!empty($blog->imagefile1))
                                    <img src="{{ url('storage/app/public/' . $blog->imagefile1) }}" alt="{{ $blog->title }}">
                                    @elseif (!empty($firstImage))
                                    <img src="{{ url('storage/app/public/' . $firstImage) }}" alt="{{ $blog->title }}">
                                    @else
                                    <img src="{{ url('storage/app/public/default.jpg') }}" alt="{{ $blog->title }}">
                                    @endif
                                </a>
                            </div>
                            <div class="blog-content content-padding">

                                <div class="mt-md-5 mt-3">{!! $blog->content !!}</div>

                                <!-- <p class="blog-text">{!! nl2br(e($blog->content)) !!}</p> -->

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4">
                    <aside class="sidebar-area">




                        <div class="box widget widget_categories">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li><a href="{{ route('blog') }}" class="category-filter" data-category="all">All Categories</a></li>
                                @foreach ($categories as $category)

                                <li><a href="{{ route('categoryBlog', ['slug' => $category->slug]) }}" class="category-filter">{{ $category->category_name }}</a></li>
                                @endforeach


                            </ul>
                        </div>
                        <div class="widget box">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                @foreach ($blogs->take(3) as $blog)
                                <div class="recent-post">
                                    <div class="media-img recent_blog_img">
                                        <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}">
                                            @php
                                            $images = json_decode($blog->images, true);
                                            $firstImage = $images[0] ?? null;
                                            @endphp

                                            @if (!empty($blog->imagefile1))
                                            <img src="{{ url('storage/app/public/' . $blog->imagefile1) }}" alt="{{ $blog->title }}">
                                            @elseif (!empty($firstImage))
                                            <img src="{{ url('storage/app/public/' . $firstImage) }}" alt="{{ $blog->title }}">
                                            @else
                                            <img src="{{ url('storage/app/public/default.jpg') }}" alt="{{ $blog->title }}">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="recent-post-meta">
                                            <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}">
                                                <i class="fa-sharp fa-solid fa-calendar-days"></i>
                                                {{ $blog->created_at  }}
                                            </a>
                                        </div>
                                        <h4 class="post-title recent_post_title">
                                            <a class="text-inherit" href="{{ route('blog-inner', ['slug' => $blog->slug]) }}">
                                                {{ $blog->title }}
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section><!--============================== -->

</main>

@endsection