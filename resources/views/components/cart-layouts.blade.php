<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Nativefy - Marketplace Jasa Andalan Anak Muda') }}</title>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
        </style>
    </head>
    <body class="font-sans antialiased">
    <!-- Sidebar -->
        <div class="md:flex px-6 py-8 md:py-0 md:px-0">
            <div class="md:w-1/8 bg-white h-screen py-4 fixed border border-r-gray-10 md:flex-col items-center justify-between md:flex hidden">
                <div class="flex items-center space-x-2 mb-8">
                    <div class="bg-gray-800 rounded-full">
                        <img src="{{ asset('images/logo/app-logo.png') }}" class="w-8" alt="logo.png">
                    </div>
                </div>
                <ul class="flex flex-col gap-8">
                    <li>
                        <a href="/" class="p-7">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
                    <li>
                        <a href="/cart" class="p-7">
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
            <div class="w-full md:p-5 p-0 md:ps-24 ps-[0px] bg-white">
                {{ $slot }}
            </div>

        <!-- Order List -->
        </div>

        <script src="https://kit.fontawesome.com/cff8b87f33.js" crossorigin="anonymous"></script>
        <script>
            // Function to set the active link based on the current URL
            function setActiveLink() {
                const currentPath = window.location.pathname;
                const allLink = document.getElementById('all');
                const onlineLink = document.getElementById('online');
                const offlineLink = document.getElementById('offline');

                // Remove active class from all links
                allLink.classList.remove('active');
                onlineLink.classList.remove('active');
                offlineLink.classList.remove('active');

                // Add active class to the current link
                if (currentPath === '/') {
                    allLink.classList.add('active');
                } else if (currentPath.includes('/online')) {
                    onlineLink.classList.add('active');
                } else if (currentPath.includes('/offline')) {
                    offlineLink.classList.add('active');
                }
            }

            // Call the function on page load
            window.onload = setActiveLink;

        </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
            AOS.init();
        </script>

    </body>
</html>
