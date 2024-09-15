<div class="hidden p-1 px-5 space-x-2 flex-row justify-end align-middle bg-gray-900 bg-opacity-90 text-white w-full lg:flex">

  @guest
    <ul class="flex justify-evenly lg:justify-between items-center gap-5 px-4 text-base">
      <li><a href="{{ route('userSignup') }}" class="text-white">{{ __('header.signup') }}</a></li>
      <p>|</p>
      <li><a href="./login" class="text-white">{{ __('header.login') }}</a></li>
    </ul>
  @else
    <div class="flex flex-col relative text-center w-32 text-base">
      <button id="user-button" class="relative overflow-ellipsis">
        Welcome, {{ auth()->user()->first_name }}
      </button>
      <ul class="hidden absolute top-7 w-full z-20 bg-gray-800 py-2 px-1 text-base" id="user-list">
        <li class="w-full"><a href="{{ route('userSignup') }}" class="block w-full text-white hover:bg-gray-700 duration-100">{{ __('header.settings') }}</a></li>
        @if (auth()->user()->role === 'admin')
          <li class="w-full"><a href="./dashboard" class="block w-full text-white hover:bg-gray-700 duration-100">{{ __('header.dashboard') }}</a></li>
        @endif
        <hr class="my-2 w-full">
        <li class="w-full">
          <form action="{{ route('logout') }}" method="post">
            @csrf
            @method('POST')
            <button type="submit" class="hover:underline">{{ __('header.logout') }}</button>
          </form>
        </li>
      </ul>
    </div>
  @endauth

  <div class="relative flex">
    <h2 id="lang-button" class="px-2 text-sm cursor-pointer my-auto"><i class="fa-solid fa-globe"></i></i> : {{ App::isLocale('ar') ? 'عر' : 'en' }}</h2>
    <ul id="lang-list" class="hidden absolute w-full min-w-20 bg-gray-800 z-20 top-6 -right-4 text-center">
      <li class="block"><a href="/lang/ar" class="py-2 px-3 cursor-pointer hover:bg-gray-700 w-full block">العربية</a></li>
      <li class="block"><a href='/lang/en' class="py-2 px-3 cursor-pointer hover:bg-gray-700 w-full block">English</a></li>
    </ul>
  </div>

</div>

<script>
  $('#lang-button').on('click', function () {
    $('#lang-list').toggle();
  });
</script>
