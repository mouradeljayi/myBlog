@extends('layouts.app')

@section('content')

<main class="container mx-auto px-6 {{ $posts->count() > 0 ? 'mt-28' : 'mb-96 mt-80' }}">
  @if($posts->count() > 0)
    <h2 class="text-3xl text-center text-green-500 mt-6 mb-6 uppercase">{{ __('posts.latest_posts') }}</h2>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-3 mt-6">
      @foreach($posts as $post)
      <a href="{{ route('posts.show', $post) }}">
        <div class="shadow-lg transform hover:scale-90">
          <img src="{{ asset('/images/posts/' . $post->image) }}" alt="{{ $post->title }}">
          <div class="bg-gray-200 p-4">
            <h4 class="text-xl font-bold">{{ $post->title }}</h4>
            <h6 class="text-sm mt-4"><i class="fas fa-user-edit"></i> {{ __('posts.author') }}</h6>
            <small class="text-sm"><i class="fas fa-clock"></i> {{ $post->created_at->diffForHumans() }}</small>
          </div>
        </div>
      </a>
      @endforeach
    </div>
  @else
    <section class="mt-20 text-white text-center text-2xl">
      NO POSTS FOR THE MOMENT !
    </section>
  @endif
</main>

@endsection
