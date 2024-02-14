<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function contact()
    {
        return view('/contact');
    }

    public function about()
    {
        return view('/about');
    }

    public function userPosts()
    {
        $posts = Post::latest()->paginate(3);

        return view('user-posts', ['posts' => $posts]);
    }
}
