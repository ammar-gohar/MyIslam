<x-layout>

  <section class="bg-green-50 p-12 m-10 w-10/12 lg:w-7/12 mx-auto">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto">
        <div class="w-full bg-white rounded-lg shadow">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl my-5 font-bold leading-tight tracking-tight text-gray-900 lg:text-2xl text-center">
                    {{ __('header.login') }}
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{ route('userLogin') }}" method="POST">
                  @csrf
                  @method('POST')
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">{{ __('signing.email') }}</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" value="{{ old('email') }}" placeholder="name@example.com" required>
                        @error('email')
                          <p class="m-0 text-red-500 text-sm">* {{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">{{ __('signing.password') }}</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required>
                        @error('password')
                          <p class="m-0 text-red-500 text-sm">* {{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                      <input type="checkbox" name="remember_me" id="remember_me" class="p-1">
                      <label for="remember_me" class="mb-2 text-sm font-medium text-gray-900">{{ __('signing.remember_me') }}</label>
                    </div>
                    <button id="submit-button" type="submit" class="w-full text-white bg-gray-800 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">{{ __('signing.login_submit') }}</button>
                    <p class="text-sm font-light text-gray-500">
                        {{ __('signing.dont_hav_acc') }} <a href="{{ route('userSignup') }}" class="font-medium text-primary-600 hover:underline">{{ __('header.signup') }}</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
  </section>

</x-layout>
