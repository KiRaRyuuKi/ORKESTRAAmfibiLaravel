@extends('layouts.app')

@section('content')
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center">
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
                                    <h5 class="card-title text-center pb-0 fs-4">{{ __('Reset Password') }}</h5>
                                </div>

                                <form class="row px-3 g-3 needs-validation" method="POST"
                                    action="{{ route('password.update') }}" novalidate>
                                    @csrf

                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="col-12">
                                        <label for="email" class="col-form-label">{{ __('Email Address') }}</label>

                                        <div class="input-group has-validation">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ $email ?? old('email') }}" required autocomplete="email"
                                                autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="password" class="col-form-label">{{ __('Password') }}</label>

                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="col-12">
                                        <label for="password-confirm"
                                            class="col-form-label">{{ __('Confirm Password') }}</label>

                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">

                                        <div class="invalid-feedback">Confirm your password!</div>
                                    </div>

                                    <div class="col-12 pt-3 pb-2">
                                        <button type="submit" class="btn btn-primary w-100">
                                            {{ __('Reset Password') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
