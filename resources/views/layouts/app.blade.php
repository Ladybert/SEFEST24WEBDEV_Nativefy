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
        <div class="md:flex hidden px-6 py-8 md:py-0 md:px-0">
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
            <div class="md:w-4/6 w-full md:p-5 p-0 md:ps-24 ps-[0px] bg-white">
                <div class="flex justify-between items-center mb-8">
                    <div class="flex items-center space-x-8">
                        <a id="all" class="nav-link hover:underline-offset-8 hover:underline transition-all" href="/">All</a>
                        <a id="online" class="nav-link hover:underline-offset-8 hover:underline transition-all" href="/online">Online</a>
                        <a id="offline" class="nav-link hover:underline-offset-8 hover:underline transition-all" href="/offline">Offline</a>
                    </div>
                    <input type="text" class="p-2 border rounded-xl w-1/2" placeholder="Search for awesome">
                </div>
                {{ $slot }}
            </div>

        <!-- Order List -->
            <div class="md:w-2/6 w-[0px] bg-white h-screen p-7 fixed right-0 border border-l-gray-100 md:block hidden">
                <div class="advistory">
                    <div class="ads-title">
                        <h1 class="font-bold text-xl mb-4">Layanan teratas di Surabaya</h1>
                    </div>
                    <div class="ads-list overflow-y-auto h-96 space-y-4 rounded-lg no-scrollbar">
                        <a href="#" class="ads-card flex items-center gap-4 border border-gray-200 rounded-lg p-2 hover:bg-gray-50 transition-all">
                            <div class="ads-img w-12 h-12">
                                <img src="https://via.placeholder.com/150" alt="R.Y.V. Allover Print Dress" class="mb-4 w-full object-cover rounded-lg">
                            </div>
                            <div class="ads-body">
                                <h3 class="font-semibold">R.Y.V. Allover Print Dress</h3>
                                <p>$82.50</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="orders mt-4">
                    <div class="orders-title">
                        <h1 class="font-bold text-xl mb-4">Order-an kamu</h1>
                    </div>
                    <div class="orders-list overflow-y-auto h-96 space-y-4 rounded-lg no-scrollbar">
                        <a href="#" class="my-order-card flex items-center gap-4 border border-gray-200 rounded-lg p-2 hover:bg-gray-50 transition-all">
                            <div class="ads-img w-12 h-12">
                                <img src="https://via.placeholder.com/150" alt="Hao" class="mb-4 w-full object-cover rounded-lg">
                            </div>
                            <div class="ads-body">
                                <h3 class="font-semibold">Hao</h3>
                                {{-- @if ($order->status == 'done') --}}
                                    <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Done</span>
                                {{-- @elseif ($order->status == 'pending') --}}
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">Pending</span>
                                {{-- @elseif ($order->status == 'on progress') --}}
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">On progress</span>
                                {{-- @elseif ($order->status == 'canceled') --}}
                                    <span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded">Canceled</span>
                                {{-- @endif --}}
                                {{-- @if ($order->status == 'done' || $order->status == 'canceled')
                                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST" class="inline-block ml-4">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                    </form>
                                @endif --}}
                            </div>
                        </a>
                    </div>
                </div>
            </div>
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
                } else if (currentPath === '/online') {
                    onlineLink.classList.add('active');
                } else if (currentPath === '/offline') {
                    offlineLink.classList.add('active');
                }
            }

            // Call the function on page load
            window.onload = setActiveLink;
        </script>

    </body>
</html>
