<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KolomLainnya extends Model
{
    protected $table = 'kolom_lainnya';
    protected $primaryKey = 'id';

    protected $fillable = ['id_jenis_spasial','nama_kolom','required','slug','tipe_input','acuan'];
    protected $guarded = ['id'];  
}
