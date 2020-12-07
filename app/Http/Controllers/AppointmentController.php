<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    /* CLIENT LOGIC */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUserAppointments()
    {
        try {
            $user = Auth::user();
            $appointments = Appointment::with(['clients', 'dentists'])->where('ClientId', '=', $user->id)->get();
            return response()->json($appointments, 200);
        } catch (\Exception $e) {
            return response()->json($e, 400);
        }
    }

    /**
     * Display a listing of the resource.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createAppointment(Request $request)
    {
        try {
            $input = $request->all();

            $rules = [
                'title' => 'required',
                'description' => 'required',
                'date' => 'required',
                'ClientId' => 'required',
            ];

            $validator = Validator::make($input, $rules);
            if ($validator->fails()) {
                return response()->json($validator->errors(), 400);
            }

            $appointment = new Appointment($input);
            $appointment->save();
            return response()->json($appointment, 201);
        } catch (\Exception $e) {
            return response()->json($e, 400);
        }
    }

    /**
     * Display a listing of the resource.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function cancelAppointment(Request $request)
    {
    }

    /* END CLIENT LOGIC */

    /* ADMIN LOGIC */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllAppointments()
    {
        try {
            $appointments = Appointment::with(['clients', 'dentists'])->get();
            return response()->json($appointments, 200);
        } catch (\Exception $e) {
            return response()->json($e, 400);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getAllAppointmentsFromClient(int $id)
    {
        try {
            $appointments = Appointment::with(['clients', 'dentists'])->where('ClientId', '=', $id)->get();
            return response()->json($appointments, 200);
        } catch (\Exception $e) {
            return response()->json($e, 400);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getAllAppointmentsFromDentist(int $id)
    {
        try {
            $appointments = Appointment::with(['clients', 'dentists'])->where('DentistId', '=', $id)->get();
            return response()->json($appointments, 200);
        } catch (\Exception $e) {
            return response()->json($e, 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
