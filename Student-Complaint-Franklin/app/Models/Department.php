<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

    protected $fillable = [
        'code',
        'name',
        'admin_id'
    ];

    public function courses(){
        return $this->hasMany(Course::class);
    }
    public function students(){
        return $this->hasMany(Student::class);
    }
    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}
