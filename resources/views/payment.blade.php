<x-main-layout>
    <section class="bg-white py-12 w-screen leading-6">
        <div class="mx-auto max-w-screen-xl px-4 mb-12 2xl:px-0">
            <div class="mx-auto max-w-5xl">
                <div class="flex gap-3 p-3 mb-8 bg-blue-100 text-blue-800 drop-shadow rounded-xl">
                    <div
                        class="aspect-h-1 aspect-w-1 w-44 overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                        <img src="{{ $car->image_1 }}" alt=""
                            class="h-28 w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="w-full">
                        <h3 class="text-md font-semibold mb-2">
                            {{ $car->brand->name }},
                            {{ $car->name }}
                            ({{ $car->year }})
                        </h3>
                        <div class="text-xs flex">
                            <p class="w-12">Lokasi</p>:
                            <p class="flex-1 ms-1 max-w-xs"> {{ $car->showroom->address }}</p>
                        </div>
                        <div class="text-xs flex">
                            <p class="w-12">Pickup</p>:
                            <p id="payment-page-content" class="flex-1 ms-1"> </p>
                        </div>
                        <div class="text-xs flex">
                            <p class="w-12">Harga</p>:
                            <p class="flex-1 ms-1"> ${{ $car->price }}</p>
                        </div>
                        @if ($car->status == 'Disewakan')
                            <div class="text-xs flex">
                                <p class="w-12">Tanggal</p>:
                                <p id="payment-page-date" class="flex-1 ms-1"></p>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="lg:flex lg:items-start lg:gap-8">

                    <form action="{{ route('payment.store') }}" method="POST"
                        class="w-full rounded-xl drop-shadow bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6 lg:max-w-xl lg:p-8">
                        @csrf

                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <input type="hidden" name="showroom_id" value="{{ $car->showroom_id }}">
                        <input type="hidden" name="car_id" value="{{ $car->id }}">
                        <input type="hidden" name="amount" id="total-price-input">
                        @if ($car->status == 'Disewakan')
                            <input type="hidden" name="date" id="payment-page-date-input">
                        @endif
                        <input type="hidden" name="status" value="Pending">

                        <div class="mb-6 grid grid-cols-2 gap-4">
                            <div class="col-span-2 sm:col-span-1">
                                <label for="full_name"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                                    Full name (as displayed on card)*
                                </label>
                                <input type="text" id="full_name" name="card_holder"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                    placeholder="Your Name" required />
                            </div>

                            <div class="col-span-2 sm:col-span-1">
                                <label for="card-number-input"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                                    Card number*
                                </label>
                                <input type="text" id="card-number-input" name="card_number"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pe-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500  dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                    placeholder="xxxx-xxxx-xxxx-xxxx" pattern="^4[0-9]{12}(?:[0-9]{3})?$" required />
                            </div>

                            <div>
                                <label for="card-expiration-input"
                                    class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                                    Card expiration*
                                </label>
                                <div class="relative">
                                    <div
                                        class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3.5">
                                        <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input datepicker datepicker-format="mm/yy" id="card-expiration-input"
                                        name="card_expiry" type="text"
                                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 ps-9 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                        placeholder="12/24" required />
                                </div>
                            </div>

                            <div>
                                <label for="cvv-input"
                                    class="mb-2 flex items-center gap-1 text-sm font-medium text-gray-900 dark:text-white">
                                    CVV*
                                    <button data-tooltip-target="cvv-desc" data-tooltip-trigger="hover"
                                        class="text-gray-400 hover:text-gray-900 dark:text-gray-500 dark:hover:text-white">
                                        <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <div id="cvv-desc" role="tooltip"
                                        class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                        The last 3 digits on back of card
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </label>
                                <input type="number" id="cvv-input" name="card_cvv"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                    placeholder="•••" required />
                            </div>
                        </div>

                        <button type="submit"
                            class="flex w-full items-center justify-center rounded-lg  bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4  focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Pay now
                        </button>
                    </form>

                    <div class="mt-6 grow sm:mt-8 lg:mt-0">
                        <div class="space-y-4 rounded-xl drop-shadow bg-blue-50 p-6 dark:bg-gray-800">
                            <div class="space-y-2">
                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Original price
                                    </dt>
                                    <dd id="original-price"
                                        class="text-base font-medium text-gray-900 dark:text-white">
                                        ${{ $car->price }}
                                    </dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Savings</dt>
                                    <dd id="savings" class="text-base font-medium text-green-500">
                                        -$0.0
                                    </dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Pickup</dt>
                                    <dd id="pickup-price" class="text-base font-medium text-gray-900 dark:text-white">
                                        $0.00
                                    </dd>
                                </dl>

                                <dl class="flex items-center justify-between gap-4">
                                    <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Tax</dt>
                                    <dd id="tax-price" class="text-base font-medium text-gray-900 dark:text-white">
                                        $0.00
                                    </dd>
                                </dl>
                            </div>
                            <dl
                                class="flex items-center justify-between gap-4 border-t border-gray-300 pt-2 dark:border-gray-700">
                                <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                                <dd id="total-price" class="text-base font-bold text-gray-900 dark:text-white">
                                    $0.00
                                </dd>
                            </dl>
                        </div>

                        <div class="mt-6 flex items-center justify-center gap-8">
                            <img class="h-8 w-auto dark:hidden"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/paypal.svg"
                                alt="" />
                            <img class="hidden h-8 w-auto dark:flex"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/paypal-dark.svg"
                                alt="" />
                            <img class="h-8 w-auto dark:hidden"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/visa.svg"
                                alt="" />
                            <img class="hidden h-8 w-auto dark:flex"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/visa-dark.svg"
                                alt="" />
                            <img class="h-8 w-auto dark:hidden"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/mastercard.svg"
                                alt="" />
                            <img class="hidden h-8 w-auto dark:flex"
                                src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/brand-logos/mastercard-dark.svg"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-main-layout>
