<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
	/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$doctor = $this->model()->findOrFail($id);

    	return view('doctors.show')->with('doctor', $doctor);
    }

	/**
     * Get the instance of the Doctor model.
     *
     * @return App\Model\Doctor
     */
    public function model()
    {
    	return new Doctor;
    }
}
