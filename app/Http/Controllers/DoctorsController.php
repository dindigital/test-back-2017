<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Response;

class DoctorsController extends Controller
{

    public function index()
    {
        $doctors = $this->model()->paginate();

        return response()->json($doctors, Response::HTTP_OK);
    }

	/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor = $this->model()->find($id);

        if (is_null($doctor)) {
            $this->abort(Response::HTTP_NOT_FOUND);
        }

        if (request()->expectsJson()) {
            return response()->json([
                'data' => $doctor
            ], Response::HTTP_OK);
        }

    	return view('doctors.show')->with('doctor', $doctor);
    }
    
	/**
     * Get the instance of the Doctor model.
     *
     * @return App\Model\Doctor
     */
    private function model()
    {
    	return new Doctor;
    }
}
