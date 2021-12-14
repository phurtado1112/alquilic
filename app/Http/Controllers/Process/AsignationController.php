<?php

namespace App\Http\Controllers\Process;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAsignationRequest;
use App\Http\Requests\UpdateAsignationRequest;
use App\Models\Process\Asignation;

class AsignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAsignationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAsignationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Process\Asignation  $asignation
     * @return \Illuminate\Http\Response
     */
    public function show(Asignation $asignation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Process\Asignation  $asignation
     * @return \Illuminate\Http\Response
     */
    public function edit(Asignation $asignation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAsignationRequest  $request
     * @param  \App\Models\Process\Asignation  $asignation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAsignationRequest $request, Asignation $asignation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Process\Asignation  $asignation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asignation $asignation)
    {
        //
    }
}
