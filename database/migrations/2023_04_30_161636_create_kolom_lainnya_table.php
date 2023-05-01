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
        Schema::create('kolom_lainnya', function (Blueprint $table) {
            $table->id();
            $table->integer('id_jenis_spasial')->unsigned();
            $table->string('nama_kolom', 100);
            $table->enum('required',['0','1']);
            $table->string('slug', 100);
            $table->enum('tipe_input',['TEXT','OPTION','FILE','DATE']);
            $table->longText('acuan')->nullable(false)->change();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kolom_lainnya');
    }
};
