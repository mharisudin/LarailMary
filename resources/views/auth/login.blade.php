<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Header -->
    <x-mary-header class="mb-0 dark:text-white" title="Login" subtitle="{{ __('Welcome back, enter your credentials to continue.') }}"
                   size="text-xl" />

    <!-- Login with Google -->
    <x-mary-button type="submit" class="w-full btn-neutral">
        <x-tabler-brand-google-filled />
        {{ __('Login with Google') }}</x-mary-button>

    <div class="divider my-5">
        <small class="text-sm text-zinc-500 font-semibold">{{ __('Or') }}</small>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-mary-input label="{{ __('Email') }}" id="email" class="block mt-1 w-full"
                          type="email" name="email" :value="old('email')" error-field="email"
                          required autofocus autocomplete="username" />
        </div>


        <!-- Password -->
        <div class="mt-4">
{{--            <x-input-label for="password" :value="__('Password')" />--}}

            <x-mary-input label="Password" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-between items-center my-5">
            <!-- Remember Me -->
                <label for="remember_me" class="inline-flex items-center">
                    <x-mary-checkbox name="remember" />
                    <span class="ms-2 text-sm">{{ __('Remember me') }}</span>
                </label>

            @if (Route::has('password.request'))
                <a class="underline font-semibold text-sm text-blue-600 hover:text-blue-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <div class="flex items-center justify-between mt-4">
                <a class="underline font-semibold text-sm text-blue-600 hover:text-blue-500 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>

            <x-mary-button class="btn btn-neutral ms-3" type="submit">
                {{ __('Log in') }}
            </x-mary-button>
        </div>
    </form>
</x-guest-layout>
