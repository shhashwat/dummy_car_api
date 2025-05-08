<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $address = Address::all();
        return response()->json($address);
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
            'add_line_1' => 'required',
            'pin_code' => 'required',
            'city' => 'required',
            'district' => 'required',
            'state' => 'required',
            'same_as_current' => 'required',
            'per_add_line_1' => 'nullable',
            'per_pin_code' => 'nullable',
            'per_city' => 'nullable',
            'per_district' => 'nullable',
            'per_state' => 'nullable',
        ]);

        $address = Address::create([
            'app_id' => Str::uuid(),
            'add_line_1' => $request->add_line_1,
            'pin_code' => $request->pin_code,
            'city' => $request->city,
            'district' => $request->district,
            'state' => $request->state,
            'same_as_current' => $request->same_as_current,
            'per_add_line_1' => $request->per_add_line_1,
            'per_pin_code' => $request->per_pin_code,
            'per_city' => $request->per_city,
            'per_district' => $request->per_district,
            'per_state' => $request->per_state
        ]);

        return response()->json($address);
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        return response()->json($address);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Address $address)
    {
        $request->validate([
            'add_line_1' => 'required',
            'pin_code' => 'required',
            'city' => 'required',
            'district' => 'required',
            'state' => 'required',
            'same_as_current' => 'required',
            'per_add_line_1' => 'nullable',
            'per_pin_code' => 'nullable',
            'per_city' => 'nullable',
            'per_district' => 'nullable',
            'per_state' => 'nullable',
        ]);

        $address->update([
            'add_line_1' => $request->add_line_1,
            'pin_code' => $request->pin_code,
            'city' => $request->city,
            'district' => $request->district,
            'state' => $request->state,
            'same_as_current' => $request->same_as_current,
            'per_add_line_1' => $request->per_add_line_1,
            'per_pin_code' => $request->per_pin_code,
            'per_city' => $request->per_city,
            'per_district' => $request->per_district,
            'per_state' => $request->per_state
        ]);

        return response()->json($address);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
