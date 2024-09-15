<ul class="hidden lg:flex flex-row lg:flex-col justify-center items-center w-full mt-5">
  <h3 class="block w-full font-semibold text-xl py-5">
    {{ __('general.scholars') }}:
  </h3>
  <div class="border border-gray-200 bg-gray-100 w-full rounded-md">
    @foreach ($scholars as $scholar)
      <li class="block w-full">
        <a class="flex relative p-2 items-center rounded-sm cursor-pointer gap-3 duration-100 text-base hover:bg-gray-200">
          <img src="{{ $scholar->image }}" alt="scholar image" class="w-10 h-10 inline-block">
          <p class="my-auto p-2">{{ $scholar->first_name }} {{ $scholar->last_name }}</p>
        </a>
      </li>
      @if (!$loop->last)
      <hr>
      @endif
    @endforeach
  </div>
</ul>
