<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;


class BlogWebController extends Controller
{
    // public function index(Request $request)
    // {
    //     $categories = Category::all();
    //     $tags = Tag::all();
    //     $blogs = Blog::all(); // Paginate all blogs
    //     $firstBlog = Blog::latest()->first(); // Get latest blog

    //     // ✅ Paginate other blogs instead of using `take()`
    //     $otherBlogs = Blog::paginate(4);
    //     $meta = [
    //         'title' => 'Sociomark Blog | Digital Marketing Insights in UAE',
    //         'description' => 'Read expert tips, trends, and ideas from Sociomark, a digital marketing agency in UAE, to grow your brand online using SEO, social media, and more.'
    //     ];
    //     if (isset($request->input('page'))) {
    //         $page = $request->input('page');
    //         $meta['title'] = 'Sociomark Blog | Digital Marketing Insights in UAE - Page ' . $page;
    //     }

    //     return view('Frontend/Blog/Blog', compact('firstBlog', 'otherBlogs', 'categories', 'blogs', 'tags', 'meta'));
    // }
    public function index(Request $request, $page = 1)
    {
        $categories = Category::all();
        // $tags = Tag::all();

        // $meta = [
        //     'title' => 'Sociomark Blog | Digital Marketing Insights in UAE',
        //     'description' => 'Read expert tips, trends, and ideas from Sociomark, a digital marketing agency in UAE, to grow your brand online using SEO, social media, and more.'
        // ];

        // if ($page > 1) {
        //     $meta['title'] .= ' - Page ' . $page;
        //     $meta['description'] .= ' - Page ' . $page;
        // }
        // if ($page == 2) {
        //     $meta['title'] = 'Sociomark Blog 2 | Digital Marketing Insights in UAE';
        //     $meta['description'] = "Stay updated with Sociomark's blog, featuring digital trends, campaign ideas, case studies, and expert tips to boost your brand online.";
        // } elseif ($page == 3) {
        //     $meta['title'] = 'Sociomark Blog 1 | Digital Marketing Insights in UAE';
        //     $meta['description'] = 'Sociomark’s blog brings you powerful marketing insights, creative ideas, and trend analyses to help you stay ahead in the digital game.';
        // } elseif ($page > 3) {
        //     $meta['title'] .= ' - Page ' . $page;
        //     $meta['description'] .= ' - Page ' . $page;
        // }
        // $currentUrl = url("/blog" . ($page > 1 ? "/page/$page" : ""));

        // Set the current page manually
        Paginator::currentPageResolver(function () use ($page) {
            return $page;
        });

        $blogs = DB::table('posts')
            ->leftJoin('media', 'posts.title', '=', 'media.title')
            ->select('posts.*', 'media.imagefile1')
            ->orderBy('posts.created_at', 'desc')
            ->paginate(4);
        // Tell Laravel to generate pretty pagination URLs like /blog/page2
        $blogs->withPath(url('/blog/page'));

        // dd($blogs);
        return view('Frontend/Blog/Blog', compact('blogs', 'categories'));
    }
    public function innerBlog($slug)
    {
        $categories = Category::all();

        // $blog = Blog::where('slug', $slug)->firstOrFail();
        // $blogs = Posts::where('status', ['s_act', 'active']);
        //     ->orderBy('created_at', 'desc')->get();
        // $tags = Tag::all();
        // Extract meta data from the blog
        // $meta = [
        //     'meta_title' => $blog->meta_title ?? $blog->blog_name ?? 'Sociomark',
        //     'meta_desciption' => $blog->meta_description ?? 'Read the latest blog on Sociomark',
        // ];
        // $canonical = $blog->canonicals ?: url()->current();
        // $blog_schema = $blog->blog_schema;
        $blogs = DB::table('posts')
            ->leftJoin('media', 'posts.title', '=', 'media.title')
            ->select('posts.*', 'media.imagefile1')
            ->get();

        $blog = DB::table('posts')
            ->leftJoin('media', 'posts.title', '=', 'media.title')
            ->select('posts.*', 'media.imagefile1')
            ->where('posts.slug', $slug)
            ->where('posts.status', ['active', 's_act'])
            ->first();

        if (!$blog) {
            abort(404);
        }
        // dd($blog);
        return view('Frontend/Blog/InnerBlog', compact('blog', 'categories', 'blogs'));
    }
    public function categoryBlog($slug)
    {
        // Find the category by slug
        $category = Category::where('slug', $slug)->firstOrFail();

        // Get all categories and tags
        $categories = Category::all();
        // $tags = Tag::all();

        $all_blogs = DB::table('posts')
            ->join('media', 'posts.title', '=', 'media.title')
            ->select('posts.*', 'media.imagefile1')
            ->paginate(4);
        // $otherBlogs = Blog::where('status', 'active')
        //     ->orderBy('created_at', 'desc')
        //     ->paginate(4);

        // Tell Laravel to generate pretty pagination URLs like /blog/page2
        $all_blogs->withPath(url('/blog/page'));
        // Canonical and schema (from DB columns)
        // $canonical = $category->canonicals ?: url()->current(); // use fallback
        // $blog_schema = $category->blog_schema;

        // $meta = [
        //     'meta_title' => $category->meta_title ?? 'Sociomark',
        //     'meta_desciption' => $category->meta_description ?? 'Read the latest blog on Sociomark',
        // ];

        // Blogs under the selected category
        // $blogs = Blog::whereJsonContains('categories', (string) $category->id)->orderBy('created_at', 'desc')->paginate(4);

        // $blogs = DB::table('posts')
        //     ->leftJoin('media', 'posts.title', '=', 'media.title')
        //     ->select('posts.*', 'media.imagefile1')
        //     ->whereRaw("JSON_CONTAINS(posts.categories, '\"$category->id\"')")
        //     ->orderBy('posts.created_at', 'desc')
        //     ->paginate(4);

        $blogs = DB::table('posts')
            ->leftJoin('media', 'posts.title', '=', 'media.title') // Join media by title
            ->select('posts.*', 'media.imagefile1')               // Select all post fields + media image
            ->whereRaw('JSON_CONTAINS(posts.categories, ?)', ['"' . $category->id . '"']) // JSON category filter
            ->orderBy('posts.created_at', 'desc') // Order by latest
            ->paginate(4);                        // Paginate with 4 per page


        // Pass everything to the view
        return view('Frontend.Blog.CategoryBlog', compact(
            'categories',
            'all_blogs',
            'blogs',
            'category'
        ));
    }
    public function tagBlog($slug)
    {
        // Find the category by slug
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $categories = Category::all();
        $tags = Tag::all();
        $otherBlogs = Blog::where('status', 'active')
            ->orderBy('created_at', 'desc')
            ->paginate(4);

        //  Tell Laravel to generate pretty pagination URLs like /blog/page2
        $otherBlogs->withPath(url('/blog/page'));
        // Fetch blogs that contain the category name in the JSON field
        $blogs = Blog::whereJsonContains('tags', (string) $tag->id)->orderBy('created_at', 'desc')->paginate(4);
        $meta = [
            'meta_title' => $tag->meta_title ?? 'Sociomark',
            'meta_desciption' => $tag->meta_description ?? 'Read the latest blog on Sociomark',
        ];
        $canonical = $tag->canonicals ?: url()->current();
        $blog_schema = $tag->blog_schema;
        return view('Frontend/Blog/TagBlog', compact('categories', 'blogs', 'tag', 'tags', 'meta', 'otherBlogs'));
    }
}
