<?php

namespace App\Http\Controllers;

use App\Models\Nominee;
use App\Http\Requests\StoreNomineeRequest;
use App\Http\Requests\UpdateNomineeRequest;

class NomineeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Nominee $nominee)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nominee $nominee)
    {
        //
    }
}
