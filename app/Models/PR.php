<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PR extends Model
{
    protected $fillable = [
        'card_title',
        'pr_title',
        'description',
        'link',
        'img',
        'post_date'
    ];
}
