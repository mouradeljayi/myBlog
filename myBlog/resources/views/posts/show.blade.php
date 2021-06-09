@extends('layouts.app')

@section('content')

<main class="container mx-auto px-6 mt-28">
   @if ($message = Session::get('success'))
     <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
        <span class="block sm:inline">{{ $message }}</span>
      </div>
   @endif
  <h2 class="text-white text-xl md:text-3xl mt-4">{{ $post->title }}</h2>
  <img src="{{ asset('/images/posts/' . $post->image) }}" class="mt-6" alt="{{ $post->title }}">
  <div class="flex text-green-500 mt-2">
    <small><i class="fas fa-user-edit"></i> Mourad EL Jayi</small> <i class="fas fa-ellipsis-v ml-4 mr-4"></i>
     <small><i class="fas fa-clock"></i> {{ $post->created_at->diffForHumans() }}</small>
  </div>
  <article class="mt-8 text-white tracking-wider">
    {!! $post->body !!}
  </article>
</main>

@endsection
