<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get the IDs of the 'tipes'
        $tipeOnlineId = DB::table('tipes')->where('name', 'Online')->first()->id;
        $tipeOfflineId = DB::table('tipes')->where('name', 'Offline')->first()->id;

        DB::table('kategoris')->insert([
            ['name' => 'Cleaning Service', 'tipe_id' => $tipeOfflineId],
            ['name' => 'Baby Sitter', 'tipe_id' => $tipeOfflineId],
            ['name' => 'Reparasi Rumah Tangga', 'tipe_id' => $tipeOfflineId],
            ['name' => 'Reparasi Otomotif', 'tipe_id' => $tipeOfflineId],
            ['name' => 'Desain Grafis', 'tipe_id' => $tipeOnlineId],
            ['name' => 'Desain UI/UX', 'tipe_id' => $tipeOnlineId],
            ['name' => 'Periklanan', 'tipe_id' => $tipeOnlineId],
            ['name' => 'Joki Game Online', 'tipe_id' => $tipeOnlineId],
        ]);
    }
}
