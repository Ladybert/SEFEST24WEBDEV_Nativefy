<x-app-layout>
    <div class="all-services px-4 md:px-8">
        <!-- Hero Banner -->
        <div class="banner-hero bg-purple-200 rounded-xl mt-5 overflow-hidden">
            <div class="banner-hero-item w-full h-full">
                <img src="{{ asset('images/banner/all-banner.png') }}" class="w-full h-full" alt="banner">
            </div>
        </div>

        <!-- Category and Carousel Section -->
        <div class="up-service grid w-full grid-cols-1 md:grid-cols-2 gap-4 mt-8">
            <!-- Category Section -->
            <div class="category rounded-md">
                <div class="category-title">
                    <h1 class="text-2xl font-semibold mb-4">Kategori Pilihan</h1>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <a href="/category/desain" class="flex items-center p-4 bg-gradient-to-r from-orange-400 to-orange-300 text-gray-800 rounded-lg hover:from-orange-500 hover:to-orange-400 transition duration-300">
                        <div class="flex-grow">
                            <h2 class="text-lg font-semibold">Desain</h2>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="/category/rumah-tangga" class="flex items-center p-4 bg-gradient-to-r from-green-400 to-green-300 text-gray-800 rounded-lg hover:from-green-500 hover:to-green-400 transition duration-300">
                        <div class="flex-grow">
                            <h2 class="text-lg font-semibold">Rumah Tangga</h2>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="/category/otomotif" class="flex items-center p-4 bg-gradient-to-r from-yellow-400 to-yellow-300 text-gray-800 rounded-lg hover:from-yellow-500 hover:to-yellow-400 transition duration-300">
                        <div class="flex-grow">
                            <h2 class="text-lg font-semibold">Otomotif</h2>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="/category/elektronik" class="flex items-center p-4 bg-gradient-to-r from-blue-400 to-blue-300 text-gray-800 rounded-lg hover:from-blue-500 hover:to-blue-400 transition duration-300">
                        <div class="flex-grow">
                            <h2 class="text-lg font-semibold">Elektronik</h2>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Carousel Section -->
            <div class="relative overflow-hidden rounded-lg hidden md:block">
                <div class="title mb-4">
                    <h1 class="text-2xl font-semibold">Kenapa Nativefy?</h1>
                </div>
                <div class="flex transition-transform duration-1000 ease-in-out" id="carousel">
                    <div class="flex-shrink-0 w-full rounded-md">
                        <img src="{{ asset('images/banner/online-banner.png') }}" alt="Online Banner" class="w-full rounded-md">
                    </div>
                    <div class="flex-shrink-0 w-full rounded-md">
                        <img src="{{ asset('images/banner/offline-banner.png') }}" alt="Offline Banner" class="w-full rounded-md">
                    </div>
                </div>
            </div>
        </div>

        <!-- Top Services Section -->
        <div class="up-services mt-8">
            <div class="title mb-4">
                <h1 class="text-2xl font-semibold">Layanan Teratas</h1>
            </div>
            <div class="ads-services flex overflow-x-auto p-2 no-scrollbar space-x-4">
                @foreach($services as $service)
                <a href="/checkout" class="bg-white rounded-lg transition duration-300 p-2 border hover:border-gray-300 border-white flex-shrink-0 w-60">
                    <img src="{{ asset($service->service_photo) }}" alt="Product Image" class="w-full h-40 object-cover rounded-md">
                    <div class="card-body p-2">
                        <h2 class="text-lg font-semibold mb-2">{{ $service->service_name }}</h2>
                        <div class="flex items-center">
                            <p>4.5</p>
                            <i class="fas fa-star text-yellow-500 ml-1"></i>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>

        <!-- All Services Section -->
        <div class="services-list mt-8">
            <div class="list-title mb-4">
                <h1 class="text-2xl font-bold">Semua Layanan</h1>
            </div>
            <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 gap-4">
                @foreach($services as $service)
                <a href="/checkout" class="bg-white rounded-lg transition duration-300 p-2 border hover:border-gray-300 border-white">
                    <img src="{{ asset($service->service_photo) }}" alt="Product Image" class="w-full h-40 object-cover rounded-md ">
                    <div class="card-body p-2">
                        <h2 class="text-lg font-semibold mb-2">{{ $service->service_name }}</h2>
                        <p class="text-gray-600 mb-2">Rp. {{ $service->price }}</p>
                        <div class="flex items-center">
                            <p>4.5</p>
                            <i class="fas fa-star text-yellow-500 ml-1"></i>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    
</style>
