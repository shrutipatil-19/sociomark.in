<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobpost extends Model
{
    protected $table = 'jobposts';

    protected $fillable = [
        'title',
        'description',
        'location',
        'compensation',
        'role_overview',
        'responsibilities',
        'requirements',
        'target_services',
        'industry',
        'position',
        'experience'
    ];

    protected $casts = [
        'compensation' => 'array',
        'responsibilities' => 'array',
        'requirements' => 'array',
        'target_services' => 'array',
    ];
}
