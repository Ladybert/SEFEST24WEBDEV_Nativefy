<x-checkout-layout>
    <div class="checkout-header flex items-center gap-4 fixed bg-white w-full py-4 px-6 border border-b-gray-200">
        <a href="/checkout" class="hover:scale-105 transition-all">
            <i class="fas fa-arrow-left text-xl"></i>
        </a>
        <h1 class="text-2xl font-bold">Lihat jasa "Jasa pel pak kris"</h1>
    </div>

    <div class="checkout-content w-full p-4 md:p-4 lg:p-8 mt-16">
        <div class="checkout-content-wrapper flex flex-col md:flex-row gap-4 w-full">
            <!-- Service Photo -->
            <div class="service-photo  w-full md:w-2/3 h-96 rounded-lg overflow-hidden">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4hG0toOw4r6Kj_oDdf_OmAxXYq5XbrTeNPA&s" alt="photo" class="w-full h-full">
            </div>
            <!-- Service Details -->
            <div class="service-details w-full md:w-2/3 p-4">
                <!-- Service Title -->
                <div class="service-title mb-4">
                    <h1 class="text-2xl font-bold">Jasa pel pak kris</h1>
                </div>
                <!-- Service Price and Rating -->
                <div class="service-price-rating flex items-center mb-4">
                    {{-- Price --}}
                    <h2 class="text-xl font-bold text-green-600 mr-4">Rp 100.000</h2>
                    <div class="rating text-yellow-500">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                <!-- Service Description -->
                <div class="service-description mb-4 overflow-y-auto" style="max-height: 150px;">
                    <p class="text-gray-700">Deskripsi singkat tentang jasa pel yang ditawarkan oleh Pak Kris. Jasa ini mencakup pembersihan lantai, pengepelan, dan penanganan noda membandel. Layanan ini sangat cocok untuk rumah tangga dan kantor yang memerlukan kebersihan maksimal.</p>
                </div>
            </div>

            <!-- Service Checkout -->
            <div class="service-checkout border border-gray-200 w-full md:w-1/3 p-4 rounded-md h-full">
                <form action="">
                    <div class="service-checkout-title mb-4">
                        <h1 class="text-xl font-bold">Ringkasan Layanan</h1>
                    </div>
                    <div class="checkout-details mb-4">
                        <div class="hidden-form">
                            <input type="hidden" name="service_id" value="1">
                            {{-- ini d tulis service id nya --}}
                            <input type="hidden" name="user_id" value="1">
                            {{-- ini d tulis user id nya --}}
                            <input type="hidden" name="service_name" value="Jasa pel pak kris">
                            {{-- ini d tulis service name nya --}}
                            <input type="hidden" name="status" value="pending">
                            {{-- ini d tulis status nya --}}
                        </div>
                        <div class="service-name">
                            <label for="service-name"><p class="font-bold">Layanan</p></label>
                            <p class="text-gray-700">Jasa pel pak kris</p>
                        </div>
                        <div class="service-price">
                            <label for="service-price"><p class="font-bold">Harga</p></label>
                            <p class="text-gray-700">Rp 100.000</p>
                        </div>
                        <div class="service-date-and-time">
                            <label for="service-date-and-time"><p class="font-bold">Tanggal dan Jam pengerjaan</p></label>
                            <input type="date" name="date" id="service-date-and-time" class="w-full p-2 border border-gray-200 rounded-lg" value="2022-01-01">
                        </div>
                    </div>
                    <div class="checkout-button">
                        <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded hover:bg-green-700 transition-all w-full">Lanjutkan ke Pembayaran</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Service Reviews -->
        <div class="service-reviews mt-8 w-full border border-gray-200 p-4 ">
            <h3 class="text-lg font-bold mb-2">Ulasan</h3>
            <div class="review-item mb-2">
                <p class="text-gray-800">"Layanan sangat memuaskan, lantai jadi bersih dan wangi." - <span class="font-bold">Budi</span></p>
            </div>
            <div class="review-item mb-2">
                <p class="text-gray-800">"Pak Kris sangat profesional dan tepat waktu." - <span class="font-bold">Ani</span></p>
            </div>
        </div>
    </div>
</x-checkout-layout>
