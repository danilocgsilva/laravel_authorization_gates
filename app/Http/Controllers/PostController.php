<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::published()->paginate();
        return view('posts.index', compact('posts'));
    }
}
