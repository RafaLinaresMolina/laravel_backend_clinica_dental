<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Types\Integer;

class UserController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		try {
			$users = User::all();
			return response()->json($users, 200);
		} catch (\Exception $e) {
			return response()->json($e, 400);
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		try {
			$input = $request->all();
			$rules = [
				'name' => 'required',
				'lastName' => 'required',
				'email' => 'required|email',
				'password' => 'required',
				'address' => 'required',
			];

			$validator = Validator::make($input, $rules);
			if ($validator->fails()) {
				return response()->json($validator->errors(), 400);
			}
			$user = new User($input);
			$user->password = bcrypt($user->password);
			$user->save();
			return response()->json($user, 201);
		} catch (\Exception $e) {
			return response()->json($e, 400);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(int $id)
	{
		try {
			$user = User::whereId($id);
			return response()->json($user, 200);
		} catch (\Exception $e) {
			return response()->json($e, 400);
		}
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, int $id)
	{
		try {
			$input = $request->all();

			$rules = [
				'name' => 'required',
				'lastName' => 'required',
				'email' => 'required|email',
				'password' => 'required',
				'address' => 'required',
			];

			$validator = Validator::make($input, $rules);
			if ($validator->fails()) {
				return response()->json($validator->errors(), 400);
			}
			$user = User::whereId($id);
			$input['roleId'] = $user->roleId;
			$updated = User::whereId($id)->update($input);
			if ($updated)
				return response()->json(['Resource updated successfuly'], 200);
			else
				return response()->json(['Nothing to update'], 200);
		} catch (\Exception $e) {
			return response()->json($e, 400);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(int $id)
	{
		try {
			$updated = User::whereId($id)->update(['status' => 0]);
			if ($updated)
				return response()->json(['Resource deleted successfuly'], 200);
			else
				return response()->json(['Nothing to delete'], 200);
		} catch (\Exception $e) {
			return response()->json($e, 400);
		}
	}
}
