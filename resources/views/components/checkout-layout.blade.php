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
            <div class="md:w-1/8 bg-white h-screen py-4 fixed border border-r-gray-10 md:flex-col items-center justify-between md:flex hidden">
                <div class="flex items-center space-x-2 mb-8">
                    <div class="bg-gray-800 rounded-full">
                        <img src="{{ asset('images/logo/app-logo.png') }}" class="w-8" alt="logo.png">
                    </div>
                </div>
                <ul class="flex flex-col gap-8">
                    <li>
                        <a href="#" class="p-7">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="p-7">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="p-7">
                            <i class="fas fa-comment"></i>
                        </a>
                    </li>
                </ul>

                <ul class="flex flex-col items-center gap-8">
                    <li>
                        <a href="#">
                            <div class="avatar">
                                <div class="w-10 rounded-full">
                                    <img src="https://t3.ftcdn.net/jpg/02/33/46/24/360_F_233462402_Fx1yke4ng4GA8TJikJZoiATrkncvW6Ib.jpg" />
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="$">
                            <i><i class="fas fa-sign-out-alt"></i></i>
                        </a>
                    </li>
                </ul>
            </div>

        <!-- Main Content -->
            <div class="w-full p-0 md:ps-[75px] ps-[0px] bg-white">
                {{ $slot }}
            </div>
        </div>

        <script src="https://kit.fontawesome.com/cff8b87f33.js" crossorigin="anonymous"></script>

    </body>
</html>
