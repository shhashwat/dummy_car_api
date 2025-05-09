<?php

namespace App\Http\Controllers;

use App\Models\Nominee;
use App\Http\Requests\StoreNomineeRequest;
use App\Http\Requests\UpdateNomineeRequest;
use Illuminate\Support\Str;

class NomineeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nominee = Nominee::all();
        return response()->json($nominee);
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
    public function store(StoreNomineeRequest $request)
    {
        $validated = $request->validated();

        $nominee = Nominee::create([
            'app_id' => Str::uuid(),
            'nominee_name' => $validated['nominee_name'],
            'dob' => $validated['dob'],
            'relationship' => $validated['relationship'],
            'gender' => $validated['gender'],
        ]);

        return response()->json($nominee);
    }

    /**
     * Display the specified resource.
     */
    public function show(Nominee $nominee)
    {
        return response()->json($nominee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nominee $nominee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNomineeRequest $request, Nominee $nominee)
    {
        $validated = $request->validated();

        $nominee->update([
            'nominee_name' => $validated['nominee_name'],
            'dob' => $validated['dob'],
            'relationship' => $validated['relationship'],
            'gender' => $validated['gender'],
        ]);

        return response()->json($nominee);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nominee $nominee)
    {
        //
    }
}
