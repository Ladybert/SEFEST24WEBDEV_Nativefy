# Getting & running File Tutorial

Dimohon untuk mengikuti langkah - langkah di bawah ini dengan seksama, perlu di ingat kalau semua tahapan ini adalah wajib di lakukan secara bertahap serta tidak asal - asalan

1. Buka terminal

2. Salin Kode di bawah ini agar dapat mengambil salinan file proyek dari jarak jauh
```Terminal
 git clone https://github.com/Ladybert/SEFEST24WEBDEV_Nativefy.git Nativefy
```

3. Pindah ke file proyek dari root anda
```
cd Nativefy
```

4. Install dependency php tools terlebih dahulu
```
 composer install
```

5. Jalankan perintah ini di terminal anda untuk menyalin konfigurasi file .env agar dapat anda sesuaikan dengan environment di lingkungan anda
```Terminal
cp .env.example .env
```
6. Buat key untuk aplikasi anda, tahapan ini berkaitan dengan keamanan
```
php artisan key:generate
```
7. Install dependency node tools
```
npm install
```
8. Jalankan perintah migrate agar database jalan
```
php artisan migrate
```

9. Jalankan juga perintah seed untuk mengisi data otomatis di dalam setiap tabel database
```
php artisan db:seed
```
10. Jalankan juga perintah berikut, agar vite nya jalan
```
npm run dev
```
11. Langkah terakhir tinggal jalankan proyek nya saja, jangan lupa untuk menghidupkan server apache nya juga ya bila menggunakan xampp
```
php artisan serve
```
