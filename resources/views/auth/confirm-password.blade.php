<x-guest-layout>
    <div class="pt-4 pb-4">
        <h5 class="card-title text-center pb-0 fs-4">{{ __('Confirm Password') }}</h5>
        <p class="text-center small">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </p>
    </div>

    <form class="row px-3 g-3 needs-validation" method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div class="col-12">
            <label for="password" class="form-label">{{ __('Password') }}</label>

            <div class="input-group has-validation">
                <input id="password" type="password" name="password"
                    class="form-control @error('password') is-invalid @enderror" name="password"
                    placeholder="Enter your password" aria-label="Enter your password" required
                    autocomplete="current-password" required>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
        </div>

        <div class="col-12 pb-2">
            <button type="submit" class="btn btn-primary w-100">
                {{ __('Confirm Password') }}
            </button>
        </div>
    </form>
</x-guest-layout>
