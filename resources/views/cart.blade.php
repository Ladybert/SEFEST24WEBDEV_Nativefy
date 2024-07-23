<x-app-layout>
    <div class="page-header py-6">
        <div class="header-wrapper container mx-auto px-4">
            <div class="header-title text-center">
                <h1 class="font-bold text-3xl mt-2">Keranjang Belanja</h1>
            </div>
        </div>
    </div>

    <div class="page-content mt-6">
        <div class="content-wrapper container mx-auto px-4">
            <div class="cart-list space-y-6">
                <div class="cart-item flex flex-col md:flex-row items-center bg-white p-4 rounded-lg shadow-md border border-gray-300" data-aos="fade">
                    <div class="cart-image w-32 h-32 md:w-48 md:h-48 flex-shrink-0 overflow-hidden rounded-lg shadow-sm">
                        <img src="https://via.placeholder.com/128" alt="Product Image" class="w-full h-full object-cover">
                    </div>
                    <div class="cart-info flex-grow mt-4 md:mt-0 md:ml-6">
                        <h1 class="product-name font-semibold text-lg text-gray-800">R.Y.V. Allover Print Dress</h1>
                        <p class="product-price mt-2 text-xl font-medium text-gray-900">$99.99</p>
                        <div class="cart-control flex mt-4 space-x-2">
                            <form action="" method="delete" class="delete-form">
                                <button type="button" class="cart-delete px-4 py-2 border border-red-500 rounded-lg text-red-500 hover:bg-red-500 hover:text-white transition-all">
                                    <i class="fas fa-trash"></i>
                                    <span class="sr-only">Hapus</span>
                                </button>
                            </form>
                            <a href="/checkout" class="cart-order px-4 py-2 border border-gray-300 text-gray-800 hover:bg-gray-800 hover:text-white transition-all rounded-lg flex items-center">
                                <i class="fas fa-shopping-cart mr-2"></i>
                                Order lagi
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Tambahkan lebih banyak item di sini jika diperlukan -->

            </div>
        </div>
    </div>
</x-app-layout>

<script>
    document.querySelectorAll('.cart-delete').forEach(button => {
        button.addEventListener('click', function() {
            const form = this.closest('.delete-form');
            Swal.fire({
                title: 'Yakin hapus?',
                text: "Anda tidak dapat mengembalikan layanan ini setelah dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>
