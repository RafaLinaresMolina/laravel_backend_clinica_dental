<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\User  $producto
	 * @return \Illuminate\Http\Response
	 */
	public function show()
	{
		try {
			$user = Auth::user();
			return response()->json($user, 200);
		} catch (\Exception $e) {
			return response()->json($e, 400);
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\User  $producto
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, User $producto)
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

			$userAuth = Auth::user();
			$input['roleId'] = $userAuth->roleId;
			$updated = User::whereId($userAuth->id)->update($input);
			if ($updated)
				return response()->json(['message' => 'Resource updated successfuly'], 200);
			else
				return response()->json(['message' => 'Nothing to update'], 200);
		} catch (\Exception $e) {
			return response()->json($e, 400);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy()
	{
		try {
			$userAuth = Auth::user();
			$updated = User::whereId($userAuth->id)->update(['status' => 0]);
			if ($updated)
				return response()->json(['message' => 'Resource deleted successfuly'], 200);
			else
				return response()->json(['message' => 'Nothing to delete'], 200);
		} catch (\Exception $e) {
			return response()->json($e, 400);
		}
	}
}
