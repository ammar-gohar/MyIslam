<x-layout>

  <section class="bg-green-50 p-12 m-10 w-10/12 lg:w-7/12 mx-auto">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto">
        <div class="w-full bg-white rounded-lg shadow">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl my-5 font-bold leading-tight tracking-tight text-gray-900 lg:text-2xl text-center">
                    {{ __('header.signup') }}
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{ route('userStore') }}" method="POST">
                  @csrf
                  @method('POST')
                    <div class="flex flex-row gap-2">
                      <div class="w-1/2">
                          <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900">{{ __('signing.first_name') }}</label>
                          <input type="text" name="first_name" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" value="{{ old('first_name') }}" placeholder="{{ __('signing.first_name') }}" required>
                          @error('first_name')
                            <p class="m-0 text-red-500 text-sm">* {{ $message }}</p>
                          @enderror
                      </div>
                      <div class="w-1/2">
                          <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900">{{ __('signing.last_name') }}</label>
                          <input type="text" name="last_name" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" value="{{ old('last_name') }}" placeholder="{{ __('signing.last_name') }}" required>
                          @error('last_name')
                            <p class="m-0 text-red-500 text-sm">* {{ $message }}</p>
                          @enderror
                      </div>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">{{ __('signing.email') }}</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" value="{{ old('email') }}" placeholder="name@example.com" required>
                        @error('email')
                          <p class="m-0 text-red-500 text-sm">* {{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="birth_date" class="block mb-2 text-sm font-medium text-gray-900">{{ __('signing.birth_date') }}</label>
                        <input type="date" name="birth_date" id="birth_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" value="{{ old('birth_date') }}" min="{{ date( 'Y-m-d', time() - 60*60*24*365.25*150) }}" max="{{ date( 'Y-m-d', time() - 60*60*24*365.25*6) }}" required>
                        @error('birth_date')
                          <p class="m-0 text-red-500 text-sm">* {{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="gender" class="block mb-2 text-sm font-medium text-gray-900">{{ __('signing.gender') }}</label>
                        <div class="inline-flex w-[49%]">
                          <input type="radio" name="gender" id="gender_m" value="m" {{ old('gender') == 'm' ? 'selected' : '' }} required>
                          <label for="gender_m" class="font-semibold px-3 w-full inline-block">{{ __('signing.male') }}</label>
                        </div>
                        <div class="inline-flex w-[49%]">
                          <input type="radio" name="gender" id="gender_f" value="f" {{ old('gender') == 'f' ? 'selected' : '' }} required>
                          <label for="gender_f" class="font-semibold px-3 w-full inline-block">{{ __('signing.female') }}</label>
                        </div>
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">{{ __('signing.password') }}</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required>
                        @error('password')
                          <p class="m-0 text-red-500 text-sm">* {{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password_confirmation " class="block mb-2 text-sm font-medium text-gray-900">{{ __('signing.password_confirmation') }}</label>
                        <input type="password" name="password_confirmation " id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required>
                    </div>
                    {{-- <div class="flex items-start">
                        <div class="flex items-center h-5">
                          <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300" required>
                        </div>
                        <div class="ml-3 text-sm">
                          <label for="terms" class="font-light text-gray-500">I accept the <a class="font-medium text-primary-600 hover:underline" href="#">Terms and Conditions</a></label>
                        </div>
                    </div> --}}
                    <button type="submit" class="w-full text-white bg-gray-800 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">{{ __('signing.signup_submit') }}</button>
                    <p class="text-sm font-light text-gray-500">
                        {{ __('signing.hav_acc') }} <a href="{{ route('userLoginView') }}" class="font-medium text-primary-600 hover:underline">{{ __('header.login') }}</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
  </section>

</x-layout>
