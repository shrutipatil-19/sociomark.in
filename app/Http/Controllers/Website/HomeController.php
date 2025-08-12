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
            'title' => 'Leading Digital Marketing Agency in UAE | Sociomark​',
            'description' => "Sociomark is a top-rated digital marketing agency in Dubai, offering SEO, social media, and branding solutions to grow your business online effectively.",
            'keywords' => 'Digital Marketing Agency in UAE, digital marketing company in Dubai'
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
            'title' => 'Creative Marketing Agency in Dubai | Sociomark​​',
            'description' => "Learn about Sociomark, a trusted digital marketing company in UAE, offering innovative strategies to grow your online presence and drive real results.",
            'keywords' => 'About us, Sociomark, Best digital marleting agency in Ajman, Best Digital marketing agency in UAE, SEO agency in Dubai'
        ];
        return view("Frontend/AboutUs", compact('meta'));
    }
    public function Services()
    {
        $meta = [
            'title' => 'Digital Marketing Services Dubai | SEO, PPC, SMM | Sociomark​​',
            'description' => "Explore Digital Marketing Services in Dubai with Sociomark. We offer SEO, Social Media, PPC & more to grow your brand online.",
            'keywords' => 'digital marketing services UAE, SEO PPC social media, content strategy UAE,  Performance marketing agency in UAE, Video editing in ajman '
        ];
        return view("Frontend/Services", compact('meta'));
    }
    public function careers()
    {
        // $jobs = Jobpost::all();
        return view("Frontend/careers");
    }
    public function privacyAndPolicy()
    {
        $meta = [
            'title' => 'Privacy Policy | Sociomark Digital Marketing UAE',
            'description' => "View the privacy policy of Sociomark, a digital marketing agency in UAE, to understand how we protect your data and ensure transparency in our services."
        ];
        return view("Frontend/privacyAndPolicy", compact('meta'));
    }
    public function termsAndcondition()
    {
        $meta = [
            'title' => 'Terms & Conditions | Sociomark Digital Agency UAE',
            'description' => "Read the terms and conditions of Sociomark, a digital marketing agency in UAE, to understand the rules for using our website and services."
        ];
        return view("Frontend/termsAndcondition", compact('meta'));
    }
    public function thankYou()
    {
        return view("Frontend/thankYou");
    }
}
