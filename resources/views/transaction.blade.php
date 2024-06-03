<x-main-layout>
    <section class="bg-white py-12 w-screen leading-6">
        <div class="mx-auto max-w-screen-xl px-10 mb-12 2xl:px-0">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">
                Transaction information
            </h2>

            <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                    @if (session()->has('success'))
                        <div id="alert-3"
                            class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                            role="alert">
                            <div
                                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-200 rounded-lg dark:bg-green-800 dark:text-green-200">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                                </svg>
                                <span class="sr-only">Check icon</span>
                            </div>
                            <span class="sr-only">Success</span>
                            <div class="ms-3 text-sm font-medium">
                                {{ session('success') }}
                            </div>
                            <button type="button"
                                class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                                data-dismiss-target="#alert-3" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    @endif
                    @if ($payments->count() > 0)
                        @foreach ($payments as $payment)
                            <div class="space-y-6 mb-5">
                                <div class="rounded-2xl drop-shadow bg-white p-4 relative">
                                    <div class="space-y-4 md:flex md:items-center md:gap-6 md:space-y-0">
                                        <a href="#"
                                            class="aspect-h-1 aspect-w-1 w-40 overflow-hidden rounded-xl bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                            <img src="{{ $payment->car->image_1 }}" alt=""
                                                class="h-32 w-full object-cover object-center group-hover:opacity-75">
                                        </a>

                                        <div class="w-full min-w-0 flex-1 md:max-w-md">
                                            <a href="#"
                                                class="text-base font-medium text-gray-900 hover:underline dark:text-white">
                                                {{ $payment->car->name }}
                                            </a>

                                            <div class="mt-2">
                                                <div class="text-sm flex font-normal text-gray-500 dark:text-gray-400">
                                                    <p class="w-20">Showroom</p>:
                                                    <p class="flex-1 ms-1 max-w-xs"> {{ $payment->showroom->name }}</p>
                                                </div>
                                                <div class="text-sm flex font-normal text-gray-500 dark:text-gray-400">
                                                    <p class="w-20">Lokasi</p>:
                                                    <p class="flex-1 ms-1 max-w-xs"> {{ $payment->showroom->address }}
                                                    </p>
                                                </div>
                                                <div class="text-sm flex font-normal text-gray-500 dark:text-gray-400">
                                                    <p class="w-20">Harga</p>:
                                                    <p class="flex-1 ms-1 max-w-xs"> ${{ $payment->amount }}</p>
                                                </div>
                                                <div class="text-sm flex font-normal text-gray-500 dark:text-gray-400">
                                                    <p class="w-20">Tanggal</p>:
                                                    <p class="flex-1 ms-1 max-w-xs"> {{ $payment->payment_date }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="absolute bottom-0 right-0 p-4 me-1">
                                            <div class="flex mt-1">
                                                <div class="flex items-center gap-1">
                                                    <svg class="w-6 h-6 text-gray-300" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="currentColor" viewBox="0 0 24 24">
                                                        <path
                                                            d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                                    </svg>
                                                    <svg class="w-6 h-6 text-gray-300" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="currentColor" viewBox="0 0 24 24">
                                                        <path
                                                            d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                                    </svg>
                                                    <svg class="w-6 h-6 text-gray-300" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="currentColor" viewBox="0 0 24 24">
                                                        <path
                                                            d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                                    </svg>
                                                    <svg class="w-6 h-6 text-gray-300" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="currentColor" viewBox="0 0 24 24">
                                                        <path
                                                            d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                                    </svg>
                                                    <svg class="w-6 h-6 text-gray-300" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="currentColor" viewBox="0 0 24 24">
                                                        <path
                                                            d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="absolute top-0 right-0 p-4 me-1">
                                            <span
                                                class="text-sm font-medium px-10 py-0.5 rounded inline-block w-32 text-center
                                                @if ($payment->status == 'Pending') bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-300
                                                @elseif($payment->status == 'Accepted')
                                                    bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300
                                                @else
                                                    bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300 @endif
                                                ">
                                                {{ $payment->status }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div id="alert-1"
                            class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
                            role="alert">
                            <div
                                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-blue-500 bg-blue-200 rounded-lg dark:bg-blue-700 dark:text-blue-200">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z" />
                                </svg>
                                <span class="sr-only">Warning icon</span>
                            </div>
                            <span class="sr-only">Info</span>
                            <div class="ms-3 text-sm font-medium">
                                Kamu belum melakukan pembelian ataupun penyewaan!
                            </div>
                            <button type="button"
                                class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700"
                                data-dismiss-target="#alert-1" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    @endif
                    <div class="hidden xl:mt-8 xl:block">
                        <h3 class="text-2xl font-semibold text-gray-900 dark:text-white">
                            People are looking too
                        </h3>
                        <div class="mt-6 grid grid-cols-3 gap-8 sm:mt-8">
                            @if ($cars->count() > 0)
                                @foreach ($cars as $car)
                                    <a href="{{ $car->status == 'Disewakan' ? url($car->id . '/rent/') : ($car->status == 'Dijual' ? url($car->id . '/buy/') : '#') }}"
                                        class="group">
                                        <div
                                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-t-xl bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                                            <img src="{{ $car->image_1 }}" alt=""
                                                class="h-52 w-full object-cover object-center group-hover:opacity-75">
                                        </div>
                                        <div
                                            class="max-w-sm rounded-b-xl overflow-hidden shadow-md bg-white dark:bg-gray-800">
                                            <div class="px-4 py-3 drop-shadow">
                                                <div class="font-bold h-14 text-xl mb-2 text-gray-800 dark:text-white">
                                                    {{ $car->brand->name }} - {{ $car->name }},
                                                    {{ $car->year }}
                                                </div>
                                                <p class="text-gray-700 dark:text-gray-300 text-sm">
                                                    Kategori: {{ $car->category->name }} - Kapasitas:
                                                    {{ $car->capacity }}
                                                    <br>Transmisi: {{ $car->transmission }}
                                                    <br>Tipe : {{ $car->fuel_type }}
                                                </p>
                                                <div class="text-gray-600 dark:text-gray-400 mt-1 text-sm flex">
                                                    <svg class="mt-[0.15rem] w-4 h-4 me-2 text-gray-500 dark:text-white flex-shrink-0"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" fill="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path fill-rule="evenodd"
                                                            d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <p class="text-gray-600 dark:text-gray-400 text-sm flex-grow">
                                                        {{ $car->showroom->address }}
                                                    </p>
                                                </div>
                                                <p
                                                    class="text-gray-600 dark:text-gray-400 mt-1 text-sm flex items-center">
                                                    <svg class="w-4 h-4 me-2 text-gray-500 dark:text-white"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" fill="currentColor"
                                                        viewBox="0 0 24 24">
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
                                                <p
                                                    class="flex mt-3 text-lg font-semibold text-gray-900 dark:text-white">
                                                    $ {{ $car->price }}
                                                </p>
                                                <div class="flex my-2">
                                                    <div class="flex items-center gap-1">
                                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" fill="currentColor" viewBox="0 0 24 24">
                                                            <path
                                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                                        </svg>
                                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" fill="currentColor" viewBox="0 0 24 24">
                                                            <path
                                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                                        </svg>
                                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" fill="currentColor" viewBox="0 0 24 24">
                                                            <path
                                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                                        </svg>
                                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" fill="currentColor" viewBox="0 0 24 24">
                                                            <path
                                                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                                        </svg>
                                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" fill="currentColor" viewBox="0 0 24 24">
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
                </div>

                <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                    <div
                        class="space-y-4 rounded-xl drop-shadow bg-blue-50 p-4 dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                        <p class="text-xl font-semibold text-gray-900 dark:text-white">Summary</p>

                        <div class="space-y-4">
                            <div class="space-y-2">
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Amount
                                    </dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white">$00.00</dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Payment Date
                                    </dt>
                                    <dd class="text-base font-medium text-green-600">-$00.00</dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Showroom
                                    </dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white">$00.00</dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Status:</dt>
                                    <dd class="text-base font-medium text-gray-900 dark:text-white">$00.00</dd>
                                </dl>
                            </div>
                        </div>

                        <a href="#"
                            class="flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Pending
                        </a>
                    </div>

                    <div
                        class="space-y-4 rounded-xl drop-shadow bg-blue-50 p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                        <form class="space-y-4">
                            <ul>
                                <li class="py-1">
                                    <a href="#" class="text-blue-600 font-bold hover:underline">
                                        I Can't Log In
                                    </a>
                                </li>
                                <li class="py-1">
                                    <a href="#" class="text-blue-600 font-bold hover:underline">
                                        Recover Username or Reset Password
                                    </a>
                                </li>
                                <li class="py-1">
                                    <a href="#" class="text-blue-600 font-bold hover:underline">
                                        Troubleshoot the Signup Activation Email
                                    </a>
                                </li>
                                <li class="py-1">
                                    <a href="#" class="text-blue-600 font-bold hover:underline">
                                        Manage Account Login and Profile
                                    </a>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-main-layout>
