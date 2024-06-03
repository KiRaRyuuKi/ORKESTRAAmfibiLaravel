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

<body id="app" class="font-sans antialiased bg-gray-50 dark:bg-gray-500">
    <header class="absolute inset-x-0 top-0 z-50">
        <nav
            class="bg-white dark:bg-gray-900 drop-shadow-sm fixed w-full z-20 top-0 start-0 border-b border-gray-100 dark:border-gray-600">
            <div class="max-w-screen-xl drop-shadow-sm flex flex-wrap items-center justify-between mx-auto py-5 px-8">
                <a href="/" class="flex items-center space-x-3">
                    <img src="{{ asset('assets/img/logo.png') }}" class="w-10" alt="Logo">
                    <span class="self-center text-3xl font-semibold whitespace-nowrap dark:text-white">
                        {{ config('app.name', 'Amfibi') }}
                    </span>
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0">
                    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                        @if (Route::has('login'))
                            <nav class="flex flex-1 justify-end">
                                <div class="grid grid-cols-3 gap-x-8 text-gray-500 leading-6 mr-5 border-r pr-8 py-3">

                                    <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification"
                                        class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400"
                                        type="button">
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                                        </svg>
                                        <div
                                            class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 dark:border-gray-900">
                                        </div>
                                    </button>

                                    <!-- Dropdown menu -->
                                    <div id="dropdownNotification"
                                        class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700"
                                        aria-labelledby="dropdownNotificationButton">
                                        <div
                                            class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white">
                                            Notifications
                                        </div>
                                        <div class="divide-y divide-gray-100 dark:divide-gray-700">
                                            <a href="#"
                                                class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <div class="flex-shrink-0">
                                                    <img class="rounded-full w-11 h-11"
                                                        src="{{ asset('assets/img/profile.png') }}" alt="Jese image">
                                                    <div
                                                        class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                                                        <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 18 18">
                                                            <path
                                                                d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                            <path
                                                                d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="w-full ps-3">
                                                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">New
                                                        message from <span
                                                            class="font-semibold text-gray-900 dark:text-white">Jese
                                                            Leos</span>: "Hey, what's up? All set for the presentation?"
                                                    </div>
                                                    <div class="text-xs text-blue-600 dark:text-blue-500">a few moments
                                                        ago</div>
                                                </div>
                                            </a>
                                            <a href="#"
                                                class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <div class="flex-shrink-0">
                                                    <img class="rounded-full w-11 h-11"
                                                        src="{{ asset('assets/img/profile.png') }}" alt="Joseph image">
                                                    <div
                                                        class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-gray-900 border border-white rounded-full dark:border-gray-800">
                                                        <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 20 18">
                                                            <path
                                                                d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-2V5a1 1 0 0 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 0 0 2 0V9h2a1 1 0 1 0 0-2Z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="w-full ps-3">
                                                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                            class="font-semibold text-gray-900 dark:text-white">Joseph
                                                            Mcfall</span> and <span
                                                            class="font-medium text-gray-900 dark:text-white">5
                                                            others</span> started following you.</div>
                                                    <div class="text-xs text-blue-600 dark:text-blue-500">10 minutes ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#"
                                                class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <div class="flex-shrink-0">
                                                    <img class="rounded-full w-11 h-11"
                                                        src="{{ asset('assets/img/profile.png') }}" alt="Bonnie image">
                                                    <div
                                                        class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-red-600 border border-white rounded-full dark:border-gray-800">
                                                        <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 20 18">
                                                            <path
                                                                d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="w-full ps-3">
                                                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                            class="font-semibold text-gray-900 dark:text-white">Bonnie
                                                            Green</span> and <span
                                                            class="font-medium text-gray-900 dark:text-white">141
                                                            others</span> love your story. See it and view more stories.
                                                    </div>
                                                    <div class="text-xs text-blue-600 dark:text-blue-500">44 minutes
                                                        ago</div>
                                                </div>
                                            </a>
                                            <a href="#"
                                                class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <div class="flex-shrink-0">
                                                    <img class="rounded-full w-11 h-11"
                                                        src="{{ asset('assets/img/profile.png') }}"
                                                        alt="Leslie image">
                                                    <div
                                                        class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-green-400 border border-white rounded-full dark:border-gray-800">
                                                        <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 20 18">
                                                            <path
                                                                d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="w-full ps-3">
                                                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                            class="font-semibold text-gray-900 dark:text-white">Leslie
                                                            Livingston</span> mentioned you in a comment: <span
                                                            class="font-medium text-blue-500"
                                                            href="#">@bonnie.green</span> what do you say?</div>
                                                    <div class="text-xs text-blue-600 dark:text-blue-500">1 hour ago
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#"
                                                class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <div class="flex-shrink-0">
                                                    <img class="rounded-full w-11 h-11"
                                                        src="{{ asset('assets/img/profile.png') }}"
                                                        alt="Robert image">
                                                    <div
                                                        class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-purple-500 border border-white rounded-full dark:border-gray-800">
                                                        <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 20 14">
                                                            <path
                                                                d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="w-full ps-3">
                                                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span
                                                            class="font-semibold text-gray-900 dark:text-white">Robert
                                                            Brown</span> posted a new video: Glassmorphism - learn how
                                                        to implement the new design trend.</div>
                                                    <div class="text-xs text-blue-600 dark:text-blue-500">3 hours ago
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <a href="#"
                                            class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-white">
                                            <div class="inline-flex items-center ">
                                                <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="currentColor" viewBox="0 0 20 14">
                                                    <path
                                                        d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                                </svg>
                                                View all
                                            </div>
                                        </a>
                                    </div>

                                    <a href="/chat"
                                        class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400">
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-chat-dots"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                            <path
                                                d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2" />
                                        </svg>
                                        <div
                                            class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-3.5 dark:border-gray-900">
                                        </div>
                                    </a>
                                    <a href="/transaction"
                                        class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400">
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-car-front"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0m10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17s2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276" />
                                            <path
                                                d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.8.8 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155s4.037-.084 5.592-.155A1.48 1.48 0 0 0 15 9.611v-.413q0-.148-.03-.294l-.335-1.68a.8.8 0 0 0-.43-.563 1.8 1.8 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3z" />
                                        </svg>
                                    </a>
                                </div>
                                @auth
                                    <button type="button" class="flex items-center space-x-2 text-sm md:me-0"
                                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                                        data-dropdown-placement="bottom">
                                        <span class="sr-only">Open user menu</span>
                                        <x-avatar src="{{ Auth::user()->profile_photo }}" />
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
                                                <a href="/profile"
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
                                        class="font-semibold leading-6 text-gray-900 rounded-md px-4 py-2 ring-1 ring-transparent transition hover:text-black/70 focus:outline-none dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
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
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <form class="flex flex-grow items-center max-w-2xl mx-auto">
                    <label for="voice-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="voice-search"
                            class="bg-gray-50 leading-7 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500"
                            placeholder="Search for your favorite car..." required />
                        <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-3">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-mic" viewBox="0 0 16 16">
                                <path
                                    d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5" />
                                <path
                                    d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </nav>
    </header>

    <main id="main" class="pt-0">
        <section class="mt-[5.5rem] flex justify-between">
            {{ $slot }}
        </section>
    </main>

    <footer class="relative isolate overflow-hidden bg-gray-900 py-8 sm:py-12 lg:py-20">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-5 gap-y-16 lg:max-w-none lg:grid-cols-2">
                <div class="max-w-lg lg:max-w-md">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                        <a href="#" class="flex items-center space-x-3">
                            <img src="{{ asset('assets/img/logo.png') }}" class="w-10" alt="Logo">
                            <span class="self-center text-3xl font-semibold whitespace-nowrap dark:text-white">
                                {{ config('app.name', 'Amfibi') }}
                            </span>
                        </a>
                    </h2>
                    <p class="mt-6 text-lg text-justify leading-6 text-gray-300">
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
                <dl class="grid grid-cols-1 gap-x-20 gap-y-10 mx-auto sm:grid-cols-3 lg:pt-2">
                    <div class="flex flex-col items-start">
                        <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <dt class="mt-4 font-semibold text-white uppercase">Company</dt>
                        <dd class="mt-2 leading-7 text-gray-400">
                            <a href="#" class="hover:underline hover:text-white">About</a>
                        </dd>
                        <dd class="mt-2 leading-7 text-gray-400">
                            <a href="#" class="hover:underline hover:text-white">Market</a>
                        </dd>
                        <dd class="mt-2 leading-7 text-gray-400">
                            <a href="#" class="hover:underline hover:text-white">Blogs</a>
                        </dd>
                        <dd class="mt-2 leading-7 text-gray-400">
                            <a href="#" class="hover:underline hover:text-white">FAQs</a>
                        </dd>
                        <dd class="mt-2 leading-7 text-gray-400">
                            <a href="#" class="hover:underline hover:text-white">Contact</a>
                        </dd>
                    </div>
                    <div class="flex flex-col items-start">
                        <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13.213 9.787a3.391 3.391 0 0 0-4.795 0l-3.425 3.426a3.39 3.39 0 0 0 4.795 4.794l.321-.304m-.321-4.49a3.39 3.39 0 0 0 4.795 0l3.424-3.426a3.39 3.39 0 0 0-4.794-4.795l-1.028.961" />
                            </svg>
                        </div>
                        <dt class="mt-4 font-semibold text-white uppercase">Legal</dt>
                        <dd class="mt-2 leading-7 text-gray-400">
                            <a href="#" class="hover:underline hover:text-white">Privacy Policy</a>
                        </dd>
                        <dd class="mt-2 leading-7 text-gray-400">
                            <a href="#" class="hover:underline hover:text-white">Licensing</a>
                        </dd>
                        <dd class="mt-2 leading-7 text-gray-400">
                            <a href="#" class="hover:underline hover:text-white">Terms</a>
                        </dd>
                    </div>
                    <div class="flex flex-col items-start">
                        <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M13 11.15V4a1 1 0 1 0-2 0v7.15L8.78 8.374a1 1 0 1 0-1.56 1.25l4 5a1 1 0 0 0 1.56 0l4-5a1 1 0 1 0-1.56-1.25L13 11.15Z"
                                    clip-rule="evenodd" />
                                <path fill-rule="evenodd"
                                    d="M9.657 15.874 7.358 13H5a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.358l-2.3 2.874a3 3 0 0 1-4.685 0ZM17 16a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </div>
                        <dt class="mt-4 font-semibold text-white uppercase">Download</dt>
                        <dd class="mt-2 leading-7 text-gray-400">
                            <a href="#" class="hover:underline hover:text-white">IOS</a>
                        </dd>
                        <dd class="mt-2 leading-7 text-gray-400">
                            <a href="#" class="hover:underline hover:text-white">Android</a>
                        </dd>
                        <dd class="mt-2 leading-7 text-gray-400">
                            <a href="#" class="hover:underline hover:text-white">Windows</a>
                        </dd>
                        <dd class="mt-2 leading-7 text-gray-400">
                            <a href="#" class="hover:underline hover:text-white">Linux</a>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
        <div class="absolute left-1/2 top-0 -z-10 -translate-x-1/2 blur-3xl xl:-top-6" aria-hidden="true">
            <div class="aspect-[1155/678] w-[72.1875rem] bg-gradient-to-tr from-blue-400 to-blue-600 opacity-30"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </footer>

    @livewireScripts
</body>

</html>
