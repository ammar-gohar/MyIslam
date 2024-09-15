<div class="w-full">
  <h3 class="block w-full font-semibold text-xl py-5">
    {{ __('general.tags') }}:
  </h3>
  <div class="bg-gray-100 border border-gray-200 w-full p-3">
  @foreach ($tags as $tag)
    <a data-filter='tag' data-value='{{ $tag->name }}' onclick="event.preventDefault(); filter(this)" class="inline-block px-1 m-1 duration-100 bg-blue-200 hover:bg-blue-300">#{{ $tag->name }}</a>
  @endforeach
  </div>
</div>
