<?php
namespace App\Http\Validations\User\Auth;

use App\Infrastructure\BaseValidator;

class LoginValidator extends BaseValidator
{
    public function __construct()
    {
        $this->attributes = [
            'email_or_username'  => 'Name or username of user',
            'password'           => 'Password of user'    
        ];

        $this->rules = [
            'email_or_username' => 'required|string|max:255',
            'password'          => 'required|min:8'
        ];

        $this->messages = [
            'email_or_username.required' => trans('validation.required'),
            'email_or_username.string'   => trans('validation.string'),
            'email_or_username.max'      => trans('validation.max'),
            'password.required'          => trans('validation.required'),
            'password.min'               => trans('validation.min'),
        ];
    }
}
