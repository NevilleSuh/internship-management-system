<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'location',
        'type',
        'number',
        'descriptions',
        'responsibilities',
        'benefits',
        'start',
        'duration',
        'deadline',
        'requirements',
        'skills',
        'instruction',
        'person',
        'email',
        'phone',
        'status',
        'category_id',
        'institution_id',
    ];
}
