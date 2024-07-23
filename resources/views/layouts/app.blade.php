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
        <div class="navbar border-b border-gray-200 px-24 py-2 fixed left-0 right-0 top-0 bg-white">
            <div class="navbar-wrapper flex justify-between items-center">
                <div class="navbar-left flex items-center gap-8">
                    <a href="/" class="navbar-logo">
                        <img class="w-8" src="{{ asset('images/logo/app-logo.png') }}" alt="logo.png">
                    </a>
                    <div class="navbar-links flex gap-6">
                        <a href="/" id="all" class="navbar-link">All</a>
                        <a href="/online" id="online" class="navbar-link">Online</a>
                        <a href="/offline" id="offline" class="navbar-link">Offline</a>
                    </div>
                </div>

                <div class="navbar-right flex items-center gap-4">
                    <div class="search-input">
                        <form action="">
                            <input type="text" placeholder="Cari layanan..." class="navbar-search h-9 rounded-md border w-64 border-gray-300">
                        </form>
                    </div>
                    <a href="/cart" class="navbar-cart">
                        <i class="fas fa-shopping-cart text-xl hover:transform hover:scale-125 transition-all"></i>
                    </a>
                    <a href="/chat" class="navbar-chat">
                        <i class="fas fa-comment text-xl hover:transform hover:scale-125 transition-all"></i>
                    </a>
                    <div class="auth flex gap-2">
                        @guest
                            <!-- Tampilkan jika pengguna belum login -->
                            <a href="{{ route('login') }}" class="navbar-login py-2 px-4 rounded-md">
                                Login
                            </a>
                            <a href="{{ route('register') }}" class="navbar-register py-2 px-4 rounded-md bg-black text-white">
                                Register
                            </a>
                        @else
                            <!-- Tampilkan jika pengguna sudah login -->
                            <div class="relative">
                                <button id="profileButton" class="flex items-center py-2 px-4 rounded-md">
                                    <img src="{{ asset('images/logo/app-logo.png') }}" alt="Profile Photo" class="w-8 h-8 rounded-full">
                                </button>
                                <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md border border-gray-300 shadow-lg z-10">
                                    <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        <i class="fas fa-user mr-2"></i>
                                        My Profile
                                    </a>
                                    <a href="/cart" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        <i class="fas fa-shopping-cart mr-2"></i>
                                        Cart
                                    </a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 text-red-500">
                                            <i class="fas fa-sign-out-alt mr-2"></i>
                                            Logout
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>

        <div class="main-content px-24 pt-[70px]">
            {{ $slot }}
        </div>

        <footer class="bg-black text-white py-8 mt-12">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center">
                    <div class="footer-left flex items-center gap-8">
                        <a href="/" class="footer-logo">
                            <img class="w-8" src="{{ asset('images/logo/app-logo-black.png') }}" alt="logo.png">
                        </a>
                        <div class="footer-links flex gap-6">
                            <a href="/" class="footer-link">Home</a>
                            <a href="/about" class="footer-link">About Us</a>
                            <a href="/contact" class="footer-link">Contact Us</a>
                            <a href="/privacy" class="footer-link">Privacy Policy</a>
                        </div>
                    </div>
                    <div class="footer-right flex items-center gap-4">
                        <a href="https://www.facebook.com" target="_blank" class="footer-social">
                            <i class="fab fa-facebook text-2xl"></i>
                        </a>
                        <a href="https://www.twitter.com" target="_blank" class="footer-social">
                            <i class="fab fa-twitter text-2xl"></i>
                        </a>
                        <a href="https://www.instagram.com" target="_blank" class="footer-social">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                        <a href="https://www.linkedin.com" target="_blank" class="footer-social">
                            <i class="fab fa-linkedin text-2xl"></i>
                        </a>
                    </div>
                </div>
                <div class="footer-bottom text-center mt-8">
                    <p>&copy; 2024 Nativefy. All rights reserved.</p>
                </div>
            </div>
        </footer>


        <script src="https://kit.fontawesome.com/cff8b87f33.js" crossorigin="anonymous"></script>
        <script>
            function setActiveLink() {
                const currentPath = window.location.pathname;
                const allLink = document.getElementById('all');
                const onlineLink = document.getElementById('online');
                const offlineLink = document.getElementById('offline');

                allLink.classList.remove('active');
                onlineLink.classList.remove('active');
                offlineLink.classList.remove('active');

                if (currentPath === '/') {
                    allLink.classList.add('active');
                } else if (currentPath.includes('/online')) {
                    onlineLink.classList.add('active');
                } else if (currentPath.includes('/offline')) {
                    offlineLink.classList.add('active');
                }
            }

            window.onload = setActiveLink;

        </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var profileButton = document.getElementById('profileButton');
        var dropdownMenu = document.getElementById('dropdownMenu');

        profileButton.addEventListener('click', function () {
            dropdownMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', function (e) {
            if (!profileButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    });
    </script>


    </body>
</html>
