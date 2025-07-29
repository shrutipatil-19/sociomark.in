<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'canonicals',
        'blog_schema',
        'meta_title',
        'meta_description',
    ];
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
