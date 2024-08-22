<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function likedPosts()
    {
        return $this->belongsToMany(Post::class, 'post_user');
    }

}
