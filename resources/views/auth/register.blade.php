<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm">
            <div class="p-4 sm:p-7">
                <div class="text-center">
                    <h1 class="block text-2xl font-bold text-gray-800">{{ __('auth.register.heading') }}</h1>
                    <p class="mt-2 text-sm text-gray-600">
                        {{ __('auth.register.already_account') }}
                        <a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium" href="{{ route('login') }}">
                        {{ __('auth.register.signin') }}
                        </a>
                    </p>
                </div>

                <div class="mt-5">
                    <!-- Form -->
                    <form>
                        <div class="grid gap-y-4">
                            <!-- Form Group -->
                            <div>
                                <x-input-label for="name" class="mb-2" :value="__('auth.register.name')" />
                                <div class="relative">
                                    <x-text-input type="text" id="name" name="name" class="w-full" aria-describedby="name-error" />
                                    <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                        <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                        </svg>
                                    </div>
                                </div>
                                <p class="hidden text-xs text-red-600 mt-2" id="name-error">{{ __('auth.register.name_error') }}</p>
                            </div>
                            <!-- End Form Group -->
                             
                            <!-- Form Group -->
                            <div>
                                <x-input-label for="email" class="mb-2" :value="__('auth.register.email')" />
                                <div class="relative">
                                    <x-text-input type="email" id="email" name="email" class="w-full" required aria-describedby="email-error" />
                                    <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                        <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                        </svg>
                                    </div>
                                </div>
                                <p class="hidden text-xs text-red-600 mt-2" id="email-error">{{ __('auth.register.email_error') }}</p>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div>
                                <x-input-label for="password" class="mb-2" :value="__('auth.register.password')" />
                                <div class="relative">
                                    <x-text-input type="password" id="password" name="password" class="w-full" required aria-describedby="password-error" />
                                    <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                        <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                        </svg>
                                    </div>
                                </div>
                                <p class="hidden text-xs text-red-600 mt-2" id="password-error">{{ __('auth.register.password_error') }}</p>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div>
                                <x-input-label for="confirm-password" class="mb-2" :value="__('auth.register.password_confirmation')" />
                                <div class="relative">
                                    <x-text-input type="password" id="confirm-password" name="password_confirmation" class="w-full" required aria-describedby="confirm-password-error" />
                                    <div class="hidden absolute inset-y-0 end-0 pointer-events-none pe-3">
                                        <svg class="size-5 text-red-500" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                        </svg>
                                    </div>
                                </div>
                                <p class="hidden text-xs text-red-600 mt-2" id="confirm-password-error">{{ __('auth.register.password_confirmation_error') }}</p>
                            </div>
                            <!-- End Form Group -->

                            <!-- Checkbox -->
                            <div class="flex items-center">
                                <div class="flex">
                                    <x-checkbox-input id="remember-me" name="remember-me" />
                                </div>
                                <div class="ms-3">
                                    <x-input-label for="remember-me">I accept the <a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium" href="#">Terms and Conditions</a></x-input-label>
                                </div>
                            </div>
                            <!-- End Checkbox -->

                            <x-primary-button class="w-full">
                                {{ __('auth.register.signup') }}
                            </x-primary-button>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
            </div>
        </div>
    </form>
</x-guest-layout>
