<x-main-layout>
    <aside id="sidebar-multi-level-sidebar"
        class="fixed z-40 pb-20 w-80 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div
            class="h-full px-3 py-3 overflow-y-auto bg-white dark:bg-gray-800 leading-6 shadow-md ring-1 ring-gray-900/5">
            <div class="px-4 py-4">
                <div class="flex w-full pb-3 justify-between items-center">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M10.83 5a3.001 3.001 0 0 0-5.66 0H4a1 1 0 1 0 0 2h1.17a3.001 3.001 0 0 0 5.66 0H20a1 1 0 1 0 0-2h-9.17ZM4 11h9.17a3.001 3.001 0 0 1 5.66 0H20a1 1 0 1 1 0 2h-1.17a3.001 3.001 0 0 1-5.66 0H4a1 1 0 1 1 0-2Zm1.17 6H4a1 1 0 1 0 0 2h1.17a3.001 3.001 0 0 0 5.66 0H20a1 1 0 1 0 0-2h-9.17a3.001 3.001 0 0 0-5.66 0Z" />
                        </svg>
                        <h3 class="text-xl ms-2 font-bold text-gray-900 dark:text-white">Filter</h3>
                    </div>
                    <button>
                        <svg class="w-5 h-5 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M5.05 3C3.291 3 2.352 5.024 3.51 6.317l5.422 6.059v4.874c0 .472.227.917.613 1.2l3.069 2.25c1.01.742 2.454.036 2.454-1.2v-7.124l5.422-6.059C21.647 5.024 20.708 3 18.95 3H5.05Z" />
                        </svg>
                    </button>
                </div>

                <div class="pt-3 pb-3">
                    <hr class="border border-gray-200 rounded" />
                </div>

                <button type="button"
                    class="flex items-center mt-3 w-full text-base text-gray-900 transition duration-75 rounded-lg group dark:text-white"
                    aria-controls="dropdown-transmisi" data-collapse-toggle="dropdown-transmisi">
                    <span class="flex-1 text-left font-semibold whitespace-nowrap">
                        Transmisi Mobil
                    </span>
                    <svg class="w-3 h-3 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-transmisi" class="hidden py-2 space-y-2">
                    <li class="mt-2 w-full flex">
                        <div class="w-1/2 px-1">
                            <input type="checkbox" id="manual-option" value="" class="hidden peer" required="">
                            <label for="manual-option"
                                class="inline-flex items-center justify-between w-full py-2 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-400 peer-checked:bg-blue-600 peer-checked:text-white hover:text-gray-600 dark:peer-checked:text-gray-300 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full text-center">
                                    <div class="text-sm font-semibold">Manual</div>
                                </div>
                            </label>
                        </div>
                        <div class="w-1/2 px-1">
                            <input type="checkbox" id="otomatis-option" value="" class="hidden peer"
                                required="">
                            <label for="otomatis-option"
                                class="inline-flex items-center justify-between w-full py-2 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-400 peer-checked:bg-blue-600 peer-checked:text-white hover:text-gray-600 dark:peer-checked:text-gray-300 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full text-center">
                                    <div class="text-sm font-semibold">Otomatis</div>
                                </div>
                            </label>
                        </div>
                    </li>
                </ul>

                <button type="button"
                    class="flex items-center mt-5 w-full text-base text-gray-900 transition duration-75 rounded-lg group dark:text-white"
                    aria-controls="dropdown-kategori-mobil" data-collapse-toggle="dropdown-kategori-mobil">
                    <span class="flex-1 text-left font-semibold whitespace-nowrap">
                        Kategori Mobil
                    </span>
                    <svg class="w-3 h-3 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-kategori-mobil" class="hidden py-2 space-y-2">
                    <li class="mt-2 w-full flex">
                        <div class="w-1/2 px-1">
                            <input type="checkbox" id="sedan-option" value="" class="hidden peer" required="">
                            <label for="sedan-option"
                                class="inline-flex items-center justify-between w-full py-2 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-400 peer-checked:bg-blue-600 peer-checked:text-white hover:text-gray-600 dark:peer-checked:text-gray-300 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full text-center">
                                    <div class="text-sm font-semibold">Sedan</div>
                                </div>
                            </label>
                        </div>
                        <div class="w-1/2 px-1">
                            <input type="checkbox" id="hatchback-option" value="" class="hidden peer"
                                required="">
                            <label for="hatchback-option"
                                class="inline-flex items-center justify-between w-full py-2 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-400 peer-checked:bg-blue-600 peer-checked:text-white hover:text-gray-600 dark:peer-checked:text-gray-300 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full text-center">
                                    <div class="text-sm font-semibold">Hatchback</div>
                                </div>
                            </label>
                        </div>
                    </li>
                    <li class="mt-2 w-full flex">
                        <div class="w-1/2 px-1">
                            <input type="checkbox" id="mpv-option" value="" class="hidden peer" required="">
                            <label for="mpv-option"
                                class="inline-flex items-center justify-between w-full py-2 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-400 peer-checked:bg-blue-600 peer-checked:text-white hover:text-gray-600 dark:peer-checked:text-gray-300 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full text-center">
                                    <div class="text-sm font-semibold">MPV</div>
                                </div>
                            </label>
                        </div>
                        <div class="w-1/2 px-1">
                            <input type="checkbox" id="suv-option" value="" class="hidden peer"
                                required="">
                            <label for="suv-option"
                                class="inline-flex items-center justify-between w-full py-2 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-400 peer-checked:bg-blue-600 peer-checked:text-white hover:text-gray-600 dark:peer-checked:text-gray-300 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full text-center">
                                    <div class="text-sm font-semibold">SUV</div>
                                </div>
                            </label>
                        </div>
                    </li>
                    <li class="mt-2 w-full flex">
                        <div class="w-1/2 px-1">
                            <input type="checkbox" id="truk-option" value="" class="hidden peer"
                                required="">
                            <label for="truk-option"
                                class="inline-flex items-center justify-between w-full py-2 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-400 peer-checked:bg-blue-600 peer-checked:text-white hover:text-gray-600 dark:peer-checked:text-gray-300 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full text-center">
                                    <div class="text-sm font-semibold">Truk</div>
                                </div>
                            </label>
                        </div>
                        <div class="w-1/2 px-1">
                            <input type="checkbox" id="coupe-option" value="" class="hidden peer"
                                required="">
                            <label for="coupe-option"
                                class="inline-flex items-center justify-between w-full py-2 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-400 peer-checked:bg-blue-600 peer-checked:text-white hover:text-gray-600 dark:peer-checked:text-gray-300 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full text-center">
                                    <div class="text-sm font-semibold">Coupe</div>
                                </div>
                            </label>
                        </div>
                    </li>
                    <li class="mt-2 w-full flex">
                        <div class="w-1/2 px-1">
                            <input type="checkbox" id="van-option" value="" class="hidden peer"
                                required="">
                            <label for="van-option"
                                class="inline-flex items-center justify-between w-full py-2 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-400 peer-checked:bg-blue-600 peer-checked:text-white hover:text-gray-600 dark:peer-checked:text-gray-300 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full text-center">
                                    <div class="text-sm font-semibold">Van</div>
                                </div>
                            </label>
                        </div>
                        <div class="w-1/2 px-1">
                            <input type="checkbox" id="wagon-option" value="" class="hidden peer"
                                required="">
                            <label for="wagon-option"
                                class="inline-flex items-center justify-between w-full py-2 text-gray-500 bg-white border-2 border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 peer-checked:border-blue-400 peer-checked:bg-blue-600 peer-checked:text-white hover:text-gray-600 dark:peer-checked:text-gray-300 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full text-center">
                                    <div class="text-sm font-semibold">Wagon</div>
                                </div>
                            </label>
                        </div>
                    </li>
                </ul>

                <button type="button"
                    class="flex items-center mt-5 w-full text-base text-gray-900 transition duration-75 rounded-lg group dark:text-white"
                    aria-controls="dropdown-merek-mobil" data-collapse-toggle="dropdown-merek-mobil">
                    <span class="flex-1 text-left font-semibold whitespace-nowrap">
                        Merek Mobil
                    </span>
                    <svg class="w-3 h-3 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <ul id="dropdown-merek-mobil" class="hidden py-2 space-y-2">
                    <li class="mt-2 w-full">
                        <div class="flex items-center border rounded-lg">
                            <input id="vue-checkbox" type="checkbox" value=""
                                class="w-4 h-4 ms-2 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="vue-checkbox"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Chevrolet
                            </label>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="flex items-center border rounded-lg">
                            <input id="react-checkbox" type="checkbox" value=""
                                class="w-4 h-4 ms-2 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="react-checkbox"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Daihatsu
                            </label>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="flex items-center border rounded-lg">
                            <input id="angular-checkbox" type="checkbox" value=""
                                class="w-4 h-4 ms-2 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="angular-checkbox"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Honda
                            </label>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="flex items-center border rounded-lg">
                            <input id="laravel-checkbox" type="checkbox" value=""
                                class="w-4 h-4 ms-2 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="laravel-checkbox"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Mazda
                            </label>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="flex items-center border rounded-lg">
                            <input id="laravel-checkbox" type="checkbox" value=""
                                class="w-4 h-4 ms-2 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="laravel-checkbox"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Mercedes-Benz
                            </label>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="flex items-center border rounded-lg">
                            <input id="laravel-checkbox" type="checkbox" value=""
                                class="w-4 h-4 ms-2 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="laravel-checkbox"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Mitsubishi
                            </label>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="flex items-center border rounded-lg">
                            <input id="laravel-checkbox" type="checkbox" value=""
                                class="w-4 h-4 ms-2 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="laravel-checkbox"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Nissan
                            </label>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="flex items-center border rounded-lg">
                            <input id="laravel-checkbox" type="checkbox" value=""
                                class="w-4 h-4 ms-2 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="laravel-checkbox"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Suzuki
                            </label>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="flex items-center border rounded-lg">
                            <input id="laravel-checkbox" type="checkbox" value=""
                                class="w-4 h-4 ms-2 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="laravel-checkbox"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Toyota
                            </label>
                        </div>
                    </li>
                    <li class="w-full">
                        <div class="flex items-center border rounded-lg">
                            <input id="laravel-checkbox" type="checkbox" value=""
                                class="w-4 h-4 ms-2 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="laravel-checkbox"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Wuling
                            </label>
                        </div>
                    </li>
                </ul>

                <div id="dropdown-cta"
                    class="p-4 mt-6 rounded-lg shadow ring-slate-50 ring-gray-900/5 bg-blue-50 dark:bg-blue-900"
                    role="alert">
                    <div class="flex items-center mb-3">
                        <span
                            class="bg-orange-100 text-orange-800 text-sm font-semibold me-2 px-2.5 py-0.5 rounded dark:bg-orange-200 dark:text-orange-900">Beta</span>
                        <button type="button"
                            class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 inline-flex justify-center items-center w-6 h-6 text-blue-900 rounded-lg focus:ring-2 focus:ring-blue-400 p-1 hover:bg-blue-200 dark:bg-blue-900 dark:text-blue-400 dark:hover:bg-blue-800"
                            data-dismiss-target="#dropdown-cta" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                    <p class="mb-3 text-sm text-justify text-blue-800 dark:text-blue-400">
                        Preview the new {{ config('app.name', 'Amfibi') }} market navigation! You can turn the
                        new navigation off for a
                        limited time in your profile.
                    </p>
                    <a class="text-sm text-blue-800 underline font-medium hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300"
                        href="#">Turn new navigation off</a>
                </div>
            </div>
        </div>
    </aside>

    <div class="bg-white w-screen p-5 ml-80 leading-6 shadow-md ring-1 ring-gray-900/5">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-72">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/banner-image-1.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/banner-image-2.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/banner-image-3.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0">
                </button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1">
                </button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="2">
                </button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        <form class="flex items-center max-w-lg mx-auto my-12">
            <label for="voice-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4" />
                    </svg>
                </div>
                <input type="text" id="voice-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search Mockups, Logos, Design Templates..." required />
                <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-3">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 7v3a5.006 5.006 0 0 1-5 5H6a5.006 5.006 0 0 1-5-5V7m7 9v3m-3 0h6M7 1h2a3 3 0 0 1 3 3v5a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V4a3 3 0 0 1 3-3Z" />
                    </svg>
                </button>
            </div>
            <button type="submit"
                class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>Search
            </button>
        </form>

        <div class="bg-white">
            <div class="mx-auto max-w-2xl lg:max-w-7xl">
                <h2 class="sr-only">Products</h2>

                <div class="grid grid-cols-3 gap-x-6 gap-y-10">
                    <a href="#" class="group">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-t-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                            <img src="{{ asset('assets/img/mobil-1.jpg') }}" alt=""
                                class="h-52 w-full object-cover object-center group-hover:opacity-75">
                        </div>
                        <div class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white dark:bg-gray-800">
                            <div class="px-4 py-3">
                                <div class="font-bold text-xl mb-2 text-gray-800 dark:text-white">2019 Honda
                                </div>
                                <p class="text-gray-700 dark:text-gray-300 text-sm">BRIO SATYA E 1.2</p>
                                <p class="text-gray-600 dark:text-gray-400 text-sm flex items-center">
                                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Jawa Timur
                                </p>
                                <p class="text-gray-600 dark:text-gray-400 text-sm flex items-center">
                                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M7 6a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-2v-4a3 3 0 0 0-3-3H7V6Z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd"
                                            d="M2 11a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7Zm7.5 1a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5Z"
                                            clip-rule="evenodd" />
                                        <path d="M10.5 14.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z" />
                                    </svg>
                                    Dijual
                                </p>
                                <p class="flex text-lg font-semibold text-gray-900 dark:text-white">$488</p>
                                <div class="flex mt-2">
                                    <div class="flex items-center gap-1">
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <p
                                            class="flex text-sm font-medium ms-1 items-center leading-none text-gray-500 dark:text-gray-400">
                                            (5.0)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 pb-4 flex flex-wrap">
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-300 mr-2 mb-2">#Honda</span>
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-300 mr-2 mb-2">#BRIO</span>
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-300 mr-2 mb-2">#2019</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="group">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-t-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                            <img src="{{ asset('assets/img/mobil-2.jpg') }}" alt=""
                                class="h-52 w-full object-cover object-center group-hover:opacity-75">
                        </div>
                        <div class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white dark:bg-gray-800">
                            <div class="px-4 py-3">
                                <div class="font-bold text-xl mb-2 text-gray-800 dark:text-white">2019 Honda
                                </div>
                                <p class="text-gray-700 dark:text-gray-300 text-sm">BRIO SATYA E 1.2</p>
                                <p class="text-gray-600 dark:text-gray-400 text-sm flex items-center">
                                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Jawa Timur
                                </p>
                                <p class="text-gray-600 dark:text-gray-400 text-sm flex items-center">
                                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M7 6a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-2v-4a3 3 0 0 0-3-3H7V6Z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd"
                                            d="M2 11a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7Zm7.5 1a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5Z"
                                            clip-rule="evenodd" />
                                        <path d="M10.5 14.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z" />
                                    </svg>
                                    Dijual
                                </p>
                                <p class="flex text-lg font-semibold text-gray-900 dark:text-white">$488</p>
                                <div class="flex mt-2">
                                    <div class="flex items-center gap-1">
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <p
                                            class="flex text-sm font-medium ms-1 items-center leading-none text-gray-500 dark:text-gray-400">
                                            (5.0)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 pb-4 flex flex-wrap">
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-300 mr-2 mb-2">#Honda</span>
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-300 mr-2 mb-2">#BRIO</span>
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-300 mr-2 mb-2">#2019</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="group">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-t-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                            <img src="{{ asset('assets/img/mobil-3.jpg') }}" alt=""
                                class="h-52 w-full object-cover object-center group-hover:opacity-75">
                        </div>
                        <div class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white dark:bg-gray-800">
                            <div class="px-4 py-3">
                                <div class="font-bold text-xl mb-2 text-gray-800 dark:text-white">2019 Honda
                                </div>
                                <p class="text-gray-700 dark:text-gray-300 text-sm">BRIO SATYA E 1.2</p>
                                <p class="text-gray-600 dark:text-gray-400 text-sm flex items-center">
                                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Jawa Timur
                                </p>
                                <p class="text-gray-600 dark:text-gray-400 text-sm flex items-center">
                                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M7 6a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-2v-4a3 3 0 0 0-3-3H7V6Z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd"
                                            d="M2 11a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7Zm7.5 1a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5Z"
                                            clip-rule="evenodd" />
                                        <path d="M10.5 14.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z" />
                                    </svg>
                                    Dijual
                                </p>
                                <p class="flex text-lg font-semibold text-gray-900 dark:text-white">$488</p>
                                <div class="flex mt-2">
                                    <div class="flex items-center gap-1">
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <p
                                            class="flex text-sm font-medium ms-1 items-center leading-none text-gray-500 dark:text-gray-400">
                                            (5.0)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 pb-4 flex flex-wrap">
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-300 mr-2 mb-2">#Honda</span>
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-300 mr-2 mb-2">#BRIO</span>
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-300 mr-2 mb-2">#2019</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="group">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-t-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                            <img src="{{ asset('assets/img/mobil-4.jpg') }}" alt=""
                                class="h-52 w-full object-cover object-center group-hover:opacity-75">
                        </div>
                        <div class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white dark:bg-gray-800">
                            <div class="px-4 py-3">
                                <div class="font-bold text-xl mb-2 text-gray-800 dark:text-white">2019 Honda
                                </div>
                                <p class="text-gray-700 dark:text-gray-300 text-sm">BRIO SATYA E 1.2</p>
                                <p class="text-gray-600 dark:text-gray-400 text-sm flex items-center">
                                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Jawa Timur
                                </p>
                                <p class="text-gray-600 dark:text-gray-400 text-sm flex items-center">
                                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M7 6a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-2v-4a3 3 0 0 0-3-3H7V6Z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd"
                                            d="M2 11a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7Zm7.5 1a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5Z"
                                            clip-rule="evenodd" />
                                        <path d="M10.5 14.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z" />
                                    </svg>
                                    Dijual
                                </p>
                                <p class="flex text-lg font-semibold text-gray-900 dark:text-white">$488</p>
                                <div class="flex mt-2">
                                    <div class="flex items-center gap-1">
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <p
                                            class="flex text-sm font-medium ms-1 items-center leading-none text-gray-500 dark:text-gray-400">
                                            (5.0)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 pb-4 flex flex-wrap">
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-300 mr-2 mb-2">#Honda</span>
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-300 mr-2 mb-2">#BRIO</span>
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-300 mr-2 mb-2">#2019</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="group">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-t-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                            <img src="{{ asset('assets/img/mobil-5.jpg') }}" alt=""
                                class="h-52 w-full object-cover object-center group-hover:opacity-75">
                        </div>
                        <div class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white dark:bg-gray-800">
                            <div class="px-4 py-3">
                                <div class="font-bold text-xl mb-2 text-gray-800 dark:text-white">2019 Honda
                                </div>
                                <p class="text-gray-700 dark:text-gray-300 text-sm">BRIO SATYA E 1.2</p>
                                <p class="text-gray-600 dark:text-gray-400 text-sm flex items-center">
                                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Jawa Timur
                                </p>
                                <p class="text-gray-600 dark:text-gray-400 text-sm flex items-center">
                                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M7 6a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-2v-4a3 3 0 0 0-3-3H7V6Z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd"
                                            d="M2 11a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7Zm7.5 1a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5Z"
                                            clip-rule="evenodd" />
                                        <path d="M10.5 14.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z" />
                                    </svg>
                                    Dijual
                                </p>
                                <p class="flex text-lg font-semibold text-gray-900 dark:text-white">$488</p>
                                <div class="flex mt-2">

                                    <div class="flex items-center gap-1">
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <p
                                            class="flex text-sm font-medium ms-1 items-center leading-none text-gray-500 dark:text-gray-400">
                                            (5.0)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 pb-4 flex flex-wrap">
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-300 mr-2 mb-2">#Honda</span>
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-300 mr-2 mb-2">#BRIO</span>
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-300 mr-2 mb-2">#2019</span>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="group">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-t-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                            <img src="{{ asset('assets/img/mobil-6.jpg') }}" alt=""
                                class="h-52 w-full object-cover object-center group-hover:opacity-75">
                        </div>
                        <div class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white dark:bg-gray-800">
                            <div class="px-4 py-3">
                                <div class="font-bold text-xl mb-2 text-gray-800 dark:text-white">
                                    2019 Honda
                                </div>
                                <p class="text-gray-700 dark:text-gray-300 text-sm">BRIO SATYA E 1.2</p>
                                <p class="text-gray-600 dark:text-gray-400 text-sm flex items-center">
                                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Jawa Timur
                                </p>
                                <p class="text-gray-600 dark:text-gray-400 text-sm flex items-center">
                                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M7 6a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-2v-4a3 3 0 0 0-3-3H7V6Z"
                                            clip-rule="evenodd" />
                                        <path fill-rule="evenodd"
                                            d="M2 11a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7Zm7.5 1a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5Z"
                                            clip-rule="evenodd" />
                                        <path d="M10.5 14.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z" />
                                    </svg>
                                    Dijual
                                </p>
                                <p class="flex text-lg font-semibold text-gray-900 dark:text-white">$488</p>
                                <div class="flex mt-2">
                                    <div class="flex items-center gap-1">
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                        </svg>
                                        <p
                                            class="flex text-sm font-medium ms-1 items-center leading-none text-gray-500 dark:text-gray-400">
                                            (5.0)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 pb-4 flex flex-wrap">
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-300 mr-2 mb-2">#Honda</span>
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-300 mr-2 mb-2">#BRIO</span>
                                <span
                                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 dark:text-gray-300 mr-2 mb-2">#2019</span>
                            </div>
                        </div>
                    </a>
                    <!-- More products... -->
                </div>
            </div>

            <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between py-8"
                aria-label="Table navigation">
                <span
                    class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing
                    <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span
                        class="font-semibold text-gray-900 dark:text-white">1000</span></span>
                <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page"
                            class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                    </li>
                </ul>
            </nav>
            <div class="pb-8">
                <hr class="border border-gray-200 rounded" />
            </div>
        </div>

        <footer class="mt-5 bg-white dark:bg-gray-800">
            <div class="mx-auto max-w-screen-xl">
                <div class="md:flex md:justify-between">
                    <div class="mb-5 md:mb-0 w-1/2">
                        <a href="https://flowbite.com" class="flex items-center mb-3">
                            <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-8"
                                alt="FlowBite Logo" />
                            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">
                                {{ config('app.name', 'Amfibi') }}
                            </span>
                        </a>
                        <p class="text-base w-3/4 text-justify text-gray-500 dark:text-gray-400">
                            {{ config('app.name', 'Amfibi') }}
                            adalah platform online yang menyediakan layanan jual beli dan sewa mobil secara
                            mudah dan aman.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-20 sm:grid-cols-3">
                        <div>
                            <h2 class="mb-5 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                                Company</h2>
                            <ul class="text-gray-600 dark:text-gray-400">
                                <li class="mb-3">
                                    <a href="#" class="hover:underline">
                                        About
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="hover:underline">
                                        Market
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="hover:underline">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                                Legal
                            </h2>
                            <ul class="text-gray-600 dark:text-gray-400">
                                <li class="mb-3">
                                    <a href="#" class="hover:underline">
                                        Privacy Policy
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="hover:underline">
                                        Licensing
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="hover:underline">
                                        Terms
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                                Download
                            </h2>
                            <ul class="text-gray-600 dark:text-gray-400">
                                <li class="mb-3">
                                    <a href="#" class="hover:underline">IOS</a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="hover:underline">Android</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-4 py-5">
                    <hr class="border border-gray-200 rounded" />
                </div>
                <div class="flex justify-center">
                    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2021-2022 <a
                            href="#" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
                </div>
            </div>
        </footer>
    </div>
</x-main-layout>
