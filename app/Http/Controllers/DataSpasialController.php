<?php

namespace App\Http\Controllers;

use App\Models\DataSpasial;
use App\Models\JenisSpasial;
use App\Models\KolomLainnya;
use Illuminate\Http\Request;

class DataSpasialController extends Controller
{
    public function index($id)
    {
        $jenis = JenisSpasial::findOrFail($id);

        $datas = DataSpasial::where('id_jenis_spasial', $id)->get();

        $koloms = KolomLainnya::where('id_jenis_spasial', $id)->get();

        return view('pages.data.index', ['datas' => $datas, 'jenis' => $jenis, 'kolom' => $koloms, 'id_jenis_spasial' => $id]);
    }

    public function store(Request $request)
    {
        $id_jenis_spasial = $request->input('id_jenis_spasial');
        $cols = KolomLainnya::where('id_jenis_spasial', $id_jenis_spasial)->get();

        $lainnya = [];
        foreach ($cols as $key => $value) {
            $lainnya[$value->nama_kolom] = $request->input($value->slug);
        }

        $data = new DataSpasial;
        $data->nama_objek     =  $request->input('nama_objek');
        $data->nomor_objek     =  $request->input('nomor_objek');
        $data->tanggal = date('Y-m-d');
        $data->id_provinsi     =  $request->input('id_provinsi');
        $data->id_kabupaten     =  $request->input('id_kabupaten');
        $data->id_kecamatan     =  $request->input('id_kecamatan');
        $data->id_desa     =  $request->input('id_desa');
        $data->alamat     =  $request->input('alamat');
        $data->koordinat     =  $request->input('koordinat');
        $data->gambar = 'example.png';
        $data->keterangan     =  $request->input('keterangan');
        $data->lainnya = json_encode($lainnya);
        $data->id_jenis_spasial = $id_jenis_spasial;
        $data->tampilkan   =  $request->input('tampilkan');
        $created = $data->save();

        if ($created) {
            $message = 'Data Berhasil Disimpan!';
        } else {
            $message = 'Data Gagal Disimpan!';
        }
        return redirect('/data/spasial/' . $id_jenis_spasial)->with(['message' => $message]);
    }

    public function update(Request $request, $id)
    {
        $id_jenis_spasial = $request->input('id_jenis_spasial');
        $cols = KolomLainnya::where('id_jenis_spasial', $id_jenis_spasial)->get();

        $lainnya = [];
        foreach ($cols as $key => $value) {
            $lainnya[$value->nama_kolom] = $request->input($value->slug);
        }

        $data = DataSpasial::find($id);
        $data->nama_objek     =  $request->input('nama_objek');
        $data->nomor_objek     =  $request->input('nomor_objek');
        $data->tanggal = date('Y-m-d');
        $data->id_provinsi     =  $request->input('id_provinsi');
        $data->id_kabupaten     =  $request->input('id_kabupaten');
        $data->id_kecamatan     =  $request->input('id_kecamatan');
        $data->id_desa     =  $request->input('id_desa');
        $data->alamat     =  $request->input('alamat');
        $data->koordinat     =  $request->input('koordinat');
        $data->gambar = 'example.png';
        $data->keterangan     =  $request->input('keterangan');
        $data->lainnya = json_encode($lainnya);
        $data->id_jenis_spasial = $id_jenis_spasial;
        $data->tampilkan   =  $request->input('tampilkan');
        $created = $data->save();

        if ($created) {
            $message = 'Data Berhasil Disimpan!';
        } else {
            $message = 'Data Gagal Disimpan!';
        }
        return redirect('/data/spasial/' . $id_jenis_spasial)->with(['message' => $message]);
    }

    public function destroy($id)
    {
        $deleted = DataSpasial::findOrFail($id);

        if ($deleted->delete()) {
            $message = 'Data Berhasil Dihapus!';
        } else {
            $message = 'Data Gagal Dihapus!';
        }

        return redirect('/data/spasial/' . $deleted->id_jenis_spasial)->with(['message' => $message]);
    }
}
