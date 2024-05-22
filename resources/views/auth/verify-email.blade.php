<x-guest-layout>
    <div class="pt-4 pb-4">
        <h5 class="card-title text-center pb-0 fs-4">{{ __('Verify Your Email Address') }}</h5>

        @if (session('status') == 'verification-link-sent')
            <div class="alert alert-success" role="alert">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <p class="text-center small">
            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }}
        </p>
    </div>

    <form class="row px-3 g-3 needs-validation" method="POST" action="{{ route('verification.send') }}">
        @csrf

        <div class="col-12 pb-2">
            <button type="submit" class="btn btn-primary w-100">
                {{ __('Resend Verification Email') }}
            </button>
        </div>
    </form>
</x-guest-layout>
