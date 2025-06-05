<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'education',
        'field',
        'cv',
        'letter',
        'id_card',
        'additional',
        'reason',
        'skill',
        'student_id',
        'post_id',
        'status',
        'message',
    ];


    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
