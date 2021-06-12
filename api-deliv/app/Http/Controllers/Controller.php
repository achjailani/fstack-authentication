<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @param array $errors
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiUnprocessableEntityResponse($errors = [])
    {
        return response()->json([
            'success' => false,
            'message' => 'Unprocessable Entity',
            'errors'  => $errors
        ], 422);
    }

    /**
     * @param string $message
     * @param array $data
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function restApi($message = 'Ok', $data = [],  $code = 200) 
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data'    => $data
        ], $code);
    }

     /**
     * @param string $message
     * @param array $errors
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiErrorResponse($errors = [], $message = 'Unauthorized', $code = 401) 
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'errors'  => $errors
        ], $code);
    }

    /**
     * @param array $errors
     * @return \Illuminate\Http\JsonResponse
     */
    public function apiInternalServerErrorResponse($errors = [])
    {
        return response()->json([
            'success' => false,
            'message' => 'Internal Server Error',
            'errors'  => $errors
        ], 500);
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
