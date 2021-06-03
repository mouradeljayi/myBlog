@extends('layouts.app')

@section('content')

<main class="container mx-auto px-6 mt-28">
  <h2 class="text-3xl text-center text-green-500 mt-6 mb-6 uppercase">{{ __('posts.latest_posts') }}</h2>
  <div class="grid grid-cols-1 gap-4 md:grid-cols-3 mt-6">
    @foreach($posts as $post)
    <a href="{{ route('posts.show', $post) }}">
      <div class="shadow-lg">
        <img src="{{ $post->image }}" alt="{{ $post->title }}">
        <div class="bg-gray-200 p-4">
          <h4 class="text-xl font-bold">{{ $post->title }}</h4>
          <h6 class="text-sm mt-4"><i class="fas fa-user-edit"></i> {{ __('posts.author') }}</h6>
          <small class="text-sm"><i class="fas fa-clock"></i> {{ $post->created_at->diffForHumans() }}</small>
        </div>
      </div>
    </a>
    @endforeach
  </div>
</main>

@endsection
