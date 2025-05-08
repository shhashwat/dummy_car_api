<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Http\Requests\StoreApplicationRequest;
use App\Http\Requests\UpdateApplicationRequest;
use App\Models\CarSpecs;
use App\Models\VehichleDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicleDetails = VehichleDetails::firstOrFail();

        return response()->json($vehicleDetails);
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
    public function store(StoreApplicationRequest $request)
    {
        $validated = $request->validated();

        $application = Application::create([
            'app_id' => Str::uuid(),
            'reg_no' => $validated['reg_no'],
            'mob_no' => $validated['mob_no'],
            'status' => 'initiated',
        ]);


        return response()->json($application);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $carSpecs = CarSpecs::where('id', $id)->firstOrFail();
        return response()->json($carSpecs);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        //
    }
}
