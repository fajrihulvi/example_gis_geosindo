<?php

namespace App\Http\Controllers;

use App\Http\Requests\KategoriSpasialRequest;
use App\Models\KategoriSpasial;

class KategoriSpasialController extends Controller
{

    public function index()
    {
        $datas = KategoriSpasial::all();

        return view('pages.welcome',['datas'=> $datas]);
    }

    public function store(KategoriSpasialRequest $request)
    {
        $created = KategoriSpasial::create([
            'kategori'     =>  $request->validated('kategori'),
            'tampilkan'   => $request->validated('tampilkan'),
            'jenis_peta'   => $request->validated('jenis_peta')
        ]);
        if($created){
            $message = 'Data Berhasil Disimpan!';
        } else {
            $message = 'Data Gagal Disimpan!';
        }
        return redirect('/')->with(['message' => $message]);
    }

    public function update(KategoriSpasialRequest $request, $id)
    {
        $updated = KategoriSpasial::findOrFail($id);

        $created = $updated->update([
            'kategori'     =>  $request->validated('kategori'),
            'tampilkan'   => $request->validated('tampilkan'),
            'jenis_peta'   => $request->validated('jenis_peta')
        ]);

        if($created){
            $message = 'Data Berhasil Diubah!';
        } else {
            $message = 'Data Gagal Diubah!';
        }
        return redirect('/')->with(['message' => $message]);
    }

    public function destroy($id)
    {
        $deleted = KategoriSpasial::findOrFail($id);

        if($deleted->delete()){
            $message = 'Data Berhasil Dihapus!';
        } else {
            $message = 'Data Gagal Dihapus!';
        }
        return redirect('/')->with(['message' => $message]);
    }
}
