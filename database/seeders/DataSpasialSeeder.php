<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSpasialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_spasial')->insert([
            'nama_objek' => 'Gedung DPR',
            'nomor_objek' => '1234567890',
            'tanggal' => '2023-05-01',
            'id_provinsi' => '32',
            'id_kabupaten' => '3201',
            'id_kecamatan' => '3201010',
            'id_desa' => '3201010001',
            'alamat' => 'Kebun Raya Bogor',
            'koordinat' => '[{"latitude":-6.604337782510214,"longitude":106.79662471923827,"altitude":0,"altitudeReference":-1}]',
            'gambar' => 'example.png',
            'keterangan' => 'keterangan disini',
            'lainnya' => '{"Jumlah Pegawai" : 3, "Kondisi Jalan" : "BURUK",  "Tanggal Berdiri" : "2023-01-01"}',
            'id_jenis_spasial' => '1',
            'tampilkan' => '1',
        ]);
    }
}
