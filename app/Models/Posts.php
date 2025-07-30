<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_title',
        'title',
        'content',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'slug',
        'tags',
        'categories',
        'images',
        'status',
        'display_on_home',
        'canonicals',
        'blog_schema',
    ];

    protected $casts = [
        'tags' => 'array',
        'categories' => 'array',
        'images' => 'array',
        'display_on_home' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Optional: get full category objects
    public function categoryObjects()
    {
        return Category::whereIn('id', $this->categories ?? [])->get();
    }

    // Optional: get full tag objects
    public function tagObjects()
    {
        return Tag::whereIn('id', $this->tags ?? [])->get();
    }

    // ✅ Used in Blade: $blog->category_names
    public function getCategoryNamesAttribute()
    {
        return Category::whereIn('id', $this->categories ?? [])->pluck('category_name')->toArray();
    }

    public function getTagNamesAttribute()
    {
        return Tag::whereIn('id', $this->tags ?? [])->pluck('name')->toArray();
    }
    public function getImagesAttribute($value)
    {
        return is_string($value) ? json_decode($value, true) : $value;
    }
}
