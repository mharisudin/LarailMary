<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-mary-input label="{{ __('Name') }}" id="name" class="block mt-1 w-full"
                          type="text" name="name" :value="old('name')" error-field="name"
                          required autofocus autocomplete="name" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-mary-input label="{{ __('Email') }}" id="email" class="block mt-1 w-full"
                          type="email" name="email" :value="old('email')" error-field="email"
                          required autocomplete="username" />
        </div>

        <!-- Password -->
        <div class="mt-4">

            <x-mary-input label="{{ __('Password') }}" id="password" class="block mt-1 w-full"
                            type="password" name="password" error-field="password"
                            required autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-mary-input label="{{ __('Password Confirmation') }}" id="password_confirmation" class="block mt-1 w-full"
                          type="password" name="password_confirmation" error-field="password_confirmation"
                          required autocomplete="new-password" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
