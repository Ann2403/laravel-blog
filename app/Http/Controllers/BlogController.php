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
       /* // getting the most used tags
        $tags_all = Tag::all();
        $tags_count = [];
        foreach ($tags_all as $tag) {
            $tag_count = $tag->posts()->where('tag_id', $tag->id)->count();
            $tags_count[$tag->id] = $tag_count;
        }
        $tags = [];
        foreach ($tags_count as $key => $value) {
            $count = 0;
            if($count < 8 && $value === max($tags_count)) {
                $tags = Tag::query()->find($key);
                unset($tags_count[$key]);
            }
        }

        dd($tags);*/

        return view('blog.index', compact(['posts', 'categories']));
    }

    public function post($slug) {
        $post = Post::query()->where('slug', $slug)->firstOrFail();
        $post->views += 1;
        $post->save();

        $related_posts = Post::query()->where('category_id', $post->category->id)
                                        ->where('id', '!=', $post->id)->get();
        return view('blog.post', compact(['post', 'related_posts']));
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
