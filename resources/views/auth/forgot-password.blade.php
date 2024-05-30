<x-guest-layout>
        <x-mary-header title="{{ __('Forgot Password') }}" size="2xl"
                       subtitle="{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}" />

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="mt-0">
        @csrf

        <!-- Email Address -->
        <div>
            <x-mary-input label="{{ __('Email') }}" id="email" class="block mt-1 w-full"
                          type="email" name="email" :value="old('email')" error-field="email"
                          required autofocus />
        </div>

        <div class="flex items-center justify-between mt-4">
            <x-mary-button link="{{ route('login') }}" class="dark:bg-black">
                {{ __('Cancel') }}
            </x-mary-button>
            <x-mary-button class="btn-neutral" type="submit">
                {{ __('Email Password Reset Link') }}
            </x-mary-button>
        </div>
    </form>
</x-guest-layout>
