<?php

namespace App\Http\Controllers;

use App\Models\SeoManagment;
use App\Http\Requests\StoreSeoManagmentRequest;
use App\Http\Requests\UpdateSeoManagmentRequest;

class SeoManagmentController extends Controller
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
     * @param  \App\Http\Requests\StoreSeoManagmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSeoManagmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SeoManagment  $seoManagment
     * @return \Illuminate\Http\Response
     */
    public function show(SeoManagment $seoManagment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SeoManagment  $seoManagment
     * @return \Illuminate\Http\Response
     */
    public function edit(SeoManagment $seoManagment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSeoManagmentRequest  $request
     * @param  \App\Models\SeoManagment  $seoManagment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSeoManagmentRequest $request, SeoManagment $seoManagment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SeoManagment  $seoManagment
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeoManagment $seoManagment)
    {
        //
    }
}
