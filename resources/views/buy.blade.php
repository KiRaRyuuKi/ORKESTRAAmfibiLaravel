<x-main-layout>
    <section
        class="bg-white w-screen p-12 rounded-3xl leading-6 shadow-md ring-1 ring-gray-900/5 dark:bg-gray-900 antialiased">
        <div class="max-w-screen-xl mx-auto 2xl:px-0">
            <div class="lg:grid lg:grid-cols-5 lg:gap-8 xl:gap-16">
                <div class="shrink-0 col-span-3">
                    <div id="tab-content">
                        <div class="hidden rounded-lg bg-white dark:bg-gray-800" id="content-1" role="tabpanel"
                            aria-labelledby="content-1">
                            <div
                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                <img src="{{ asset('assets/img/mobil-1.jpg') }}" alt=""
                                    class="h-96 w-full object-cover object-center group-hover:opacity-75">
                            </div>
                        </div>
                        <div class="hidden rounded-lg bg-white dark:bg-gray-800" id="content-2" role="tabpanel"
                            aria-labelledby="content-2">
                            <div
                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                <img src="{{ asset('assets/img/mobil-2.jpg') }}" alt=""
                                    class="h-96 w-full object-cover object-center group-hover:opacity-75">
                            </div>
                        </div>
                        <div class="hidden rounded-lg bg-white dark:bg-gray-800" id="content-3" role="tabpanel"
                            aria-labelledby="content-3">
                            <div
                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                <img src="{{ asset('assets/img/mobil-3.jpg') }}" alt=""
                                    class="h-96 w-full object-cover object-center group-hover:opacity-75">
                            </div>
                        </div>
                        <div class="hidden rounded-lg bg-white dark:bg-gray-800" id="content-4" role="tabpanel"
                            aria-labelledby="content-4">
                            <div
                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                <img src="{{ asset('assets/img/mobil-4.jpg') }}" alt=""
                                    class="h-96 w-full object-cover object-center group-hover:opacity-75">
                            </div>
                        </div>
                        <div class="hidden rounded-lg bg-white dark:bg-gray-800" id="content-5" role="tabpanel"
                            aria-labelledby="content-5">
                            <div
                                class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                <img src="{{ asset('assets/img/mobil-5.jpg') }}" alt=""
                                    class="h-96 w-full object-cover object-center group-hover:opacity-75">
                            </div>
                        </div>
                    </div>

                    <div class="relative mt-5 border-gray-200 dark:border-gray-700">
                        <ul class="grid grid-cols-5 -mb-px text-sm font-medium text-center" id="default-tab"
                            data-tabs-toggle="#tab-content" role="tablist">
                            <li class="col-span-1 w-full pe-2" role="presentation">
                                <button
                                    class="inline-block w-full bg-gray-100 border border-gray-200 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-blue-600 active focus:outline-none dark:bg-gray-700 dark:text-white"
                                    id="content-1" data-tabs-target="#content-1" type="button" role="tab"
                                    aria-controls="content-1" aria-selected="false">
                                    <div
                                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                        <img src="{{ asset('assets/img/mobil-1.jpg') }}" alt=""
                                            class="h-20 w-full object-cover object-center group-hover:opacity-75">
                                    </div>
                                </button>
                            </li>
                            <li class="col-span-1 w-full ps-2" role="presentation">
                                <button
                                    class="inline-block w-full bg-gray-100 border border-gray-200 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-blue-600 active focus:outline-none dark:bg-gray-700 dark:text-white"
                                    id="content-2" data-tabs-target="#content-2" type="button" role="tab"
                                    aria-controls="content-2" aria-selected="false">
                                    <div
                                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                        <img src="{{ asset('assets/img/mobil-2.jpg') }}" alt=""
                                            class="h-20 w-full object-cover object-center group-hover:opacity-75">
                                    </div>
                                </button>
                            </li>
                            <li class="col-span-1 w-full ps-4" role="presentation">
                                <button
                                    class="inline-block w-full bg-gray-100 border border-gray-200 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-blue-600 active focus:outline-none dark:bg-gray-700 dark:text-white"
                                    id="content-3" data-tabs-target="#content-3" type="button" role="tab"
                                    aria-controls="content-3" aria-selected="false">
                                    <div
                                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                        <img src="{{ asset('assets/img/mobil-3.jpg') }}" alt=""
                                            class="h-20 w-full object-cover object-center group-hover:opacity-75">
                                    </div>
                                </button>
                            </li>
                            <li class="col-span-1 w-full ps-4" role="presentation">
                                <button
                                    class="inline-block w-full bg-gray-100 border border-gray-200 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-blue-600 active focus:outline-none dark:bg-gray-700 dark:text-white"
                                    id="content-4" data-tabs-target="#content-4" type="button" role="tab"
                                    aria-controls="content-4" aria-selected="false">
                                    <div
                                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                        <img src="{{ asset('assets/img/mobil-4.jpg') }}" alt=""
                                            class="h-20 w-full object-cover object-center group-hover:opacity-75">
                                    </div>
                                </button>
                            </li>
                            <li class="col-span-1 w-full ps-4" role="presentation">
                                <button
                                    class="inline-block w-full bg-gray-100 border border-gray-200 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-blue-600 active focus:outline-none dark:bg-gray-700 dark:text-white"
                                    id="content-5" data-tabs-target="#content-5" type="button" role="tab"
                                    aria-controls="content-5" aria-selected="false">
                                    <div
                                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                        <img src="{{ asset('assets/img/mobil-5.jpg') }}" alt=""
                                            class="h-20 w-full object-cover object-center group-hover:opacity-75">
                                    </div>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-span-2 bg-gray-100 rounded-xl p-8 mt-6 sm:mt-8 lg:mt-0">
                    <span
                        class="bg-green-200 text-green-800 justify-center text-xs font-semibold px-2 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 hidden sm:flex">
                        Recomendasi
                    </span>
                    <h1 class="my-5 text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                        Honda, BRIO SATYA E 1.2 (2019)
                    </h1>
                    <div class="my-5">
                        <p class="text-gray-900 dark:text-gray-300 font-semibold text-md mt-4">Pickup</p>
                        <div class="flex items-center my-3">
                            <div class="flex">
                                <div class="flex items-center h-5">
                                    <input id="default-radio-1" type="radio" value="" name="default-radio"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                </div>
                                <div class="ms-2 text-sm">
                                    <label for="default-radio-1" class="font-medium text-gray-900 dark:text-gray-300">
                                        Ambil Sendiri
                                    </label>
                                    <p id="default-radio-1-text"
                                        class="text-xs font-normal text-gray-500 dark:text-gray-300">
                                        Jalan kaki ke toko
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex items-center h-5">
                                <input checked id="default-radio-2" type="radio" value=""
                                    name="default-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            </div>
                            <div class="ms-2 text-sm">
                                <label for="default-radio-2" class="font-medium text-gray-900 dark:text-gray-300">
                                    Pickup Sesuai Alamat
                                </label>
                                <p id="default-radio-2-text"
                                    class="text-xs font-normal text-gray-500 dark:text-gray-300">
                                    Manja minta di anterin
                                </p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <p class="text-gray-900 dark:text-gray-300 font-semibold text-md mt-4">Add Extra Warranty</p>
                        <div class="flex justify-between my-3">
                            <div class="flex items-center me-4">
                                <input id="inline-radio" type="radio" value="" name="inline-radio-group"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-radio"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    1 year - $39
                                </label>
                            </div>
                            <div class="flex items-center me-4">
                                <input id="inline-2-radio" type="radio" value="" name="inline-radio-group"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-2-radio"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    2 years - $69
                                </label>
                            </div>
                            <div class="flex items-center me-4">
                                <input checked id="inline-checked-radio" type="radio" value=""
                                    name="inline-radio-group"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="inline-checked-radio"
                                    class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    3 years - $91
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 sm:items-center sm:gap-4">
                        <p class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-white">
                            $1,249.99
                        </p>
                        <div class="flex items-center gap-2 mt-2">
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
                            </div>
                            <p class="text-sm font-medium leading-none text-gray-500 dark:text-gray-400">
                                (5.0)
                            </p>
                            <a href="#"
                                class="text-sm font-medium leading-none text-gray-900 underline hover:no-underline dark:text-white">
                                345 Reviews
                            </a>
                        </div>
                    </div>

                    <div class="mt-6 sm:gap-4 sm:items-center sm:mt-8">
                        <a href="#" title=""
                            class="flex items-center justify-center py-2.5 px-5 my-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-200 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                            role="button">
                            <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                            </svg>
                            Add to favorites
                        </a>

                        <a href="#" title=""
                            class="text-white my-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 flex items-center justify-center"
                            role="button">
                            <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                            </svg>
                            Add to cart
                        </a>
                    </div>

                    <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />

                    <p class="mb-6 text-gray-500 dark:text-gray-400">
                        Also available at competitive prices from
                        <a href="#"
                            class="leading-none text-blue-600 underline hover:no-underline dark:text-white">
                            authorized retailers
                        </a>
                        , with optional Premium delivery for expedited shipping.
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-main-layout>
