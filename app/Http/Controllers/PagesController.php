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
        $posts = Post::with('tags')->published()->orderBy('published_at', 'desc')->paginate(4);
        return view('pages.blog', compact('posts'));
    }
    
    public function getPost($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('pages.post', compact('post'));
    }
    
    public function faq()
    {
        return view('pages.faq');
    }
    
    public function contact()
    {
        return view('pages.contact');
    }
}
