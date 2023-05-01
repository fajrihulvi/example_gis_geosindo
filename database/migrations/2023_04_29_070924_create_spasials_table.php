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
        Schema::create('kategori_spasial', function (Blueprint $table) {
            $table->id();
            $table->string('kategori', 100);
            $table->enum('tampilkan',['0','1']);
            $table->enum('jenis_peta',['TITIK','AREA']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_spasial');
    }
};
