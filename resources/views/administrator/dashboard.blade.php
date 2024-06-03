<x-app-layout>
    <div class="grid grid-cols-2 justify-between items-center gap-12 bg-white p-3 h-full rounded-xl dark:bg-gray-900">
        <div class="flex flex-col p-5 gap-8">
            <h2 class="tracking-wide text-3xl font-bold text-gray-900 sm:text-2xl">
                Welcome <span class="text-blue-600 text-xl">{{ Auth::user()->name }}</span> 🎉
            </h2>
            <p class="flex text-justify text-md text-gray-500">
                Selamat datang di Dashboard Amfibi! Mari bersiap-siap untuk mengelola penjualan dan penyewaan mobil.
                Bersama-sama, kita akan menciptakan pengalaman yang tak terlupakan bagi setiap pelanggan Amfibi.
            </p>
            <div>
                <button type="button"
                    class="self-start mt-4 w-auto px-8 py-2 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm">
                    Get started
                </button>
            </div>
        </div>
        <div>
            <img src="{{ asset('assets/img/cartoon-people.png') }}" alt="" class="w-full h-full">
        </div>
    </div>
</x-app-layout>
