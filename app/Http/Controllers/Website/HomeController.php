<?php

namespace App\Http\Controllers\Website; // Correct namespace

use App\Http\Controllers\Controller; // Make sure you extend the base Controller
use App\Models\Tag;
use App\Models\PR;
use App\Models\Category;
use App\Models\LaunchMessage;
use App\Models\Posts;
// use App\Models\Jobpost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function Home2()
    {
        return view("Frontend/Home");
    }
    public function Home()
    {
        $meta = [
            'title' => 'Top Company for Digital Marketing Agency in Mumbai | Expert Services - Sociomark​',
            'description' => "As a full-service digital marketing agency in Mumbai Sociomark offer tailored solutions to help businesses thrive online. Contact us today to learn how we can help you achieve your marketing goals.",
            'keywords' => 'best digital marketing agency in Navi Mumbai, digital marketing agency in Navi Mumbai, digital marketing company in navi Mumbai, best digital marketing company in navi Mumbai, digital marketing agency in Mumbai, digital marketing company in Mumbai, best digital marketing agency in Mumbai, website development company in navi Mumbai'
        ];
        $categories = Category::all();
        $tags = Tag::all();
        $prs = PR::latest()->get();

        $firstBlog = Posts::latest()->first(); // Get latest blog

        // Paginate other blogs instead of using `take()`
        $otherBlogs = Posts::paginate(4);
        $blogs = DB::table('posts')
            ->leftJoin('media', 'posts.title', '=', 'media.title')
            ->select('posts.*', 'media.imagefile1')
            ->where('status', 'active')
            ->where('display_on_home', 1)
            ->latest()
            ->take(6)
            ->get();

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
        $messages = LaunchMessage::latest()->get();
        return view("Frontend/Home2", compact('firstBlog', 'categories', 'blogs', 'tags', 'meta', 'prs', 'messages'));
    }
    public function HomeNew()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Posts::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Posts::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Posts::paginate(4);
        return view("Frontend/HomeNew", compact('firstBlog', 'otherBlogs', 'categories', 'blogs', 'tags'));
    }

    public function myHome()
    {
        $categories = Category::all();
        $tags = Tag::all();
        $blogs = Posts::latest()->paginate(4); // Paginate all blogs
        $firstBlog = Posts::latest()->first(); // Get latest blog

        // ✅ Paginate other blogs instead of using `take()`
        $otherBlogs = Posts::paginate(4);
        return view("Frontend/myHome", compact('firstBlog', 'otherBlogs', 'categories', 'blogs', 'tags'));
    }
    public function About()
    {
        $meta = [
            'title' => 'Boost Your Online Presence with Sociomark| Digital Marketing Services in Navi Mumbai​',
            'description' => "Our digital marketing agency in Navi Mumbai can help you increase brand awareness, drive website traffic, and generate leads. Learn more about us.",
            'keywords' => 'About Us, Sociomark, best digital marketing agency in Navi Mumbai, digital marketing agency in Navi Mumbai, digital marketing company in navi Mumbai, best digital marketing agency in Mumbai, website development company in navi Mumbai'
        ];
        return view("Frontend/AboutUs", compact('meta'));
    }
    public function Services()
    {
        $meta = [
            'title' => 'Sociomark gives Full-Service Digital Marketing Agency in Mumbai | Drive Your Business Forward​',
            'description' => "Our full-service digital marketing agency in Mumbai offers everything you need to take your online presence to the next level. From SEO to PPC, social media marketing to email marketing, we have the skills and expertise to drive your business forward.",
            'keywords' => 'SEO company in navi Mumbai, SEO services in Mumbai, Search Engine Marketing Mumbai, social media services in Mumbai, social media services in navi Mumbai, best social media marketing company in Mumbai, social media agency in Mumbai, website development services in navi Mumbai, website development company in navi Mumbai'
        ];
        return view("Frontend/Services", compact('meta'));
    }
    public function careers()
    {

        $meta = [
            'title' => 'Sociomark Careers & Job Opportunities',
            'description' => 'Learn more about job and career opportunities at Sociomark. Search our current openings today to find the best fit for you and your career goals.'
        ];
        // $jobs = Jobpost::all();
        return view("Frontend/careers" , compact('meta'));
    }
    public function privacyAndPolicy()
    {
        $meta = [
            'title' => 'Privacy Policy | Sociomark',
            'description' => "Privacy Policy | Sociomark"
        ];
        return view("Frontend/privacyAndPolicy", compact('meta'));
    }
    public function termsAndcondition()
    {
        $meta = [
            'title' => 'Terms and Conditions | Sociomark',
            'description' => "Terms and Conditions | Sociomark"
        ];
        return view("Frontend/termsAndcondition", compact('meta'));
    }
    public function thankYou()
    {
        return view("Frontend/thankYou");
    }
}
