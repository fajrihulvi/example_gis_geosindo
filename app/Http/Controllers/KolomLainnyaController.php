<?php

namespace App\Http\Controllers;

use App\Http\Requests\KolomLainnyaRequest;
use App\Models\KolomLainnya;

class KolomLainnyaController extends Controller
{
    public function store(KolomLainnyaRequest $request)
    {
 
        $created = KolomLainnya::create([
            'id_jenis_spasial' =>  $request->validated('id_jenis_spasial'),
            'nama_kolom'   => $request->validated('kolom'),
            'tipe_input'   => $request->validated('tipe_input'),
            'required'   => $request->validated('required_confirm'),
            'acuan'   => collect($request->validated('acuan'))->implode(','),
            'slug' => str()->snake($request->validated('kolom')),
        ]);

        if($created){
            $message = 'Data Berhasil Disimpan!';
        } else {
            $message = 'Data Gagal Disimpan!';
        }
        return redirect('/jenis/spasial/'.$request->validated('id_jenis_spasial'))->with(['message' => $message]);
    }

    public function destroy($id)
    {
        $deleted = KolomLainnya::findOrFail($id);

        if($deleted->delete()){
            $message = 'Data Berhasil Dihapus!';
        } else {
            $message = 'Data Gagal Dihapus!';
        }
        return redirect('/jenis/spasial/'.$deleted->id_jenis_spasial)->with(['message' => $message]);
    }
}
