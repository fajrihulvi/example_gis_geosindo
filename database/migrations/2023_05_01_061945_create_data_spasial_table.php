<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_spasial', function (Blueprint $table) {
            $table->id();
            $table->string('nama_objek', 100);
            $table->string('nomor_objek', 10);
            $table->date('tanggal');
            $table->string('id_provinsi', 10);
            $table->string('id_kabupaten', 10);
            $table->string('id_kecamatan', 10);
            $table->string('id_desa', 15);
            $table->text('alamat');
            $table->text('koordinat');
            $table->text('gambar');
            $table->text('keterangan');
            $table->text('lainnya');
            $table->integer('id_jenis_spasial')->unsigned();
            $table->enum('tampilkan',['0','1']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_spasial');
    }
};
