<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->orderBy('id', 'desc')->paginate(1);
        return view('posts.index', compact('posts'));
    }

    public function show($slug)
    {
        return view('posts.show');
    }
}
