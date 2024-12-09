<x-guest-layout>
    
    @if (session('status') == 'verification-link-sent')
        <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm">
            <div class="p-2 sm:p-7">
                <div class="font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            </div>
        </div>
    @endif

    <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm">
        <div class="p-4 sm:p-7">
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800">Verify email</h1>
            </div>

            <p class="mt-2 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </p>

            <div class="mt-5">
                <!-- Form -->
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <div class="grid gap-y-4">
                        <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">{{ __('Resend Verification Email') }}</button>
                    </div>
                </form>
                <!-- End Form -->
            </div>
        </div>
    </div>
</x-guest-layout>
