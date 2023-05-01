<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KategoriSpasialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'kategori' => 'required|max:100',
            'tampilkan' => 'required',
            'jenis_peta' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'kategori.required' => 'Kategori Tidak Boleh Kosong',
            'tampilkan.required' => 'Tampilkan Tidak Boleh Kosong',
            'jenis_peta.required' => 'Jenis Peta Tidak Boleh Kosong',
        ];
    }
}
