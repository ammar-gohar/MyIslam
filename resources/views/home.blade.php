<x-layout>

  <section class="relative flex flex-col-reverse gap-3 justify-end lg:flex-row lg:justify-evenly py-10 lg:items-start h-full w-full items-evenly min-h-[45rem] lg:px-5 lg:p-4">

    <div class=" w-11/12 lg:w-9/12 space-y-8 bg-green-50 p-8 h-full mx-auto">

      <ul class="bg-white rounded-lg shadow-lg divide-y divide-gray-200 border mx-auto w-11/12">
          <li class="bg-green-800 text-xl p-3 px-4 text-gray-50 rounded-t-md shadow-sm">{{ __('home.last_articles') }}</li>
          @if ($articles->count() === 0)
            <li class="px-6 py-4">
              <p>{{ __('home.no_articles') }}</p>
            </li>
          @endif
          @foreach($articles as $article)
            <pre>
              {{ print_r($article) }}
            </pre>
            <li class="px-6 py-4">
              <div class="flex justify-between">
                <span class="font-semibold text-lg"><a>{{ $article->title }}</a></span>
                <span class="text-gray-500 text-xs">
                  @foreach($article->categories as $category)
                    <span class="text-green-800 px-2">{{ $category->name }}</span>
                  @endforeach
                  |
                  <time class="px-2">{{ $article->created_at->diffForHuman() }}</time>
                </span>
              </div>
              <p class="text-gray-700">{{ $article->body }}</p>
              <hr class="w-full h-[2px] bg-gray-300 my-2">
              <p class="text-gray-700 text-sm">{{ __('home.written_by') }} {{ $article->first_name }} {{ $article->last_name }}</p>
            </li>
          @endforeach
      </ul>

      <ul class="bg-white rounded-md shadow-lg divide-y divide-gray-200 border m-auto w-11/12">
          <li class="bg-green-800 text-xl p-3 text-gray-50 rounded-t-md shadow-sm">{{ __('home.last_questions') }}</li>
          @if ($questions->count() === 0)
            <li class="px-6 py-4">
              <p>{{ __('home.no_questions') }}</p>
            </li>
          @endif
          @foreach($questions as $question)
            <li class="px-6 py-4">
              <div class="flex justify-between">
                <span class="font-semibold text-lg"><a>{{ $question->question }}</a></span>
                <time class="text-gray-500 text-xs">{{ $question->created_at->diffForHuman }}</time>
              </div>
              <hr class="w-full h-[2px] bg-gray-300 my-2">
              <p class="text-gray-700 text-sm">
                @if ($question->answer === null)
                  {{ __('home.not_answered') }}
                @else
                  {{ __('home.answered_by') . ' ' . $question->answeredByFullName() }}
                @endif
              </p>
            </li>
          @endforeach
      </ul>

    </div>


  <div class="flex flex-col justify-center items-start gap-5 w-3/12 mx-auto">
    <form class="max-w-lg mx-auto w-full" method="GET" action="#">
      <div class="flex">
          <select name="category" id="dropdown-button" class="flex-shrink-0 inline-flex items-center py-2.5 px-1 text-sm font-medium text-gray-900 rounded-s-lg bg-gray-100 border border-gray-200 hover:bg-gray-200">
            <option value="articles">{{ __('header.articles') }}</option>
            <option value="questions">{{ __('header.fatawa') }}</option>
          </select>
        <div class="relative w-full">
            <input type="text" id="search-dropdown" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-green-500 focus:border-green-500" placeholder="{{ __('general.search') }}..." required />
            <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-green-700 rounded-e-lg border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">
                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </div>
      </div>
    </form>

    <x-scholars-section  />

    <x-tags-section  />

  </div>

  </section>

</x-layout>
