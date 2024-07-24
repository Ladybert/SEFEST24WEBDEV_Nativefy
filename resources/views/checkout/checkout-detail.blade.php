<x-app-layout>
    <div class="payment-page flex items-center justify-center h-screen">
        <div class="payment-box bg-white p-8 rounded-lg shadow-lg text-center">
            <h1 class="text-2xl font-bold mb-4">Pembayaran sedang diproses...</h1>
            <p class="text-gray-700 mb-4">Harap tunggu, anda akan diarahkan ke halaman utama.</p>
            <div class="loader mb-4"></div>
            <p class="text-sm text-gray-500">Jika anda tidak diarahkan dalam beberapa detik, <a href="/" class="text-blue-500 underline">klik di sini</a>.</p>
        </div>
    </div>

    <script>
        setTimeout(function() {
            window.location.href = '/';
        }, 3000); // 3 seconds delay
    </script>

    <style>
        .loader {
            border: 4px solid #f3f3f3;
            border-radius: 50%;
            border-top: 4px solid #3498db;
            width: 40px;
            height: 40px;
            animation: spin 2s linear infinite;
            margin: 0 auto;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</x-app-layout>
