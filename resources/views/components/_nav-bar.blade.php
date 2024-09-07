<button class="absolute top-2 right-2 lg:hidden font-bold z-20 w-10 h-10 text-green-800 rounded-full text-xl duration-500" id="menu-button">M</button>

<nav class="flex flex-col justify-between items-center align-middle w-full p-2 text-center gap-3 py-3 relative bg-green-50 shadow-md z-10 lg:flex-row lg:mx-auto" id="navbar">

  <div>
    <h1><a href="./" class="px-6 mx-2 w-fit lg:py-0 text-4xl text-green-800">{{ __('header.websiteTitle') }}</a></h1>
  </div>

  <div class="hidden flex-col justify-between align-middle items-center gap-3 top-16 py-3 shadow bg-green-50 w-full absolute lg:pt-0 lg:w-auto lg:flex lg:flex-row lg:top-0 lg:pb-0 lg:shadow-none lg:bg-none lg:relative mx-4" id="nav-list">

    <div class="relative lg:hidden">
      <h2 id="mob-lang-button" class="px-2 text-sm cursor-pointer"><i class="fa-solid fa-globe"></i></i> : {{ App::isLocale('ar') ? 'عر' : 'en' }}</h2>
      <ul id="mob-lang-list" class="hidden w-full min-w-20 bg-gray-800 z-10 text-white text-center">
        <li class="block"><a href="/lang/ar" class="py-2 px-3 cursor-pointer hover:bg-gray-700 w-full block">العربية</a></li>
        <li class="block"><a href='/lang/en' class="py-2 px-3 cursor-pointer hover:bg-gray-700 w-full block">English</a></li>
      </ul>
    </div>

    <ul class="flex w-full flex-col justify-center items-center gap-3 p-1 lg:w-auto lg:flex-row">
      <li class="w-full"><a href="./" class="w-full block px-4 text-xl font-semibold hover:border-green-700 hover:border-b-2 duration-100">{{ __("header.home") }}</a></li>
      <li class="w-full"><a href="{{ route('fatawa') }}" class="w-full block px-4 text-xl font-semibold hover:border-green-700 hover:border-b-2 duration-100">{{ __("header.fatawa") }}</a></li>
      <li class="w-full"><a href="./" class="w-full block px-4 text-xl font-semibold hover:border-green-700 hover:border-b-2 duration-100">{{ __("header.quran") }}</a></li>
      <li class="w-full"><a href="./" class="w-full block px-4 text-xl font-semibold hover:border-green-700 hover:border-b-2 duration-100">{{ __("header.hadith") }}</a></li>
      <li id="hd-library-trigger" class="w-full">
        <a class="w-full block px-4 text-xl font-semibold duration-100 lg:w-auto hover:cursor-pointer text-nowrap">{{ __("header.library") }}<i class="arrow down mx-2 mb-1"></i></a>
        <ul id="hd-library-list" class="hidden mx-auto w-6/12 reltive border border-gray-50 bg-white shadow-sm rounded-md text-lg space-y-2 text-center py-2 mt-2 z-50 top-6 lg:w-auto lg:absolute">
          <li><a href="./" class="p-2 px-6 hover:border-green-700 hover:border-b-2 duration-100">{{ __("header.articles") }}</a></li>
          <li><a href="./" class="p-2 px-6 hover:border-green-700 hover:border-b-2 duration-100">{{ __("header.audios") }}</a></li>
          <li><a href="./" class="p-2 px-6 hover:border-green-700 hover:border-b-2 duration-100">{{ __("header.books") }} </a></li>
        </ul>
      </li>
    </ul>

  </div>

</nav>

<script>
  $('#mob-lang-button').on('click', function () {
    $('#mob-lang-list').toggle();
  });
</script>
