@extends('layouts.app')

@section('content')

<main class="container mx-auto px-6 mt-20">
  <h1 class="text-2xl text-green-500 mb-5">EDIT A POST</h1>
  @if($errors->any())
    <div class="bg-white text-red-500 p-6">
      @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
      @endforeach
    </div>
  @endif
  <div class="bg-gray-200 rounded p-6">
    <form action="{{ route('posts.update', $post) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      @foreach(config('locales.languages') as $key => $val)

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
          Title ({{ $key }})
        </label>
        <input value="{{ old('title.' . $key, $post->getTranslation('title', $key)) }}" name="title[{{ $key }}]" class="text-xl shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('title.' . $key) }}">
      </div>

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
          Body ({{ $key }})
        </label>
        <textarea name="body[{{ $key }}]" rows="20" cols="80" class="text-xl shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('body.' . $key, $post->getTranslation('body', $key)) }}</textarea>
      </div>
      @endforeach

      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2">
          Image
        </label>
         <input type="file" name="image">
      </div>

      <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        UPDATE POST
      </button>

    </form>
  </div>
</main>

@endsection
