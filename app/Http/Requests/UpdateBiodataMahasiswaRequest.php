<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBiodataMahasiswaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nim' => [
                'required',
                Rule::unique('biodata_mahasiswas')->ignore($this->biodata_mahasiswa),
            ],
            'nama' => ['required'],
            'alamat' => 'required',
            'jurusan' => 'required',
            'nomor_telepon' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nim.required' => 'NIM is required',
            'nama.required' => 'Nama is required',
            'alamat.required' => 'Alamat is required',
            'jurusan.required' => 'Jurusan is required',
            'nomor_telepon.required' => 'Nomor Telepon harus di isi ga boleh kosong',
        ];
    }
}
