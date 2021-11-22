<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('show', compact('post'));
    }

    public function api()
    {
        return view('vue');
    }
}
