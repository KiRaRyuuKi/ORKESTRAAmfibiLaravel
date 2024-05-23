<x-guest-layout>
    <div class="w-2/3 drop-shadow-lg md:mt-0 sm:max-w-2xl xl:p-0">
        <div class="p-6 space-y-1 md:space-y-2 sm:p-8">
            <h1 class="text-xl font-bold text-gray-900 md:text-2xl dark:text-white">
                Sign in to your account
            </h1>
            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                Start your website in seconds. Don’t have an account?
                <a href="/register" class="font-medium text-blue-600 hover:underline dark:text-blue-500">
                    Sign up.
                </a>
            </p>
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form class="space-y-4 md:space-y-6" action="{{ route('login') }}" method="POST">
                @csrf
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Your Email
                    </label>
                    <input id="email" type="email" name="email" id="email" value="{{ old('email') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@amfibi.com" required="" autocomplete="email" autofocus>

                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
                <div>
                    <label for="password"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <input id="password" type="password" name="password" id="password" placeholder="••••••••"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required="" autocomplete="current-password">

                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" type="checkbox"
                                class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                                required="" {{ old('remember') ? 'checked' : '' }}>
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                        </div>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                            Forgot password?
                        </a>
                    @endif
                </div>
                <button type="submit"
                    class="w-full text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Sign in
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
