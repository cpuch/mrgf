<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm">
        <div class="p-4 sm:p-7">
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-gray-800">{{ __('auth.forgot-password.heading') }}</h1>
                <p class="mt-2 text-sm text-gray-600">
                    {{ __('auth.forgot-password.remember_password') }}
                    <a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium" href="{{ route('login') }}">
                    {{ __('auth.forgot-password.signin') }}
                    </a>
                </p>
            </div>

            <div class="mt-5">
                <!-- Form -->
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="grid gap-y-4">
                        <!-- Form Group -->
                        <div>
                            <x-input-label for="email" class="mb-2" :value="__('auth.forgot-password.email')" />
                            <div class="relative">
                                <x-text-input type="email" id="email" name="email" class="w-full" required aria-describedby="email-error" />
                                <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                    <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    </svg>
                                </div>
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <!-- End Form Group -->

                        <x-primary-button>
                            {{ __('auth.forgot-password.button') }}
                        </x-primary-button>
                    </div>
                </form>
                <!-- End Form -->
            </div>
        </div>
    </div>
</x-guest-layout>
