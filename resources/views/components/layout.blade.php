<!DOCTYPE html>
<html lang="en" dir="{{ App::isLocale('ar') ? 'rtl' : 'ltr' }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ __("header.websiteTitle") }}</title>
  <link rel="shortcut icon" href="#" type="image/x-icon">

  <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/script.js') }}" defer></script>

</head>
<body class="relative w-full m-0 flex flex-col justify-between min-h-screen bg-gray-50">

  <div class="absolute top-0 left-0 flex justify-center items-center w-full h-screen bg-gray-100 z-50" id="loader">
    <div class="rounded-md h-16 w-16 border-4 border-t-4 border-green-700 animate-spin realtive" style="animation-duration: 2s;"></div>
  </div>

  <header class="w-full">
    @include('components._off-canvas')
    @include("components._nav-bar")
  </header>
  @include("components._flash-message")

  <main class="lg:p-2 z-0">
    {{ $slot }}
  </main>

  <footer class="min-h-16 bg-green-800 text-gray-50 flex justify-center items-center">
    <p class="text-2xl ">{{ __('footer.copyRights') }}</p>
  </footer>

</body>
</html>
