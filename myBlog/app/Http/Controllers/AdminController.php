<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AdminController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function dashboard()
    {
      $posts = Post::latest()->paginate(9);
      return view('admin.dashboard', compact('posts'));
    }
}
