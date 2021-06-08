@extends('layouts.app')

@section('content')

  <section class="container mx-auto px-8 mt-28">
    <h1 class="uppercase text-green-500 text-2xl">{{ __('posts.about') }}</h1>
    <p class="text-white mt-10 mb-40 text-lg tracking-wide">{{ __('posts.about_page') }}</p>
  </section>

@endsection
