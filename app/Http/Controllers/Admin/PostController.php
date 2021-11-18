<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Post;
use App\Category;
use App\Tag;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

class PostController extends Controller
{
    protected $validator = [
        'title' => ['required', 'string', 'max:100'],
        'slug' => ['nullable', 'string', 'max:100'],
        'content' => ['required', 'string'],
        'url_thumb' => ['required', 'url', 'ends_with:.jpg'],
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index', ['posts' => Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create', ['categories' => Category::all(), 'tags' => Tag::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validator);
        $data = $request->all();
        $data['slug'] = $data['slug'] === NULL
            ? Str::slug($data['title'], '-')
            : Str::slug($data['slug'], '-');
        $data['tags'] = $data['tags'] ?? [];
        $newPost = Post::create($data);
        $newPost->tags()->attach($data['tags']);
        return redirect()->route('admin.posts.show', ['post' => $newPost]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['post' => $post, 'categories' => Category::all(), 'tags' => Tag::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate($this->validator);
        $data = $request->all();
        $data['slug'] = $data['slug'] === NULL
            ? Str::slug($data['title'], '-')
            : Str::slug($data['slug'], '-');
        $data['tags'] = $data['tags'] ?? [];
        $post->update($data);
        $post->tags()->sync($data['tags']);
        return redirect()->route('admin.posts.show', compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index', ['posts' => Post::all()]);
    }
}
