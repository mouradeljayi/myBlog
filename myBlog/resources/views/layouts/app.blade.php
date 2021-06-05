<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ config('locales.languages')[app()->getLocale()]['rtl_support'] }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mourad EL Jayi | Blog</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
        <link href="/css/app.css" rel="stylesheet">
        <style>
          body {
            font-family: 'Cairo', sans-serif;
          }
        </style>
    </head>
    <body class="bg-gray-800">
        <div class="w-full text-gray-700 bg-gray-200 shadow-lg fixed inset-x-0 top-0 z-20">
          <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="p-4 flex flex-row items-center justify-between">
              <a href="/" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg focus:outline-none focus:shadow-outline">Mourad ELJayi <i class="fas fa-ellipsis-v"></i> <span class="text-green-600 text-xl">Blog</span> </a>
              <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                  <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                  <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
              </button>
            </div>
            <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
              <a class="px-4 py-2 mt-2 text-sm font-semibold md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-green-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline {{ \Route::currentRouteName() === 'welcome' ? 'text-gray-900 bg-green-500' : '' }}" href="/">{{ __('posts.home') }}</a>
              <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-green-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline {{ \Route::currentRouteName() === 'posts.index' || \Route::currentRouteName() === 'posts.show' ? 'text-gray-900 bg-green-500' : '' }}" href="{{ route('posts.index') }}">{{ __('posts.blog') }}</a>
              <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-green-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">{{ __('posts.about') }}</a>
              <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-green-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">{{ __('posts.contact') }}</a>
              <button class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-green-500 focus:bg-gray-200 focus:outline-none focus:shadow-outline {{ config('locales.languages')[app()->getLocale()]['name'] === 'الدارجة' ? 'text-right' : 'text-left' }} modal-open"><i class="fa fa-search"></i></button>
              <div @click.away="open = false" class="relative" x-data="{ open: false }">
                <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                  <span>{{ config('locales.languages')[app()->getLocale()]['name'] }} </span>
                  <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute {{ config('locales.languages')[app()->getLocale()]['name'] === "الدارجة" ? 'left-0' : 'right-0'  }} w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                  <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                    @foreach(config('locales.languages') as $key => $val)
                    @if($key != app()->getLocale())
                    <a href="{{ route('switchLang', $key) }}" class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                      <div class="flex items-center justify-between">{{ $val['name'] }} <img src="{{ asset('flags/' . $val['icon']) }}" alt="{{ $val['name'] }}" class="w-5"> </div>
                    </a>
                    @endif
                    @endforeach
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>

        @yield('content')

        <footer class="bg-gray-200 p-10 mt-20">
          <section class="container mx-auto px-4 flex items-center flex-col md:flex-row justify-between">
            <div class="mt-4 border-2 border-green-500 p-4">
              <a href="/" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg focus:outline-none focus:shadow-outline">Mourad ELJayi <i class="fas fa-ellipsis-v"></i> <span class="text-green-600 text-xl">Blog</span> </a>
            </div>
            <div class="mt-4">
              <p>Created with <i class="fas fa-heart fa-sm text-red-500"></i> by Mourad EL Jayi | 2021</p>
            </div>
            <div class="flex text-green-500 mt-4">
              <a href="#"> <i class="fab fa-facebook fa-lg ml-4"></i> </a>
              <a href="#"> <i class="fab fa-twitter fa-lg ml-4"></i> </a>
              <a href="#"> <i class="fab fa-instagram fa-lg ml-4"></i> </a>
              <a href="#"> <i class="fas fa-envelope fa-lg ml-4"></i> </a>
              <a href="#"> <i class="fab fa-linkedin fa-lg ml-4"></i> </a>
              <a href="#"> <i class="fab fa-github fa-lg ml-4"></i> </a>
            </div>
          </section>
        </footer>

        <!--Modal-->
        <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center z-20">
          <div class="modal-overlay absolute w-full h-full bg-black"></div>

          <div class="modal-container bg-gray-200 w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

            <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
              <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
              </svg>
              <span class="text-sm">(Esc)</span>
            </div>

            <!-- Add margin if you want to see some of the overlay behind the modal-->
            <div class="modal-content py-10 text-left px-6">
              <!--Title-->
              <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Search for a post</p>
                <div class="modal-close cursor-pointer z-50">
                  <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                  </svg>
                </div>
              </div>

              <!--Body-->
              <form class="flex mt-4 lg:mt-0">
                <input type="text" class="border border-green-500 py-1 px-2 w-80 lg:w-96 focus:outline-none focus:border-green-600" placeholder="Type your words">
                <button class="border-t border-r border-b border-green-500 py-1 px-6 bg-green-500 hover:bg-green-600 focus:outline-none"> <i class="fas fa-search text-gray-900"></i> </button>
              </form>

            </div>
          </div>
        </div>

        <script>
          var openmodal = document.querySelectorAll('.modal-open')
          for (var i = 0; i < openmodal.length; i++) {
            openmodal[i].addEventListener('click', function(event){
          	event.preventDefault()
          	toggleModal()
            })
          }

          const overlay = document.querySelector('.modal-overlay')
          overlay.addEventListener('click', toggleModal)

          var closemodal = document.querySelectorAll('.modal-close')
          for (var i = 0; i < closemodal.length; i++) {
            closemodal[i].addEventListener('click', toggleModal)
          }

          document.onkeydown = function(evt) {
            evt = evt || window.event
            var isEscape = false
            if ("key" in evt) {
          	isEscape = (evt.key === "Escape" || evt.key === "Esc")
            } else {
          	isEscape = (evt.keyCode === 27)
            }
            if (isEscape && document.body.classList.contains('modal-active')) {
          	toggleModal()
            }
          };


          function toggleModal () {
            const body = document.querySelector('body')
            const modal = document.querySelector('.modal')
            modal.classList.toggle('opacity-0')
            modal.classList.toggle('pointer-events-none')
            body.classList.toggle('modal-active')
          }


        </script>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </body>
</html>
