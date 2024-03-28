@extends('layouts.app')

@section('content')
    <div class="container">

        <section class="section register d-flex flex-column align-items-center justify-content-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-5">
                            <a href="/index" class="logo d-flex align-items-center w-auto">
                                <img src="{{ asset('NiceAdmin/assets/img/logo.png') }}" alt="">
                                <span class="d-none d-lg-block fs-2">Amfibi</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="pt-4 pb-4">
                                    <h5 class="card-title text-center pb-0 fs-4">{{ __('Confirm Password') }}</h5>
                                    <p class="text-center small">{{ __('Please confirm your password before continuing.') }}
                                    </p>
                                </div>

                                <form class="row px-3 g-3 needs-validation" method="POST"
                                    action="{{ route('password.confirm') }}" novalidate>
                                    @csrf

                                    <div class="col-12">
                                        <label for="password" class="form-label">{{ __('Password') }}</label>

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

                                    <div class="col-12 pb-1 d-flex align-items-center">
                                        <div class="ms-auto">
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-12 pb-2">
                                        <button type="submit" class="btn btn-primary w-100">
                                            {{ __('Confirm Password') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection
