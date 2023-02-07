<?php

namespace App\Http\Controllers;

use App\Models\mst_section;
use App\Http\Requests\Storemst_sectionRequest;
use App\Http\Requests\Updatemst_sectionRequest;

class MstSectionController extends Controller
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
     * @param  \App\Http\Requests\Storemst_sectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storemst_sectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mst_section  $mst_section
     * @return \Illuminate\Http\Response
     */
    public function show(mst_section $mst_section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mst_section  $mst_section
     * @return \Illuminate\Http\Response
     */
    public function edit(mst_section $mst_section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatemst_sectionRequest  $request
     * @param  \App\Models\mst_section  $mst_section
     * @return \Illuminate\Http\Response
     */
    public function update(Updatemst_sectionRequest $request, mst_section $mst_section)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mst_section  $mst_section
     * @return \Illuminate\Http\Response
     */
    public function destroy(mst_section $mst_section)
    {
        //
    }
}
