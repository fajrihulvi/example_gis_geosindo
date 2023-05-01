<?php

namespace App\Http\Controllers;

use App\Http\Requests\JenisSpasialRequest;
use App\Models\JenisSpasial;
use App\Models\KategoriSpasial;

class JenisSpasialController extends Controller
{
    public function index($id)
    {
        $kategori = KategoriSpasial::findOrFail($id);

        $datas = JenisSpasial::where('id_spasial',$id)->get();

        return view('pages.jenis.index',['datas'=> $datas, 'kategori' => $kategori, 'id_spasial'=>$id]);
    }

    public function store(JenisSpasialRequest $request)
    {
        $created = JenisSpasial::create([
            'id_spasial'     =>  $request->validated('id_spasial'),
            'jenis'     =>  $request->validated('jenis'),
            'tampilkan'   => $request->validated('tampilkan')
        ]);
        if($created){
            $message = 'Data Berhasil Disimpan!';
        } else {
            $message = 'Data Gagal Disimpan!';
        }
        return redirect('/jenis/spasial/'.$request->validated('id_spasial'))->with(['message' => $message]);
    }

    public function update(JenisSpasialRequest $request, $id)
    {
        $updated = JenisSpasial::findOrFail($id);

        $created = $updated->update([
            'id_spasial'     =>  $request->validated('id_spasial'),
            'jenis'     =>  $request->validated('jenis'),
            'tampilkan'   => $request->validated('tampilkan')
        ]);

        if($created){
            $message = 'Data Berhasil Diubah!';
        } else {
            $message = 'Data Gagal Diubah!';
        }
        return redirect('/jenis/spasial/'.$request->validated('id_spasial'))->with(['message' => $message]);
    }

    public function destroy($id)
    {
        $deleted = JenisSpasial::findOrFail($id);

        if($deleted->delete()){
            $message = 'Data Berhasil Dihapus!';
        } else {
            $message = 'Data Gagal Dihapus!';
        }

        return redirect('/jenis/spasial/'.$deleted->id_spasial)->with(['message' => $message]);
    }
}
