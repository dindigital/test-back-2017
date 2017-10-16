<?php

namespace App\Http\Controllers;

use App\Mail\NewLeadRegistered;
use App\Models\Lead;
use Illuminate\Http\Request;
use Mail;
use Validator;

class LeadsController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
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
    		Mail::to('admin@wealth.life.com')->send(new NewLeadRegistered($lead));

    		return redirect()->route('appointment.success');
    	}

    	return redirect()->with('error', 'Could not possibly make an appointment.');
    }

    public function success()
    {
        return view('appointments.success');
    }

    /**
    * Validate the Lead request
    *
    * @param array $data
    * @return void
    */
    private function validateLead(array $data)
    {
    	return Validator::make($data, [
    		'name' => 'required|max:255',
    		'email' => 'required|email|max:255',
    		'phone' => 'required|max:40'
    	]);
    }

    /**
     * Get the instance of the Lead model.
     *
     * @return App\Model\Lead
     */
    private function model()
    {
    	return new Lead;
    }
}
