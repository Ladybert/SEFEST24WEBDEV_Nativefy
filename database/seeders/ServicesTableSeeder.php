<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\User;
use App\Models\Tipe;
use App\Models\Kategori;

class ServicesTableSeeder extends Seeder
{
    public function run()
    {
        $adminUser = User::where('email', 'Admin@gmail.com')->first();
        $regularUser = User::where('email', 'User@gmail.com')->first();

        $tipeOnlineId = Tipe::where('name', 'Online')->first()->id;
        $tipeOfflineId = Tipe::where('name', 'Offline')->first()->id;

        $kategoriCleaning = Kategori::where('name', 'Cleaning Service')->first()->id;
        $kategoriBabySitter = Kategori::where('name', 'Baby Sitter')->first()->id;
        $kategoriReparasiRumah = Kategori::where('name', 'Reparasi Rumah Tangga')->first()->id;
        $kategoriReparasiOtomotif = Kategori::where('name', 'Reparasi Otomotif')->first()->id;
        $kategoriDesainGrafis = Kategori::where('name', 'Desain Grafis')->first()->id;
        $kategoriDesainUIUX = Kategori::where('name', 'Desain UI/UX')->first()->id;
        $kategoriPeriklanan = Kategori::where('name', 'Periklanan')->first()->id;
        $kategoriJokiGame = Kategori::where('name', 'Joki Game Online')->first()->id;

        Service::create([
            'user_id' => $adminUser->id,
            'service_name' => 'Cleaning Service',
            'service_photo' => 'images/cleaning-service.jpg',
            'service_desc' => 'Kami menyediakan layanan pembersihan profesional untuk rumah dan kantor. Tim kami terlatih dan menggunakan peralatan modern untuk memastikan kebersihan yang optimal.',
            'tipe_id' => $tipeOfflineId,
            'kategori_id' => $kategoriCleaning,
            'price' => 500000,
        ]);

        Service::create([
            'user_id' => $adminUser->id,
            'service_name' => 'Baby Sitter',
            'service_photo' => 'images/baby-sitter.jpg',
            'service_desc' => 'Kami menyediakan jasa baby sitter yang berpengalaman dan terpercaya untuk merawat anak-anak Anda dengan penuh kasih sayang dan perhatian.',
            'tipe_id' => $tipeOfflineId,
            'kategori_id' => $kategoriBabySitter,
            'price' => 800000,
        ]);

        Service::create([
            'user_id' => $adminUser->id,
            'service_name' => 'Reparasi Rumah Tangga',
            'service_photo' => 'images/reparasi-rumah-tangga.jpg',
            'service_desc' => 'Kami menyediakan jasa reparasi untuk berbagai kebutuhan rumah tangga, mulai dari perbaikan peralatan hingga renovasi kecil.',
            'tipe_id' => $tipeOfflineId,
            'kategori_id' => $kategoriReparasiRumah,
            'price' => 700000,
        ]);

        Service::create([
            'user_id' => $adminUser->id,
            'service_name' => 'Reparasi Otomotif',
            'service_photo' => 'images/reparasi-otomotif.jpg',
            'service_desc' => 'Kami menawarkan jasa reparasi otomotif yang meliputi perawatan rutin, perbaikan mesin, dan layanan darurat.',
            'tipe_id' => $tipeOfflineId,
            'kategori_id' => $kategoriReparasiOtomotif,
            'price' => 1000000,
        ]);

        Service::create([
            'user_id' => $adminUser->id,
            'service_name' => 'Desain Grafis',
            'service_photo' => 'images/desain-grafis.jpg',
            'service_desc' => 'Desain grafis adalah kunci untuk menciptakan kesan pertama yang kuat dan membangun identitas brand yang kohesif. Kami menyediakan jasa desain grafis profesional yang dapat membantu Anda menyampaikan pesan dan cerita Anda melalui visual yang menakjubkan.',
            'tipe_id' => $tipeOnlineId,
            'kategori_id' => $kategoriDesainGrafis,
            'price' => 3400000,
        ]);

        Service::create([
            'user_id' => $adminUser->id,
            'service_name' => 'Desain UI/UX',
            'service_photo' => 'images/desain-ui-ux.jpg',
            'service_desc' => 'Kami menawarkan jasa desain UI/UX yang dapat membantu Anda menciptakan pengalaman pengguna yang intuitif dan menarik untuk aplikasi atau situs web Anda.',
            'tipe_id' => $tipeOnlineId,
            'kategori_id' => $kategoriDesainUIUX,
            'price' => 3600000,
        ]);

        Service::create([
            'user_id' => $adminUser->id,
            'service_name' => 'Periklanan',
            'service_photo' => 'images/periklanan.jpg',
            'service_desc' => 'Kami menyediakan jasa periklanan digital yang dapat membantu Anda mencapai audiens yang lebih luas dan meningkatkan visibilitas brand Anda.',
            'tipe_id' => $tipeOnlineId,
            'kategori_id' => $kategoriPeriklanan,
            'price' => 4000000,
        ]);

        Service::create([
            'user_id' => $adminUser->id,
            'service_name' => 'Joki Game Online',
            'service_photo' => 'images/joki-game-online.jpg',
            'service_desc' => 'Kami menawarkan jasa joki game online yang dapat membantu Anda mencapai level dan peringkat yang lebih tinggi dalam berbagai game online.',
            'tipe_id' => $tipeOnlineId,
            'kategori_id' => $kategoriJokiGame,
            'price' => 2000000,
        ]);
    }
}
