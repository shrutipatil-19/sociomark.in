<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    // Show all blogs
    // public function index()
    // {

    //     $blogs = Posts::with('category')->latest()->get();
    //     return view('admin/Pages/Blog/Blogs', compact('blogs'));
    // }
    public function index()
    {
        // $blogs = Posts::latest()->get();
        // $blogs = DB::table('posts')
        //     ->join('media', 'posts.title', '=', 'media.title')
        //     ->select('posts.*', 'media.imagefile1')
        //     ->latest()
        //     ->get();
        $blogs = DB::table('posts')
            ->leftJoin('media', 'posts.title', '=', 'media.title') // match old data by title
            ->select(
                'posts.*',
                DB::raw('COALESCE(posts.images, media.imagefile1) as display_image')
            )
            ->latest('posts.created_at')
            ->get();


        // dd($blogs);
        return view('admin/Pages/Blog/Blogs', compact('blogs'));
    }

    // Show form to create blog
    public function create()
    {
        $categories = Category::all(); // Fetch all categories
        $tags = Tag::all(); // Fetch all tags
        return view('admin/Pages/Blog/AddBlog', compact('categories', 'tags'));
    }



    // Store blog
    public function store(Request $request)
    {
        $request->validate([
            'card_title' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',

            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate each image
            'status' => 'required|in:active,draft,inactive',
            'display_on_home' => 'boolean',
            'canonicals' => 'url|nullable',
            'blog_schema' => 'string|nullable',
        ]);

        // Store images
        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('blog_images', 'public');
                $imagePaths[] = $path;
            }
        }

        // Create blog
        Posts::create([
            'card_title' => $request->card_title,
            'title' => $request->title,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'slug' => Str::slug($request->title),

            'images' => $imagePaths,
            'status' => $request->status,
            'display_on_home' => $request->display_on_home ?? false,
            'canonicals' => $request->canonicals,
            'blog_schema' => $request->blog_schema,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }


    // Show blog details
    // public function show(Blog $blog)
    // {
    //     return view('admin/Pages/Blog/EditBlog', compact('blog'));
    // }

    // Show form to edit blog

    public function edit($id)
    {
        $blog = Posts::findOrFail($id);

        return view('admin/Pages/Blog/EditBlog', compact('blog', 'categories', 'tags'));
    }


    public function update(Request $request, $id)
    {
        $blog = Posts::findOrFail($id);

        $request->validate([
            'card_title'      => 'required|string|max:255',
            'title'       => 'required|string|max:255',
            'content'         => 'required',
            'status'          => 'required|in:draft,active,inactive',

            'meta_title'      => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'meta_keywords'   => 'nullable|string|max:500',
            'slug'            => 'nullable|string|max:255|unique:blogs,slug,' . $id,
            'images.*'        => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'canonicals'      => 'url|nullable',
            'blog_schema'          => 'string|nullable',
        ]);

        // Start building the $data array with all the "always-present" fields:
        $data = [
            'card_title'       => $request->input('card_title'),
            'title'        => $request->input('title'),
            'content'          => $request->input('content'),
            'meta_title'       => $request->input('meta_title'),
            'meta_description' => $request->input('meta_description'),
            'meta_keywords'    => $request->input('meta_keywords'),
            'slug'             => Str::slug($request->input('title')),

            'status'           => $request->input('status'),
            'display_on_home'  => (bool) $request->input('display_on_home', false),
            'canonicals'       => $request->input('canonicals'),
            'blog_schema'           => $request->input('blog_schema'),
        ];

        // Only if the user has uploaded new images do we delete old ones and store new
        if ($request->hasFile('images')) {
            // 1) Delete old images from disk (if any)
            if (!empty($blog->images) && is_array($blog->images)) {
                foreach ($blog->images as $oldPath) {
                    Storage::disk('public')->delete($oldPath);
                }
            }

            // 2) Store new ones and overwrite $data['images']
            $newImagePaths = [];
            foreach ($request->file('images') as $image) {
                $newImagePaths[] = $image->store('blog_images', 'public');
            }
            $data['images'] = $newImagePaths;
        }

        // Now update all fields at once
        $blog->update($data);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }




    // Delete blog
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully!');
    }
}
