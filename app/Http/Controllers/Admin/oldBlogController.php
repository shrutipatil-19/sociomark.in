<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\PostInc;

class oldBlogController extends Controller
{
    public function index()
    {
        $blogs = Post::with('category')->latest()->get();
        return view('admin/Pages/Blog/Blogs', compact('blogs'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin/Pages/Blog/AddBlog', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'cat_id' => 'required|exists:categories,id', // Ensure category exists
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle Image Upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog_images', 'public');
        }

        // Create a new blog post
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'meta_title' => $request->meta_title ?? '', // Default empty string
            'meta_description' => $request->meta_description ?? '',
            'meta_keywords' => $request->meta_keywords ?? '',
            'tags' => $request->tags ?? '',
            'cat_id' => $request->cat_id, // Fixed this field
            'image' => $imagePath,
            'display_on_home' => $request->display_on_home ?? 'no', // Default to 'no'
            'status' => $request->status ?? 's_act', // Default to 'Active'
        ]);

        return redirect()->back()->with('success', 'Blog post created successfully!');
    }
    public function edit($id)
    {
        $blog = Post::findOrFail($id);
        $categories = Category::all();
        return view('admin/Pages/Blog/EditBlog', compact('blog', 'categories'));
    }

    /**
     * Update the specified post in storage.
     */
    public function update(Request $request, $id)
    {
        $blog = Post::findOrFail($id);
    
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'cat_id' => 'required|exists:categories,id', // Ensure category exists
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Keep the existing image if no new image is uploaded
        $imagePath = $blog->image;
    
        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog_images', 'public');
        }
    
        // Update the blog post
        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
            'meta_title' => $request->meta_title ?? '', // Default empty string
            'meta_description' => $request->meta_description ?? '',
            'meta_keywords' => $request->meta_keywords ?? '',
            'tags' => $request->tags ?? '',
            'cat_id' => $request->cat_id,
            'image' => $imagePath, // Ensure image is updated correctly
            'display_on_home' => $request->display_on_home ?? 'no', // Default to 'no'
            'status' => $request->status ?? 's_act', // Default to 'Active'
        ]);
    
        return redirect()->route('showblogs')->with('success', 'Blog post updated successfully!');
    }
    

    /**
     * Remove the specified post from storage.
     */
    public function destroy($id)
    {
        $blog = Post::findOrFail($id);
        $blog->delete();

        return redirect()->route('showblogs')->with('success', 'Blog post deleted successfully!');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required|string|max:255',
    //         'content' => 'required',
    //         'meta_title' => 'nullable|string|max:255',
    //         'meta_description' => 'nullable|string|max:255',
    //         'meta_keywords' => 'nullable|string|max:255',
    //         'tags' => 'nullable|string',
    //         'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'display_on_home' => 'boolean',
    //         'status' => 'required|boolean', // Ensures status is 0 or 1
    //         'cat_id' => 'required|exists:categories,id',
    //     ]);

    //     $data = $request->all();
    //     $data['slug'] = Str::slug($request->title);
    //     $data['tags'] = json_encode(explode(',', $request->tags));

    //     if ($request->hasFile('image')) {
    //         $data['image'] = $request->file('image')->store('blog_images', 'public');
    //     }

    //     Post::create($data);

    //     return redirect()->route('addblog')->with('success', 'Blog post created successfully!');
    // }
}
