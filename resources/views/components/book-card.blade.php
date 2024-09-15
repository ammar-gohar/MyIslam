@props(['book'])

<div class="flex flex-col items-start bg-white border border-gray-200 rounded-lg shadow lg:flex-row lg:w-11/12 hover:bg-gray-100">
  <img class="h-auto w-48 mx-auto lg:rounded-none lg:rounded-s-lg" src="{{ $book->cover }}">
  <div class="flex flex-col justify-between p-4 gap-3 h-full">
    <p class="text-sm text-gray-400 w-full text-end">
      @foreach ($book->tags as $tag)
        {{ $loop->iteration != 1 ? '|' : '' }}
        <a data-filter='tag' data-value='{{ $tag->name }}' onclick="event.preventDefault(); filter(this)" class="hover:underline cursor-pointer">{{ $tag->name }}</a>
      @endforeach
    </p>
    <h4>
      <a href="#" class="block text-lg font-semibold text-gray-900">
        {{ $book->author ? $book->author->first_name . ' ' . $book->author->last_name. ' -' : '' }} {{ $book->written_in }}
      </a>
    </h4>
    <h5>
      <a href="{{ route('bookShow', $book->id) }}" class="block mb-2 text-2xl font-bold text-gray-900">
        {{ $book->title }}
      </a>
    </h5>
    <p class="mb-3 font-normal text-gray-700">
      {{ $book->about }}
    </p>
    <div>
      <a href="#"></a>
      <a href="#"></a>
    </div>
  </div>
</div>
