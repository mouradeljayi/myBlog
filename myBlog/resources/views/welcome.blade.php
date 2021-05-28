@extends('layouts.app')

@section('content')

<main class="container mx-auto px-6 mt-20">
  <section class="text-center text-white border border-green-500 p-8">
    <h1 class="text-2xl mb-5 md:text-4xl tracking-widest">WELCOME TO MOURAD ELJAYI'S BLOG</h1>
    <p class="text-2xl mb-5">Where you will find various articles related to Programming & Web Development !</p>
    <a href="" class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-4">START READING</a>
  </section>

  <section class="mt-20 flex flex-col md:flex-row text-white md:justify-center md:items-center">
    <div class="w-full md:w-1/2">
      <img src="{{ asset('images/spring.jpg') }}">
    </div>
    <div class="mr-0 md:ml-4">
      <h1 class="uppercase text-2xl md:text-4xl">Framework Spring boot</h1>
      <p class="text-xl md:text-2xl mb-4 md:mb-10">The best JAVA Framework ?</p>
      <a href="" class="text-green-500 uppercase hover:text-green-700">View the post <i class="fas fa-chevron-right"></i> </a>
    </div>
  </section>

  <section class="mt-20 border-t border-white">
    <h2 class="text-left text-white text-2xl mt-4">Latest posts</h2>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-4 mt-6">
      <a href="#">
        <div class="bg-white rounded p-4">
          <img src="{{ asset('images/laravel_image.png') }}">
          <h4 class="font-bold mt-2">Introduction to PHP Laravel Framework</h4>
          <h6 class="text-sm"><i class="fas fa-user-edit"></i> By Mourad EL Jayi</h6>
          <small class="text-sm"><i class="fas fa-clock"></i> 10 Days ago</small>
        </div>
      </a>
    </div>
  </section>
  <div class="flex justify-end mt-2">
    <a href="" class="text-green-500 hover:text-green-700 font-bold">Show more</a>
  </div>
</main>

@endsection
