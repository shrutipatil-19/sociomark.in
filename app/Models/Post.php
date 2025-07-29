<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'tags',
        'image',
        'display_on_home',
        'status',
        'cat_id',
    ];

    // Relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
}
