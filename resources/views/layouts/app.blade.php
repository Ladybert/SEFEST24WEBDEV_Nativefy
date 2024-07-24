<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Nativefy - Marketplace Jasa Andalan Anak Muda') }}</title>

    <meta name="description" content="Discover top services on Nativefy. Choose from categories like Design, Household, Automotive, and Electronics.">
    <meta name="keywords" content="Nativefy, services, marketplace, design, household, automotive, electronics">
    <meta name="author" content="Nativefy Team">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @layer utilities {
            .no-scrollbar::-webkit-scrollbar {
                display: none;
            }
            .no-scrollbar {
                -ms-overflow-style: none;  /* IE and Edge */
                scrollbar-width: none;  /* Firefox */
            }
        }
    </style>
</head>
<body class="font-sans antialiased h-screen bg-white relative">
    <header>
        <nav class="navbar border-b border-gray-200 px-4 py-2 fixed left-0 right-0 top-0 bg-white z-50 shadow-sm">
            <div class="navbar-wrapper flex justify-between items-center max-w-7xl mx-auto">
                <!-- Desktop Navbar -->
                <div class="hidden lg:flex lg:items-center lg:gap-8">
                    <a href="/" class="navbar-logo">
                        <img class="w-10" src="{{ asset('images/logo/app-logo.png') }}" alt="Nativefy Logo">
                    </a>
                    <div class="navbar-links flex gap-6">
                        <a href="/" id="all" class="navbar-link">All</a>
                        <a href="/online" id="online" class="navbar-link">Online</a>
                        <a href="/offline" id="offline" class="navbar-link">Offline</a>
                    </div>
                </div>

                <div class="navbar-right flex items-center gap-6">
                    <div class="search-input hidden lg:block">
                        <form action="/search" method="get">
                            <input type="text" name="query" placeholder="Cari layanan..." class="navbar-search h-9 rounded-md border w-64 border-gray-300 px-3">
                        </form>
                    </div>
                    <a href="/cart" class="navbar-cart text-gray-800 hover:text-blue-600 transition-colors">
                        <i class="fas fa-shopping-cart text-lg"></i>
                    </a>
                    <a href="/chat" class="navbar-chat text-gray-800 hover:text-blue-600 transition-colors">
                        <i class="fas fa-comment text-lg"></i>
                    </a>
                    <div class="auth flex items-center gap-2 relative">
                        @guest
                            <a href="{{ route('login') }}" class="navbar-login py-2 px-4 rounded-md">Login</a>
                            <a href="{{ route('register') }}" class="navbar-register py-2 px-4 rounded-md bg-blue-600 text-white hover:bg-blue-700 transition-colors">Register</a>
                        @else
                            <button id="profileButton" class="flex items-center py-2 px-4 rounded-md focus:outline-none">
                                <img src="{{ asset('images/logo/app-logo.png') }}" alt="Profile Photo" class="w-8 h-8 rounded-full">
                            </button>
                            <div id="dropdownMenu" class="hidden absolute right-0 mt-12 w-48 bg-white rounded-md border border-gray-300 z-10 shadow-lg">
                                <a href="{{ url('/profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    <i class="fas fa-user mr-2"></i> My Profile
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 text-red-500">
                                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                    </button>
                                </form>
                            </div>
                        @endguest
                    </div>
                </div>

                <!-- Mobile Navbar Toggle Button -->
                <button id="mobileMenuButton" class="lg:hidden flex items-center text-gray-800">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </nav>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="lg:hidden fixed inset-0 bg-white shadow-lg z-50 transform -translate-x-full transition-transform duration-300 ease-in-out">
            <div class="flex justify-between items-center p-4 border-b border-gray-200">
                <a href="/" class="navbar-logo">
                    <img class="w-10" src="{{ asset('images/logo/app-logo.png') }}" alt="Nativefy Logo">
                </a>
                <button id="closeMobileMenu" class="text-gray-800">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            <nav class="p-4">
                <a href="/" id="allMobile" class="block py-2 text-lg">All</a>
                <a href="/online" id="onlineMobile" class="block py-2 text-lg">Online</a>
                <a href="/offline" id="offlineMobile" class="block py-2 text-lg">Offline</a>
                <div class="mt-4">
                    <a href="/cart" class="block py-2 text-md"><i class="fas fa-shopping-cart mr-4"></i> Cart</a>
                    <a href="/chat" class="block py-2 text-md"><i class="fas fa-comment mr-4"></i> Chat</a>
                    @guest
                        <a href="{{ route('login') }}" class="block py-2 text-lg">Login</a>
                        <a href="{{ route('register') }}" class="block py-2 text-lg bg-black text-white">Register</a>
                    @else
                        <a href="/profile" class="block py-2 text-lg"><i class="fas fa-user mr-2"></i> My Profile</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full py-2 text-left text-lg text-red-500"><i class="fas fa-sign-out-alt mr-2"></i> Logout</button>
                        </form>
                    @endguest
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="main-content px-4 md:px-20 pt-20">
            {{ $slot }}
        </div>
    </main>

    <footer class="bg-gray-900 text-white py-8 mt-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
                <div class="footer-about">
                    <img src="{{ asset('images/logo/app-logo.png') }}" alt="Nativefy Logo" class="mb-4 w-10">
                    <p class="text-gray-400">Nativefy adalah marketplace jasa yang andalan untuk anak muda. Temukan layanan terbaik untuk kebutuhan Anda.</p>
                </div>
                <div class="footer-links">
                    <h3 class="text-lg font-semibold mb-4">Navigasi</h3>
                    <ul>
                        <li><a href="/" class="text-gray-400 hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="/online" class="text-gray-400 hover:text-white transition-colors">Online</a></li>
                        <li><a href="/offline" class="text-gray-400 hover:text-white transition-colors">Offline</a></li>
                        <li><a href="/contact" class="text-gray-400 hover:text-white transition-colors">Kontak Kami</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h3 class="text-lg font-semibold mb-4">Kontak Kami</h3>
                    <p class="text-gray-400">Email: support@nativefy.com</p>
                    <p class="text-gray-400">Telepon: +62 812 3456 7890</p>
                </div>
                <div class="footer-social">
                    <h3 class="text-lg font-semibold mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-4 text-center text-gray-500">
                &copy; 2024 Nativefy. All rights reserved.
            </div>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/cff8b87f33.js" crossorigin="anonymous"></script>
    <!-- Pastikan Anda sudah memuat GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>

