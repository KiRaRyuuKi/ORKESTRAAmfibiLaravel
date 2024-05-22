<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>{{ config('app.name', 'Amfibi') }}</title>

    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <header class="absolute inset-x-0 top-0 z-50">
        <nav
            class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-100 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-5 px-8">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('assets/img/logo.png') }}" class="w-10" alt="Logo">
                    <span class="self-center text-3xl font-semibold whitespace-nowrap dark:text-white">
                        {{ config('app.name', 'Amfibi') }}
                    </span>
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                        @if (Route::has('login'))
                            <nav class="ml-28 flex flex-1 justify-end">
                                @auth
                                    <button type="button"
                                        class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                                        data-dropdown-placement="bottom">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg"
                                            alt="user photo">
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div class="z-50 hidden my-4 text-base list-none bg-white leading-6 shadow-lg ring-1 ring-gray-900/5 divide-y divide-gray-100 rounded-lg  dark:bg-gray-700 dark:divide-gray-600"
                                        id="user-dropdown">
                                        <div class="px-4 py-3">
                                            <span class="block text-sm text-gray-900 dark:text-white">
                                                @if (Auth::check())
                                                    {{ Auth::user()->name }}
                                                @endif
                                            </span>
                                            <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">
                                                @if (Auth::check())
                                                    {{ Auth::user()->email }}
                                                @endif
                                            </span>
                                        </div>
                                        <ul class="py-2" aria-labelledby="user-menu-button">
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">My
                                                    profile</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Account
                                                    settings</a>
                                            </li>
                                        </ul>
                                        <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
                                            <li>
                                                <a href="#"
                                                    class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                    <svg class="mr-2 w-5 h-5 text-blue-700" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                                            clip-rule="evenodd">
                                                        </path>
                                                    </svg>
                                                    My likes</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex items-center py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                    <svg class="mr-2 w-5 h-5 text-blue-700" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                                                        </path>
                                                    </svg>
                                                    Collections</a>
                                            </li>
                                        </ul>
                                        <ul class="py-1 font-bold text-red-700 dark:text-red-500"
                                            aria-labelledby="dropdown">
                                            <li>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <a href="{{ route('logout') }}"
                                                        class="items-center block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                                        {{ __('Sign out') }}
                                                    </a>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="font-semibold leading-6 text-gray-900 rounded-md px-5 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Log in <span class="text-2xl" aria-hidden="true">&rarr;</span>
                                    </a>
                                @endauth
                            </nav>
                        @endif
                    </div>
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="/"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                aria-current="page">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="/about"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                About
                            </a>
                        </li>
                        <li>
                            <a href="/market"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                Market
                            </a>
                        </li>
                        <li>
                            <a href="/faq"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                FAQ
                            </a>
                        </li>
                        <li>
                            <a href="/contact"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    {{ $slot }}

    <div class="relative isolate overflow-hidden bg-gray-900 py-16 sm:py-24 lg:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
                <div class="max-w-xl lg:max-w-lg">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                        PT Perikanan Indonesia
                    </h2>
                    <p class="mt-7 text-lg text-justify leading-6 text-gray-300">
                        Kami ingin memastikan pengalaman Anda dengan kami lebih baik lagi. Mohon beri tahu kami
                        bagaimana kami dapat meningkatkan layanan kami dengan memberikan feedback.
                    </p>
                    <div class="mt-6 flex max-w-md gap-x-4">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required
                            class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6"
                            placeholder="Enter your email">
                        <button type="submit"
                            class="flex-none rounded-md bg-blue-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500">Feedback</button>
                    </div>
                </div>
                <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
                    <div class="flex flex-col items-start">
                        <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5.693 16.013H7.31a1.685 1.685 0 0 0 1.685-1.684v-.645A1.684 1.684 0 0 1 10.679 12h2.647a1.686 1.686 0 0 1 1.686 1.686v.646c0 .446.178.875.494 1.19.316.317.693.495 1.14.495h1.685a1.556 1.556 0 0 0 1.597-1.016c.078-.214.107-.776.088-1.002.014-4.415-3.571-6.003-8-6.004-4.427 0-8.014 1.585-8.01 5.996-.02.227.009.79.087 1.003a1.558 1.558 0 0 0 1.6 1.02Z" />
                            </svg>
                        </div>
                        <dt class="mt-4 font-semibold text-white">Kontak Kami</dt>
                        <dd class="mt-2 leading-7 text-gray-400">
                            Jl. Muara Baru Ujung, Penjaringan, Jakarta Utara - 14440
                            Tlp: (021) 6679604
                            Fax: (021) 6690523
                            info@perikananindonesia.co.id
                        </dd>
                    </div>
                    <div class="flex flex-col items-start">
                        <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                            </svg>
                        </div>
                        <dt class="mt-4 font-semibold text-white">Media Sosial</dt>
                        <dd class="mt-2 leading-7 text-gray-400">
                            <a href="#" class="hover:underline hover:text-white">+62 812 3459 0357</a>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
        <div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
            <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-[#80d0ff] to-[#9589fc] opacity-30"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>

    @livewireScripts
</body>

</html>
