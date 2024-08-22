<button class="absolute top-2 right-2 lg:hidden font-bold z-10 w-10 h-10 text-green-800 rounded-full text-xl duration-500" id="menu-button">M</button>

<nav class="flex flex-col justify-between items-center align-middle w-full p-2 z-0 text-center gap-3 my-1 relative lg:flex-row" id="navbar">

  <div>
    <h1><a href="./" class="px-6 py-3 lg:py-0 mx-5 text-3xl text-green-700">{{ __('header.websiteTitle') }}</a></h1>
  </div>

  <div class="hidden flex-col justify-between align-middle items-center gap-3 top-12 pb-3 shadow bg-white w-full absolute lg:w-auto lg:min-w-[65%] lg:flex lg:flex-row lg:top-0 lg:pb-0 lg:shadow-none lg:bg-none lg:relative" id="nav-list">
    <ul class="lg:flex-row flex lg:flex flex-col justify-center items-center gap-3 p-1">
      <li><a href="./" class="p-2 px-4 text-xl font-semibold hover:border-green-700 hover:border-b-2 duration-100">{{ __("header.home") }}</a></li>
      <li><a href="./" class="p-2 px-4 text-xl font-semibold hover:border-green-700 hover:border-b-2 duration-100">{{ __("header.fatawa") }}</a></li>
      <li><a href="./" class="p-2 px-4 text-xl font-semibold hover:border-green-700 hover:border-b-2 duration-100">{{ __("header.quran") }}</a></li>
      <li><a href="./" class="p-2 px-4 text-xl font-semibold hover:border-green-700 hover:border-b-2 duration-100">{{ __("header.hadith") }}</a></li>
      <li id="hd-library-trigger">
        <a class="p-2 px-4 text-xl font-semibold hover:border-green-700 hover:border-b-2 duration-100 hover:cursor-pointer">{{ __("header.library") }}</a>
        <ul id="hd-library-list" class="reltive hidden text-lg space-y-2 text-center py-2 mt-2 lg:absolute">
          <li><a href="./" class="p-2 px-4 hover:border-green-700 hover:border-b-2 duration-100">{{ __("header.articles") }}</a></li>
          <li><a href="./" class="p-2 px-4 hover:border-green-700 hover:border-b-2 duration-100">{{ __("header.audios") }}</a></li>
          <li><a href="./" class="p-2 px-4 hover:border-green-700 hover:border-b-2 duration-100">{{ __("header.books") }} </a></li>
        </ul>
      </li>
    </ul>

    @guest
      <ul class="flex justify-evenly lg:justify-between items-center gap-5 px-4 text-lg">
        <li><a href="{{ route('userSignup') }}" class="text-green-800">{{ __('header.signup') }}</a></li>
        <p>|</p>
        <li><a href="./login" class="text-green-800">{{ __('header.login') }}</a></li>
      </ul>
    @else
      <div class="flex flex-col relative text-lg text-center w-32">
        <button id="user-button" class="relative overflow-ellipsis">
          {{ auth()->first_name . ' ' . auth()->last_name }}
        </button>
        <ul class="hidden absolute top-10 w-full" id="user-list">
          <li class="w-full"><a href="./signup" class="text-green-800 py-2">{{ __('header.settings') }}</a></li>
          @if (auth()->role === 'admin')
            <li class="w-full"><a href="./dashboard" class="text-green-800 py-2">{{ __('header.dashboard') }}</a></li>
          @endif
          <hr class="my-2 w-full">
          <li class="w-full">
            <form action="">
              @csrf
              <button type="submit" class="hover:underline">{{ __('header.logout') }}</button>
            </form>
          </li>
        </ul>
      </div>
    @endauth
  </div>

</nav>
