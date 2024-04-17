<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\logo;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $logos = logo::all();
        $categories = Category::with('posts')->get();
        return view('index', compact( 'categories','logos'));
    }
    public function show($id)
{
    $post = Post::find($id);
    return view('posts.show', ['posts' => $post, 'title' => $post->title]);
}
}
