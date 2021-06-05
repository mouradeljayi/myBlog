@extends('layouts.app')

@section('content')

<section class="container mx-auto px-8 mt-40 flex justify-center">
  <div class="w-full max-w-xs">
    <h1 class="text-2xl text-green-500 text-white text-center mb-2">LOGIN</h1>
    <form method="post" action="{{ route('authenticate') }}" class="bg-gray-200 shadow-md rounded px-8 pt-6 pb-8 mb-4">
      @csrf
      <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
          E-mail
        </label>
        <input name="email" class="shadow appearance-none border rounded w-full py-2 px-3 mb-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" placeholder="E-mail">
        <p class="text-red-500 text-xs">@error('email') {{ $message }} @enderror</p>
      </div>
      <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
          Password
        </label>
        <input name="password" class="shadow appearance-none rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="password" placeholder="Password">
        <p class="text-red-500 text-xs">@error('password') {{ $message }} @enderror</p>
      </div>
      <div class="flex items-center justify-between">
        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
          Sign In
        </button>
      </div>
    </form>
    <p class="text-center text-gray-500 text-xs">
      &copy;2021 Mourad EL Jayi |Blog. All rights reserved.
    </p>
  </div>
</section>

@endsection
