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
                                    <h5 class="card-title text-center pb-0 fs-4">Reset Password</h5>
                                </div>

                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form class="row px-3 g-3 needs-validation" method="POST"
                                    action="{{ route('password.email') }}" novalidate>
                                    @csrf

                                    <div class="col-12">
                                        <label for="email" class="form-label">{{ __('Email Address') }}</label>

                                        <div class="input-group has-validation">

                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" placeholder="Enter your email to confirm"
                                                aria-label="Enter your email to confirm" required autocomplete="email"
                                                autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col-12 pt-3">
                                        <button type="submit" class="btn btn-primary w-100">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                                    </div>

                                    <div class="col-12 pt-2 pb-2 text-center">
                                        <p class="small mb-0">Cancel, back to <a href="/login">Login</a>
                                        </p>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection
