<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSpasial extends Model
{
    protected $table = 'data_spasial';
    protected $primaryKey = 'id';

    protected $fillable = ['nama_objek','nomor_objek','tanggal','id_provinsi','id_kabupaten','id_kecamatan','id_desa', 'alamat','koordinat','gambar','keterangan','lainnya','id_jenis_spasial','tampilkan'];
    protected $guarded = ['id'];
}
