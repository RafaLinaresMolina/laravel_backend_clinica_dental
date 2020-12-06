<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

/**
     * Login the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $input = $request->all();

        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return response()->json([$validator->errors()], 400);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $token = $user->createToken(env("API_SECRET"))->accessToken;

            $response = [];
            $response['token'] = 'Bearer ' . $token;
            return response()->json($response, 200);
        } else {
            return response()->json(['error' => 'Wrong credentials'], 401);
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
            return response()->json($user, 201);
        } catch (\Exception $e) {
            return response()->json($e, 400);
        }
    }

    /**
     * Logout the user
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        try {
            $token = $request->user()->token();
            $token->revoke();
            return response()->json(['message' => 'Bye!'], 200);
        } catch (\Exception $e) {
            return response()->json($e, 401);
        }
        
    }
}