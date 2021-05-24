<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    
    public function index()
    {
        $posts = Post::latest()->limit(3)->get();
        return view('publics.index',compact('posts'));
    }


    
    public function show(Post $public)
    {
        return view('publics.show',compact('public'));
    }
}
