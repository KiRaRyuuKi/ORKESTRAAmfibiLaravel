<x-guest-layout>
    <div class="pt-4 pb-4">
        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
        <p class="text-center small">Enter your personal details to create account</p>
    </div>

    <form class="row px-3 g-3 needs-validation" method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="col-12">
            <label for="name" class="col-form-label">{{ __('Name') }}</label>

            <div class="input-group has-validation">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>

        <!-- Email Address -->
        <div class="col-12">
            <label for="email" class="col-form-label">{{ __('Email Address') }}</label>

            <div class="input-group has-validation">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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

            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                autocomplete="new-password">

            <div class="invalid-feedback">Confirm your password!</div>
        </div>

        <div class="col-12 pb-3">
            <div class="form-check">
                <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>

                <label class="form-check-label" for="acceptTerms">I agree and accept the
                    <a href="#">terms and conditions</a>
                </label>

                <div class="invalid-feedback">You must agree before submitting.</div>
            </div>
        </div>

        <div class="col-12">
            <button class="btn btn-primary w-100" type="submit">{{ __('Register') }}</button>
        </div>

        <div class="col-12 pt-2 pb-2 text-center">
            <p class="small mb-0">Already have an account? <a href="/login">Log in</a></p>
        </div>
    </form>
</x-guest-layout>
