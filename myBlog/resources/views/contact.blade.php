@extends('layouts.app')

@section('content')

  <section class="container mx-auto px-4 mt-28 mb-40">
    <h1 class="uppercase text-green-500 text-2xl mb-5">{{ __('posts.contact') }}</h1>
    <div class="rounded bg-gray-200 p-6">
      <img src="{{ asset('images/avatar.jpg') }}" alt="creator image" class="rounded-full mt-10 border-4 border-green-500" width="200" height="200">
      <p class="mt-10 text-lg tracking-wide">{{ __('posts.contact_page') }}</p>
      <div class="flex justify-center items-center text-green-500 mt-10 justify-center items-center">
        <a href="https://www.facebook.com/mourad.eljayi/" target="_blank"> <i class="fab fa-facebook fa-2x ml-4"></i> </a>
        <a href="https://www.twitter.com/mouradeljayi" target="_blank"> <i class="fab fa-twitter fa-2x ml-4"></i> </a>
        <a href="https://www.instagram.com/muradelj" target="_blank"> <i class="fab fa-instagram fa-2x ml-4"></i> </a>
        <a href = "mailto:mouradeljayi98@gmail.com"> <i class="fas fa-envelope fa-2x ml-4"></i> </a>
        <a href="https://www.linkedin.com/in/mouradeljayi/" target="_blank"> <i class="fab fa-linkedin fa-2x ml-4"></i> </a>
        <a href="https://www.github.com/mouradeljayi" target="_blank"> <i class="fab fa-github fa-2x ml-4 "></i> </a>
      </div>
    </div>
  </section>

@endsection
