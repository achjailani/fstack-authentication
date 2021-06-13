<?php
namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Validations\User\Auth\LoginValidator;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {}

    
    /**
     * Get a JWT via given credentials.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Http\Validations\User\Auth\LoginValidato $validator
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request, LoginValidator $validator)
    {
        $data = $request->all();
        $validation = $validator->validate($data);
        if($validation === true) {
            $credentialType = filter_var(
                $request->email_or_username, 
                FILTER_VALIDATE_EMAIL
            ) ? 'email' : 'username';

            try {
                if($token = auth()->attempt([
                    $credentialType => $request->email_or_username, 
                    'password' => $request->password
                ])) {
                    return $this->restApi(
                        $message = 'Logged in successfully', 
                        $data = $this->respondWithToken($token)
                    );
                }
            } catch (\Exception $e) {
                return $this->apiInternalServerErrorResponse($e->getMessage());
            }
            return $this->apiErrorResponse($errors = 'These credentials do not match our records.');
        }
        return $this->apiUnprocessableEntityResponse($validation);
    }
}