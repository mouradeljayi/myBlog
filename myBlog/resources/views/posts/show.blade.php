@extends('layouts.app')

@section('content')

<main class="container mx-auto px-6 mt-20">
  <a href="{{ route('posts.index') }}" class="text-white"> <i class="fas fa-chevron-left"></i> Return Back</a>
  <h2 class="text-left text-white text-4xl mt-4">{{ $post->title }}</h2>
  <img src="{{ $post->image }}" class="mt-6" alt="{{ $post->title }}">
  <div class="flex text-green-500  mt-2">
    <small><i class="fas fa-user-edit"></i> Mourad EL Jayi</small> <span class="ml-4">|</span>
    <small class="ml-4"><i class="fas fa-clock"></i> {{ $post->created_at->diffForHumans() }}</small>
  </div>
  <article class="mt-8 text-white">
    <p>{{ $post->body }}</p>
  </article>
</main>

@endsection
