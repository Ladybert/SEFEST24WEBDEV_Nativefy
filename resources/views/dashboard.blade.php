<x-app-layout>
    <div class="all-services">
        <div class="banner-hero bg-purple-200 rounded-xl mt-5 overflow-hidden">
            <div class="banner-hero-item w-full h-full">
                <img src="{{ asset('images/banner/all-banner.png') }}" class="w-full h-full" alt="banner">
            </div>
        </div>

        <div class="up-service grid w-full grid-cols-1 md:grid-cols-2 gap-4 mt-4">
            <div class="catgeory border border-gray-200 rounded-md p-3">
                <div class="catgeory-title">
                    <h1 class="text-xl font-semibold">Kategori Pilihan</h1>
                </div>
                <div class="grid grid-cols-2 gap-2 mt-3">
                    <a href="/category/desain" class="flex items-center p-3 bg-orange-300 text-gray-800 rounded-lg hover:bg-orange-400 transition duration-300">
                        <div class="flex-grow">
                            <h2 class="text-md font-semibold">Desain</h2>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="/category/rumah-tangga" class="flex items-center p-3 bg-green-300 text-gray-800 rounded-lg hover:bg-green-400 transition duration-300">
                        <div class="flex-grow">
                            <h2 class="text-md font-semibold">Rumah Tangga</h2>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="/category/otomotif" class="flex items-center p-3 bg-yellow-300 text-gray-800 rounded-lg hover:bg-yellow-400 transition duration-300">
                        <div class="flex-grow">
                            <h2 class="text-md font-semibold">Otomotif</h2>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="/category/elektronik" class="flex items-center p-3 bg-blue-300 text-gray-800 rounded-lg hover:bg-blue-400 transition duration-300">
                        <div class="flex-grow">
                            <h2 class="text-md font-semibold">Elektronik</h2>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7-7l7 7-7 7" />
                        </svg>
                    </a>
                </div>

            </div>
            <div class="relative overflow-hidden rounded-lg">
                <div class="title">
                    <h1 class="text-xl mb-4 font-semibold">Kenapa Nativefy?</h1>
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

        <div class="services-list">
            <div class="list-title mt-4">
                <h1 class="text-2xl font-bold">Semua Layanan</h1>
            </div>
            <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 gap-4 mt-4">
                @foreach($services as $service)
                <a href="/checkout" class="bg-white rounded-lg transition duration-300 p-2 border hover:border-gray-300 border-white">
                    <img src="{{ asset($service->service_photo) }}" alt="Product Image" class="w-full h-40 object-cover rounded-md ">
                    <div class="card-body p-2">
                        <h2 class="text-lg font-semibold mb-2">{{ $service->service_name }}</h2>
                        <p class="text-gray-600 mb-2">Rp. {{ $service->price }}</p>
                        <div class="flex items-center">
                            <svg class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.618 4.975a1 1 0 00.95.69h5.245c.969 0 1.372 1.24.588 1.81l-4.244 3.086a1 1 0 00-.364 1.118l1.618 4.975c.3.921-.755 1.688-1.538 1.118l-4.244-3.086a1 1 0 00-1.176 0l-4.244 3.086c-.783.57-1.838-.197-1.538-1.118l1.618-4.975a1 1 0 00-.364-1.118L2.596 9.402c-.784-.57-.381-1.81.588-1.81h5.245a1 1 0 00.95-.69l1.618-4.975z"/></svg>
                            <svg class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.618 4.975a1 1 0 00.95.69h5.245c.969 0 1.372 1.24.588 1.81l-4.244 3.086a1 1 0 00-.364 1.118l1.618 4.975c.3.921-.755 1.688-1.538 1.118l-4.244-3.086a1 1 0 00-1.176 0l-4.244 3.086c-.783.57-1.838-.197-1.538-1.118l1.618-4.975a1 1 0 00-.364-1.118L2.596 9.402c-.784-.57-.381-1.81.588-1.81h5.245a1 1 0 00.95-.69l1.618-4.975z"/></svg>
                            <svg class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.618 4.975a1 1 0 00.95.69h5.245c.969 0 1.372 1.24.588 1.81l-4.244 3.086a1 1 0 00-.364 1.118l1.618 4.975c.3.921-.755 1.688-1.538 1.118l-4.244-3.086a1 1 0 00-1.176 0l-4.244 3.086c-.783.57-1.838-.197-1.538-1.118l1.618-4.975a1 1 0 00-.364-1.118L2.596 9.402c-.784-.57-.381-1.81.588-1.81h5.245a1 1 0 00.95-.69l1.618-4.975z"/></svg>
                            <svg class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.618 4.975a1 1 0 00.95.69h5.245c.969 0 1.372 1.24.588 1.81l-4.244 3.086a1 1 0 00-.364 1.118l1.618 4.975c.3.921-.755 1.688-1.538 1.118l-4.244-3.086a1 1 0 00-1.176 0l-4.244 3.086c-.783.57-1.838-.197-1.538-1.118l1.618-4.975a1 1 0 00-.364-1.118L2.596 9.402c-.784-.57-.381-1.81.588-1.81h5.245a1 1 0 00.95-.69l1.618-4.975z"/></svg>
                            <svg class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.618 4.975a1 1 0 00.95.69h5.245c.969 0 1.372 1.24.588 1.81l-4.244 3.086a1 1 0 00-.364 1.118l1.618 4.975c.3.921-.755 1.688-1.538 1.118l-4.244-3.086a1 1 0 00-1.176 0l-4.244 3.086c-.783.57-1.838-.197-1.538-1.118l1.618-4.975a1 1 0 00-.364-1.118L2.596 9.402c-.784-.57-.381-1.81.588-1.81h5.245a1 1 0 00.95-.69l1.618-4.975z"/></svg>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
