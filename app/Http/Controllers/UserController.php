<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Types\Integer;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::all();
        return $users;
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Integer $id)
    {
        $user = DB::table('users')->where('id', '=', $id)->get();
        return $user;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
