<?php

namespace App\Http\Controllers;

use App\Post;
use App\category;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        // dd($posts);
        return view("posts.index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::all();
        $tags = Tag::all();

        return view('posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd($request->all());

      $validate = $request->validate([
        'title' => 'required',
        'body' => 'required',
        'tags' => 'exists:tags,id'
      ]);

      Post::create($validate);

      // $post = new Post;
      // $post->title = request('title');
      // $post->body = request('body');
      // $post->save();

      $new_post = Post::orderBy('id', 'desc')->first();

      $categories = category::all();
      $new_post->tags()->attach($request->tags);
      return redirect()->route('posts.index', compact('categories', 'new_post'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
      // dd($post);
      return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        // dd($post);
        $categories = category::all();
        $tags = Tag::all();
        return view('posts.edit', compact('post', 'tags', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

      $validate = $request->validate([
        'title' => 'required',
        'body' => 'required',
      ]);

      // $data = $request->all();
      // $post->update($data);
      $post->update($validate);
      $post->tags()->sync($request->tags);
      return redirect()->route('posts.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // dd($post);
        $post->delete();
        return redirect()->route('posts.index');

    }
}
