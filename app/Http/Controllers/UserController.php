<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $currentUser = 1;

        $users = User::whereHas('posts')->get();

        $users->each(function ($user) {
            $user->setRelation('posts', $user->posts()->limit(5)->get());
        });


        // Retrieve posts liked by the current user
        $postStatuses = Post::whereHas('likedByUsers', function ($query) use ($currentUser) {
            $query->where('post_user.user_id', $currentUser);
        })->get();

        // dd($posts);
        // $postStatuses = [];

        // foreach ($posts as $post) {
        //     $hasLiked = $post->likedByUsers->contains($currentUser);
        //     $postStatuses[] = [
        //         'post' => $post->post,
        //         'liked' => $hasLiked ? 'Yes' : 'No',
        //     ];
        // }

        return view('welcome', compact('users', 'postStatuses'));
    }
}
