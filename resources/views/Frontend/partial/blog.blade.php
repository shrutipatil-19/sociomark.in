<section class="overflow-hidden space bg-grey" id="about-sec5">
    <div class="container">

        <h2 class="fw-bold mb-5 sec-title text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000"
            data-aos-easing="ease-in-out">
            Sociopedia A Library To Go Beyond <span class="text-blue"> The Brief</span>
        </h2>

        <div class="swiper mySwiper mt-5">
            <div class="swiper-wrapper">
                @foreach ($blogs as $blog)
                @if ($blog->status == 'active')
                <div class="swiper-slide">
                    <div class="box-blog th-blog blog-single has-post-thumbnail">
                        <div class="blog-img box-blog">
                            <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}">
                                <img src="{{ url('storage/app/public/' . ($blog->images[0] ?? 'default.jpg')) }}"
                                    alt="Blog Image" class="w-100 h-100 object-fit-cover">
                            </a>
                        </div>
                        <div class="blog-content content-padding">
                            <div class="blog-meta">
                                <a href="#"><i class="fa-light fa-calendar"></i>
                                    {{ $blog->created_at ? $blog->created_at->format('F d, Y') : 'Unpublished' }}</a>
                                <a href="#"><i class="fa-light fa-tags"></i>
                                    {{ implode(', ', $blog->category_names) ?: 'No Category' }}</a>
                            </div>
                            <h3 class="blog-title blog-title-text">
                                <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}">
                                    {{ Str::limit($blog->blog_name, 50) }}
                                </a>
                            </h3>

                            <p class="blog-text d-none">{{ Str::limit(strip_tags($blog->content), 80) }}</p>
                            <a href="{{ route('blog-inner', ['slug' => $blog->slug]) }}"
                                class="th-btn black-border th-icon th-radius">
                                Read More <i class="fa-solid fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>