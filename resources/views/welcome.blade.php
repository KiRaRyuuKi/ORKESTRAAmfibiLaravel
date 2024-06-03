<x-master-layout>
    <section class="lg:pt-20 pt-0 h-full">
        <div
            class="rounded-b-3xl bg-gradient-to-r from-blue-50/50 via-blue-200 via-50% to-blue-400/70 py-10 overflow-hidden m-5 lg:m-0 2xl:py-16 xl:py-8  lg:rounded-tl-2xl lg:rounded-bl-2xl ">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-14 items-center lg:grid-cols-12 lg:gap32">
                    <div class=" drop-shadow-sm w-full h-full pt-12 xl:col-span-5 lg:col-span-6 2xl:-mx-5 xl:-mx-0">
                        <a href="#"
                            class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-2 text-sm text-gray-700 bg-gray-100 rounded-lg dark:bg-gray-800 dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700"
                            role="alert">
                            <span
                                class="text-xs bg-gradient-to-l from-blue-400 via-blue-500 to-blue-500 rounded-lg text-white px-4 py-1.5 mr-3">
                                Wellcome
                            </span>
                            <span class="text-sm font-medium pr-5">
                                Selamat Datang di...
                            </span>
                            <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd">
                                </path>
                            </svg>
                        </a>
                        <h1
                            class="py-8 text-center text-gray-900 font-bold font-manrope text-5xl lg:text-left leading-[58px]">
                            Amfibi, Platform
                            <span class="text-blue-600">
                                Jual Beli & Sewa Mobil
                            </span>
                        </h1>
                        <p class=" text-gray-500 text-lg text-justify">
                            Temukan mobil impian Anda dengan mudah melalui platform Amfibi yang menawarkan berbagai
                            pilihan mobil untuk dijual dan disewakan.
                        </p>
                        <form class="flex items-center max-w-lg mx-auto my-8">
                            <label for="voice-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <input type="text" id="voice-search"
                                    class="bg-gray-50 leading-7 border-none text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 block w-full ps-4 p-2.5  dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500"
                                    placeholder="Search for your favorite car..." required />
                                <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-3">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white"
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-mic" viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5" />
                                        <path
                                            d="M10 8a2 2 0 1 1-4 0V3a2 2 0 1 1 4 0zM8 0a3 3 0 0 0-3 3v5a3 3 0 0 0 6 0V3a3 3 0 0 0-3-3" />
                                    </svg>
                                </button>
                            </div>
                            <button type="submit"
                                class="inline-flex leading-7 items-center py-2.5 px-3 ms-3 text-sm font-medium text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 rounded-lg hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-5 h-5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                        d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                                </svg> Search
                            </button>
                        </form>
                    </div>
                    <div class="w-full xl:col-span-7 lg:col-span-6 block drop-shadow-lg">
                        <div class="w-full sm:w-auto lg:w-[60.8125rem] xl:ml-16">
                            <img src="{{ asset('assets/img/car-hero-image.png') }}" alt="Hero Image"
                                class="w-full lg:h-full rounded-3xl">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-white py-16 sm:py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8 drop-shadow-md">
            <h2 class="text-center text-xl font-semibold leading-8 text-gray-900">
                Setiap transaksi di Amfibi dilindungi oleh regulasi resmi, memberikan rasa aman bagi pengguna.
            </h2>
            <div
                class="mx-auto mt-12 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="https://tailwindui.com/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor"
                    width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="https://tailwindui.com/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform" width="158"
                    height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
                    src="https://tailwindui.com/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple" width="158"
                    height="48">
                <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1"
                    src="https://tailwindui.com/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal"
                    width="158" height="48">
                <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1"
                    src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic"
                    width="158" height="48">
            </div>
        </div>
    </div>

    <div class="relative isolate overflow-hidden bg-white px-6 py-16 sm:py-20 lg:overflow-visible lg:px-0">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-blue-200 to-blue-600 opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8 drop-shadow-md">
            <div class="mx-auto max-w-3xl lg:text-center">
                <p class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 sm:text-4xl">
                    Fitur-fitur yang ada di Amfibi
                </p>
                <p class="mt-6 text-lg leading-8 text-gray-600">
                    Kami menghadirkan fitur-fitur canggih selayaknya platform e-commerce untuk memudahkan pengalaman
                    jual beli dan sewa mobil Anda.
                </p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-12 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-12">
                    <div class="relative p-8 bg-white rounded-3xl">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-car-front-fill"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                                </svg>
                            </div>
                            <p class="mt-3">Pengelolaan Showroom Mobil</p>
                        </dt>
                        <dd class="mt-2 text-base text-justify leading-7 text-gray-600">
                            Amfibi menyediakan fitur pengelolaan showroom mobil yang memungkinkan dealer dan penjual
                            untuk mengatur inventaris mereka dengan mudah. Fitur ini dirancang untuk memberikan kontrol
                            penuh kepada pemilik showroom dalam mengelola mobil mereka secara efisien.
                        </dd>
                    </div>
                    <div class="relative p-8 bg-white rounded-3xl">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-chat-dots-fill"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                </svg>
                            </div>
                            <p class="mt-2">Chat Showroom Mobil</p>
                        </dt>
                        <dd class="mt-2 text-base text-justify leading-7 text-gray-600">
                            Fitur chat showroom mobil di Amfibi memungkinkan calon pembeli untuk berkomunikasi langsung
                            dengan penjual atau dealer. Dengan fitur ini, pengguna dapat menanyakan detail lebih lanjut
                            tentang mobil, mengatur jadwal test drive, atau menegosiasikan harga.
                        </dd>
                    </div>
                    <div class="relative p-8 bg-white rounded-3xl">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-credit-card-2-front-fill"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm0 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm3 0a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z" />
                                </svg>
                            </div>
                            <p class="mt-2">Keamanan Transaksi</p>
                        </dt>
                        <dd class="mt-2 text-base text-justify leading-7 text-gray-600">
                            Amfibi menempatkan keamanan sebagai prioritas utama dalam setiap transaksi. Platform ini
                            memastikan bahwa data pengguna dan transaksi aman dari ancaman cyber. Verifikasi penjual dan
                            pembeli dilakukan secara ketat untuk mencegah penipuan dan aktivitas yang mencurigakan.
                        </dd>
                    </div>
                    <div class="relative p-8 bg-white rounded-3xl">
                        <dt class="text-base font-semibold leading-7 text-gray-900">
                            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600">
                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M5.05 3C3.291 3 2.352 5.024 3.51 6.317l5.422 6.059v4.874c0 .472.227.917.613 1.2l3.069 2.25c1.01.742 2.454.036 2.454-1.2v-7.124l5.422-6.059C21.647 5.024 20.708 3 18.95 3H5.05Z" />
                                </svg>
                            </div>
                            <p class="mt-2">Filter Mobil</p>
                        </dt>
                        <dd class="mt-2 text-base text-justify leading-7 text-gray-600">
                            Untuk memudahkan pencarian mobil sesuai kebutuhan, Amfibi menyediakan fitur filter mobil
                            yang canggih. Pengguna dapat menyaring daftar mobil berdasarkan berbagai. Dengan filter ini,
                            pencarian menjadi lebih efisien dan pengguna dapat dengan cepat menemukan mobil yang sesuai
                            dengan preferensi mereka.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <div class="relative isolate overflow-hidden mx-auto py-20 max-w-2xl lg:max-w-6xl">
        <h2 class="sr-only">Cars</h2>
        <div class="hidden sm:mb-20 sm:flex sm:justify-center">
            <div class="relative rounded-lg px-3 py-1 text-sm leading-6 bg-white text-gray-600 drop-shadow">
                Lihat daftar mobil lainnya yang tersedia,
                <a href="/market" class="font-semibold text-blue-600">
                    <span class="absolute inset-0" aria-hidden="true">
                    </span> Market
                    <span aria-hidden="true">
                        &rarr;
                    </span>
                </a>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-x-12 gap-y-10 px-3">
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
                                    {{ $car->brand->name }} - {{ $car->name }}, {{ $car->year }}
                                </div>
                                <p class="text-gray-700 dark:text-gray-300 text-sm">
                                    Kategori: {{ $car->category->name }} - Kapasitas: {{ $car->capacity }}
                                    <br>Transmisi: {{ $car->transmission }}
                                    <br>Tipe : {{ $car->fuel_type }}
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

    <div class="relative isolate overflow-hidden bg-white">
        <div
            class="absolute inset-0 -z-10 bg-[radial-gradient(45rem_50rem_at_top,theme(colors.blue.100),white)] opacity-20">
        </div>
        <div
            class="absolute inset-y-0 right-1/2 -z-10 mr-16 w-[200%] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-blue-600/10 ring-1 ring-blue-50 sm:mr-28 lg:mr-0 xl:mr-16 xl:origin-center">
        </div>
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl py-8 sm:py-12 lg:max-w-none lg:py-28">
                <div class="px-4 mx-auto max-w-screen-xl lg:px-6">
                    <div class="mx-auto max-w-screen-lg text-center">
                        <h2
                            class="mb-4 text-4xl tracking-tight font-extrabold leading-tight text-gray-900 dark:text-white">
                            Publikasi dan Informasi
                        </h2>
                        <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">
                            Bagaimana kami bekerja? Mulai dari pengelolaan showroom mobil hingga fitur chat yang
                            memfasilitasi komunikasi langsung antara pembeli dan penjual, Amfibi memastikan setiap
                            transaksi berjalan lancar dan aman.
                        </p>
                    </div>
                </div>

                <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
                    <div class="aspect-h-4 aspect-w-3 hidden overflow-hidden rounded-lg lg:block">
                        <img src="{{ asset('assets/img/news-2.jpg') }}"
                            alt="Two each of gray, white, and black shirts laying flat."
                            class="h-full w-full object-cover object-center">
                    </div>
                    <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                        <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                            <img src="{{ asset('assets/img/mobil-3.jpg') }}"
                                alt="Model wearing plain black basic tee."
                                class="h-full w-full object-cover object-center">
                        </div>
                        <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                            <img src="{{ asset('assets/img/car-news.jpg') }}"
                                alt="Model wearing plain gray basic tee."
                                class="h-full w-full object-cover object-center">
                        </div>
                    </div>
                    <div class="aspect-h-5 aspect-w-4 lg:aspect-h-4 lg:aspect-w-3 sm:overflow-hidden sm:rounded-lg">
                        <img src="{{ asset('assets/img/news-3.jpg') }}" alt="Model wearing plain white basic tee."
                            class="h-full w-full object-cover object-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master-layout>
