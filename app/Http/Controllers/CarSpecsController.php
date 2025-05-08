<?php

namespace App\Http\Controllers;

use App\Models\CarSpecs;
use Illuminate\Http\Request;

class CarSpecsController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'claim' => 'required|in:yes,no',
            'make' => 'required|string',
            'model' => 'required|string',
            'registration_year' => 'required|digits:4|integer|min:1950|max:' . date('Y'),
            'fuel_type' => 'required|string',
            'variant' => 'required|string',
            'insurance_till' => 'required|date',
        ]);

        $carSpecs = CarSpecs::findOrFail($id);

        $carSpecs->update([
            'claim' => $request->claim,
            'make' => $request->make,
            'model' => $request->model,
            'registartion_year' => $request->registration_year,
            'fuel_type' => $request->fuel_type,
            'variant' => $request->variant,
            'insurance_till' => $request->insurance_till
        ]);

        return response()->json($carSpecs);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
