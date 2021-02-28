<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
class MyController extends Controller
{
    public function home()
    {
      return view('home');
    }

    public function about()
    {
      return view('about');
    }

    public function blog()
    {
      $posts = Post::all();
      $tags = Tag::all();
      return view('blog', compact('posts', 'tags'));
    }

    public function posts_api()
    {
      return view('spa.posts');
    }

}
