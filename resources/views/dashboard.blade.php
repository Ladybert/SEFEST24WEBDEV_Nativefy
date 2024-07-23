<x-app-layout>
    <!-- Banner -->
<div class="banner bg-purple-200  rounded-xl mb-8 mt-5 overflow-hidden">
    <div class="banner-item w-full h-full">
        <img src="{{ asset('images/banner-1.png') }}" class="w-full h-full" alt="banner">
    </div>
</div>
    <!-- Product Filters -->
<div class="flex justify-between items-center mb-8">
    <div class="flex space-x-4 overflow-x-auto no-scrollbar">
        <a href="#" class="bg-transparent border border-black hover:bg-black hover:text-white text-gray-700 lg:px-4 md:px-2 md:text-sm text-md py-2 px-4 rounded-lg transition-all">All</a>
        <a href="#" class="bg-transparent border border-black hover:bg-black hover:text-white text-gray-700 lg:px-4 md:px-2 md:text-sm text-md py-2 px-4 rounded-lg transition-all">Creative</a>
        <a href="#" class="bg-transparent border border-black hover:bg-black hover:text-white text-gray-700 lg:px-4 md:px-2 md:text-sm text-md py-2 px-4 rounded-lg transition-all">New Arrival</a>
        <a href="#" class="bg-transparent border border-black hover:bg-black hover:text-white text-gray-700 lg:px-4 md:px-2 md:text-sm text-md py-2 px-4 rounded-lg transition-all">Stock</a>
        <a href="#" class="bg-transparent border border-black hover:bg-black hover:text-white text-gray-700 lg:px-4 md:px-2 md:text-sm text-md py-2 px-4 rounded-lg transition-all">Low Price</a>
        <a href="#" class="bg-transparent border border-black hover:bg-black hover:text-white text-gray-700 lg:px-4 md:px-2 md:text-sm text-md py-2 px-4 rounded-lg transition-all">Best Seller</a>
    </div>
</div>
    <!-- Products -->
<div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-4">
    @foreach($services as $service)
    <a href="{{ route('checkout') }}" class="hover:scale-105 transition-all">
        <div class="card bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Check if service_photo is not null -->
            @if($service->service_photo)
                <img src="{{ asset('storage/' . $service->service_photo) }}" alt="{{ $service->service_name }}" class="mb-4 w-full h-48 object-cover rounded-lg">
            @else
                <img src="https://via.placeholder.com/400x300" alt="Placeholder Image" class="mb-4 w-full h-48 object-cover rounded-lg">
            @endif
            <div class="p-4">
                <h3 class="font-semibold text-lg mb-2">{{ $service->service_name }}</h3>
                <p class="text-gray-600 mb-4">{{ $service->service_desc }}</p>
                <p class="text-gray-800 font-semibold">Rp. {{ number_format($service->price, 0, ',', '.') }}</p>
            </div>
        </div>
    </a>
@endforeach
</div>
</x-app-layout>
