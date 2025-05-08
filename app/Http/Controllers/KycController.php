<?php

namespace App\Http\Controllers;

use App\Models\Kyc;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KycController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kyc = Kyc::all();
        return response()->json($kyc);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pan' => 'required',
            'aadhar' => 'required',
            'dob' => ['required', 'date'],
            'full_name' => ['required', 'string'],
            'gender' => ['required', 'in:male,female,other'],
            'status' => ['required', 'in:VERIFIED,UNVERIFIED'],
        ]);

        $kyc = Kyc::create([
            'app_id' => Str::uuid(),
            'pan' => $request->pan,
            'aadhar' => $request->aadhar,
            'dob' => $request->dob,
            'full_name' => $request->full_name,
            'gender' => $request->gender,
            'status' => $request->status,
        ]);

        return response()->json($kyc);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kyc $kyc)
    {
        return response()->json($kyc);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kyc $kyc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kyc $kyc)
    {
       $request->validate([
            'pan' => 'required',
            'aadhar' => 'required',
            'dob' => ['required', 'date'],
            'full_name' => ['required', 'string'],
            'gender' => ['required', 'in:male,female,other'],
            'status' => ['required', 'in:VERIFIED,UNVERIFIED'],
        ]);

        $kyc->update([
            'pan' => $request->pan,
            'aadhar' => $request->aadhar,
            'dob' => $request->dob,
            'full_name' => $request->full_name,
            'gender' => $request->gender,
            'status' => $request->status,
        ]);

        return response()->json($kyc);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kyc $kyc)
    {
        //
    }
}
