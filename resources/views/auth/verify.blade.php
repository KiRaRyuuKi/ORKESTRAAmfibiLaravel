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
                                    <h5 class="card-title text-center pb-0 fs-4">{{ __('Verify Your Email Address') }}</h5>

                                    @if (session('resent'))
                                        <div class="alert alert-success" role="alert">
                                            {{ __('A fresh verification link has been sent to your email address.') }}
                                        </div>
                                    @endif

                                    <p class="text-center small">
                                        {{ __('Before proceeding, please check your email for a verification link.') }}
                                        {{ __('If you did not receive the email') }}
                                    </p>
                                </div>

                                <form class="row px-3 g-3 needs-validation" method="POST"
                                    action="{{ route('verification.resend') }}" novalidate>
                                    @csrf

                                    <div class="col-12 pb-2">
                                        <button type="submit" class="btn btn-primary w-100">
                                            {{ __('click here to request another') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
