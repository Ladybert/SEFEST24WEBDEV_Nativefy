<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Nativefy - Marketplace Jasa Andalan Anak Muda') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
        </style>
    </head>
    <body class="font-sans antialiased">
    <!-- Sidebar -->
        <div class="md:flex md:py-0 md:px-0">
            <x-sidebar />

        <!-- Main Content -->
            <div class="w-full p-0 md:ps-[78px] ps-[0px] bg-white">
                {{ $slot }}
            </div>
        </div>

        <script src="https://kit.fontawesome.com/cff8b87f33.js" crossorigin="anonymous"></script>

    </body>
</html>
