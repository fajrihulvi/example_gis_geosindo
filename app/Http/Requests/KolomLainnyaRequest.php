<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KolomLainnyaRequest extends FormRequest
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
            'kolom' => 'required|max:100',
            'required_confirm' => 'required',
            'tipe_input' => 'required',
            'id_jenis_spasial' => 'required',
            'acuan' => ''
        ];
    }

    public function messages(): array
    {
        return [
            'kolom.required' => 'Nama Kolom Tidak Boleh Kosong',
            'required_confirm.required' => 'Required Tidak Boleh Kosong',
            'tipe_input.required' => 'Tipe Inputan Tidak Boleh Kosong',
        ];
    }
}
