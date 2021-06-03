@extends('layouts.app')

@section('content')

<main class="mt-28">
  <section class="mt-20 flex flex-col md:flex-row text-white md:justify-center md:items-center">
    <div class="">
      <img src="{{ asset('images/spring.jpg') }}">
    </div>
    <div class="ml-4 mr-4 mt-4">
      <h1 class="uppercase text-2xl md:text-4xl">Framework Spring boot</h1>
      <p class="text-xl md:text-2xl mb-4 md:mb-10">The best JAVA Framework ?</p>
      <a href="" class="text-white bg-green-500 px-4 py-1 uppercase hover:bg-green-700">{{ __('posts.read_post') }} <i class="fas {{ __('posts.chevron') }}"></i> </a>
    </div>
  </section>
  <div class="border-t border-white mt-10"></div>

  <section class="container mx-auto px-8">
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
  </section>
</main>

@endsection
