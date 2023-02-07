<?php

namespace App\Http\Controllers;

use App\Models\mst_document;
use App\Http\Requests\Storemst_documentRequest;
use App\Http\Requests\Updatemst_documentRequest;

class MstDocumentController extends Controller
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
     * @param  \App\Http\Requests\Storemst_documentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storemst_documentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mst_document  $mst_document
     * @return \Illuminate\Http\Response
     */
    public function show(mst_document $mst_document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mst_document  $mst_document
     * @return \Illuminate\Http\Response
     */
    public function edit(mst_document $mst_document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatemst_documentRequest  $request
     * @param  \App\Models\mst_document  $mst_document
     * @return \Illuminate\Http\Response
     */
    public function update(Updatemst_documentRequest $request, mst_document $mst_document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mst_document  $mst_document
     * @return \Illuminate\Http\Response
     */
    public function destroy(mst_document $mst_document)
    {
        //
    }
}
