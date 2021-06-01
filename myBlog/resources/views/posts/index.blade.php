@extends('layouts.app')

@section('content')

<main class="container mx-auto px-6 mt-20">
  <h2 class="text-left text-white text-2xl mt-4">All posts</h2>
  <div class="grid grid-cols-1 gap-4 md:grid-cols-3 mt-6">
    @foreach($posts as $post)
    <a href="#">
      <div class="bg-white rounded p-4">
        <img src="{{ $post->image }}">
        <h4 class="font-bold mt-2">{{ $post->title }}</h4>
        <h6 class="text-sm"><i class="fas fa-user-edit"></i> By Mourad EL Jayi</h6>
        <small class="text-sm"><i class="fas fa-clock"></i> {{ $post->created_at->diffForHumans() }}</small>
      </div>
    </a>
    @endforeach
  </div>
</main>

@endsection
