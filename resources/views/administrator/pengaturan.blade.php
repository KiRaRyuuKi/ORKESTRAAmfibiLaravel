<x-app-layout>
    <div class="bg-white p-11 rounded-xl">
        @if ($showrooms && $showrooms->count())
            @foreach ($showrooms as $showroom)
                <form action="{{ route('setting.update', $showroom->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="space-y-12">
                        <div>
                            <div class="flex items-center justify-center w-full">
                                <label for="dropzone-banner"
                                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600 relative overflow-hidden">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6 absolute inset-0"
                                        id="dropzone-banner-preview"
                                        style="{{ $showroom->banner ? 'display: none;' : '' }}">
                                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                            <span class="font-semibold">Click to upload</span>
                                            or drag and drop
                                        </p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                            800x400px)</p>
                                    </div>
                                    <img id="banner-image-preview" src="{{ asset($showroom->banner) }}"
                                        class="{{ $showroom->banner ? '' : 'hidden' }} w-full h-full object-cover rounded-lg"
                                        alt="Banner Preview" />
                                    <input id="dropzone-banner" type="file" name="banner" class="hidden"
                                        accept="image/*" />
                                </label>

                                <script>
                                    document.getElementById('dropzone-banner').addEventListener('change', function(event) {
                                        const file = event.target.files[0];
                                        if (file) {
                                            const reader = new FileReader();
                                            reader.onload = function(e) {
                                                const previewContainer = document.getElementById('dropzone-banner-preview');
                                                const img = document.getElementById('banner-image-preview');
                                                img.setAttribute('src', e.target.result);
                                                img.classList.remove('hidden');
                                                previewContainer.style.display = 'none';
                                            };
                                            reader.readAsDataURL(file);
                                        }
                                    });
                                </script>

                            </div>
                            <div class="py-8">
                                <label class="block text-md font-medium mb-3 text-gray-900 dark:text-white"
                                    for="file_input">
                                    Upload Profile
                                </label>
                                <div class="flex">
                                    <div class="flex justify-center items-center">
                                        <label for="profile-file"
                                            class="flex flex-col items-center justify-center w-16 h-16 border-2 border-gray-300 rounded-full cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                            <div class="flex flex-col items-center justify-center relative">
                                                <svg id="svg-icon"
                                                    class="w-12 h-12 text-gray-500 dark:text-gray-400 {{ $showroom->profile_photo ? 'hidden' : '' }}"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <img id="profile-image-preview"
                                                    src="{{ asset($showroom->profile_photo) }}"
                                                    class="w-[60px] h-[60px] {{ $showroom->profile_photo ? '' : 'hidden' }} object-cover object-center rounded-full"
                                                    alt="Profile Preview" />
                                            </div>
                                            <input id="profile-file" type="file" name="profile_photo" class="hidden"
                                                accept="image/*" />
                                        </label>

                                        <script>
                                            document.getElementById('profile-file').addEventListener('change', function(event) {
                                                const file = event.target.files[0];
                                                if (file) {
                                                    const reader = new FileReader();
                                                    reader.onload = function(e) {
                                                        const img = document.getElementById('profile-image-preview');
                                                        const svg = document.getElementById('svg-icon');
                                                        img.src = e.target.result;
                                                        img.classList.remove('hidden');
                                                        svg.style.display = 'none';
                                                    };
                                                    reader.readAsDataURL(file);
                                                }
                                            });
                                        </script>

                                    </div>
                                    <div class="ms-5 w-full justify-center items-center">
                                        <p class="mt-1 text-xs text-gray-500 dark:text-gray-300">
                                            SVG, PNG, JPG or GIF (MAX. 800x400px).
                                        </p>
                                        <div class="flex mt-3">
                                            <button type="button"
                                                class="flex text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg px-3 py-2 text-xs text-center me-2 mb-3">
                                                <svg class="w-4 h-4" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M12 5v9m-5 0H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2M8 9l4-5 4 5m1 8h.01" />
                                                </svg>
                                                <p class="ms-2">Upload Profile Image</p>
                                            </button>
                                            <button type="button"
                                                class="flex text-gray-800 bg-gradient-to-r from-gray-100 via-gray-100 to-gray-200 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-gray-300 dark:focus:ring-gray-800 font-medium rounded-lg px-3 py-2 text-xs text-center me-2 mb-3">
                                                <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                                </svg>
                                                <p class="ms-2">Delete</p>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grid gap-x-8 gap-y-5 mb-6 md:grid-cols-2">
                                <div>
                                    <label for="first_name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Pemilik Showroom:
                                    </label>
                                    <input type="text" id="first_name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="{{ $showroom->user->name }}" disabled />
                                    <p id="helper-text-explanation"
                                        class="hidden mt-2 text-sm text-gray-500 dark:text-gray-400">

                                    </p>
                                </div>
                                <div>
                                    <label for="last_name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Nama Showroom:
                                    </label>
                                    <input type="text" id="last_name" name="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="{{ $showroom->name }}" value="{{ $showroom->name }}" required />
                                    <p id="helper-text-explanation"
                                        class="mt-2 text-sm text-gray-500 dark:text-gray-400">

                                    </p>
                                </div>
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Email:
                                    </label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 20 16">
                                                <path
                                                    d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                                <path
                                                    d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                            </svg>
                                        </div>
                                        <input type="email" id="email"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="{{ $showroom->user->email }}" disabled />
                                    </div>
                                    <p id="helper-text-explanation"
                                        class="mt-2 text-sm text-gray-500 dark:text-gray-400">

                                    </p>
                                </div>
                                <div>
                                    <label for="phone-input"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        Phone number:
                                    </label>
                                    <div class="relative">
                                        <div
                                            class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                viewBox="0 0 19 18">
                                                <path
                                                    d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z" />
                                            </svg>
                                        </div>
                                        <input type="text" id="phone-input" name="phone"
                                            aria-describedby="helper-text-explanation"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{3}"
                                            placeholder="{{ $showroom->phone }}" value="{{ $showroom->phone }}"
                                            required />
                                    </div>
                                    <p id="helper-text-explanation"
                                        class="mt-2 text-sm text-gray-500 dark:text-gray-400">

                                    </p>
                                </div>
                            </div>
                            <div class="mb-8">
                                <label for="address"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Address
                                </label>
                                <textarea id="address" rows="2" name="address"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="{{ $showroom->address }}">{{ $showroom->address }}</textarea>
                            </div>
                            <div>
                                <label for="about"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    About
                                </label>
                                <textarea id="about" rows="4" name="about"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Write your thoughts here...">{{ $showroom->about }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-full mt-8 justify-end">
                        <button type="submit"
                            class="flex text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg px-20 py-2 text-ms text-center">
                            Save
                        </button>
                    </div>
                </form>
            @endforeach
        @else
            <p>Anda belum memiliki showroom. Silakan membuatnya terlebih dahulu.</p>
        @endif
    </div>
</x-app-layout>
