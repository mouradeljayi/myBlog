@extends('layouts.app')

@section('content')

  <section class="container mx-auto px-4 mt-28 mb-40">
    <h1 class="uppercase text-green-500 text-2xl mb-5">{{ __('posts.about') }}</h1>
    <div class="rounded bg-gray-200 p-6">
      <p class="text-lg tracking-wide">{{ __('posts.about_page') }}</p>
    </div>
  </section>

@endsection
