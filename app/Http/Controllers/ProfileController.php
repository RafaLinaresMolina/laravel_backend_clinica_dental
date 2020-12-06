<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Types\Integer;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Integer $id)
    {
        try {
            $user = Auth::user();
            return response()->json($user, 200);
        } catch (\Exception $e) {
            return response()->json([$e], 400);
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
                return response()->json([$validator->errors()], 400);
            }
            $user = new User($input);
            $user->password = bcrypt($user->password);
            $user->save();
            return response()->json([$user], 201);
        } catch (\Exception $e) {
            return response()->json([$e], 400);
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
                return response()->json([$validator->errors()], 400);
            }

            $userAuth = Auth::user();
            $user = User::whereId($userAuth->id)->update($input);
            return response()->json([$user], 200);
        } catch (\Exception $e) {
            return response()->json([$e], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        try {
            $userAuth = Auth::user();
            $user = User::whereId($userAuth->id)->update(['status' => 0]);
            return response()->json([$user], 200);
        } catch (\Exception $e) {
            return response()->json([$e], 400);
        }
    }
}
