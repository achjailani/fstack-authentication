<?php
namespace App\Http\Validations\User\Auth;

use App\Infrastructure\BaseValidator;

class LoginValidator extends BaseValidator
{
    public function __construct()
    {
        $this->attributes = [
            'name'  => 'Name of category',
            'description'   => 'Description of category'    
        ];

        $this->rules = [
            'name' => 'required|string|unique:categories|max:100',
            'description' => 'nullable|string'
        ];

        $this->messages = [
            'name.required' => 'Kategori tidak boleh kosong',
            'name.unique'   => 'Kategori sudah terdaftar',
            'name.max'      => 'Kategori maksimal panjang 100 karakter',
            'description.string' => 'Keterangan harus berupa string',
        ];
    }
}