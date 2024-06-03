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

<body id="app" class="font-sans antialiased bg-gray-100 dark:bg-gray-500">
    <aside id="sidebar-multi-level-sidebar"
        class="fixed top-0 left-0 z-40 w-72 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full p-3 overflow-y-auto drop-shadow-sm bg-white dark:bg-gray-800">
            <div class="p-4 drop-shadow-sm">
                <a href="#" class="flex items-center ps-1.5 mb-5">
                    <img src="{{ asset('assets/img/logo.png') }}" class="h-8 me-3 sm:h-10" alt="Flowbite Logo" />
                    <span class="self-center text-3xl font-semibold whitespace-nowrap dark:text-white">
                        {{ config('app.name', 'Amfibi') }}
                    </span>
                </a>

                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 stroke-current" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="search"
                        class="block leading-6 pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search..." required />
                </div>

                <div class="py-5">
                    <hr class="border-t border-gray-300" />
                </div>

                <div class="relative">
                    <ul class="space-y-2 font-medium">
                        <li>
                            <a href="{{ route('dashboard') }}"
                                class="flex items-center w-full px-3 py-2 text-base text-gray-900 rounded-md dark:text-white
              {{ request()->routeIs('dashboard') ? 'bg-gradient-to-br from-blue-400 via-blue-500 to-blue-600 text-white' : 'hover:bg-gradient-to-br from-gray-50 via-gray-100 to-gray-200 text-gray-900' }} group">
                                <svg class="w-5 h-5 transition duration-75 {{ request()->routeIs('dashboard') ? 'text-white' : 'text-gray-500 group-hover:text-gray-900' }}"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 22 21">
                                    <path
                                        d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                    <path
                                        d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                                </svg>
                                <span class="ms-3">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <button type="button"
                                class="flex items-center w-full px-3 py-2 text-base text-gray-900 transition duration-75 rounded-lg
                   {{ request()->routeIs('sewa-mobil*') ? 'bg-gradient-to-br from-blue-400 via-blue-500 to-blue-600 text-white' : 'hover:bg-gradient-to-br from-gray-50 via-gray-100 to-gray-200 text-gray-900' }} group"
                                aria-controls="dropdown-sewa-mobil" data-collapse-toggle="dropdown-sewa-mobil">
                                <svg class="w-5 h-5 transition duration-75 {{ request()->routeIs('sewa-mobil*') ? 'text-white' : 'text-gray-500 group-hover:text-gray-900' }}"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-credit-card-2-front-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm0 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z" />
                                </svg>
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">
                                    Sewa Mobil
                                </span>
                                <svg class="w-3 h-3 transition duration-75 {{ request()->routeIs('sewa-mobil*') ? 'text-white' : 'text-gray-500 group-hover:text-gray-900' }}"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <ul id="dropdown-sewa-mobil" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="{{ route('sewa-mobil.sewa') }}"
                                        class="flex items-center w-full p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-3.5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                        <div
                                            class="flex-none rounded-full {{ request()->routeIs('sewa-mobil.sewa') ? 'bg-blue-500/20' : 'bg-gray-500/10' }} p-1 me-4">
                                            <div
                                                class="h-1.5 w-1.5 rounded-full {{ request()->routeIs('sewa-mobil.sewa') ? 'bg-blue-500' : 'bg-gray-500' }}">
                                            </div>
                                        </div>
                                        Data Sewa Mobil
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center w-full p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-3.5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                        <div class="flex-none rounded-full bg-gray-500/10 p-1 me-4">
                                            <div class="h-1.5 w-1.5 rounded-full bg-gray-500">
                                            </div>
                                        </div>
                                        Denda Pengguna
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center w-full p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-3.5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                        <div class="flex-none rounded-full bg-gray-500/10 p-1 me-4">
                                            <div class="h-1.5 w-1.5 rounded-full bg-gray-500">
                                            </div>
                                        </div>
                                        Pengembalian Uang
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <button type="button"
                                class="flex items-center w-full px-3 py-2 text-base text-gray-900 transition duration-75 rounded-lg
                   {{ request()->routeIs('penjualan*') ? 'bg-gradient-to-br from-blue-400 via-blue-500 to-blue-600 text-white' : 'hover:bg-gradient-to-br from-gray-50 via-gray-100 to-gray-200 text-gray-900' }} group"
                                aria-controls="dropdown-penjualan" data-collapse-toggle="dropdown-penjualan">
                                <svg class="w-5 h-5 transition duration-75 {{ request()->routeIs('penjualan*') ? 'text-white' : 'text-gray-500 group-hover:text-gray-900' }}"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-coin" viewBox="0 0 16 16">
  <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z"/>
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
  <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12"/>
