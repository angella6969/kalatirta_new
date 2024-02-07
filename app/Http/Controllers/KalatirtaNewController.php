<?php

namespace App\Http\Controllers;

use App\Models\Kalatirta_new;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKalatirta_newRequest;
use App\Http\Requests\UpdateKalatirta_newRequest;

class KalatirtaNewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('content.index');
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
    public function store(StoreKalatirta_newRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kalatirta_new $kalatirta_new)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kalatirta_new $kalatirta_new)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKalatirta_newRequest $request, Kalatirta_new $kalatirta_new)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kalatirta_new $kalatirta_new)
    {
        //
    }
}
