<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body
    class="font-sans antialiased selection:bg-brand selection:text-brand-foreground [text-rendering:optimizeLegibility] tracking-tight">

<div class="flex min-h-screen flex-col items-center pt-16 sm:justify-center sm:pt-0">
    <a href="https://larailmary.test/">
        <div class="text-2xl font-semibold tracking-tighter text-foreground mx-auto">LarailMary_</div>
    </a>
    <div class="relative mt-6 w-full max-w-lg">

        <div
            class="absolute right-[calc(50%-4rem)] top-10 -z-10 hidden transform-gpu blur-3xl dark:block sm:right-[calc(-30%-0rem)] sm:top-[-16rem] lg:right-[-5rem] lg:top-[calc(50%-33rem)] xl:right-[calc(50%-24rem)]"
            aria-hidden="true">
            <div
                class="hidden aspect-[1108/632] w-[40rem] bg-gradient-to-r from-blue-600 to-transparent opacity-90 sm:block"
                style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%);"></div>
        </div>
        <div
            class="relative -mb-px h-px w-full bg-gradient-to-r from-transparent via-zinc-300 to-transparent dark:via-blue-600"></div>
        <div
            class="border text-foreground [&:has(.larhy3):not(:has(.yahnba))>.ccvgs8x]:pt-6 [&:has(.larhy3)]:overflow-hidden rounded-none border-b bg-popover/30 p-6 dark:border-b-brand/50 dark:border-t-brand/50 md:p-8 lg:p-10 shadow-[20px_0_20px_20px] shadow-zinc-500/10 dark:shadow-brand/10 border-border sm:rounded-lg sm:shadow-sm dark:sm:border-brand/20 dark:sm:border-l-brand/20 dark:sm:border-r-brand/20 lg:rounded-xl lg:shadow-none">
            {{ $slot }}
        </div>
    </div>
</div>
@livewireScripts
</body>
</html>
