<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SpasialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori_spasial')->insert([
            'kategori' => 'Ketahanan Ekonomi dan Pangan',
            'tampilkan' => '1',
        ]);

        DB::table('kategori_spasial')->insert([
            'kategori' => 'Ketahanan Sosial',
            'tampilkan' => '1',
        ]);
    }
}
