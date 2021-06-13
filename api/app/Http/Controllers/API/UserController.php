<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Repository\User\UserRepository;
use App\Http\Validations\User\UpdateValidator;

class UserController extends Controller
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
     * Get all users
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAll()
    {
        $response = $this->repository->getAll();
        if($response['success'] === false) {
            return $this->apiInternalServerErrorResponse($response['message']);
        }
        return $this->restApi($message = 'Ok', $data = $response['data']);
    }

    /**
     * Get all users
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function find($id)
    {
        if(auth()->user()->id != $id) {
            if(!auth()->user()->hasRole('admin')) {
                return response('Forbidden', 403);
            }
        }
        $response = $this->repository->findOne($id);
        if($response['success'] === false) {
            return $this->apiInternalServerErrorResponse($response['message']);
        }
        return $this->restApi($message = 'Ok', $data = $response['data']);
    }

    /**
     * Update a user
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @param \App\Http\Validations\User\UpdateValidator $validator
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id, UpdateValidator $validator)
    {
        if(auth()->user()->id != $id) {
            if(!auth()->user()->hasRole('admin')) {
                return response('Forbidden', 403);
            } else {
                $update = $this->repository->updateStatus($id);
                if($update['success'] === false) {
                    return $this->apiInternalServerErrorResponse($update['message']);
                }
                return $this->restApi($message = 'Updated successfully');
            }
        }

        $data = $request->all();
        $validation = $validator->validate($data);
        if($validation === true) {
            $response = $this->repository->save($data, $id);
            if($response['success'] === false) {
                return $this->apiInternalServerErrorResponse($response['message']);
            }
            return $this->restApi($message = 'Updated successfully', $data = $response['data']);
        }
        return $this->apiUnprocessableEntityResponse($validation);
    }

     /**
     * Delete a user
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete()
    {
        $response = $this->repository->deleteOne(auth()->user()->id);
        if($response['success'] === false) {
            return $this->apiInternalServerErrorResponse($response['message']);
        }
        return $this->restApi($response['message'], $data = []);
    }
}