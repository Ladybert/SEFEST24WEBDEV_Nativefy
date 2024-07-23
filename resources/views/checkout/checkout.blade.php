<x-app-layout>
    <div class="checkout-header flex items-center gap-4 w-full pt-3" style="z-index: 999">
        <a href="/" class="hover:scale-105 transition-all">
            <i class="fas fa-arrow-left text-xl"></i>
        </a>
        <h1 class="text-2xl font-bold">Lihat jasa "Jasa pel pak kris"</h1>
    </div>
    <div class="checkout-content w-full md:p-4 lg:p-8 ">
        <div class="checkout-content-wrapper flex flex-col md:flex-col lg:flex-row h-screen gap-2 w-full">
            <!-- Service Photo -->
            <div class="service-photo w-full lg:w-2/4 lg:h-[600px] rounded-lg pt-4 md:pt-0">
                <div class="image-wrapper w-full h-full relative">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4hG0toOw4r6Kj_oDdf_OmAxXYq5XbrTeNPA&s" alt="photo" class="w-full h-full object-cover object-center rounded-md">
                </div>

            </div>
            <!-- Service Details -->
            <div class="service-details w-full lg:w-2/3 p-4">
                <!-- Service Title -->
                <div class="service-title mb-4">
                    <h1 class="text-4xl font-bold mb-4">Jasa pel pak kris</h1>
                    <span id="availability-badge" class="bg-green-500 text-white text-xs font-semibold px-2 py-1 rounded-lg">
                        Layanan tersedia di lokasi anda
                    </span>

                    <!-- Unavailable Badge -->
                    <span id="unavailable-badge" class="bg-red-500 text-white text-xs font-semibold px-2 py-1 rounded-lg hidden">
                        Tidak tersedia di lokasi anda
                    </span>
                </div>

                <!-- Service Price and Rating -->
                <div class="service-price-rating items-center mb-4">
                    <!-- Price -->
                    <h2 class="text-xl  mr-4">Rp 100.000</h2>
                    <div class="rating flex items-center gap-2 mt-2">
                        <p class="text-gray-700">(4.9/5.0)</p>
                        <div class="rating text-yellow-500">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <!-- Service Description -->
                <div class="service-description mb-4 overflow-y-auto" style="max-height: 150px;">


                    <p class="text-gray-700">Deskripsi singkat tentang jasa pel yang ditawarkan oleh Pak Kris. Jasa ini mencakup pembersihan lantai, pengepelan, dan penanganan noda membandel. Layanan ini sangat cocok untuk rumah tangga dan kantor yang memerlukan kebersihan maksimal.</p>
                </div>

                <div class="account border-y border-gray-200 py-4 my-4">
                    <a href="#" class="transition-all font-semibold hover:scale-105">
                        <i class="fas fa-user text-xl mr-2 bg-gray-200 p-2 rounded-full"></i>
                        Pak Kris
                    </a>
                </div>
            </div>
            <!-- Service Checkout -->
            <div class="service-checkout w-full lg:w-[600px] lg:h-[600px] rounded-md ">
                <form action="" method="POST">
                    <div class="form-list border border-gray-200 rounded-lg p-4">
                        <div class="service-checkout-title mb-4">
                            <h1 class="text-xl font-bold">Ringkasan Layanan</h1>
                        </div>
                        <div class="checkout-details mb-4">
                            <div class="hidden-form">
                                <input type="hidden" name="service_id" value="1">
                                <input type="hidden" name="user_id" value="1">
                                <input type="hidden" name="service_name" value="Jasa pel pak kris">
                                <input type="hidden" name="status" value="pending">
                            </div>
                            <div class="service-name text-sm">
                                <label for="service-name"><p class="font-bold">Layanan</p></label>
                                <p class="text-gray-700">Jasa pel pak kris</p>
                            </div>
                            <div class="service-price text-sm">
                                <label for="service-price"><p class="font-bold">Harga</p></label>
                                <p class="text-gray-700">Rp 100.000</p>
                            </div>
                            <div class="service-date-and-time text-sm">
                                <label for="service-date-and-time"><p class="font-bold">Tanggal dan Jam pengerjaan</p></label>
                                <input type="date" name="date" id="service-date-and-time" class="w-full p-1 mt-2 border border-gray-200 rounded-lg text-sm" value="2022-01-01">
                            </div>

                        </div>
                    </div>
                    <div class="checkout-button mt-4 w-full">
                        <button type="button" id="open-modal" class="bg-black text-white hover:text-black hover:border hover:border-black py-2 px-4 rounded hover:bg-white transition-all w-full">Buat pesanan</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Checkout Button -->
    </div>
</x-app-layout>
