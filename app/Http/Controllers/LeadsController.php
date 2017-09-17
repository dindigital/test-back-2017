<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Validator;

class LeadsController extends Controller
{
    public function store()
    {
    	$data = request()->all();

    	$validator = $this->validateLead($data);

    	if ($validator->fails()) {
    		return redirect('/#about')
    				->withErrors($validator)
    				->withInput();
    	}

    	$lead = $this->model();

    	$lead->fill($data);

    	if ($lead->save()) {
    		// send email

    		return redirect()->route('appointment.success');
    	}

    	return redirect()->with('error', 'Could not possibly make an appointment.');
    }

    private function validateLead(array $data)
    {
    	return Validator::make($data, [
    		'name' => 'required|max:255',
    		'email' => 'required|email|max:255',
    		'phone' => 'required|max:40'
    	]);
    }

    private function model()
    {
    	return new Lead;
    }
}
