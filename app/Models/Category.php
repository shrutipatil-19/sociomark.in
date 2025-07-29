<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{


    protected $fillable = [
        'category_name',
        'description',
        'slug',
        'canonicals',
        'blog_schema',
        'meta_title',
        'meta_description',
    ];

    // Automatically set slug on creating category
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($category) {
            $category->slug = Str::slug($category->category_name);
        });
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
