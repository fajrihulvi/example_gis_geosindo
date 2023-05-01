<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisSpasial extends Model
{
    protected $table = 'jenis_spasial';
    protected $primaryKey = 'id';

    protected $fillable = ['id_spasial','jenis','tampilkan'];
    protected $guarded = ['id'];  
}
