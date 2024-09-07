<x-layout>

  <div class="flex flex-col-reverse p-2 lg:flex-row lg:justify-evenly lg:items-start justify-evenly h-full w-full items-center min-h-[45rem] lg:px-5">

    <section class="w-10/12 lg:w-9/12 p-6">
      <ul class="bg-white rounded-lg shadow-lg divide-y divide-gray-200 w-full border">
          <li class="bg-green-800 text-xl p-3 px-4 text-gray-50 rounded-t-md shadow-sm">{{ __('home.last_questions') }}</li>
          @if ($questions->count() === 0)
            <li class="px-6 py-4">
              <p>{{ __('home.no_questions') }}</p>
            </li>
          @endif
          @foreach ($questions as $question)
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
    </section>

    <section class="w-10/12 lg:w-3/12 text-center p-6 space-y-3 text-lg">
      @auth

      @endauth
      <a href="{{ route('fatawa') }}" class="p-2 bg-green-700 text-gray-50 rounded-md block">{{ __('fatawa.ask_question') }}</a>
      <a href="{{ route('fatawa') }}" class="p-2 bg-green-700 text-gray-50 rounded-md block">{{ __('fatawa.my_questions') }}</a>
      <ul>
        <li>Tags:</li>
        <li></li>
      </ul>
    </section>

  </div>

</x-layout>
