<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Blog;

class ServiceController extends Controller
{
    public $data;
    public function __construct()
    {
        $this->data = [
            'industries' => [
                [
                    'name' => "Education",
                    'id' => "education",
                    'slug' => "education",
                ],
                [
                    'name' => "Healthcare",
                    'id' => "healthcare",
                    'slug' => "healthcare",
                ],
                [
                    'name' => "FMCG",
                    'id' => "fmcg",
                    'slug' => "fmcg",
                ],
                [
                    'name' => "News & Media",
                    'id' => "news-and-media",
                    'slug' => "news-and-media",
                ],
                [
                    'name' => "Real Estate",
                    'id' => "real-estate",
                    'slug' => "real-estate",
                ],
                [
                    'name' => "Logistics",
                    'id' => "logistics",
                    'slug' => "logistics",
                ],
                [
                    'name' => "Fashion & Lifestyle",
                    'id' => "fashion-and-lifestyle",
                    'slug' => "fashion-and-lifestyle",
                ],
                [
                    'name' => "Gaming",
                    'id' => "gaming",
                    'slug' => "gaming",
                ],
                [
                    'name' => "Home & Interior",
                    'id' => "home-and-interior",
                    'slug' => "home-and-interior",
                ],
                [
                    'name' => "Automobile",
                    'id' => "automobile",
                    'slug' => "automobile",
                ],
                [
                    'name' => "Public Sector",
                    'id' => "public-sector",
                    'slug' => "public-sector",
                ],
            ]
        ];
    }

    public function seo()
    {
        $meta = [
            'title' => 'SEO Agency in UAE | Boost Your Rankings with Sociomark',
            'description' => "Boost your online presence with Dubai's leading SEO Company. Our SEO Services help improve rankings, increase traffic, and grow your business effectively.",
            'keywords' => 'SEO agency Dubai, UAE search optimization, local SEO Dubai, SEO company UAE,  Digital marketing agency in Ajman, Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/Seo", compact('blogs', 'meta'));
    }
    public function website()
    {
        $meta = [
            'title' => 'Website Development Company in UAE | Build Your Online Presence',
            'description' => 'Looking for a top website development agency in Dubai? Our experts build responsive, user-friendly websites that drive conversions and boost online presence.',
            'keywords' => 'website development UAE, web design Dubai, custom web solutions Dubai,  Digital marketing agency in Ajman, Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $this->data['clients'] = [
            'news-and-media' => [
                [
                    'logo' => "clients/times.jpg",
                    'name' => "Times Network",
                    'redirect' => [
                        'route' => 'home'
                    ]
                ]
            ]
        ];
        return view("Frontend/Services/Website", compact('blogs', 'meta'));
    }
    public function socialMedia()
    {
        $meta = [
            'title' => 'Social Media Marketing Agency in UAE | Sociomark',
            'description' => 'Boost your brand with expert social media agency services in Dubai. Customized strategies to grow your online presence and engage your audience effectively.',
            'keywords' => 'social media agency Dubai, SMO UAE, social campaigns Dubai, influencer marketing UAE,  Digital marketing agency in Ajman, Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/SocialMedia", compact('blogs', 'meta'));
    }
    public function digitalMarketing()
    {
        $meta = [
            'title' => 'Leading Digital Marketing Company in UAE | Grow with Experts',
            'description' => 'Get top Digital Marketing Agency Services in Dubai with Sociomark. Drive traffic, boost your online presence, and grow your business with expert digital solutions.',
            'keywords' => 'digital marketing Dubai, SEO PPC social media UAE, online marketing Dubai,  Digital marketing agency in Ajman, Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/digitalMarketing", compact('blogs', 'meta'));
    }
    public function contentMarketing()
    {
        $meta = [
            'title' => 'Top Content Marketing Agency in UAE | Sociomark',
            'description' => 'Get more engagement and grow your business with professional Content Marketing Services from Sociomark, a trusted agency in Dubai delivering impactful results.',
            'keywords' => 'content marketing Dubai, blog marketing UAE, content strategy UAE,  Digital marketing agency in Ajman, Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];

        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/contentMarketing", compact('blogs', 'meta'));
    }
    public function sem()
    {
        $meta = [
            'title' => 'Performance Marketing Agency in UAE | Sociomark',
            'description' => 'Sociomark, a digital marketing agency in UAE, offers Performance Marketing Services that help your business grow online. We build effective campaigns to increase sales and reach.',
            'keywords' => 'performance marketing UAE, PPC ads Dubai, ROI digital campaigns,  Digital marketing agency in Ajman, Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/sem", compact('blogs', 'meta'));
    }
    public function photoVideography()
    {
        $meta = [
            'title' => 'Top Photography and Videography Services in UAE | Sociomark',
            'description' => 'Get quality Photography and Videography Services in Dubai with Sociomark. We help you capture special moments in a simple and professional way.',
            'keywords' => 'brand photography Dubai, corporate videography UAE, video content marketing,  Digital marketing agency in Ajman, Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Blog::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Blog::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Blog::paginate(4);
        return view("Frontend/Services/photoVideography", compact('blogs', 'meta'));
    }
}
