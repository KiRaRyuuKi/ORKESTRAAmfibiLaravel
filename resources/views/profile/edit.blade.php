<x-app-layout>
    <div class="card">
        <div class="profile align-items-center">
            <div class="background-img d-flex justify-content-center align-items-center"
                style="background-image: url('assets/img/background.jpg')">
            </div>

            <div class="profile-img justify-content-center align-items-center">
                <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                <h3 class="pt-4">Selamat datang, Muhammad Ilham</h3>
                <h6>Kelola info, privasi, dan keamanan Anda agar Amfibi berfungsi dengan lebih baik untuk Anda.
                    <span>Pelajari lebih lanjut</span>
                </h6>
            </div>

            <div class="card-border mb-4">
                <div class="p-4">
                    <header class="page-content">
                        <h2>
                            {{ __('Profile Information') }}
                        </h2>

                        <p>
                            {{ __("Update your account's profile information and email address.") }}
                        </p>
                    </header>

                    <form id="sendVerificationForm" method="post" action="{{ route('verification.send') }}">
                        @csrf
                    </form>

                    <form method="post" action="{{ route('profile.update') }}" class="mt-4">
                        @csrf
                        @method('patch')

                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input id="name" name="name" type="text" class="form-control"
                                value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <input id="email" name="email" type="email" class="form-control"
                                value="{{ old('email', $user->email) }}" required autocomplete="username">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                <div class="mt-2">
                                    <p class="text-sm text-dark">
                                        {{ __('Your email address is unverified.') }}
                                        <button form="sendVerificationForm"
                                            class="btn btn-link text-dark">{{ __('Click here to re-send the verification email.') }}</button>
                                    </p>

                                    @if (session('status') === 'verification-link-sent')
                                        <p class="mt-2 text-success">
                                            {{ __('A new verification link has been sent to your email address.') }}
                                        </p>
                                    @endif
                                </div>
                            @endif
                        </div>

                        <div class="d-flex align-items-center gap-4">
                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

                            @if (session('status') === 'profile-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>

            <div class="card-border mb-4">
                <div class="p-4">
                    <header class="page-content">
                        <h2>
                            {{ __('Update Password') }}
                        </h2>

                        <p>
                            {{ __('Ensure your account is using a long, random password to stay secure.') }}
                        </p>
                    </header>

                    <form method="post" action="{{ route('password.update') }}" class="mt-4">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label for="current_password" class="form-label">{{ __('Current Password') }}</label>
                            <input id="current_password" name="current_password" type="password" class="form-control"
                                autocomplete="current-password">
                            @error('current_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('New Password') }}</label>
                            <input id="password" name="password" type="password" class="form-control"
                                autocomplete="new-password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                            <input id="password_confirmation" name="password_confirmation" type="password"
                                class="form-control" autocomplete="new-password">
                            @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex align-items-center gap-4">
                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

                            @if (session('status') === 'password-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>

            <div class="card-border">
                <div class="p-4">
                    <header class="page-content">
                        <h2>{{ __('Delete Account') }}</h2>

                        <p class="text-justify pb-2">
                            {{ __('Before proceeding with the deletion of your account, please be aware that once this action is completed, all associated resources and data will be permanently removed from our system. To ensure that you retain any important information or data, we strongly recommend downloading or saving any desired content beforehand. This will ensure that you have access to any pertinent information you may need in the future, even after your account has been deleted.') }}
                        </p>
                    </header>

                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#confirmUserDeletionModal">
                        {{ __('Delete Account') }}
                    </button>

                    <div class="modal fade" id="confirmUserDeletionModal" tabindex="-1"
                        aria-labelledby="confirmUserDeletionModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form method="post" action="{{ route('profile.destroy') }}" class="modal-content p-3">
                                @csrf
                                @method('delete')

                                <h4 class="modal-title text-lg font-medium text-gray-900">
                                    {{ __('Are you sure you want to delete your account?') }}
                                </h4>

                                <p class="mt-1 text-sm text-gray-600">
                                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                                </p>

                                <div class="mt-3">
                                    <label for="password"
                                        class="form-label visually-hidden">{{ __('Password') }}</label>
                                    <input id="password" name="password" type="password" class="form-control"
                                        placeholder="{{ __('Password') }}" />
                                    @if ($errors->userDeletion->has('password'))
                                        <div class="invalid-feedback">
                                            {{ $errors->userDeletion->first('password') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="mt-3 d-flex justify-content-end">
                                    <button type="button" class="btn btn-secondary me-3" data-bs-dismiss="modal">
                                        {{ __('Cancel') }}
                                    </button>
                                    <button type="submit" class="btn btn-danger">
                                        {{ __('Delete Account') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</x-app-layout>
