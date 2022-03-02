<?php

namespace App\Http\Controllers;

use App\Models\ToolProject;
use App\Http\Requests\StoreToolProjectRequest;
use App\Http\Requests\UpdateToolProjectRequest;

class ToolProjectController extends Controller
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
     * @param  \App\Http\Requests\StoreToolProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreToolProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ToolProject  $toolProject
     * @return \Illuminate\Http\Response
     */
    public function show(ToolProject $toolProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ToolProject  $toolProject
     * @return \Illuminate\Http\Response
     */
    public function edit(ToolProject $toolProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateToolProjectRequest  $request
     * @param  \App\Models\ToolProject  $toolProject
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateToolProjectRequest $request, ToolProject $toolProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ToolProject  $toolProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(ToolProject $toolProject)
    {
        //
    }
}
