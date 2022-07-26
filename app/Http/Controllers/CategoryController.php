<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view("categories.index", compact("categories"));
    }

    public function show(Category $category)
    {
        $posts = $category->posts;
        $categories = Category::all();
        return view("categories.show", compact(['category', 'categories', 'posts']));
    }
    public function create()
    {
        return view("categories.create");
    }
    public function store(Request $request)
    {
        $cerdintiales = $request->validate([
            "name"=>"required|string",
            "slug"=>"required"
        ]);
        Category::create($cerdintiales);
        return back();
    }
}
