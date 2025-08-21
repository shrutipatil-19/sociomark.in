<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Posts;
use Illuminate\Support\Facades\DB;

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
            'title' => 'SEO agency in Mumbai | Sociomark',
            'description' => "Boost online success with Sociomark, the leading SEO company in Mumbai. Our skilled SEO services in Mumbai provide approved strategies for measurable business success.",
            'keywords' => 'best seo agency in mumbai,seo company in mumbai,seo services in mumbai,seo agency in mumbai,seo company mumbai,seo agency,seo company,search engine optimization'
        ];
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = DB::table('posts')
            ->leftJoin('media', 'posts.title', '=', 'media.title')
            ->select('posts.*', 'media.imagefile1')
            ->where('status', 'active')
            ->where('display_on_home', 1)
            ->latest()
            ->take(6)
            ->get();

        $firstBlog = Posts::latest()->first(); // Get latest Posts

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Posts::paginate(4);
        foreach ($blogs as $blog) {
            $categoryIds = json_decode($blog->categories); // adjust if comma-separated

            if (is_array($categoryIds) && count($categoryIds)) {
                $categoryNames = DB::table('categories')
                    ->whereIn('id', $categoryIds)
                    ->pluck('category_name'); // returns a simple array

                $blog->category_names = $categoryNames;
            } else {
                $blog->category_names = collect(); // empty collection to avoid errors
            }
        }
        return view("Frontend/Services/Seo", compact('blogs', 'meta'));
    }
    public function website()
    {
        $meta = [
            'title' => 'Website Development Company in Navi Mumbai',
            'description' => 'Get your company or a business website designed and developed by Sociomark’s experienced web developers & designers. Request for a quote now.',
            'keywords' => 'web design company, website development company'
        ];
        $blogs = DB::table('posts')
            ->leftJoin('media', 'posts.title', '=', 'media.title')
            ->select('posts.*', 'media.imagefile1')
            ->where('status', 'active')
            ->where('display_on_home', 1)
            ->latest()
            ->take(6)
            ->get();

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
        foreach ($blogs as $blog) {
            $categoryIds = json_decode($blog->categories); // adjust if comma-separated

            if (is_array($categoryIds) && count($categoryIds)) {
                $categoryNames = DB::table('categories')
                    ->whereIn('id', $categoryIds)
                    ->pluck('category_name'); // returns a simple array

                $blog->category_names = $categoryNames;
            } else {
                $blog->category_names = collect(); // empty collection to avoid errors
            }
        }
        return view("Frontend/Services/Website", compact('blogs', 'meta'));
    }
    public function socialMedia()
    {
        $meta = [
            'title' => 'Social Media agency in Navi Mumbai | Sociomark',
            'description' => 'Sociomark, a top social media agency in Navi Mumbai, helps your business build a unique identity and connect with a broader audience for impactful growth.',
            'keywords' => 'Social media agency,Social media company,Social media consultant,Social media services'
        ];
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = DB::table('posts')
            ->leftJoin('media', 'posts.title', '=', 'media.title')
            ->select('posts.*', 'media.imagefile1')
            ->where('status', 'active')
            ->where('display_on_home', 1)
            ->latest()
            ->take(6)
            ->get();

        $firstBlog = Posts::latest()->first(); // Get latest Posts

        //Paginate other blogs instead of using `take()`
        $otherBlogs = Posts::paginate(4);
        foreach ($blogs as $blog) {
            $categoryIds = json_decode($blog->categories); // adjust if comma-separated

            if (is_array($categoryIds) && count($categoryIds)) {
                $categoryNames = DB::table('categories')
                    ->whereIn('id', $categoryIds)
                    ->pluck('category_name'); // returns a simple array

                $blog->category_names = $categoryNames;
            } else {
                $blog->category_names = collect(); // empty collection to avoid errors
            }
        }
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
        $blogs = DB::table('posts')
            ->leftJoin('media', 'posts.title', '=', 'media.title')
            ->select('posts.*', 'media.imagefile1')
            ->where('status', 'active')
            ->where('display_on_home', 1)
            ->latest()
            ->take(6)
            ->get();

        $firstBlog = Posts::latest()->first(); // Get latest Posts

        //Paginate other blogs instead of using `take()`
        $otherBlogs = Posts::paginate(4);
        foreach ($blogs as $blog) {
            $categoryIds = json_decode($blog->categories); // adjust if comma-separated

            if (is_array($categoryIds) && count($categoryIds)) {
                $categoryNames = DB::table('categories')
                    ->whereIn('id', $categoryIds)
                    ->pluck('category_name'); // returns a simple array

                $blog->category_names = $categoryNames;
            } else {
                $blog->category_names = collect(); // empty collection to avoid errors
            }
        }
        return view("Frontend/Services/digitalMarketing", compact('blogs', 'meta'));
    }
    public function contentMarketing()
    {
        $meta = [
            'title' => 'Top Content Marketing Agency in UAE | Sociomark',
            'description' => 'Get more engagement and grow your business with professional Content Marketing Services from Sociomark, a trusted agency in Dubai delivering impactful results.',
            'keywords' => 'content marketing Dubai, Posts marketing UAE, content strategy UAE,  Digital marketing agency in Ajman, Best digital marketing agency in Dubai, Best digital marketing agency to work with in Ajman, Digital marketing agency in UAE'
        ];

        $categories = Category::all();
        $tags = Tag::all();
        $blogs = DB::table('posts')
            ->leftJoin('media', 'posts.title', '=', 'media.title')
            ->select('posts.*', 'media.imagefile1')
            ->where('status', 'active')
            ->where('display_on_home', 1)
            ->latest()
            ->take(6)
            ->get();

        $firstBlog = Posts::latest()->first(); // Get latest Posts

        // Paginate other blogs instead of using `take()`
        $otherBlogs = Posts::paginate(4);
        foreach ($blogs as $blog) {
            $categoryIds = json_decode($blog->categories); // adjust if comma-separated

            if (is_array($categoryIds) && count($categoryIds)) {
                $categoryNames = DB::table('categories')
                    ->whereIn('id', $categoryIds)
                    ->pluck('category_name'); // returns a simple array

                $blog->category_names = $categoryNames;
            } else {
                $blog->category_names = collect(); // empty collection to avoid errors
            }
        }
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
        $blogs = DB::table('posts')
            ->leftJoin('media', 'posts.title', '=', 'media.title')
            ->select('posts.*', 'media.imagefile1')
            ->where('status', 'active')
            ->where('display_on_home', 1)
            ->latest()
            ->take(6)
            ->get();

        $firstBlog = Posts::latest()->first(); // Get latest Posts

        // Paginate other blogs instead of using `take()`
        $otherBlogs = Posts::paginate(4);
        foreach ($blogs as $blog) {
            $categoryIds = json_decode($blog->categories); // adjust if comma-separated

            if (is_array($categoryIds) && count($categoryIds)) {
                $categoryNames = DB::table('categories')
                    ->whereIn('id', $categoryIds)
                    ->pluck('category_name'); // returns a simple array

                $blog->category_names = $categoryNames;
            } else {
                $blog->category_names = collect(); // empty collection to avoid errors
            }
        }
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
        $blogs = DB::table('posts')
            ->leftJoin('media', 'posts.title', '=', 'media.title')
            ->select('posts.*', 'media.imagefile1')
            ->where('status', 'active')
            ->where('display_on_home', 1)
            ->latest()
            ->take(6)
            ->get();

        $firstBlog = Posts::latest()->first(); // Get latest Posts

        // Paginate other blogs instead of using `take()`
        $otherBlogs = Posts::paginate(4);

        foreach ($blogs as $blog) {
            $categoryIds = json_decode($blog->categories); // adjust if comma-separated

            if (is_array($categoryIds) && count($categoryIds)) {
                $categoryNames = DB::table('categories')
                    ->whereIn('id', $categoryIds)
                    ->pluck('category_name'); // returns a simple array

                $blog->category_names = $categoryNames;
            } else {
                $blog->category_names = collect(); // empty collection to avoid errors
            }
        }
        return view("Frontend/Services/photoVideography", compact('blogs', 'meta'));
    }
}
