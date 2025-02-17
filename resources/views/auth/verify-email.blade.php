<x-guest-layout>
    
    @if (session('status') == 'verification-link-sent')
        <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm">
            <div class="p-2 sm:p-7">
                <div class="font-medium text-sm text-green-600">
                    {{ __('auth.verify-email.message') }}
                </div>
            </div>
        </div>
    @endif

    <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm">
        <div class="p-4 sm:p-7">
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800">{{ __('auth.verify-email.heading') }}</h1>
            </div>

            <p class="mt-2 text-sm text-gray-600">
                {{ __('auth.verify-email.thanks') }}
            </p>
            <p class="mt-2 text-sm text-gray-600">
                {{ __('auth.verify-email.resend') }}
            </p>

            <div class="mt-5">
                <!-- Form -->
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <div class="grid gap-y-4">
                        <x-primary-button>
                            {{ __('auth.verify-email.button') }}
                        </x-primary-button>
                    </div>
                </form>
                <!-- End Form -->
            </div>
        </div>
    </div>
</x-guest-layout>
