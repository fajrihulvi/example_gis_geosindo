<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KolomLainnyaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kolom_lainnya')->insert([
            'nama_kolom' => 'Jumlah Tenaga Kerja',
            'id_jenis_spasial' => '1',
            'required' => '1',
            'slug' => 'tenaga_kerja',
            'tipe_input' => 'TEXT',
            'acuan' => NULL
        ]);
    }
}
