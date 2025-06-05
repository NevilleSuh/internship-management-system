<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Institution extends Authenticatable
{
    //
    use HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'tell',
        'website',
        'person',
        'industry',
        'Description',
        'location',
        'password',
        'admin_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function admin(){
        return $this->belongsTo(Admin::class);
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

    public function applications()
    {
        return $this->hasManyThrough(Application::class, Post::class);
    }
}

