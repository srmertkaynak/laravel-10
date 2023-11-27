<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = "Blog";
        $posts = Post::get();

        return view('posts.index', compact('title', 'posts'));
    }
}
