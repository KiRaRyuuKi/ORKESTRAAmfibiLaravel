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
                                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                    <p class="text-center small">Enter your email & password to login</p>
                                </div>

                                <form class="row px-3 g-3 needs-validation" method="POST" action="{{ route('login') }}"
                                    novalidate>
                                    @csrf

                                    <div class="col-12">
                                        <label for="email" class="form-label">{{ __('Email Address') }}</label>

                                        <div class="input-group has-validation">

                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" placeholder="Enter your email"
                                                aria-label="Enter your email" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="password" class="form-label">{{ __('Password') }}</label>

                                        <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                        placeholder="Enter your password" aria-label="Enter your password" required autocomplete="current-password" required>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror

                                    </div>

                                    <div class="col-12 pb-4 d-flex align-items-center">
                                        <div class="form-check flex-grow-1">
                                            <input class="form-check-input" type="checkbox" name="remember" value="true"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                                        </div>

                                        <div class="ms-auto">
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary w-100">
                                            {{ __('Login') }}
                                        </button>
                                    </div>

                                    <div class="text-center">
                                        <p class="mb-2 d-inline z-index-2 bg-white px-3">
                                            or login with
                                        </p>
                                    </div>

                                    <div class="col-12 mx-auto">
                                        <a class="btn w-100" href="#">
                                            <svg width="24px" height="32px" viewBox="0 0 64 64" version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <path
                                                    d="M57.8123233,30.1515267 C57.8123233,27.7263183 57.6155321,25.9565533 57.1896408,24.1212666 L29.4960833,24.1212666 L29.4960833,35.0674653 L45.7515771,35.0674653 C45.4239683,37.7877475 43.6542033,41.8844383 39.7213169,44.6372555 L39.6661883,45.0037254 L48.4223791,51.7870338 L49.0290201,51.8475849 C54.6004021,46.7020943 57.8123233,39.1313952 57.8123233,30.1515267"
                                                    id="Path" fill="#4285F4"></path>
                                                <path
                                                    d="M29.4960833,58.9921667 C37.4599129,58.9921667 44.1456164,56.3701671 49.0290201,51.8475849 L39.7213169,44.6372555 C37.2305867,46.3742596 33.887622,47.5868638 29.4960833,47.5868638 C21.6960582,47.5868638 15.0758763,42.4415991 12.7159637,35.3297782 L12.3700541,35.3591501 L3.26524241,42.4054492 L3.14617358,42.736447 C7.9965904,52.3717589 17.959737,58.9921667 29.4960833,58.9921667"
                                                    id="Path" fill="#34A853"></path>
                                                <path
                                                    d="M12.7159637,35.3297782 C12.0932812,33.4944915 11.7329116,31.5279353 11.7329116,29.4960833 C11.7329116,27.4640054 12.0932812,25.4976752 12.6832029,23.6623884 L12.6667095,23.2715173 L3.44779955,16.1120237 L3.14617358,16.2554937 C1.14708246,20.2539019 0,24.7439491 0,29.4960833 C0,34.2482175 1.14708246,38.7380388 3.14617358,42.736447 L12.7159637,35.3297782"
                                                    id="Path" fill="#FBBC05"></path>
                                                <path
                                                    d="M29.4960833,11.4050769 C35.0347044,11.4050769 38.7707997,13.7975244 40.9011602,15.7968415 L49.2255853,7.66898166 C44.1130815,2.91684746 37.4599129,0 29.4960833,0 C17.959737,0 7.9965904,6.62018183 3.14617358,16.2554937 L12.6832029,23.6623884 C15.0758763,16.5505675 21.6960582,11.4050769 29.4960833,11.4050769"
                                                    id="Path" fill="#EB4335"></path>
                                            </svg>
                                        </a>
                                    </div>

                                    <div class="col-12 pt-2 pb-2 text-center">
                                        <p class="small mb-0">Don't have account? <a href="/register">Register</a>
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
