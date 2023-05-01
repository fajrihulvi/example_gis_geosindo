<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JenisSpasialRequest extends FormRequest
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
            'id_spasial' => 'required',
            'jenis' => 'required|max:100',
            'tampilkan' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'jenis.required' => 'Kategori Tidak Boleh Kosong',
            'tampilkan.required' => 'Tampilkan Tidak Boleh Kosong',
        ];
    }
}
