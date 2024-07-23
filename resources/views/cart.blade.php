<x-app-layout>
    <div class="page-header">
        <div class="header-wrappper">
            <div class="header-title">
                <h1 class="font-bold text-3xl">Keranjang</h1>
            </div>
        </div>
    </div>

    <div class="page-content mt-6">
        <div class="content-wrapper">
            <div class="cart-list grid md:grid-cols-3 grid-cols-1 gap-4">
                <div class="cart flex gap-4 border border-gray-200 p-4 rounded-md" data-aos="fade">
                    <div class="cart-content flex gap-4">
                        <div class="cart-image w-32 h-32">
                            <img src="https://via.placeholder.com/128" alt="">
                        </div>
                        <div class="cart-info flex flex-col justify-between">
                            <div class="info">
                                <div class="product-name font-bold text-2xl">
                                    <h1>R.Y.V. Allover Print Dress</h1>
                                </div>
                                <div class="seller-info">
                                    <p>By: R.Y.V.</p>
                                </div>
                            </div>
                            <div class="cart-control flex gap-2">
                                <form action="" method="delete" class="delete-form">
                                    <button type="button" class="cart-delete px-3 py-2 border border-red-600 rounded text-red-600 hover:bg-red-600 hover:text-white transition-all">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="/checkout" class="cart-order px-3 py-2 border border-gray-200 hover:bg-black hover:text-white transition-all rounded-md">
                                    <i class="fas fa-shopping-cart me-2"></i>
                                    Order lagi
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Duplicate cart item for demonstration -->
                <div class="cart flex gap-4 border border-gray-200 p-4 rounded-md" data-aos="fade">
                    <div class="cart-content flex gap-4">
                        <div class="cart-image w-32 h-32">
                            <img src="https://via.placeholder.com/128" alt="">
                        </div>
                        <div class="cart-info flex flex-col justify-between">
                            <div class="info">
                                <div class="product-name font-bold text-2xl">
                                    <h1>R.Y.V. Allover Print Dress</h1>
                                </div>
                                <div class="seller-info">
                                    <p>By: R.Y.V.</p>
                                </div>
                            </div>
                            <div class="cart-control flex gap-2">
                                <form action="" method="delete" class="delete-form">
                                    <button type="button" class="cart-delete px-3 py-2 border border-red-600 rounded text-red-600 hover:bg-red-600 hover:text-white transition-all">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                                <a href="/checkout" class="cart-order px-3 py-2 border border-gray-200 hover:bg-black hover:text-white transition-all rounded-md">
                                    <i class="fas fa-shopping-cart me-2"></i>
                                    Order lagi
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of duplicate -->
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
