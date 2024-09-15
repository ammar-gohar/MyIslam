<x-layout>

  <section class="flex flex-col gap-5 p-5 md:flex-row">

      <img src="{{ $book->cover }}" alt="book cover" class="w-full h-full rounded-md md:w-60">

      <main class="flex flex-col gap-4">
          <div class="p-1 border md:p-3 lg:p-5 bg-bgcolor-900 border-bgcolor-950 rounded-xl">
              <table class="table-auto">
                  <tr>
                      <h3 class="my-2 text-2xl font-bold p-1">{{ __('book.book_information') }}:</h3>
                  </tr>
                  <tr>
                      @foreach ($book->tags as $tag)
                          <a href="/tags/{{ $tag->name }}" class="p-1 mx-1 my-2 inline-block text-sm rounded-sm bg-bgcolor-800 hover:bg-bgcolor-800 bg-blue-300 hover:bg-blue-200">#{{ $tag->name }}</a>
                      @endforeach
                  </tr>
                  <tr class="text-lg">
                      <td class="p-1 md:p-2 text-lg font-semibold">{{ __('book.title') }}:</td>
                      <td class="p-1 md:p-2">{{ $book->title }}</td>
                  </tr>
                  <tr>
                      <td class="p-1 md:p-2 md:whitespace-nowrap text-lg font-semibold">{{ __('book.written_in') }}:</td>
                      <td class="p-1 md:p-2"><time>{{ $book->written_in }}</time></td>
                  </tr>
                  @if ($book->author)
                    <tr>
                      <td class="p-1 md:p-2 font-semibold text-lg">{{ __('book.author') }}:</td>
                      <td class="p-1 md:p-2">{{ $book->author->first_name }} {{ $book->author->last_name }}</td>
                    </tr>
                  @endif
                  <tr>
                      <td class="flex items-start p-1 md:p-2 font-semibold text-lg">{{ __('book.description') }}:</td>
                      <td class="p-1 md:p-2">{{ $book->about }}</td>
                  </tr>
              </table>
          </div>

          @if ($book->author)
            <div class="relative p-1 border flex flex-col lg:flex-row-reverse items-start justify-center md:p-3 lg:p-5 bg-bgcolor-700 border-bgcolor-900 rounded-xl">
                <img src="{{ $book->author->image }}" alt="author photo" class="p-2 mx-auto w-36 rounded-xl md:w-36 right-8 top-8">
                <table class="table-auto">
                    <tr>
                      <th colspan="2">
                          <h3 class="my-2 text-2xl font-bold w-full text-start p-1">{{ __('book.author_information') }}:</h3>
                      </th>
                    </tr>
                    <tr class="text-lg">
                        <td class="p-1 md:p-2 font-semibold text-lg text-nowrap">{{ __('book.name') }}:</td>
                        <td class="p-1 md:p-2">{{ $book->author->first_name }} {{ $book->author->last_name }}</td>
                    </tr>
                    <tr>
                        <td class="p-1 md:p-2 md:whitespace-now font-semibold text-lg text-nowrap">{{ __('book.born_in') }}:</td>
                        <td class="p-1 md:p-2"><time>{{ $book->author->birth_year }}</time></td>
                    </tr>
                    <tr>
                        <td class="p-1 md:p-2 font-semibold text-lg text-nowrap">{{ __('book.died_in') }}:</td>
                        <td class="p-1 md:p-2">{{ $book->author->death_year }}</td>
                    </tr>
                    <tr>
                        <td class="flex items-start p-1 md:p-2 font-semibold text-lg text-nowrap">{{ __('book.about') }}:</td>
                        <td class="p-1 md:p-2">{{ $book->author->about }}</td>
                    </tr>
                </table>
            </div>
          @endif

          <div class="w-full flex justify-evenly rounded-sm">
            <button class="bg-green-800 text-white py-2 px-4">
              {{ __('book.download') }}
            </button>
            @if ($book->courses->count() === 0)
              <p class="bg-gray-200 border border-gray-300 text-black py-2 px-4">
                {{ __('book.no_courses') }}
              </p>
            @else
              <p class="bg-gree-800 text-white py-2 px-4" id="book-courses-btn">
                {{ __('book.no_courses') }}
              </p>
            @endif
          </div>
          <ul role="list" class="divide-y divide-gray-100" id="book-courses-list">
            {{-- @foreach ($book->courses as $course) --}}
              <li class="flex justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">
                  <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{ $course->lecturer->image }}" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">{{ $course->lecturer->first_name }} {{ $course->lecturer->last_name }}</p>
                  </div>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                  <p class="text-sm leading-6 text-gray-900">Director of Product</p>
                  <div class="mt-1 flex items-center gap-x-1.5">
                    <div class="flex-none rounded-full bg-emerald-500/20 p-1">
                      <div class="h-1.5 w-1.5 rounded-full bg-emerald-500"></div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="flex justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">
                  <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                  <div class="min-w-0 flex-auto">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Tom Cook</p>
                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">tom.cook@example.com</p>
                  </div>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                  <p class="text-sm leading-6 text-gray-900">Director of Product</p>
                  <div class="mt-1 flex items-center gap-x-1.5">
                    <div class="flex-none rounded-full bg-emerald-500/20 p-1">
                      <div class="h-1.5 w-1.5 rounded-full bg-emerald-500"></div>
                    </div>
                    <p class="text-xs leading-5 text-gray-500">Online</p>
                  </div>
                </div>
              </li>
            {{-- @endforeach --}}
          </ul>
          <ul id="book-courses-list">
            @foreach ($book->courses as $course)
              <li></li>
            @endforeach
          </ul>

      </main>

  </section>

</x-layout>

