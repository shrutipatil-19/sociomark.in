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
    public function index(Request $request, $page = 1)
    {
        $categories = Category::all();
        $tags = Tag::all();

        $meta = [
            'title' => 'Sociomark Blog | Digital Marketing Insights in india',
            'description' => 'Read expert tips, trends, and ideas from Sociomark, a digital marketing agency in india, to grow your brand online using SEO, social media, and more.'
        ];

        if ($page > 1) {
            $meta['title'] .= ' - Page ' . $page;
            $meta['description'] .= ' - Page ' . $page;
        }

        if ($page == 2) {
            $meta['title'] = 'Sociomark Blog 2 | Digital Marketing Insights in UAE';
            $meta['description'] = "Stay updated with Sociomark's blog, featuring digital trends, campaign ideas, case studies, and expert tips to boost your brand online.";
        } elseif ($page == 3) {
            $meta['title'] = 'Sociomark Blog 1 | Digital Marketing Insights in UAE';
            $meta['description'] = 'Sociomark’s blog brings you powerful marketing insights, creative ideas, and trend analyses to help you stay ahead in the digital game.';
        } elseif ($page > 3) {
            $meta['title'] .= ' - Page ' . $page;
            $meta['description'] .= ' - Page ' . $page;
        }

        $currentUrl = url("/blog" . ($page > 1 ? "/page/$page" : ""));

        // Set the current pagination page manually
        Paginator::currentPageResolver(function () use ($page) {
            return $page;
        });

        // Get blog posts with joined media table
        $blogs = DB::table('posts')
            ->leftJoin('media', 'posts.title', '=', 'media.title')
            ->select('posts.*', 'media.imagefile1')
            ->orderBy('posts.created_at', 'desc')
            ->paginate(4);

        // Fix pagination path
        $blogs->withPath(url('/blog/page'));

        // Attach category names to each blog
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

        return view('Frontend/Blog/Blog', compact('blogs', 'categories', 'tags', 'meta'));
    }

    public function innerBlog($slug)
    {
        // Get all categories and tags
        $categories = Category::all();
        $tags = Tag::all();

        // Get all blogs with their category names
        $blogs = DB::table('posts')
            ->leftJoin('media', 'posts.title', '=', 'media.title')
            ->select('posts.*', 'media.imagefile1')
            ->get();

        foreach ($blogs as $blogItem) {
            $categoryIds = json_decode($blogItem->categories);

            if (is_array($categoryIds) && count($categoryIds)) {
                $categoryNames = DB::table('categories')
                    ->whereIn('id', $categoryIds)
                    ->pluck('category_name');

                $blogItem->category_names = $categoryNames;
            } else {
                $blogItem->category_names = collect();
            }
        }

        // Get the single blog post by slug
        $blog = DB::table('posts')
            ->leftJoin('media', 'posts.title', '=', 'media.title')
            ->select('posts.*', 'media.imagefile1')
            ->where('posts.slug', $slug)
            ->whereIn('posts.status', ['active', 's_act'])
            ->first();

        if (!$blog) {
            abort(404);
        }

        // Add category names for the single blog
        $categoryIds = json_decode($blog->categories);

        if (is_array($categoryIds) && count($categoryIds)) {
            $categoryNames = DB::table('categories')
                ->whereIn('id', $categoryIds)
                ->pluck('category_name');

            $blog->category_names = $categoryNames;
        } else {
            $blog->category_names = collect();
        }

        // Prepare meta data
        $meta = [
            'meta_title' => $blog->meta_title ?? $blog->title ?? 'Sociomark',
            'meta_desciption' => $blog->meta_description ?? 'Read the latest blog on Sociomark',
            'meta_keywords' => $blog->meta_keywords ?? '',
        ];

        return view('Frontend/Blog/InnerBlog', compact('blog', 'categories', 'blogs', 'tags', 'meta'));
    }

    public function categoryBlog($slug)
    {
        // Find the category by slug
        $category = Category::where('slug', $slug)->firstOrFail();

        // Get all categories and tags
        $categories = Category::all();
        $tags = Tag::all();

        $all_blogs = DB::table('posts')
            ->join('media', 'posts.title', '=', 'media.title')
            ->select('posts.*', 'media.imagefile1')
            ->paginate(4);

        // Tell Laravel to generate pretty pagination URLs like /blog/page2
        $all_blogs->withPath(url('/blog/page'));

        $blogs = DB::table('posts')
            ->leftJoin('media', 'posts.title', '=', 'media.title')
            ->select('posts.*', 'media.imagefile1')
            ->whereRaw('JSON_CONTAINS(posts.categories, ?)', ['"' . $category->id . '"']) // JSON category filter
            ->orderBy('posts.created_at', 'desc')
            ->paginate(4);

        $meta = [
            'meta_title' => $category->meta_title ?? 'Sociomark',
            'meta_desciption' => $category->meta_description ?? 'Read the latest blog on Sociomark',
        ];
        // Canonical and schema (from DB columns)
        $canonical = $category->canonicals ?: url()->current(); // use fallback
        $blog_schema = $category->blog_schema;
        return view('Frontend.Blog.CategoryBlog', compact(
            'categories',
            'all_blogs',
            'blogs',
            'category',
            'tags',
            'meta',
            'blog_schema',
            'canonical'
        ));
    }
    public function tagBlog($slug)
    {
        // Find the category by slug
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $categories = Category::all();
        $tags = Tag::all();

        $all_Blog = DB::table('posts')
            ->leftJoin('media', 'posts.title', '=', 'media.title')
            ->select('posts.*', 'media.imagefile1')
            ->paginate(4);

        //  Tell Laravel to generate pretty pagination URLs like /blog/page2
        $all_Blog->withPath(url('/blog/page'));
        $blogs = DB::table('posts')
            ->leftjoin('media', 'posts.title', '=', 'media.imagefile1')
            ->select('posts.*', 'media.imagefile1')
            ->whereRaw('JSON_CONTAINS(posts.tags, ?)', ['"' . $tag->id . '"'])
            ->orderBy('created_at', 'desc')
            ->paginate(4);
        $meta = [
            'meta_title' => $tag->meta_title ?? 'Sociomark',
            'meta_desciption' => $tag->meta_description ?? 'Read the latest blog on Sociomark',
        ];
        $canonical = $tag->canonicals ?: url()->current();
        $blog_schema = $tag->blog_schema;
        return view('Frontend/Blog/TagBlog', compact('categories', 'blogs', 'all_Blog', 'tags', 'tag', 'meta', 'canonical', 'blog_schema'));
    }
}
