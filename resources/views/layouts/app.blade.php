<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

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
        <div class="flex">
            <div class="w-1/8 bg-white h-screen p-4 fixed border border-r-gray-10 flex flex-col justify-between">
                <div class="flex items-center space-x-2 mb-8">
                    <div class="bg-gray-800 p-2 rounded-full">
                        <i class="fas fa-box text-white"></i>
                    </div>
                </div>
                <ul class="spac-4">
                    <li><a href="#" class="text-gray-700 hover:text-gray-900 flex items-center"><i class="fas fa-store mr-2"></i></a></li>
                    <li><a href="#" class="text-gray-700 hover:text-gray-900 flex items-center"><i class="fas fa-puzzle-piece mr-2"></i> </a></li>
                </ul>
                <ul class="spac-4">
                    <li><a href="#" class="text-gray-700 hover:text-gray-900 flex items-center"><i class="fas fa-store mr-2"></i></a></li>
                    <li><a href="#" class="text-gray-700 hover:text-gray-900 flex items-center"><i class="fas fa-puzzle-piece mr-2"></i> </a></li>
                </ul>
            </div>

        <!-- Main Content -->
            <div class="w-4/6 p-5 ps-20 bg-white">
                {{ $slot }}
            </div>

        <!-- Order List -->
            <div class="w-2/6 bg-white h-screen p-4 fixed right-0 border border-l-gray-100">
            <div class="mb-8">
                <div class="bg-orange-500 p-2 rounded-full mb-4">
                    <i class="fas fa-wallet text-white"></i>
                </div>
                <div class="text-center">
                    <p class="text-xl font-bold">Balance</p>
                    <p class="text-2xl">$1280.00</p>
                </div>
            </div>
            <div class="space-y-4">
                <div class="flex justify-between items-center">
                    <span class="text-gray-700">Nike Sportswear</span>
                    <span class="text-gray-700">$82.50</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-700">Comfort Plus Tee</span>
                    <span class="text-gray-700">$60.00</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-700">Essentials Linear</span>
                    <span class="text-gray-700">$94.80</span>
                </div>
            </div>
            <div class="mt-8">
                <button class="w-full bg-black text-white px-6 py-2 rounded-lg">Check Out</button>
            </div>
            </div>
        </div>

        <script src="https://kit.fontawesome.com/cff8b87f33.js" crossorigin="anonymous"></script>
    </body>
</html>
