<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }
    
    public function blog()
    {
        $posts = Post::with('tags')->published()->orderBy('published_at', 'desc')->get();
        return view('pages.blog', compact('posts'));
    }
}
