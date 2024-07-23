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

    </head>
    <body class="font-sans antialiased h-screen">
    <!-- Sidebar -->
        <div class="md:flex md:py-0 md:px-0">

        <!-- Main Content -->
            <div class="w-full h-screen p-0  ps-[0px] bg-white">
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
