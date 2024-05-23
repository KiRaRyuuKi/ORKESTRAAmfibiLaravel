<x-master-layout>
    <section class="lg:pt-20 pt-0 h-full">
        <div
            class="rounded-b-3xl bg-gradient-to-r from-blue-50/50 via-blue-200 via-50% to-blue-400/70 py-10 overflow-hidden m-5 lg:m-0 2xl:py-16 xl:py-8  lg:rounded-tl-2xl lg:rounded-bl-2xl ">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-14 items-center lg:grid-cols-12 lg:gap32">
                    <div class=" drop-shadow-md w-full h-full pt-12 xl:col-span-5 lg:col-span-6 2xl:-mx-5 xl:-mx-0">
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
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                            d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4" />
                                    </svg>
                                </div>
                                <input type="text" id="voice-search"
                                    class="bg-gray-50 leading-7 border-none text-gray-900 text-sm rounded-lg focus:ring-2 focus:ring-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500"
                                    placeholder="Search for your favorite car..." required />
                                <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-3">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 16 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M15 7v3a5.006 5.006 0 0 1-5 5H6a5.006 5.006 0 0 1-5-5V7m7 9v3m-3 0h6M7 1h2a3 3 0 0 1 3 3v5a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V4a3 3 0 0 1 3-3Z" />
                                    </svg>
                                </button>
                            </div>
                            <button type="submit"
                                class="inline-flex leading-7 items-center py-2.5 px-3 ms-3 text-sm font-medium text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 rounded-lg hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-5 h-5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
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
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="#ffffff"
                                        d="M180.5 141.5C219.7 108.5 272.6 80 336 80s116.3 28.5 155.5 61.5c39.1 33 66.9 72.4 81 99.8c4.7 9.2 4.7 20.1 0 29.3c-14.1 27.4-41.9 66.8-81 99.8C452.3 403.5 399.4 432 336 432s-116.3-28.5-155.5-61.5c-16.2-13.7-30.5-28.5-42.7-43.1L48.1 379.6c-12.5 7.3-28.4 5.3-38.7-4.9S-3 348.7 4.2 336.1L50 256 4.2 175.9c-7.2-12.6-5-28.4 5.3-38.6s26.1-12.2 38.7-4.9l89.7 52.3c12.2-14.6 26.5-29.4 42.7-43.1zM448 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
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
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="#ffffff"
                                        d="M192 32c0-17.7 14.3-32 32-32H352c17.7 0 32 14.3 32 32V64h48c26.5 0 48 21.5 48 48V240l44.4 14.8c23.1 7.7 29.5 37.5 11.5 53.9l-101 92.6c-16.2 9.4-34.7 15.1-50.9 15.1c-19.6 0-40.8-7.7-59.2-20.3c-22.1-15.5-51.6-15.5-73.7 0c-17.1 11.8-38 20.3-59.2 20.3c-16.2 0-34.7-5.7-50.9-15.1l-101-92.6c-18-16.5-11.6-46.2 11.5-53.9L96 240V112c0-26.5 21.5-48 48-48h48V32zM160 218.7l107.8-35.9c13.1-4.4 27.3-4.4 40.5 0L416 218.7V128H160v90.7zM306.5 421.9C329 437.4 356.5 448 384 448c26.9 0 55.4-10.8 77.4-26.1l0 0c11.9-8.5 28.1-7.8 39.2 1.7c14.4 11.9 32.5 21 50.6 25.2c17.2 4 27.9 21.2 23.9 38.4s-21.2 27.9-38.4 23.9c-24.5-5.7-44.9-16.5-58.2-25C449.5 501.7 417 512 384 512c-31.9 0-60.6-9.9-80.4-18.9c-5.8-2.7-11.1-5.3-15.6-7.7c-4.5 2.4-9.7 5.1-15.6 7.7c-19.8 9-48.5 18.9-80.4 18.9c-33 0-65.5-10.3-94.5-25.8c-13.4 8.4-33.7 19.3-58.2 25c-17.2 4-34.4-6.7-38.4-23.9s6.7-34.4 23.9-38.4c18.1-4.2 36.2-13.3 50.6-25.2c11.1-9.4 27.3-10.1 39.2-1.7l0 0C136.7 437.2 165.1 448 192 448c27.5 0 55-10.6 77.5-26.1c11.1-7.9 25.9-7.9 37 0z" />
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
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="#ffffff"
                                        d="M192 32c0-17.7 14.3-32 32-32H352c17.7 0 32 14.3 32 32V64h48c26.5 0 48 21.5 48 48V240l44.4 14.8c23.1 7.7 29.5 37.5 11.5 53.9l-101 92.6c-16.2 9.4-34.7 15.1-50.9 15.1c-19.6 0-40.8-7.7-59.2-20.3c-22.1-15.5-51.6-15.5-73.7 0c-17.1 11.8-38 20.3-59.2 20.3c-16.2 0-34.7-5.7-50.9-15.1l-101-92.6c-18-16.5-11.6-46.2 11.5-53.9L96 240V112c0-26.5 21.5-48 48-48h48V32zM160 218.7l107.8-35.9c13.1-4.4 27.3-4.4 40.5 0L416 218.7V128H160v90.7zM306.5 421.9C329 437.4 356.5 448 384 448c26.9 0 55.4-10.8 77.4-26.1l0 0c11.9-8.5 28.1-7.8 39.2 1.7c14.4 11.9 32.5 21 50.6 25.2c17.2 4 27.9 21.2 23.9 38.4s-21.2 27.9-38.4 23.9c-24.5-5.7-44.9-16.5-58.2-25C449.5 501.7 417 512 384 512c-31.9 0-60.6-9.9-80.4-18.9c-5.8-2.7-11.1-5.3-15.6-7.7c-4.5 2.4-9.7 5.1-15.6 7.7c-19.8 9-48.5 18.9-80.4 18.9c-33 0-65.5-10.3-94.5-25.8c-13.4 8.4-33.7 19.3-58.2 25c-17.2 4-34.4-6.7-38.4-23.9s6.7-34.4 23.9-38.4c18.1-4.2 36.2-13.3 50.6-25.2c11.1-9.4 27.3-10.1 39.2-1.7l0 0C136.7 437.2 165.1 448 192 448c27.5 0 55-10.6 77.5-26.1c11.1-7.9 25.9-7.9 37 0z" />
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
                                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="#ffffff"
                                        d="M192 32c0-17.7 14.3-32 32-32H352c17.7 0 32 14.3 32 32V64h48c26.5 0 48 21.5 48 48V240l44.4 14.8c23.1 7.7 29.5 37.5 11.5 53.9l-101 92.6c-16.2 9.4-34.7 15.1-50.9 15.1c-19.6 0-40.8-7.7-59.2-20.3c-22.1-15.5-51.6-15.5-73.7 0c-17.1 11.8-38 20.3-59.2 20.3c-16.2 0-34.7-5.7-50.9-15.1l-101-92.6c-18-16.5-11.6-46.2 11.5-53.9L96 240V112c0-26.5 21.5-48 48-48h48V32zM160 218.7l107.8-35.9c13.1-4.4 27.3-4.4 40.5 0L416 218.7V128H160v90.7zM306.5 421.9C329 437.4 356.5 448 384 448c26.9 0 55.4-10.8 77.4-26.1l0 0c11.9-8.5 28.1-7.8 39.2 1.7c14.4 11.9 32.5 21 50.6 25.2c17.2 4 27.9 21.2 23.9 38.4s-21.2 27.9-38.4 23.9c-24.5-5.7-44.9-16.5-58.2-25C449.5 501.7 417 512 384 512c-31.9 0-60.6-9.9-80.4-18.9c-5.8-2.7-11.1-5.3-15.6-7.7c-4.5 2.4-9.7 5.1-15.6 7.7c-19.8 9-48.5 18.9-80.4 18.9c-33 0-65.5-10.3-94.5-25.8c-13.4 8.4-33.7 19.3-58.2 25c-17.2 4-34.4-6.7-38.4-23.9s6.7-34.4 23.9-38.4c18.1-4.2 36.2-13.3 50.6-25.2c11.1-9.4 27.3-10.1 39.2-1.7l0 0C136.7 437.2 165.1 448 192 448c27.5 0 55-10.6 77.5-26.1c11.1-7.9 25.9-7.9 37 0z" />
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
                <a href="#" class="font-semibold text-blue-600">
                    <span class="absolute inset-0" aria-hidden="true">
                    </span> Market
                    <span aria-hidden="true">
                        &rarr;
                    </span>
                </a>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-x-12 gap-y-10 px-3">
            <a href="#" class="group drop-shadow-md">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-t-lg xl:aspect-h-8 xl:aspect-w-7">
                    <img src="{{ asset('assets/img/mobil-1.jpg') }}" alt=""
                        class="h-52 w-full object-cover object-center group-hover:opacity-75">
                </div>
                <div class="max-w-sm rounded-b-lg overflow-hidden bg-white dark:bg-gray-800">
                    <div class="px-4 py-3 drop-shadow">
                        <div class="font-bold text-xl mb-2 text-gray-800 dark:text-white">
                            2019 Honda
                        </div>
                        <p class="text-gray-700 dark:text-gray-300 text-sm">BRIO SATYA E 1.2</p>
                        <p class="text-gray-600 dark:text-gray-400 text-sm flex items-center">
                            <svg class="w-4 h-4 me-2 text-gray-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                    clip-rule="evenodd" />
                            </svg>
                            Jawa Timur
                        </p>
                        <p class="text-gray-600 dark:text-gray-400 text-sm flex items-center">
                            <svg class="w-4 h-4 me-2 text-gray-500 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
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
                </div>
            </a>
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
