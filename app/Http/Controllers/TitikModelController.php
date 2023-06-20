<?php

namespace App\Http\Controllers;

use App\Models\TitikModel;
use App\Http\Requests\StoreTitikModelRequest;
use App\Http\Requests\UpdateTitikModelRequest;

class TitikModelController extends Controller
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
     * @param  \App\Http\Requests\StoreTitikModelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTitikModelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TitikModel  $titikModel
     * @return \Illuminate\Http\Response
     */
    public function show(TitikModel $titikModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TitikModel  $titikModel
     * @return \Illuminate\Http\Response
     */
    public function edit(TitikModel $titikModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTitikModelRequest  $request
     * @param  \App\Models\TitikModel  $titikModel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTitikModelRequest $request, TitikModel $titikModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TitikModel  $titikModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(TitikModel $titikModel)
    {
        //
    }
}
