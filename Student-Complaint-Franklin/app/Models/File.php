<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'path',
        'ext',
        'complaint_id'
    ];



    public function complaint(){
        return $this->belongsTo(Complaint::class);
    }
}
