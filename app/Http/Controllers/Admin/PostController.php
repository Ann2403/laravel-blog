<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePost;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //получаем посты и связи category и tags
        $posts = Post::query()->with('category', 'tags')->paginate(5);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::query()->pluck('title', 'id')->all();
        $tags = Tag::query()->pluck('title', 'id')->all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StorePost $request)
    {

        $data = $request->all();

        $data['thumbnail'] = Post::uploadImage($request);

        $post = Post::query()->create($data);
        $post->tags()->sync($request->tag_id);

        return redirect()->route('admin.posts.index')->with('success', 'Post add');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::query()->find($id);
        $categories = Category::query()->pluck('title', 'id')->all();
        $tags = Tag::query()->pluck('title', 'id')->all();

        return view('admin.posts.edit', compact('categories', 'tags', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(StorePost $request, $id)
    {
        $post = Post::query()->find($id);
        $data = $request->all();

        $data['thumbnail'] = Post::uploadImage($request, $post->thumbnail);

        $post->tags()->sync($request->tag_id);
        $post->update($data);

        return redirect()->route('admin.posts.index')->with('success', 'Post changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $post = Post::query()->find($id);
        $post->tags()->sync([]);
        Storage::delete($post->thumbnail);
        $post->delete();
        return redirect()->route('admin.posts.index')->
                with('success', 'Post delete');
    }
}
