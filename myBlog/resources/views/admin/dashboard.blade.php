@extends('layouts.app')

@section('content')

<main class="container mx-auto px-8 mt-28 mb-40">
  @if ($message = Session::get('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 mb-4 rounded relative">
       <span class="block sm:inline">{{ $message }}</span>
     </div>
  @endif
  <div class="flex justify-between items-center">
    <h1 class="text-lg md:text-2xl uppercase text-green-500">Dashboard </h1>
    <a href="{{ route('posts.create') }}" class="bg-green-500 py-1 px-4 border border-green-500 text-gray-200 hover:bg-green-600">Add post</a>
    <a href="{{ route('logout') }}" class="bg-green-500 py-1 px-4 border border-green-500 text-gray-200 hover:bg-green-600">Logout</a>
  </div>
  <div class="mt-10">

    <table class="border-collapse w-full">
          <thead>
              <tr>
                  <th class="p-3 font-bold bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Title</th>
                  <th class="p-3 font-bold bg-gray-200 text-gray-600 border border-gray-300 hidden lg:table-cell">Actions</th>
              </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
            <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
              <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Title</span>
                  {{ $post->title }}
              </td>
              <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                  <span class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Actions</span>
                    <div class="flex justify-center items-center text-white">
                      <a href="{{ route('posts.edit', $post) }}" class="bg-green-500 py-1 px-2"> <i class="fas fa-edit"></i> </a>
                      <a class="bg-red-500 ml-4 mr-4 py-1 px-2" href="javascript:void(0);" onclick="if (confirm('Are you sure?')) { document.getElementById('delete-post-{{ $post->id }}').submit(); } else { return false; }"><i class="fas fa-trash"></i></a>
                      <form action="{{ route('posts.destroy', $post) }}" method="post" id="delete-post-{{ $post->id }}" >
                        @csrf
                        @method('DELETE')
                      </form>
                  </div>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
  </div>
<div class="mt-10">
  {{ $posts->links() }}
</div>

</main>

@endsection
