<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = [
        'code',
        'name',
        'semester',
        'admin_id',
        'department_id',
        'year_id',
    ];

    public function admin(){
        return $this->belongsTo(Admin::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function year(){
        return $this->belongsTo(Year::class);
    }

    public function complaints(){
        return $this->hasMany(Complaint::class);
    }
}
