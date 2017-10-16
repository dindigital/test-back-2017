<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class HomeController extends Controller
{
	/**
	 * @return \Illuminate\Http\Response
	 */
    public function index()
    {
    	$doctors = Doctor::all();

    	return view('welcome')->with('doctors', $doctors);
    }
}