<script>
    gsap.from(".navbar-logo", {
        opacity: 0,
        duration: 1,
        y: -50,
        ease: "power4.out"
    });
</script>

    <script>
        function setActiveLink() {
            const currentPath = window.location.pathname;
            const allLink = document.getElementById('all');
            const onlineLink = document.getElementById('online');
            const offlineLink = document.getElementById('offline');
            const allMobileLink = document.getElementById('allMobile');
            const onlineMobileLink = document.getElementById('onlineMobile');
            const offlineMobileLink = document.getElementById('offlineMobile');

            allLink.classList.remove('active');
            onlineLink.classList.remove('active');
            offlineLink.classList.remove('active');
            allMobileLink.classList.remove('active');
            onlineMobileLink.classList.remove('active');
            offlineMobileLink.classList.remove('active');

            if (currentPath === '/') {
                allLink.classList.add('active');
                allMobileLink.classList.add('active');
            } else if (currentPath.includes('/online')) {
                onlineLink.classList.add('active');
                onlineMobileLink.classList.add('active');
            } else if (currentPath.includes('/offline')) {
                offlineLink.classList.add('active');
                offlineMobileLink.classList.add('active');
            }
        }

        window.onload = setActiveLink;

        document.addEventListener('DOMContentLoaded', function () {
            var mobileMenuButton = document.getElementById('mobileMenuButton');
            var closeMobileMenuButton = document.getElementById('closeMobileMenu');
            var mobileMenu = document.getElementById('mobileMenu');
            var profileButton = document.getElementById('profileButton');
            var dropdownMenu = document.getElementById('dropdownMenu');

            mobileMenuButton.addEventListener('click', function () {
                mobileMenu.classList.remove('-translate-x-full');
            });

            closeMobileMenuButton.addEventListener('click', function () {
                mobileMenu.classList.add('-translate-x-full');
            });

            document.addEventListener('click', function (e) {
                if (!mobileMenu.contains(e.target) && !mobileMenuButton.contains(e.target)) {
                    mobileMenu.classList.add('-translate-x-full');
                }

                // Close the dropdown if clicking outside of it
                if (!dropdownMenu.contains(e.target) && !profileButton.contains(e.target)) {
                    dropdownMenu.classList.add('hidden');
                }
            });

            profileButton.addEventListener('click', function () {
                dropdownMenu.classList.toggle('hidden');
            });

            // Optional: handle closing the dropdown when an item is clicked
            dropdownMenu.addEventListener('click', function (e) {
                if (e.target.closest('form') || e.target.closest('a')) {
                    dropdownMenu.classList.add('hidden');
                }
            });

            const carousel = document.getElementById('carousel');
            const totalWidth = carousel.scrollWidth;
            const itemWidth = carousel.children[0].clientWidth;
            let currentIndex = 0;

            function scrollCarousel() {
                currentIndex = (currentIndex + 1) % carousel.children.length;
                const offset = itemWidth * currentIndex;
                carousel.style.transform = `translateX(-${offset}px)`;
            }

            setInterval(scrollCarousel, 3800);
        });
    </script>
</body>
</html>
