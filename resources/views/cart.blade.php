<x-app-layout>
    <div class="cart p-6">
        <div class="cart-header mb-6">
            <h1 class="text-2xl font-bold">Keranjang</h1>
        </div>
        <div class="cart-content w-full flex flex-col lg:flex-row gap-6">
            <!-- Left section: Cart Items -->
            <div class="cart-items w-full lg:w-2/3">
                <div class="empty-cart bg-white p-6 rounded-md shadow-sm mb-4">
                    <div class="flex items-center gap-4">
                        <div>
                            <h2 class="text-lg font-semibold text-gray-700">Wah, keranjang belanjamu kosong</h2>
                            <p class="text-gray-500">Yuk, isi dengan barang-barang impianmu!</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="/" class="bg-green-500 text-white px-4 py-2 rounded-md text-center">Mulai Belanja</a>
                    </div>
                </div>
                <div class="cannot-process bg-white p-6 rounded-md shadow-sm">
                    <h2 class="text-lg font-semibold text-gray-700 mb-4">Tidak bisa diproses</h2>
                    <div class="out-of-stock flex items-center justify-between p-4 border border-gray-300 rounded-md">
                        <div class="flex items-center gap-4">
                            <input type="checkbox" id="out-of-stock" class="form-checkbox h-4 w-4 text-gray-600">
                            <label for="out-of-stock" class="text-gray-600">Stok Habis (1)</label>
                        </div>
                        <button class="text-red-500">Hapus (1)</button>
                    </div>
                </div>
            </div>
            <!-- Right section: Order Summary -->
            <div class="order-summary w-full lg:w-1/3 bg-white p-6 rounded-md shadow-sm">
                <h2 class="text-lg font-semibold text-gray-700 mb-4">Ringkasan belanja</h2>
                <div class="summary-item flex justify-between mb-2">
                    <span class="text-gray-600">Total</span>
                    <span class="text-gray-600">-</span>
                </div>
                <div class="promo bg-gray-100 p-4 rounded-md mb-4">
                    <span class="text-green-500">Makin hemat pakai promo</span>
                </div>
                <button class="bg-gray-300 text-gray-500 px-4 py-2 rounded-md w-full text-center cursor-not-allowed">Beli</button>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .empty-cart img {
        width: 50px;
        height: 50px;
    }
    .summary-item span {
        color: #4a4a4a;
    }
</style>
