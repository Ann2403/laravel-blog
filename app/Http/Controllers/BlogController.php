<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::query()->with(['category', 'tags'])->orderBy('id', 'desc')
                                ->paginate(3);
        $categories = Category::all();

        return view('blog.index', compact(['posts', 'categories']));
    }

    public function post($slug) {
        return view('blog.post');
    }

    public function category($slug) {
        $category = Category::query()->where('slug', $slug)->first();
        $posts = Post::query()->with(['category', 'tags'])->where('category_id', $category->id)
                                ->orderBy('id', 'desc')->paginate(3);
        $categories = Category::all();

        return view('blog.index', compact(['posts', 'categories']));
    }

    public function tag($slug) {
        $tag = Tag::query()->where('slug', $slug)->first();
        $posts = $tag->posts()->where('tag_id', $tag->id)->paginate(3);
        $categories = Category::all();

        return view('blog.index', compact(['posts', 'categories']));
    }
}
