<x-guest-layout>
    <div class="pt-4 pb-4">
        <h5 class="card-title text-center pb-0 fs-4">{{ __('Reset Password') }}</h5>
    </div>

    <form class="row px-3 g-3 needs-validation" method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="col-12">
            <label for="email" class="col-form-label">{{ __('Email Address') }}</label>

            <div class="input-group has-validation">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>

        <!-- Password -->
        <div class="col-12">
            <label for="password" class="col-form-label">{{ __('Password') }}</label>

            <div class="input-group has-validation">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>

        <!-- Confirm Password -->
        <div class="col-12">
            <label for="password-confirm" class="col-form-label">{{ __('Confirm Password') }}</label>

            <div class="input-group has-validation">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">

                <div class="invalid-feedback">Confirm your password!</div>
            </div>
        </div>

        <div class="col-12 pt-3 pb-2">
            <button type="submit" class="btn btn-primary w-100">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
</x-guest-layout>
