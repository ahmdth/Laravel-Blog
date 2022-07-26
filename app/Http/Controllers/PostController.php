<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view("posts.index")->with([
            "posts" => Post::latest()->filter(request(["search", "category"]))->paginate(6),
            "categories" => $categories,
        ]);
    }

    public function show(Post $post)
    {
        return view("posts.show", compact("post"));
    }
    public function storeComment(Post $post, Request $request)
    {
        $request->validate([
            'body' => ['required', 'min:3'],
        ]);
        $post->comments()->create([
            'user_id' => auth()->id(),
            'body' => $request->body
        ]);
        return redirect()->back();
    }
    public function create()
    {
        return view('posts.create');
    }
}
