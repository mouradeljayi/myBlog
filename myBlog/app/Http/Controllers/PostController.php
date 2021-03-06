<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

class PostController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth')->except(['index', 'show']);
    }
    public function index(Request $request)
    {
      $keyword = isset($request->keyword) && $request->keyword != '' ? $request->keyword : null;

      $posts = Post::orderBy('created_at', 'desc');

      if(!is_null($keyword)) {
        $posts = $posts->search($keyword, null, true);
      }

      $posts = $posts->paginate(9);

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

    public function store(Request $request)
    {
        $niceNames = [];
        $attr = [];

        foreach (config('locales.languages') as $key => $val) {
            $attr['title.' . $key] = 'required';
            $attr['body.' . $key] = 'required';
            $attr['image'] = 'required';
            $niceNames['title.' . $key] = __('posts.title'). ' (' . $val['name'] . ')';
            $niceNames['body.' . $key] = __('posts.body'). ' (' . $val['name'] . ')';
        }

        $validation = Validator::make($request->all(), $attr);
        $validation->setAttributeNames($niceNames);
        if ($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }

        if($request->has('image'))
        {
          $file = $request->image;
          $imageName = time() . "_" . $file->getClientOriginalName();
          $file->move(public_path('images/posts'), $imageName);
        }

        $data['image'] = $imageName;
        $data['title'] = $request->title;
        $data['body'] = $request->body;


        $post = Post::create($data);

        if ($post) {
            return redirect()->route('posts.show', $post)
                             ->with('success', 'Post Created successfully');
        }
    }

    public function edit($post)
    {
      $post = Post::where('slug->' . app()->getLocale(), $post)->first();

      return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $post)
    {
        $niceNames = [];
        $attr = [];

        foreach (config('locales.languages') as $key => $val) {
            $attr['title.' . $key] = 'required';
            $attr['body.' . $key] = 'required';
            $niceNames['title.' . $key] = __('posts.title'). ' (' . $val['name'] . ')';
            $niceNames['body.' . $key] = __('posts.body'). ' (' . $val['name'] . ')';
        }

        $validation = Validator::make($request->all(), $attr);
        $validation->setAttributeNames($niceNames);
        if ($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $post = Post::where('slug->' . app()->getLocale(), $post)->first();

        if($request->has('image'))
        {
          unlink(public_path('images/posts/' . $post->image));
          $file = $request->image;
          $imageName = time() . "_" . $file->getClientOriginalName();
          $file->move(public_path('images/posts'), $imageName);
          $post->image = $imageName;
        }

        $data['image'] = $post->image;
        $data['title'] = $request->title;
        $data['body'] = $request->body;

        $update = $post->update($data);

        if ($update) {
            return redirect()->route('posts.show', $post)
                             ->with('success', 'Post Updated successfully');
        }
    }

    public function destroy($post)
    {

       $post = Post::where('slug->' . app()->getLocale(), $post)->first();
       unlink(public_path('images/posts/' . $post->image));
       $post->delete();

        if ($post) {
            return redirect()->route('dashboard')
                             ->with('success', 'Post deleted successfully');
        }
    }

}
