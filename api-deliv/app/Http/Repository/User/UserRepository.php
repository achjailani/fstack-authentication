<?php
namespace App\Http\Repository\User;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserRepository
{
	public function __construct(User $model)
	{
		$this->model = $model;
	}

	/**
     * Get the token array structure.
     *
     * @param  array $data
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
	public function save(array $data, $id = null)
	{
		try {
			$model = ($id == null) ? new User() : User::find($id);
			$model->fullname 	= $data['fullname'];
			$model->email    	= $data['email'];
			$model->username 	= $data['username'];
			$model->password 	= Hash::make($data['password']);
			$model->save();

			return ['success' => true, 'message' => 'Created successfully'];
		} catch (Exception $e) {
			return ['success' => false, 'message' => $e->getMessage()];
		}
	}

	/**
     * Get all users
     *
     * @return \Illuminate\Http\JsonResponse
     */
	public function getAll()
	{
		try {
			$data = $this->model->where('id', '!=', auth()->id)->get();
			return ['success' => true, 'data' => $data];
		} catch (Exception $e) {
			return ['success' => false, 'message' => $e->getMessage()];
		}
	}

}