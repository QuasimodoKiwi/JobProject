<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobsControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employer = Jobs::all();
        return view('secondPage', ['emp' => $employer]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'applicationID'=>'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'address' => 'required',
            'education' => 'required',
            'yearsofexperience' => 'required',
            'other' => 'required'


        ]);

        $job = $request->all();
        Jobs::create($job);
       
        $employer = Jobs::all();

        return $employer;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        /*
        $product = Jobs::all();
        return $product;
        */
        return view('customerpage');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
