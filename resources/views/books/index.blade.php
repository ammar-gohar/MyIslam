<x-layout>

  <section>

  <main class="flex flex-col-reverse lg:flex-row p-10 gap-4">

    <div class="py-5 w-11/12 mx-auto space-y-4 lg:w-9/12">
      @if ($books->count() === 0)
        <h2 class="text-3xl">There's no books.</h2>
      @endif
      <div id="book-container" class="space-y-4">
        @foreach ($books as $book)
          <x-book-card :book="$book" />
        @endforeach
      </div>
      <div class="lg:w-11/12">
        {{ $books->links('components.pagination') }}
      </div>
    </div>

    <div class="flex flex-col justify-center items-start gap-5 w-11/12 mx-auto lg:py-5 lg:w-3/12 lg:m-0 lg:items-start lg:justify-start">
    <form class="max-w-lg mx-auto w-full" method="GET" action="#">
      <div class="flex">
        <select name="category" id="dropdown-button" class="flex-shrink-0 inline-flex items-center py-2.5 px-1 text-sm font-medium text-gray-900 rounded-s-lg bg-gray-100 border border-gray-200 hover:bg-gray-200">
        <option value="books">{{ __('header.books') }}</option>
        <option value="authors">{{ __('header.authors') }}</option>
        </select>
      <div class="relative w-full">
        <input type="text" id="search-dropdown" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-green-500 focus:border-green-500" placeholder="{{ __('general.search') }}..." required />
        <button type="submit" class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-green-700 rounded-e-lg border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">
          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg>
          <span class="sr-only">{{ __('general.search') }}</span>
        </button>
      </div>
      </div>
    </form>

    <x-scholars-section  />

    <x-tags-section  />

    </div>

  </main>

  </section>

</x-layout>
