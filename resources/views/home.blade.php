<x-layout>

  <section class="flex flex-col p-2 lg:flex-row lg:justify-center lg:items-start justify-start h-full w-full items-center min-h-[45rem] lg:px-5">

    <div class="w-8/12 space-y-8">

      <ul class="bg-white rounded-lg shadow divide-y divide-gray-200 w-full border">
          <li class="bg-green-800 text-xl p-3 text-gray-50 rounded-t-lg">{{ __('home.last_articles') }}</li>
          <li class="px-6 py-4">
              <div class="flex justify-between">
                  <span class="font-semibold text-lg"><a>List Item 1</a></span>
                  <span class="text-gray-500 text-xs">
                    <span class="text-green-800 px-2">Category</span>
                    |
                    <time class="px-2">1 day ago</time>
                  </span>
              </div>
              <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris.</p>
              <hr class="w-full h-[2px] bg-gray-300 my-2">
              <p class="text-gray-700 text-sm">{{ __('home.written_by') }} محمد المحمد</p>
          </li>
      </ul>

      <ul class="bg-white rounded-lg shadow divide-y divide-gray-200 w-full border">
          <li class="bg-green-800 text-xl p-3 text-gray-50 rounded-t-lg">{{ __('home.last_questions') }}</li>
          <li class="px-6 py-4">
              <div class="flex justify-between">
                  <span class="font-semibold text-lg"><a>List Item 1</a></span>
                  <time class="text-gray-500 text-xs">1 day ago</time>
              </div>
              <hr class="w-full h-[2px] bg-gray-300 my-2">
              <p class="text-gray-700 text-sm">{{ __('home.answered_by') }} محمد المحمد</p>
          </li>
      </ul>

    </div>

    <div class="w-4/12">

      

    </div>

  </section>

</x-layout>
