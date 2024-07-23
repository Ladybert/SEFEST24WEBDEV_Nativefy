<x-app-layout>
    <div class="page-header">
        <div class="header-wrappper">
            <div class="header-title">
                <h1 class="font-bold text-3xl mt-2">Keranjang</h1>
            </div>
        </div>
    </div>

    <div class="page-content mt-6">
        <div class="content-wrapper">
            <div class="cart-list grid md:grid-cols-3 grid-cols-1 gap-4">
                <div class="cart flex gap-6 border border-gray-300 bg-white p-2 rounded-lg" data-aos="fade">
                    <div class="cart-content flex gap-6">
                        <div class="cart-image w-36 h-36 overflow-hidden rounded-lg shadow-md">
                            <img src="https://via.placeholder.com/128" alt="Product Image" class="w-full h-full object-cover">
                        </div>
                        <div class="cart-info flex flex-col justify-between">
                            <div class="info">
                                <div class="product-name font-semibold text-md text-gray-800">
                                    <h1>R.Y.V. Allover Print Dress</h1>
                                </div>
                                <div class="product-price mt-2 text-lg font-medium text-gray-900">
                                    <p>$99.99</p>
                                </div>
                            </div>
                            <div class="cart-control flex gap-2 mt-2">
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
                </div>

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
