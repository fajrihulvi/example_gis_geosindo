<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriSpasial extends Model
{
    protected $table = 'kategori_spasial';
    protected $primaryKey = 'id';

    protected $fillable = ['kategori','tampilkan','jenis_peta'];
    protected $guarded = ['id'];  
}
