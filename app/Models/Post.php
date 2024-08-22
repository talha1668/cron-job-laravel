<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function likedByUsers()
    {
        return $this->belongsToMany(User::class, 'post_user');
    }
    public function images()
    {
        return $this->hasMany(Post::class);
    }
}
