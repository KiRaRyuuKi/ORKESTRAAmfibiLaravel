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

<body id="app" class="font-sans antialiased bg-gradient-to-r from-blue-200 via-blue-300 to-blue-600">
    <div
        class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.blue.100),white)] opacity-20">
    </div>
    <div
        class="absolute inset-y-0 right-1/3 rounded-br-lg -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-blue-600/10 ring-1 ring-blue-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center">
    </div>

    <section class="relative flex flex-col lg:flex-row justify-between items-center lg:items-start mx-auto">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-14 lg:grid-cols-12">
            <div class="mr-auto w-full h-full place-self-center lg:col-span-7">
                <a href="/" class="flex items-center space-x-3 ms-7 drop-shadow-md">
                    <img src="{{ asset('assets/img/logo.png') }}" class="w-10" alt="Logo">
                    <span class="self-center text-gray-800 text-2xl md:text-3xl font-semibold whitespace-nowrap">
                        {{ config('app.name', 'Amfibi') }}
                    </span>
                </a>
                {{ $slot }}
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="{{ asset('assets/img/user-access.svg') }}" alt="User Access Image">
            </div>
        </div>
    </section>

    <footer class="pt-0 p-4 md:pt-0 md:p-8 lg:pt-0 lg:p-10">
        <div class="mx-auto max-w-screen-xl text-center drop-shadow-lg">
            <p class="text-gray-600 dark:text-gray-400">
                Kami berkomitmen untuk memberikan pengalaman terbaik bagi pelanggan kami.
            </p>
            <ul class="flex flex-wrap justify-center items-center my-2 text-gray-700 dark:text-white">
                <li class="mx-2">
                    <a href="#" class="hover:underline">Home</a>
                </li>
                <li class="mx-2">
                    <a href="#" class="hover:underline">About</a>
                </li>
                <li class="mx-2">
                    <a href="#" class="hover:underline">Market</a>
                </li>
                <li class="mx-2">
                    <a href="#" class="hover:underline">Blog</a>
                </li>
                <li class="mx-2">
                    <a href="#" class="hover:underline">FAQs</a>
                </li>
                <li class="mx-2">
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
            <span class="text-sm text-gray-600 sm:text-center dark:text-gray-400">© 2023-2024 <a href="#"
                    class="hover:underline">{{ config('app.name', 'Amfibi') }}™</a>. All Rights Reserved.</span>
        </div>
    </footer>

    @livewireScripts
</body>

</html>
