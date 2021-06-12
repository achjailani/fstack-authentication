<?php
namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Repository\User\UserRepository;
use App\Http\Validations\User\Auth\RegisterValidator;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Register new user.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Http\Validations\User\Auth\LoginValidato $validator
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request, RegisterValidator $validator)
    {
        $data = $request->all();
        $validation = $validator->validate($data);
        if($validation === true) {
            $response = $this->repository->save($data);
            if($response['success'] === false) {
                return $this->apiInternalServerErrorResponse($response['message']);
            }
            return $this->restApi($message = 'Registered successfully', $data[], 201);
        }
        return $this->apiUnprocessableEntityResponse($validation);
    }
}