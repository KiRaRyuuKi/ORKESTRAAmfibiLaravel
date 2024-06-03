<x-main-layout>
    <div class="bg-white w-screen px-20 py-5 leading-6 ring-1 ring-gray-900/5">
        <div id="default-carousel" class="relative mx-auto max-w-2xl lg:max-w-7xl drop-shadow-md" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-72 overflow-hidden rounded-2xl md:h-82">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/banner-image-1.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/banner-image-2.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/banner-image-3.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
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

        <div
            class="relative grid mx-auto p-4 my-8 gap-4 md:grid-cols-4 shadow overflow-hidden rounded-3xl max-w-2xl lg:max-w-7xl">
            <div class="grid col-span-1 p-2 gap-4">
                <h3 class="ms-1 text-xl font-medium text-gray-900 dark:text-white">Transmisi:</h3>
                <div class="p-3 border rounded-xl">
                    <ul class="grid w-full gap-3 md:grid-cols-2">
                        <li class="flex-1">
                            <input type="checkbox" id="manual-option" value="" class="hidden peer" required="">
                            <label for="manual-option"
                                class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <svg class="mb-2 w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-joystick"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M10 2a2 2 0 0 1-1.5 1.937v5.087c.863.083 1.5.377 1.5.726 0 .414-.895.75-2 .75s-2-.336-2-.75c0-.35.637-.643 1.5-.726V3.937A2 2 0 1 1 10 2" />
                                        <path
                                            d="M0 9.665v1.717a1 1 0 0 0 .553.894l6.553 3.277a2 2 0 0 0 1.788 0l6.553-3.277a1 1 0 0 0 .553-.894V9.665c0-.1-.06-.19-.152-.23L9.5 6.715v.993l5.227 2.178a.125.125 0 0 1 .001.23l-5.94 2.546a2 2 0 0 1-1.576 0l-5.94-2.546a.125.125 0 0 1 .001-.23L6.5 7.708l-.013-.988L.152 9.435a.25.25 0 0 0-.152.23" />
                                    </svg>
                                    <div class="w-full text-md font-semibold">Manual</div>
                                </div>
                            </label>
                        </li>
                        <li class="flex-1">
                            <input type="checkbox" id="otomatis-option" value="" class="hidden peer"
                                required="">
                            <label for="otomatis-option"
                                class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <svg class="mb-2 w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-joystick"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M10 2a2 2 0 0 1-1.5 1.937v5.087c.863.083 1.5.377 1.5.726 0 .414-.895.75-2 .75s-2-.336-2-.75c0-.35.637-.643 1.5-.726V3.937A2 2 0 1 1 10 2" />
                                        <path
                                            d="M0 9.665v1.717a1 1 0 0 0 .553.894l6.553 3.277a2 2 0 0 0 1.788 0l6.553-3.277a1 1 0 0 0 .553-.894V9.665c0-.1-.06-.19-.152-.23L9.5 6.715v.993l5.227 2.178a.125.125 0 0 1 .001.23l-5.94 2.546a2 2 0 0 1-1.576 0l-5.94-2.546a.125.125 0 0 1 .001-.23L6.5 7.708l-.013-.988L.152 9.435a.25.25 0 0 0-.152.23" />
                                    </svg>
                                    <div class="w-full text-md font-semibold">Otomatis</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>

                <h3 class="ms-1 text-xl font-medium text-gray-900 dark:text-white">Tipe Bahan Bakar:</h3>
                <div class="p-3 border rounded-xl">
                    <ul class="grid w-full gap-3 md:grid-cols-2">
                        <li class="flex-1">
                            <input type="checkbox" id="bensin-option" value="" class="hidden peer"
                                required="">
                            <label for="bensin-option"
                                class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <svg class="mb-2 w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-fuel-pump"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5z" />
                                        <path
                                            d="M1 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v8a2 2 0 0 1 2 2v.5a.5.5 0 0 0 1 0V8h-.5a.5.5 0 0 1-.5-.5V4.375a.5.5 0 0 1 .5-.5h1.495c-.011-.476-.053-.894-.201-1.222a.97.97 0 0 0-.394-.458c-.184-.11-.464-.195-.9-.195a.5.5 0 0 1 0-1q.846-.002 1.412.336c.383.228.634.551.794.907.295.655.294 1.465.294 2.081v3.175a.5.5 0 0 1-.5.501H15v4.5a1.5 1.5 0 0 1-3 0V12a1 1 0 0 0-1-1v4h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1zm9 0a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v13h8z" />
                                    </svg>
                                    <div class="w-full text-md font-semibold">Bensin</div>
                                </div>
                            </label>
                        </li>
                        <li class="flex-1">
                            <input type="checkbox" id="solar-option" value="" class="hidden peer"
                                required="">
                            <label for="solar-option"
                                class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <svg class="mb-2 w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor"
                                        class="bi bi-fuel-pump-diesel" viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 2a.5.5 0 0 0-.5.5v5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5zM4 14V9h1.796q.75 0 1.237.293t.725.85Q8 10.7 8 11.487q0 .792-.242 1.355a1.8 1.8 0 0 1-.732.861Q6.54 14 5.796 14zm1.666-4.194h-.692v3.385h.692q.343 0 .595-.103a1 1 0 0 0 .412-.315q.162-.213.241-.528.084-.314.083-.74 0-.565-.144-.94a1.1 1.1 0 0 0-.436-.569q-.293-.19-.75-.19Z" />
                                        <path
                                            d="M3 0a2 2 0 0 0-2 2v13H.5a.5.5 0 0 0 0 1h11a.5.5 0 0 0 0-1H11v-4a1 1 0 0 1 1 1v.5a1.5 1.5 0 0 0 3 0V8h.5a.5.5 0 0 0 .5-.5V4.324c0-.616 0-1.426-.294-2.081a1.97 1.97 0 0 0-.794-.907Q14.345.999 13.5 1a.5.5 0 0 0 0 1c.436 0 .716.086.9.195a.97.97 0 0 1 .394.458c.147.328.19.746.201 1.222H13.5a.5.5 0 0 0-.5.5V7.5a.5.5 0 0 0 .5.5h.5v4.5a.5.5 0 0 1-1 0V12a2 2 0 0 0-2-2V2a2 2 0 0 0-2-2zm7 2v13H2V2a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1" />
                                    </svg>
                                    <div class="w-full text-md font-semibold">Solar</div>
                                </div>
                            </label>
                        </li>
                        <li class="flex-1">
                            <input type="checkbox" id="ev-option" value="" class="hidden peer"
                                required="">
                            <label for="ev-option"
                                class="inline-flex items-center justify-between w-full p-3 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <svg class="mb-2 w-5 h-5 text-gray-600" xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-ev-station"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 2a.5.5 0 0 0-.5.5v5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 .5-.5v-5a.5.5 0 0 0-.5-.5zm2.131 10.46H4.14v-.893h1.403v-.505H4.14v-.855h1.49v-.54H3.485V13h2.146zm1.316.54h.794l1.106-3.333h-.733l-.74 2.615h-.031l-.747-2.615h-.764z" />
                                        <path
                                            d="M3 0a2 2 0 0 0-2 2v13H.5a.5.5 0 0 0 0 1h11a.5.5 0 0 0 0-1H11v-4a1 1 0 0 1 1 1v.5a1.5 1.5 0 0 0 3 0V4a.5.5 0 0 0-.146-.354l-.5-.5a.5.5 0 0 0-.707 0l-.5.5A.5.5 0 0 0 13 4v3c0 .71.38 1.096.636 1.357l.007.008c.253.258.357.377.357.635v3.5a.5.5 0 1 1-1 0V12a2 2 0 0 0-2-2V2a2 2 0 0 0-2-2zm7 2v13H2V2a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1" />
                                    </svg>
                                    <div class="w-full text-md font-semibold">EV</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="grid col-span-3 p-2 gap-4">
                <h3 class="ms-1 text-xl font-medium text-gray-900 dark:text-white">Kategori:</h3>
                <div class="p-3 border rounded-xl">
                    <ul class="grid w-full gap-3 md:grid-cols-7">
                        <li class="flex-1">
                            <input type="checkbox" id="sedan-option" value="" class="hidden peer"
                                required="">
                            <label for="sedan-option"
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <img src="{{ asset('assets/img/kategori-sedan.svg') }}" class="w-10 mb-1"
                                        alt="">
                                    <div class="w-full text-sm font-semibold">Sedan</div>
                                </div>
                            </label>
                        </li>
                        <li class="flex-1">
                            <input type="checkbox" id="hatchback-option" value="" class="hidden peer"
                                required="">
                            <label for="hatchback-option"
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <img src="{{ asset('assets/img/kategori-hatchback.svg') }}" class="w-10 mb-1"
                                        alt="">
                                    <div class="w-full text-sm font-semibold">Hatchback</div>
                                </div>
                            </label>
                        </li>
                        <li class="flex-1">
                            <input type="checkbox" id="mpv-option" value="" class="hidden peer"
                                required="">
                            <label for="mpv-option"
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <img src="{{ asset('assets/img/kategori-mpv.svg') }}" class="w-10 mb-1"
                                        alt="">
                                    <div class="w-full text-sm font-semibold">MPV</div>
                                </div>
                            </label>
                        </li>
                        <li class="flex-1">
                            <input type="checkbox" id="suv-option" value="" class="hidden peer"
                                required="">
                            <label for="suv-option"
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <img src="{{ asset('assets/img/kategori-suv.svg') }}" class="w-10 mb-1"
                                        alt="">
                                    <div class="w-full text-sm font-semibold">SUV</div>
                                </div>
                            </label>
                        </li>
                        <li class="flex-1">
                            <input type="checkbox" id="truk-option" value="" class="hidden peer"
                                required="">
                            <label for="truk-option"
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <img src="{{ asset('assets/img/kategori-truk.svg') }}" class="w-10 mb-1"
                                        alt="">
                                    <div class="w-full text-sm font-semibold">Truk</div>
                                </div>
                            </label>
                        </li>
                        <li class="flex-1">
                            <input type="checkbox" id="coupe-option" value="" class="hidden peer"
                                required="">
                            <label for="coupe-option"
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <img src="{{ asset('assets/img/kategori-coupe.svg') }}" class="w-10 mb-1"
                                        alt="">
                                    <div class="w-full text-sm font-semibold">Coupe</div>
                                </div>
                            </label>
                        </li>
                        <li class="flex-1">
                            <input type="checkbox" id="van-option" value="" class="hidden peer"
                                required="">
                            <label for="van-option"
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <img src="{{ asset('assets/img/kategori-van.svg') }}" class="w-10 mb-1"
                                        alt="">
                                    <div class="w-full text-sm font-semibold">Van</div>
                                </div>
                            </label>
                        </li>
                        <li class="flex-1">
                            <input type="checkbox" id="wagon-option" value="" class="hidden peer"
                                required="">
                            <label for="wagon-option"
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <img src="{{ asset('assets/img/kategori-wagon.svg') }}" class="w-10 mb-1"
                                        alt="">
                                    <div class="w-full text-sm font-semibold">Wagon</div>
                                </div>
                            </label>
                        </li>
                        <li class="flex-1">
                            <input type="checkbox" id="mobil-atap-terbuka-option" value="" class="hidden peer"
                                required="">
                            <label for="mobil-atap-terbuka-option"
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <img src="{{ asset('assets/img/kategori-atap-terbuka.svg') }}" class="w-10 mb-1"
                                        alt="">
                                    <div class="w-full text-sm font-semibold">Atap Terbuka</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>

                <h3 class="ms-1 text-xl font-medium text-gray-900 dark:text-white">Merek Mobil:</h3>
                <div class="p-3 border rounded-xl">
                    <ul class="grid w-full gap-3 md:grid-cols-7">
                        <li class="flex-1">
                            <input type="checkbox" id="chevrolet-option" value="" class="hidden peer"
                                required="">
                            <label for="chevrolet-option"
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <img src="{{ asset('assets/img/chevrolet.png') }}" class="h-8 mb-1 mx-auto"
                                        alt="">
                                </div>
                            </label>
                        </li>
                        <li class="flex-1">
                            <input type="checkbox" id="daihatsu-option" value="" class="hidden peer"
                                required="">
                            <label for="daihatsu-option"
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <img src="{{ asset('assets/img/daihatsu.png') }}" class="h-8 mb-1 mx-auto"
                                        alt="">
                                </div>
                            </label>
                        </li>
                        <li class="flex-1">
                            <input type="checkbox" id="honda-option" value="" class="hidden peer"
                                required="">
                            <label for="honda-option"
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <img src="{{ asset('assets/img/honda.png') }}" class="h-8 mb-1 mx-auto"
                                        alt="">
                                </div>
                            </label>
                        </li>
                        <li class="flex-1">
                            <input type="checkbox" id="mazda-option" value="" class="hidden peer"
                                required="">
                            <label for="mazda-option"
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <img src="{{ asset('assets/img/mazda.png') }}" class="h-8 mb-1 mx-auto"
                                        alt="">
                                </div>
                            </label>
                        </li>
                        <li class="flex-1">
                            <input type="checkbox" id="mercedes-benz-option" value="" class="hidden peer"
                                required="">
                            <label for="mercedes-benz-option"
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <img src="{{ asset('assets/img/mercedes-benz.png') }}" class="h-8 mb-1 mx-auto"
                                        alt="">
                                </div>
                            </label>
                        </li>
                        <li class="flex-1">
                            <input type="checkbox" id="mitsubishi-option" value="" class="hidden peer"
                                required="">
                            <label for="mitsubishi-option"
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <img src="{{ asset('assets/img/mitsubishi.png') }}" class="h-8 mb-1 mx-auto"
                                        alt="">
                                </div>
                            </label>
                        </li>
                        <li class="flex-1">
                            <input type="checkbox" id="nissan-option" value="" class="hidden peer"
                                required="">
                            <label for="nissan-option"
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <img src="{{ asset('assets/img/nissan.png') }}" class="h-8 mb-1 mx-auto"
                                        alt="">
                                </div>
                            </label>
                        </li>
                        <li class="flex-1">
                            <input type="checkbox" id="suzuki-option" value="" class="hidden peer"
                                required="">
                            <label for="suzuki-option"
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <img src="{{ asset('assets/img/suzuki.png') }}" class="h-8 mb-1 mx-auto"
                                        alt="">
                                </div>
                            </label>
                        </li>
                        <li class="flex-1">
                            <input type="checkbox" id="toyota-option" value="" class="hidden peer"
                                required="">
                            <label for="toyota-option"
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <img src="{{ asset('assets/img/toyota.png') }}" class="h-8 mb-1 mx-auto"
                                        alt="">
                                </div>
                            </label>
                        </li>
                        <li class="flex-1">
                            <input type="checkbox" id="wuling-option" value="" class="hidden peer"
                                required="">
                            <label for="wuling-option"
                                class="inline-flex items-center justify-between w-full p-2 text-gray-500 bg-white rounded-lg cursor-pointer dark:hover:text-gray-300 peer-checked:bg-blue-100 hover:text-gray-600 dark:peer-checked:text-gray-300 peer-checked:text-gray-600 hover:bg-gray-50 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                                <div class="block w-full">
                                    <img src="{{ asset('assets/img/wuling.png') }}" class="h-8 mb-1 mx-auto"
                                        alt="">
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="relative isolate overflow-hidden bg-white py-5">
            <div
                class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.blue.100),white)] opacity-20">
            </div>
            <div
                class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-blue-600/10 ring-1 ring-blue-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center">
            </div>
            <div class="mx-auto max-w-2xl lg:max-w-7xl">
                <div class="grid grid-cols-4 gap-x-6 gap-y-10">
                    @if ($cars->count() > 0)
                        @foreach ($cars as $car)
                            <a href="{{ $car->status == 'Disewakan' ? url($car->id . '/rental/') : ($car->status == 'Dijual' ? url($car->id . '/buy/') : '#') }}"
                                class="group">
                                <div
                                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-t-xl bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                    <img src="{{ $car->image_1 }}" alt=""
                                        class="h-52 w-full object-cover object-center group-hover:opacity-75">
                                </div>
                                <div class="max-w-sm rounded-b-xl overflow-hidden shadow-md bg-white dark:bg-gray-800">
                                    <div class="px-4 py-3 drop-shadow">
                                        <div class="font-bold h-14 text-xl mb-2 text-gray-800 dark:text-white">
                                            {{ $car->brand->name }}, {{ $car->name }} ({{ $car->year }})
                                        </div>
                                        <p class="text-gray-700 dark:text-gray-300 text-sm">
                                            Kategori: {{ $car->category->name }} - Kapasitas: {{ $car->capacity }}
                                            <br>Transmisi: {{ $car->transmission }}
                                        </p>
                                        <div class="text-gray-600 dark:text-gray-400 mt-1 text-sm flex">
                                            <svg class="mt-[0.15rem] w-4 h-4 me-2 text-gray-500 dark:text-white flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <p class="text-gray-600 dark:text-gray-400 text-sm flex-grow">
                                                {{ $car->showroom->address }}
                                            </p>
                                        </div>
                                        <p class="text-gray-600 dark:text-gray-400 mt-1 text-sm flex items-center">
                                            <svg class="w-4 h-4 me-2 text-gray-500 dark:text-white flex-shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M7 6a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-2v-4a3 3 0 0 0-3-3H7V6Z"
                                                    clip-rule="evenodd" />
                                                <path fill-rule="evenodd"
                                                    d="M2 11a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7Zm7.5 1a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5Z"
                                                    clip-rule="evenodd" />
                                                <path d="M10.5 14.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z" />
                                            </svg>
                                            <span
                                                class="text-xs font-medium px-2.5 py-0.5 rounded inline-block w-32 text-center
                                                @if ($car->status == 'Disewakan') bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300
                                                @elseif($car->status == 'Dijual')
                                                    bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300
                                                @else
                                                    bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-300 @endif
                                                ">
                                                {{ $car->status }}
                                            </span>
                                        </p>
                                        <p class="flex mt-3 text-lg font-semibold text-gray-900 dark:text-white">
                                            $ {{ $car->price }}
                                        </p>
                                        <div class="flex my-2">
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
                                </div>
                            </a>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="5">Not found</td>
                        </tr>
                    @endif
                </div>
            </div>
            <div class="w-full mt-12 flex justify-center drop-shadow-lg">
                <button type="button"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br mx-auto px-12 py-2.5 font-bold text-lg rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                    Tampilkan Lebih Banyak
                </button>
            </div>
        </div>
    </div>
</x-main-layout>
