@extends('layouts.app')

@section('content')

<style media="screen">
  #background {
    background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url("{{ asset('images/hero-image.jpg') }}");
  	background-size: cover;
  	height: 80vh;
  	background-attachment: fixed;
  }
</style>

<main class="mt-16">
  <header id="background">
    <div class="container mx-auto px-6 text-center pt-20 text-white">
      <p class="text-xl md:text-4xl intro uppercase mb-5">{{ __('posts.welcome') }} <span class="text-green-500">{{ __('posts.personal_blog') }}</span> @if(config('locales.languages')[app()->getLocale()]['name'] === 'الدارجة') ديال مراد الجايي @elseif(config('locales.languages')[app()->getLocale()]['name'] === 'Français') DE MOURAD EL JAYI @endif </p>
      <p class="text-base">{{ __('posts.intro') }}</p>
      <p class="text-base">{{  __('posts.hope') }}</p>
      <div class="mt-6">
        <a href="{{ route('posts.index') }}" class="bg-green-600 hover:bg-green-800 px-4 py-1 uppercase">{{ __('posts.browse_posts') }}</a>
      </div>
    </div>
  </header>
  @if($last_post)
    <section class="pb-6 md:pb-0 flex flex-col md:flex-row text-white md:justify-center md:items-center border border-white">
      <div>
        <img src="{{ asset('/images/posts/' . $last_post->image) }}" alt="{{ $last_post->title }}">
      </div>
      <div class="ml-4 mr-4 mt-4">
        <h1 class="text-lg md:text-3xl">{{ $last_post->title }}</h1>
        <div class="mb-5 md:mb-10">
          <p class="text-base md:text-xl">{!! Str::limit($last_post->body, 50) !!}</p>
        </div>
        <a href="{{ route('posts.show', $last_post) }}" class="text-white bg-green-500 px-4 py-1 uppercase hover:bg-green-700">{{ __('posts.read_post') }} <i class="fas {{ __('posts.chevron') }}"></i> </a>
      </div>
    </section>
  @else
    <section class="mt-20 text-white text-center">
      {{ __('posts.no_posts') }}
    </section>
  @endif


@if($posts->count() > 0)
  <section class="container mx-auto px-8">
    <h2 class="text-3xl text-center text-green-500 mt-6 mb-6 uppercase">{{ __('posts.latest_posts') }}</h2>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-3 mt-6">
      @foreach($posts as $post)
      <a href="{{ route('posts.show', $post) }}">
        <div class="shadow-lg transform hover:scale-90">
          <img src="{{ asset('/images/posts/' . $post->image) }}" alt="{{ $post->title }}">
          <div class="bg-gray-200 p-4">
            <h4 class="text-lg font-bold">{{ $post->title }}</h4>
            <h6 class="text-sm mt-4"><i class="fas fa-user-edit"></i> {{ __('posts.author') }}</h6>
            <h6 class="text-sm"><i class="fas fa-clock"></i> {{ $post->created_at->diffForHumans() }}</h6>
          </div>
        </div>
      </a>
      @endforeach
    </div>
    <div class="mt-5">
    <a href="{{ route('posts.index') }}" class="text-green-600">{{  __('posts.show_more')}}</a>
    </div>
  </section>
@endif
</main>



@endsection
