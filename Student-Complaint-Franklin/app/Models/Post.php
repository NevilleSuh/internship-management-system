<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'location',
        'type',
        'compensation',
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

    protected $casts = [
        'descriptions' => 'array',
        'responsibilities' => 'array',
        'benefits' => 'array',
        'skills' => 'array',
        'requirements' => 'array',
        'instruction' => 'array',

        'start' => 'datetime',


    ];


    public function institution(){
        return $this->belongsTo(Institution::class);
    }
}
