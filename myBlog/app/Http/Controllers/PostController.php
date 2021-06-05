<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth')->except(['index', 'show']);
    }
    public function index()
    {
      $posts = Post::latest()->get();
      return view('posts.index', compact('posts'));
    }

    public function show($post)
    {
      $post = Post::where('slug->' . app()->getLocale(), $post)->first();
      return view('posts.show', compact('post'));
    }

    public function create()
    {
      return view('posts.create');
    }

    public function store()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }

}
