<section class="bg-white w-screen p-12 leading-6 shadow-md ring-1 ring-gray-900/5 dark:bg-gray-900 antialiased">
    <div class="max-w-screen-xl mx-auto 2xl:px-0">
        <div class="lg:grid lg:grid-cols-5 lg:gap-8 xl:gap-12">
            <div class="shrink-0 col-span-3">
                <div id="tab-content">
                    <div class="hidden rounded-2xl bg-white dark:bg-gray-800" id="content-1" role="tabpanel"
                        aria-labelledby="content-1">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-2xl bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                            <img src="{{ $car->image_1 }}" alt=""
                                class="h-96 w-full object-cover object-center group-hover:opacity-75">
                        </div>
                    </div>
                    <div class="hidden rounded-2xl bg-white dark:bg-gray-800" id="content-2" role="tabpanel"
                        aria-labelledby="content-2">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-2xl bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                            <img src="{{ $car->image_2 }}" alt=""
                                class="h-96 w-full object-cover object-center group-hover:opacity-75">
                        </div>
                    </div>
                    <div class="hidden rounded-2xl bg-white dark:bg-gray-800" id="content-3" role="tabpanel"
                        aria-labelledby="content-3">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-2xl bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                            <img src="{{ $car->image_3 }}" alt=""
                                class="h-96 w-full object-cover object-center group-hover:opacity-75">
                        </div>
                    </div>
                    <div class="hidden rounded-2xl bg-white dark:bg-gray-800" id="content-4" role="tabpanel"
                        aria-labelledby="content-4">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-2xl bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                            <img src="{{ $car->image_4 }}" alt=""
                                class="h-96 w-full object-cover object-center group-hover:opacity-75">
                        </div>
                    </div>
                    <div class="hidden rounded-2xl bg-white dark:bg-gray-800" id="content-5" role="tabpanel"
                        aria-labelledby="content-5">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-2xl bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                            <img src="{{ $car->image_5 }}" alt=""
                                class="h-96 w-full object-cover object-center group-hover:opacity-75">
                        </div>
                    </div>
                </div>

                <div class="relative mt-5 border-gray-200 dark:border-gray-700">
                    <ul class="flex justify-between gap-2 -mb-px p-3 border rounded-2xl text-sm font-medium text-center"
                        id="default-tab" data-tabs-toggle="#tab-content" role="tablist">
                        <li class="flex justify-center item-center" role="presentation">
                            <button
                                class="inline-block w-full bg-gray-100 border border-gray-200 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-blue-600 active focus:outline-none dark:bg-gray-700 dark:text-white"
                                id="content-1" data-tabs-target="#content-1" type="button" role="tab"
                                aria-controls="content-1" aria-selected="false">
                                <div
                                    class="aspect-h-1 aspect-w-1 w-32 overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                    <img src="{{ $car->image_1 }}" alt=""
                                        class="h-20 w-full object-cover object-center group-hover:opacity-75">
                                </div>
                            </button>
                        </li>
                        <li class="flex justify-center item-center" role="presentation">
                            <button
                                class="inline-block w-full bg-gray-100 border border-gray-200 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-blue-600 active focus:outline-none dark:bg-gray-700 dark:text-white"
                                id="content-2" data-tabs-target="#content-2" type="button" role="tab"
                                aria-controls="content-2" aria-selected="false">
                                <div
                                    class="aspect-h-1 aspect-w-1 w-32 overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                    <img src="{{ $car->image_2 }}" alt=""
                                        class="h-20 w-full object-cover object-center group-hover:opacity-75">
                                </div>
                            </button>
                        </li>
                        <li class="flex justify-center item-center" role="presentation">
                            <button
                                class="inline-block w-full bg-gray-100 border border-gray-200 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-blue-600 active focus:outline-none dark:bg-gray-700 dark:text-white"
                                id="content-3" data-tabs-target="#content-3" type="button" role="tab"
                                aria-controls="content-3" aria-selected="false">
                                <div
                                    class="aspect-h-1 aspect-w-1 w-32 overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                    <img src="{{ $car->image_3 }}" alt=""
                                        class="h-20 w-full object-cover object-center group-hover:opacity-75">
                                </div>
                            </button>
                        </li>
                        <li class="flex justify-center item-center" role="presentation">
                            <button
                                class="inline-block w-full bg-gray-100 border border-gray-200 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-blue-600 active focus:outline-none dark:bg-gray-700 dark:text-white"
                                id="content-4" data-tabs-target="#content-4" type="button" role="tab"
                                aria-controls="content-4" aria-selected="false">
                                <div
                                    class="aspect-h-1 aspect-w-1 w-32 overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                    <img src="{{ $car->image_4 }}" alt=""
                                        class="h-20 w-full object-cover object-center group-hover:opacity-75">
                                </div>
                            </button>
                        </li>
                        <li class="flex justify-center item-center" role="presentation">
                            <button
                                class="inline-block w-full bg-gray-100 border border-gray-200 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-blue-600 active focus:outline-none dark:bg-gray-700 dark:text-white"
                                id="content-5" data-tabs-target="#content-5" type="button" role="tab"
                                aria-controls="content-5" aria-selected="false">
                                <div
                                    class="aspect-h-1 aspect-w-1 w-32 overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                    <img src="{{ $car->image_5 }}" alt=""
                                        class="h-20 w-full object-cover object-center group-hover:opacity-75">
                                </div>
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="border-t mt-[1.6rem] pt-[2.2rem] pb-2">
                    <div class="flex">
                        <x-avatar src="{{ $car->showroom->profile_photo }}" class="w-16 h-16" />
                        <div class="ms-4 w-full">
                            <p class="flex items-center text-gray-900 dark:text-gray-300 font-semibold text-lg">
                                <svg class="w-6 h-6 me-1 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                                        clip-rule="evenodd" />
                                </svg>
                                {{ $car->showroom->name }}
                            </p>
                            <div class="flex items-center">
                                <x-avatar src="{{ $car->showroom->user->profile_photo }}" class="w-6 h-6" />
                                <div class="ms-2 text-gray-500 dark:text-gray-400">
                                    <p class="text-sm">
                                        {{ $car->showroom->user->name }}
                                    </p>
                                    <div class="flex items-center gap-x-1.5">
                                        <div class="flex-none rounded-full bg-emerald-500/20 p-1">
                                            <div class="h-1.5 w-1.5 rounded-full bg-emerald-500"></div>
                                        </div>
                                        <p class="text-xs leading-5 text-gray-500">Online</p>
                                    </div>
                                </div>
                                @if ($car->showroom->user->id !== $authenticatedUserId)
                                    <button type="submit"
                                        class="ml-auto bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br rounded-md px-3.5 py-1.5 text-sm text-white focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800 flex items-center justify-center"
                                        wire:click="message({{ $car->showroom->user->id }})">
                                        <svg class="w-4 h-4 me-2" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-chat-dots"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                            <path
                                                d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2" />
                                        </svg>
                                        Message
                                    </button>
                                @else
                                    <button type="button"
                                        class="ml-auto bg-gradient-to-r from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br rounded-md px-5 py-2 text-sm text-white flex items-center justify-center"
                                        disabled>
                                        <svg class="w-4 h-4 me-2" xmlns="http://www.w3.org/2000/svg" width="16"
                                            height="16" fill="currentColor" class="bi bi-chat-dots"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                            <path
                                                d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125m.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2" />
                                        </svg>
                                        Message
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center my-5">
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 me-1 dark:text-gray-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <p class="ms-1 text-lg font-medium text-gray-500 dark:text-gray-400">5</p>
                        <p class="ms-1 text-lg font-medium text-gray-500 dark:text-gray-400">out of</p>
                        <p class="ms-1 text-lg font-medium text-gray-500 dark:text-gray-400">5</p>
                    </div>
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">345 global ratings</p>
                    <div class="flex items-center mt-4">
                        <a href="#"
                            class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">5 star</a>
                        <div class="w-2/4 h-2 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-2 bg-yellow-300 rounded" style="width: 100%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">100%</span>
                    </div>
                    <div class="flex items-center mt-4">
                        <a href="#"
                            class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">4 star</a>
                        <div class="w-2/4 h-2 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-2 bg-yellow-300 rounded" style="width: 0%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">0%</span>
                    </div>
                    <div class="flex items-center mt-4">
                        <a href="#"
                            class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">3 star</a>
                        <div class="w-2/4 h-2 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-2 bg-yellow-300 rounded" style="width: 0%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">0%</span>
                    </div>
                    <div class="flex items-center mt-4">
                        <a href="#"
                            class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">2 star</a>
                        <div class="w-2/4 h-2 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-2 bg-yellow-300 rounded" style="width: 0%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">0%</span>
                    </div>
                    <div class="flex items-center mt-4">
                        <a href="#"
                            class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline">1 star</a>
                        <div class="w-2/4 h-2 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-2 bg-yellow-300 rounded" style="width: 0%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">0%</span>
                    </div>
                </div>
            </div>

            <div class="col-span-2 bg-sky-50 rounded-xl p-8 mt-6 sm:mt-8 lg:mt-0">
                <h1 class="flex text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                    {{ $car->brand->name }}, {{ $car->name }} ({{ $car->year }})
                </h1>
                
                <div class="my-5">
                    <p class="text-gray-900 dark:text-gray-300 font-semibold text-md mt-4">Pickup</p>
                    <div class="flex items-center my-3">
                        <div class="flex">
                            <div class="flex items-center h-5">
                                <input id="default-radio-1" type="radio" value="pickup" name="delivery-option"
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
                            <input id="default-radio-2" type="radio" value="delivery" name="delivery-option"
                                checked
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        </div>
                        <div class="ms-2 text-sm">
                            <label for="default-radio-2" class="font-medium text-gray-900 dark:text-gray-300">
                                Pickup Sesuai Alamat
                            </label>
                            <p id="default-radio-2-text" class="text-xs font-normal text-gray-500 dark:text-gray-300">
                                Manja minta di anterin
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    <p class="text-gray-900 dark:text-gray-300 font-semibold text-md mt-4">Add Extra Warranty</p>
                    <div class="flex justify-between my-3">
                        <div class="flex items-center me-4">
                            <input id="warranty-1-year" type="radio" value="39" name="warranty"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="warranty-1-year"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                1 year - $39
                            </label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="warranty-2-years" type="radio" value="69" name="warranty"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="warranty-2-years"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                2 years - $69
                            </label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="warranty-3-years" type="radio" value="99" name="warranty"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                checked>
                            <label for="warranty-3-years"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                3 years - $99
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mt-8 sm:items-center sm:gap-4">
                    <p class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-white">
                        $ {{ $car->price }}
                    </p>
                    <div class="flex items-center gap-2 mt-2">
                        <div class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
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
                    @if (Route::has('login'))
                        @auth
                            <a href="#" title=""
                                class="text-white my-3 bg-gradient-to-r from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800 flex items-center justify-center"
                                role="button">
                                <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                                </svg>
                                Add to favorites
                            </a>
                            @if ($car->showroom->user->id !== $authenticatedUserId)
                                <a id="proceed-to-payment" href="{{ route('payment', ['id' => $car->id]) }}"
                                    title=""
                                    class="text-white my-3 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 flex items-center justify-center"
                                    role="button">
                                    <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                    </svg>
                                    Add to cart
                                </a>
                            @else
                                <button type="button"
                                    class="w-full text-white my-3 bg-gradient-to-r from-gray-500 via-gray-600 to-gray-700 hover:bg-gradient-to-br focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800 flex items-center justify-center"
                                    disabled>
                                    <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                    </svg>
                                    Add to cart
                                </button>
                            @endif
                        @else
                            <a href="{{ route('login') }}" title=""
                                class="text-white my-3 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 flex items-center justify-center"
                                role="button">
                                Log in
                            </a>
                        @endauth
                    @endif
                </div>

                <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />

                <p class="text-gray-900 dark:text-gray-300 font-semibold text-md mt-4">
                    Deskripsi:
                </p>
                <p class="mb-4 text-gray-500 dark:text-gray-400">
                    {{ $car->description }}
                </p>
                <p class="text-gray-900 dark:text-gray-300 font-semibold text-md">
                    Aksesoris:
                </p>
                <p class="text-gray-500 dark:text-gray-400">
                    {{ $car->accessories }}
                </p>
            </div>
        </div>
    </div>
</section>
