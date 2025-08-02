<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-g">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-slate-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-slate-100">
            <div class="mb-6">
                <a href="/" class="flex items-center gap-3">
                    <svg class="w-10 h-10 text-teal-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.375a6.375 6.375 0 0 0 6.375-6.375a6.375 6.375 0 0 0-6.375-6.375a6.375 6.375 0 0 0-6.375 6.375a6.375 6.375 0 0 0 6.375 6.375Z" />
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 12.75h.008v.008H12v-.008Z" />
                    </svg>
                    <span class="text-2xl font-bold text-slate-800">BK SMANSA</span>
                </a>
            </div>

            <div class="w-full sm:max-w-md px-6 py-8 bg-white shadow-md overflow-hidden sm:rounded-xl">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>