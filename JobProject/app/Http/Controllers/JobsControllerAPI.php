<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'address' => 'required',
            'education' => 'required',
            'yearsofexperince' => 'required',
            'other' => 'required'


        ]);

        $job = $request->all();
        Jobs::create($job);
        return $job;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
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
