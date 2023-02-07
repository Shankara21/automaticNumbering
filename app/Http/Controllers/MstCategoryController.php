<?php

namespace App\Http\Controllers;

use App\Models\mst_category;
use App\Http\Requests\Storemst_categoryRequest;
use App\Http\Requests\Updatemst_categoryRequest;

class MstCategoryController extends Controller
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
     * @param  \App\Http\Requests\Storemst_categoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storemst_categoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mst_category  $mst_category
     * @return \Illuminate\Http\Response
     */
    public function show(mst_category $mst_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mst_category  $mst_category
     * @return \Illuminate\Http\Response
     */
    public function edit(mst_category $mst_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatemst_categoryRequest  $request
     * @param  \App\Models\mst_category  $mst_category
     * @return \Illuminate\Http\Response
     */
    public function update(Updatemst_categoryRequest $request, mst_category $mst_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mst_category  $mst_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(mst_category $mst_category)
    {
        //
    }
}
