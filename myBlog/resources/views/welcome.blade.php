@extends('layouts.app')

@section('content')

<style media="screen">
  #background {
    background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url("{{ asset('images/hero-image.jpg') }}");
  	background-size: cover;
  	height: 100vh;
  	background-attachment: fixed;
  }
</style>

<main class="mt-16">
  <header id="background">
    <div class="container mx-auto px-6 text-center pt-32 text-white">
      <p class="text-2xl md:text-4xl intro uppercase mb-5">{{ __('posts.welcome') }} <span class="text-green-500">{{ __('posts.personal_blog') }}</span> @if(config('locales.languages')[app()->getLocale()]['name'] === 'الدارجة') ديال مراد الجايي @elseif(config('locales.languages')[app()->getLocale()]['name'] === 'Français') DE MOURAD EL JAYI @endif </p>
      <p class="text-xl">{{ __('posts.intro') }}</p>
      <p class="text-xl">{{  __('posts.hope') }}</p>
      <div class="mt-6">
        <a href="{{ route('posts.index') }}" class="bg-green-600 hover:bg-green-800 px-4 py-1 uppercase">{{ __('posts.browse_posts') }}</a>
      </div>
    </div>
  </header>
  <section class="pb-6 md:pb-0 flex flex-col md:flex-row text-white md:justify-center md:items-center border border-white">
    <div>
      <img src="{{ asset('images/laravel_image.png') }}">
    </div>
    <div class="ml-4 mr-4 mt-4">
      <h1 class="uppercase text-xl md:text-3xl">Introduction to Laravel Framework</h1>
      <p class="text-base md:text-xl mb-4 md:mb-10">Laravel is one of the best PHP Framework for building server-side web application...</p>
      <a href="" class="text-white bg-green-500 px-4 py-1 uppercase hover:bg-green-700">{{ __('posts.read_post') }} <i class="fas {{ __('posts.chevron') }}"></i> </a>
    </div>
  </section>


  <section class="container mx-auto px-8">
    <h2 class="text-3xl text-center text-green-500 mt-6 mb-6 uppercase">{{ __('posts.latest_posts') }}</h2>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-3 mt-6">
      @foreach($posts as $post)
      <a href="{{ route('posts.show', $post) }}">
        <div class="shadow-lg hover:border-green-500 transform hover:scale-90">
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
