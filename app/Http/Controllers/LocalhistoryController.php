<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class LocalhistoryController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->where('is_published', 1)->where('category_id', 4)->orderBy('id', 'desc')->paginate(15);
        return view('local_history.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->views += 1;
        $post->update();
        return view('posts.show', compact('post'));
    }
}
