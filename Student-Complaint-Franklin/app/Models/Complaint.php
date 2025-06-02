<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $fillable = [
        'subject',
        'academic_year',
        'description',
        'comment',
        'category',
        'status',
        'course_id',
        'student_id',
    ];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function files(){
        return $this->hasMany(File::class);
    }
}
