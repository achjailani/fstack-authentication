<?php
namespace App\Http\Validations\User\Auth;

use App\Infrastructure\BaseValidator;

class RegisterValidator extends BaseValidator
{
    public function __construct()
    {
        $this->attributes = [
            'fullname'   => 'Name of user',
            'email'      => 'Email of user',
            'username'   => 'Username of user',
            'password'   => 'Password of user'  
        ];

        $this->rules = [
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|unique:users|max:255',
            'username'  => 'required|string|unique:users|max:255',
            'password'  => 'required|min:8|max:255',
            'confirm_password' => 'same:password'
        ];

        $this->messages = [
            'name.required' => 'Kategori tidak boleh kosong',
            'name.unique'   => 'Kategori sudah terdaftar',
            'name.max'      => 'Kategori maksimal panjang 100 karakter',
            'description.string' => 'Keterangan harus berupa string',
        ];
    }
}