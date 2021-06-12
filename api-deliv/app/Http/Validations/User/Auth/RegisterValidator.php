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
            'password'   => 'Password of user',
            'confirm_password'  => 'Confirmation password'  
        ];

        $this->rules = [
            'fullname'  => 'required|string|max:255',
            'email'     => 'required|email|unique:users|max:255',
            'username'  => 'required|string|unique:users|max:255',
            'password'  => 'required|min:8|max:255',
            'confirm_password' => 'same:password'
        ];

        $this->messages = [
            'fullname.required' => trans('validation.required'),
            'fullname.max'      => trans('validation.max'),
            'email.required'    => trans('validation.required'),
            'email.email'       => trans('validation.email'),
            'email.unique'      => trans('validation.unique'),
            'email.max'         => trans('validation.max'),
            'username.required' => trans('validation.required'),
            'username.email'    => trans('validation.email'),
            'username.unique'   => trans('validation.unique'),
            'username.max'      => trans('validation.max'),
            'password.required' => trans('validation.required'),
            'password.min'      => trans('validation.min'),
            'password.max'      => trans('validation.max'),
            'confirm_password.same'      => trans('validation.same'),
        ];
    }
}