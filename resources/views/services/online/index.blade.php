<x-app-layout>
    <!-- Banner -->
<div class="banner bg-purple-200  rounded-xl mb-8 mt-5 overflow-hidden">
    <div class="banner-item w-full h-full">
        <img src="{{ asset('images/banner/online-banner.png') }}" class="w-full h-full" alt="banner">
    </div>
</div>
    <!-- Product Filters -->
<div class="flex justify-between items-center mb-8">
    <div class="flex space-x-4 overflow-x-auto no-scrollbar">
        <a href="online/category" class="bg-transparent border border-black hover:bg-black hover:text-white text-gray-700 lg:px-4 md:px-2 md:text-sm text-md py-2 px-4 rounded-lg transition-all">Creative</a>
        <a href="online/category" class="bg-transparent border border-black hover:bg-black hover:text-white text-gray-700 lg:px-4 md:px-2 md:text-sm text-md py-2 px-4 rounded-lg transition-all">New Arrival</a>
        <a href="online/category" class="bg-transparent border border-black hover:bg-black hover:text-white text-gray-700 lg:px-4 md:px-2 md:text-sm text-md py-2 px-4 rounded-lg transition-all">Stock</a>
        <a href="online/category" class="bg-transparent border border-black hover:bg-black hover:text-white text-gray-700 lg:px-4 md:px-2 md:text-sm text-md py-2 px-4 rounded-lg transition-all">Low Price</a>
        <a href="online/category" class="bg-transparent border border-black hover:bg-black hover:text-white text-gray-700 lg:px-4 md:px-2 md:text-sm text-md py-2 px-4 rounded-lg transition-all">Best Seller</a>
    </div>
</div>
    <!-- Products -->
<div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-4">
    <a href="/checkout" class="hover:scale-105 transition-all">
        <div class="card bg-white rounded-lg">
            <div class="card-image w-full h-52 rounded-lg overflow-hidden">
                <img src="https://placehold.co/600x400/000000/FFFFFF.png" class="w-full h-full object-cover" alt="product-1">
            </div>
            <div class="flex justify-between items-center mb-1">
                <h3 class="font-semibold">Jasa pel pak surya</h3>
            </div>
            <p class="text-gray-600">Rp. 10.000,00</p>
        </div>
    </a>
</div>
</x-app-layout>
