<x-app-layout>
    <div class="bg-white p-8 rounded-xl">
        <div class="flex justify-between items-center">
            <h2 class="text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-3xl dark:text-white">
                Tambah Data Mobil Baru
            </h2>
        </div>

        <form action="{{ route('data-mobil.update', ['id' => $car->id]) }}" method="POST" enctype="multipart/form-data"
            class="pt-8">
            @csrf
            @method('PUT')

            <input type="hidden" name="showroom_id" value="{{ $user->showroom->id }}">
            <div class="grid gap-8 mb-4 sm:grid-cols-2">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Image 1*
                    </label>
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-image-1"
                            class="flex flex-col items-center justify-center w-full h-[19rem] border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div id="dropzone-image-1-container"
                                class="{{ $car->image_1 ? 'hidden' : '' }} flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                        class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                    800x400px)</p>
                            </div>
                            <img id="image-1-preview" src="{{ $car->image_1 }}"
                                class="{{ $car->image_1 ? '' : 'hidden' }} w-full h-full object-cover rounded-lg"
                                alt="Image 1 Preview" />
                            <input id="dropzone-image-1" type="file" name="image_1" class="hidden"
                                accept="image/*" />
                        </label>
                    </div>
                </div>
                <div class="grid gap-x-8 gap-y-4 grid-cols-2">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Image 2*
                        </label>
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-image-2"
                                class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div id="dropzone-image-2-container"
                                    class="{{ $car->image_2 ? 'hidden' : '' }} flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                        <span class="font-semibold">
                                            Click to upload
                                        </span>
                                    </p>
                                </div>
                                <img id="image-2-preview" src="{{ $car->image_2 }}"
                                    class="{{ $car->image_2 ? '' : 'hidden' }} w-full h-full object-cover rounded-lg"
                                    alt="Image 2 Preview" />
                                <input id="dropzone-image-2" type="file" name="image_2" class="hidden"
                                    accept="image/*" />
                            </label>
                        </div>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Image 3*
                        </label>
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-image-3"
                                class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div id="dropzone-image-3-container"
                                    class="{{ $car->image_3 ? 'hidden' : '' }} flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                        <span class="font-semibold">
                                            Click to upload
                                        </span>
                                    </p>
                                </div>
                                <img id="image-3-preview" src="{{ $car->image_3 }}"
                                    class="{{ $car->image_3 ? '' : 'hidden' }} w-full h-full object-cover rounded-lg"
                                    alt="Image 3 Preview" />
                                <input id="dropzone-image-3" type="file" name="image_3" class="hidden"
                                    accept="image/*" />
                            </label>
                        </div>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Image 4*
                        </label>
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-image-4"
                                class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div id="dropzone-image-4-container"
                                    class="{{ $car->image_4 ? 'hidden' : '' }} flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                        <span class="font-semibold">
                                            Click to upload
                                        </span>
                                    </p>
                                </div>
                                <img id="image-4-preview" src="{{ $car->image_4 }}"
                                    class="{{ $car->image_4 ? '' : 'hidden' }} w-full h-full object-cover rounded-lg"
                                    alt="Image 4 Preview" />
                                <input id="dropzone-image-4" type="file" name="image_4" class="hidden"
                                    accept="image/*" />
                            </label>
                        </div>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Image 5*
                        </label>
                        <div class="flex items-center justify-center w-full">
                            <label for="dropzone-image-5"
                                class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                <div id="dropzone-image-5-container"
                                    class="{{ $car->image_5 ? 'hidden' : '' }} flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                        <span class="font-semibold">
                                            Click to upload
                                        </span>
                                    </p>
                                </div>
                                <img id="image-5-preview" src="{{ $car->image_5 }}"
                                    class="{{ $car->image_5 ? '' : 'hidden' }} w-full h-full object-cover rounded-lg"
                                    alt="Image 5 Preview" />
                                <input id="dropzone-image-5" type="file" name="image_5" class="hidden"
                                    accept="image/*" />
                            </label>
                        </div>
                    </div>
                </div>
                <div>
                </div>
                <div class="grid grid-cols-2 gap-8 justify-center items-center">
                    <label for="status" class="block text-end text-sm font-medium text-gray-900 dark:text-white">
                        Set status*
                    </label>
                    <select id="status" name="status"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option disabled {{ $car->status ? '' : 'selected' }}>Select status</option>
                        <option value="Dijual">Dijual</option>
                        <option value="Disewakan">Disewakan</option>
                        <option value="Digarasi">Digarasi</option>
                    </select>
                </div>
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Car
                        name*
                    </label>
                    <input type="text" name="name" id="name" value="{{ $car->name }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Type car name" required="">
                </div>
                <div>
                    <label for="brand"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand*</label>
                    <select id="brand" name="brand_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option disabled {{ $car->brand_id ? '' : 'selected' }}>Select brand</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="price"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price*</label>
                    <input type="number" name="price" id="price" value="{{ $car->price }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="000.00" required="">
                </div>
                <div>
                    <label for="category"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category*</label>
                    <select id="category" name="category_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option disabled {{ $car->category_id ? '' : 'selected' }}>Select category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="grid grid-cols-3 gap-8 col-span-2">
                    <div>
                        <label for="year" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                            Year*
                        </label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3.5">
                                <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input id="year" name="year" type="number" value="{{ $car->year }}"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 ps-9 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                placeholder="2024" min="1990" max="2024" step="1" required />
                        </div>
                    </div>
                    <div>
                        <label for="fuel_type"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fuel Type*</label>
                        <select id="fuel_type" name="fuel_type"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option disabled {{ $car->fuel_type ? '' : 'selected' }}>Select fuel type</option>
                            <option value="Solar">Solar</option>
                            <option value="Bensin">Bensin</option>
                            <option value="EV">EV</option>
                        </select>
                    </div>
                    <div>
                        <label for="transmission"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Transmission*</label>
                        <select id="transmission" name="transmission"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option disabled {{ $car->transmission ? '' : 'selected' }}>Select transmission</option>
                            <option value="Manual">Manual</option>
                            <option value="Otomatis">Otomatis</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-8 col-span-2">
                    <div>
                        <label for="capacity"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Capacity*</label>
                        <input type="number" name="capacity" id="capacity" value="{{ $car->capacity }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="0" required="">
                    </div>
                    <div>
                        <label for="color"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Color*</label>
                        <input type="text" name="color" id="color" value="{{ $car->color }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Car color" required="">
                    </div>
                    <div>
                        <label for="license_plate"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">License Plate*</label>
                        <input type="text" name="license_plate" id="license_plate"
                            value="{{ $car->license_plate }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Car license plate" required="">
                    </div>
                </div>
                @php
                    $selectedAccessories = explode(',', $car->accessories);
                @endphp
                <div class="col-span-2">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Accessories*
                    </label>
                    <div class="grid grid-cols-6 gap-2 p-5 border rounded-lg bg-gray-50 border-gray-300">
                        <div class="flex items-center me-4">
                            <input id="air-conditioner" type="checkbox" value="AirConditioner" name="accessories[]"
                                {{ in_array('AirConditioner', $selectedAccessories) ? 'checked' : '' }}
                                class="accessory-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="air-conditioner"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Air
                                Conditioner</label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="power-door-locks" type="checkbox" value="PowerDoorLocks" name="accessories[]"
                                {{ in_array('PowerDoorLocks', $selectedAccessories) ? 'checked' : '' }}
                                class="accessory-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="power-door-locks"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Power Door
                                Locks</label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="anti-lock-braking-system" type="checkbox" value="AntiLockBrakingSystem"
                                name="accessories[]"
                                {{ in_array('AntiLockBrakingSystem', $selectedAccessories) ? 'checked' : '' }}
                                class="accessory-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="anti-lock-braking-system"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Anti Lock Braking
                                System</label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="brake-assist" type="checkbox" value="BrakeAssist" name="accessories[]"
                                {{ in_array('BrakeAssist', $selectedAccessories) ? 'checked' : '' }}
                                class="accessory-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="brake-assist"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Brake Assist</label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="power-steering" type="checkbox" value="PowerSteering" name="accessories[]"
                                {{ in_array('PowerSteering', $selectedAccessories) ? 'checked' : '' }}
                                class="accessory-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="power-steering"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Power
                                Steering</label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="driver-airbag" type="checkbox" value="DriverAirbag" name="accessories[]"
                                {{ in_array('DriverAirbag', $selectedAccessories) ? 'checked' : '' }}
                                class="accessory-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="driver-airbag"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Driver Airbag</label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="passenger-airbag" type="checkbox" value="PassengerAirbag"
                                name="accessories[]"
                                {{ in_array('PassengerAirbag', $selectedAccessories) ? 'checked' : '' }}
                                class="accessory-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="passenger-airbag"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Passenger
                                Airbag</label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="power-windows" type="checkbox" value="PowerWindows" name="accessories[]"
                                {{ in_array('PowerWindows', $selectedAccessories) ? 'checked' : '' }}
                                class="accessory-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="power-windows"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Power Windows</label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="cd-player" type="checkbox" value="CDPlayer" name="accessories[]"
                                {{ in_array('CDPlayer', $selectedAccessories) ? 'checked' : '' }}
                                class="accessory-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="cd-player"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">CD Player</label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="central-locking" type="checkbox" value="CentralLocking" name="accessories[]"
                                {{ in_array('CentralLocking', $selectedAccessories) ? 'checked' : '' }}
                                class="accessory-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="central-locking"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Central
                                Locking</label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="crash-sensor" type="checkbox" value="CrashSensor" name="accessories[]"
                                {{ in_array('CrashSensor', $selectedAccessories) ? 'checked' : '' }}
                                class="accessory-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="crash-sensor"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Crash Sensor</label>
                        </div>
                        <div class="flex items-center me-4">
                            <input id="leather-seats" type="checkbox" value="LeatherSeats" name="accessories[]"
                                {{ in_array('LeatherSeats', $selectedAccessories) ? 'checked' : '' }}
                                class="accessory-checkbox w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="leather-seats"
                                class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Leather Seats</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="accessories" id="accessories" value="{{ $car->accessories }}">
                <div class="sm:col-span-2">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Description*
                    </label>
                    <textarea id="description" name="description" rows="8"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Write car description here...">{{ $car->description }}</textarea>
                </div>
            </div>
            <button type="submit"
                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mt-4 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd">
                    </path>
                </svg>
                Edit data Car
            </button>
        </form>
    </div>
</x-app-layout>