</svg>
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">
                                    Penjualan
                                </span>
                                <svg class="w-3 h-3 transition duration-75 {{ request()->routeIs('penjualan*') ? 'text-white' : 'text-gray-500 group-hover:text-gray-900' }}"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <ul id="dropdown-penjualan" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="{{ route('penjualan.jual') }}"
                                        class="flex items-center w-full p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-3.5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                        <div
                                            class="flex-none rounded-full {{ request()->routeIs('penjualan.jual') ? 'bg-blue-500/20' : 'bg-gray-500/10' }} p-1 me-4">
                                            <div
                                                class="h-1.5 w-1.5 rounded-full {{ request()->routeIs('penjualan.jual') ? 'bg-blue-500' : 'bg-gray-500' }}">
                                            </div>
                                        </div>
                                        Data Penjualan Mobil
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center w-full p-2 text-sm text-gray-900 transition duration-75 rounded-lg pl-3.5 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                        <div class="flex-none rounded-full bg-gray-500/10 p-1 me-4">
                                            <div class="h-1.5 w-1.5 rounded-full bg-gray-500">
                                            </div>
                                        </div>
                                        Pengembalian Uang
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{ route('data-mobil') }}"
                                class="flex items-center w-full px-3 py-2 text-base text-gray-900 rounded-md dark:text-white
              {{ request()->routeIs('data-mobil') ? 'bg-gradient-to-br from-blue-400 via-blue-500 to-blue-600 text-white' : 'hover:bg-gradient-to-br from-gray-50 via-gray-100 to-gray-200 text-gray-900' }} group">
                                <svg class="w-5 h-5 transition duration-75 {{ request()->routeIs('data-mobil') ? 'text-white' : 'text-gray-500 group-hover:text-gray-900' }}"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                                </svg>
                                <span class="ms-3">Data Mobil</span>
                            </a>
                        </li>
                    </ul>

                    <div class="py-5">
                        <hr class="border-t border-gray-300 dark:border-gray-700" />
                    </div>

                    <ul class="space-y-2 font-medium">
                        <li>
                            <a href="{{ route('help') }}"
                                class="flex items-center w-full px-3 py-2 text-base text-gray-900 rounded-md dark:text-white
              {{ request()->routeIs('help') ? 'bg-gradient-to-br from-blue-400 via-blue-500 to-blue-600 text-white' : 'hover:bg-gradient-to-br from-gray-50 via-gray-100 to-gray-200 text-gray-900' }} group">
                                <svg class="w-5 h-5 transition duration-75 {{ request()->routeIs('help') ? 'text-white' : 'text-gray-500 group-hover:text-gray-900' }}"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-life-preserver" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m6.43-5.228a7.03 7.03 0 0 1-3.658 3.658l-1.115-2.788a4 4 0 0 0 1.985-1.985zM5.228 14.43a7.03 7.03 0 0 1-3.658-3.658l2.788-1.115a4 4 0 0 0 1.985 1.985zm9.202-9.202-2.788 1.115a4 4 0 0 0-1.985-1.985l1.115-2.788a7.03 7.03 0 0 1 3.658 3.658m-8.087-.87a4 4 0 0 0-1.985 1.985L1.57 5.228A7.03 7.03 0 0 1 5.228 1.57zM8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                                </svg>
                                <span class="ms-3">Help</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('setting') }}"
                                class="flex items-center w-full px-3 py-2 text-base text-gray-900 rounded-md dark:text-white
              {{ request()->routeIs('setting') ? 'bg-gradient-to-br from-blue-400 via-blue-500 to-blue-600 text-white' : 'hover:bg-gradient-to-br from-gray-50 via-gray-100 to-gray-200 text-gray-900' }} group">
                                <svg class="w-5 h-5 transition duration-75 {{ request()->routeIs('setting') ? 'text-white' : 'text-gray-500 group-hover:text-gray-900' }}"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M9.586 2.586A2 2 0 0 1 11 2h2a2 2 0 0 1 2 2v.089l.473.196.063-.063a2.002 2.002 0 0 1 2.828 0l1.414 1.414a2 2 0 0 1 0 2.827l-.063.064.196.473H20a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-.089l-.196.473.063.063a2.002 2.002 0 0 1 0 2.828l-1.414 1.414a2 2 0 0 1-2.828 0l-.063-.063-.473.196V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.089l-.473-.196-.063.063a2.002 2.002 0 0 1-2.828 0l-1.414-1.414a2 2 0 0 1 0-2.827l.063-.064L4.089 15H4a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2h.09l.195-.473-.063-.063a2 2 0 0 1 0-2.828l1.414-1.414a2 2 0 0 1 2.827 0l.064.063L9 4.089V4a2 2 0 0 1 .586-1.414ZM8 12a4 4 0 1 1 8 0 4 4 0 0 1-8 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="ms-3">Pengaturan</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('feedback') }}"
                                class="flex items-center w-full px-3 py-2 text-base text-gray-900 rounded-md dark:text-white
              {{ request()->routeIs('feedback') ? 'bg-gradient-to-br from-blue-400 via-blue-500 to-blue-600 text-white' : 'hover:bg-gradient-to-br from-gray-50 via-gray-100 to-gray-200 text-gray-900' }} group">
                                <svg class="w-5 h-5 transition duration-75 {{ request()->routeIs('feedback') ? 'text-white' : 'text-gray-500 group-hover:text-gray-900' }}"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-mailbox2" viewBox="0 0 16 16">
                                    <path
                                        d="M9 8.5h2.793l.853.854A.5.5 0 0 0 13 9.5h1a.5.5 0 0 0 .5-.5V8a.5.5 0 0 0-.5-.5H9z" />
                                    <path
                                        d="M12 3H4a4 4 0 0 0-4 4v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V7a4 4 0 0 0-4-4M8 7a4 4 0 0 0-1.354-3H12a3 3 0 0 1 3 3v6H8zm-3.415.157C4.42 7.087 4.218 7 4 7s-.42.086-.585.157C3.164 7.264 3 7.334 3 7a1 1 0 0 1 2 0c0 .334-.164.264-.415.157" />
                                </svg>
                                <span class="ms-3">Beri Feedback</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div id="dropdown-cta"
                    class="p-4 mt-6 rounded-xl drop-shadow ring-slate-50 ring-gray-900/5 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 dark:bg-blue-900"
                    role="alert">
                    <div class="flex items-center mb-3 drop-shadow">
                        <span
                            class="bg-blue-100 text-blue-800 text-sm font-semibold me-2 px-2.5 py-0.5 rounded-md dark:bg-orange-200 dark:text-orange-900">Beta</span>
                        <button type="button"
                            class="ms-auto -my-1.5 bg-blue-50 inline-flex justify-center items-center w-6 h-6 text-blue-900 rounded-lg focus:ring-2 focus:ring-blue-400 p-1 hover:bg-blue-200 dark:bg-blue-900 dark:text-blue-400 dark:hover:bg-blue-800"
                            data-dismiss-target="#dropdown-cta" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                    <p class="mb-3 text-sm te text-blue-50">
                        Preview the new Flowbite dashboard navigation! You can turn the new navigation off for a
                        limited time in your profile.
                    </p>
                    <a class="text-sm text-blue-50 underline font-medium hover:text-white dark:text-blue-400 dark:hover:text-blue-300"
                        href="#">Turn new navigation off</a>
                </div>
            </div>
        </div>
    </aside>

    <main id="main" class="sm:ml-72">
        <header class="fixed w-auto z-20 top-0 py-2 pl-5 pr-2 bg-gray-100">
            <nav class="py-2 px-3 grid grid-cols-2 rounded-xl bg-white dark:bg-gray-900 drop-shadow-sm"
                aria-label="Breadcrumb">
                <div class="w-screen">
                    <div
                        class="flex items-center text-lg font-bold leading-none tracking-tight ms-2 mb-1 text-gray-500 md:text-lg dark:text-white">
                        <svg class="w-5 h-5 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <h2 class="ms-2">Dashboard</h2>
                    </div>
                    <ol class="inline-flex items-center mb-3 sm:mb-0">
                        <li class="inline-flex items-center mx-2">
                            <a href="#"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                <svg class="w-4 h-4 me-2.5 text-gray-500 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                                        clip-rule="evenodd" />
                                </svg>
                                Administrator
                            </a>
                        </li>
                        <span class="mx-2 text-gray-400">/</span>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <ol>
                                    <li aria-current="page">
                                        <div class="flex items-center ">
                                            <span
                                                class="bg-blue-100 text-blue-800 text-xs font-semibold ms-3 me-2 px-2 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 hidden sm:flex">
                                                super user
                                            </span>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </li>
                    </ol>
                </div>
                <div class="flex justify-self-end items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button type="button">
                        <svg class="w-6 h-6 mr-4 text-gray-500 dark:text-white" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-info-circle"
                            viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                            <path
                                d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
                        </svg>
                    </button>
                    <button type="button">
                        <svg class="w-8 h-8 mr-4 text-gray-500 dark:text-white" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" fill="currentColor" class="bi bi-brightness-low-fill"
                            viewBox="0 0 16 16">
                            <path
                                d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0M8.5 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m0 11a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m5-5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m-11 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m9.743-4.036a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707m-7.779 7.779a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707m7.072 0a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707M3.757 4.464a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707" />
                        </svg>
                    </button>
                    <button type="button"
                        class="flex text-sm bg-gray-100 rounded-full md:me-0 focus:ring-2 focus:ring-gray-300 dark:focus:ring-gray-600"
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
                                    <svg class="mr-2 w-5 h-5 text-blue-700" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
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
                                    <svg class="mr-2 w-5 h-5 text-blue-700" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z">
                                        </path>
                                    </svg>
                                    Collections</a>
                            </li>
                        </ul>
                        <ul class="py-1 font-bold text-red-700 dark:text-red-500" aria-labelledby="dropdown">
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
                    <button data-collapse-toggle="navbar-user" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-user" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
            </nav>
        </header>

        <section class="mt-[5.5rem]">
            <div class="drop-shadow-sm py-5 pl-5 pr-2">
                {{ $slot }}
            </div>

            <footer class="relative isolate overflow-hidden bg-gray-900 mt-2 py-5 sm:py-8 lg:py-10">
                <div class="px-5 lg:px-8">
                    <div class="grid grid-cols-1 gap-x-16 gap-y-16 lg:max-w-none lg:grid-cols-2">
                        <div class="max-w-xl lg:max-w-lg">
                            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-3xl">
                                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                                    <img src="{{ asset('assets/img/logo.png') }}" class="h-10" alt="Logo">
                                    <span class="self-center font-semibold whitespace-nowrap dark:text-white">
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
                                <input id="email-address" name="email" type="email" autocomplete="email"
                                    required
                                    class="min-w-0 flex-auto rounded-md border-0 bg-white/5 px-3.5 py-2 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-gray-500 sm:text-sm sm:leading-6"
                                    placeholder="Enter your email">
                                <button type="submit"
                                    class="flex-none rounded-md bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-gradient-to-br focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500">Feedback</button>
                            </div>
                        </div>
                        <dl class="grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
                            <div class="flex flex-col items-start">
                                <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                                    <svg class="w-6 h-6 text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5.693 16.013H7.31a1.685 1.685 0 0 0 1.685-1.684v-.645A1.684 1.684 0 0 1 10.679 12h2.647a1.686 1.686 0 0 1 1.686 1.686v.646c0 .446.178.875.494 1.19.316.317.693.495 1.14.495h1.685a1.556 1.556 0 0 0 1.597-1.016c.078-.214.107-.776.088-1.002.014-4.415-3.571-6.003-8-6.004-4.427 0-8.014 1.585-8.01 5.996-.02.227.009.79.087 1.003a1.558 1.558 0 0 0 1.6 1.02Z" />
                                    </svg>
                                </div>
                                <dt class="mt-4 font-semibold text-white">Kontak Kami</dt>
                                <dd class="mt-2 leading-7 text-gray-400">
                                    Politeknik Negeri Jember
                                    <br>Tlp: <span class="text-justify">(081) 234590357</span>
                                    <br>Faq: <span class="text-justify">(085) 951515425</span>
                                    www.kiraryuuki.com
                                </dd>
                            </div>
                            <div class="flex flex-col items-start">
                                <div class="rounded-md bg-white/5 p-2 ring-1 ring-white/10">
                                    <svg class="w-6 h-6 text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
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
            </footer>
        </section>
    </main>

    <div id="deleteModal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                <button type="button"
                    class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="deleteModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div id="modal-content" class="sm:flex sm:items-start">
                    <div
                        class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        <svg class="h-8 w-8 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg>
                    </div>
                    <div class="my-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Delete Confirmation</h3>
                        <div class="mt-2">
                            <p id="modal-message" class="text-sm text-gray-500">Are you sure you want to delete
                                the selected items? This action cannot be undone.</p>
                        </div>
                    </div>
                </div>
                <form id="deleteForm" method="POST" action="{{ route('data-mobil.destroy') }}"
                    data-modal-toggle="deleteModal">
                    @csrf
                    @method('DELETE')
                    <div id="modal-buttons" class="flex justify-end items-center mt-4 space-x-4">
                    </div>
                </form>
            </div>
        </div>
    </div>

    @livewireScripts
</body>

</html>
