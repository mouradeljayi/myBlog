@extends('layouts.app')

@section('content')

<main class="container mx-auto px-6 mt-28">
  <h2 class="text-white text-2xl mt-4">{{ $post->title }}</h2>
  <img src="{{ $post->image }}" class="mt-6" alt="{{ $post->title }}">
  <div class="flex text-green-500 mt-2">
    <small><i class="fas fa-user-edit"></i> Mourad EL Jayi</small> <i class="fas fa-ellipsis-v ml-4 mr-4"></i>
     <small><i class="fas fa-clock"></i> {{ $post->created_at->diffForHumans() }}</small>
  </div>
  <article class="mt-8 text-white">
    <p>{{ $post->body }}</p>
  </article>
</main>

@endsection
