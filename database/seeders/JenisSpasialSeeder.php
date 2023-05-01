<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class JenisSpasialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_spasial')->insert([
            'id_spasial' => 1,
            'jenis' => 'Pemerintahan',
            'tampilkan' => '1',
        ]);

        DB::table('jenis_spasial')->insert([
            'id_spasial' => 1,
            'jenis' => 'Perkantoran',
            'tampilkan' => '1',
        ]);
    }
}
