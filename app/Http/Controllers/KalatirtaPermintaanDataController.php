<?php

namespace App\Http\Controllers;

use App\Models\Kalatirta_permintaan_data;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKalatirta_permintaan_dataRequest;
use App\Http\Requests\UpdateKalatirta_permintaan_dataRequest;
use App\Models\Kalatirta_new;
use Illuminate\Http\Request; 

class KalatirtaPermintaanDataController extends Controller
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
    public function store(StoreKalatirta_permintaan_dataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kalatirta_permintaan_data $kalatirta_permintaan_data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kalatirta_permintaan_data $kalatirta_permintaan_data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKalatirta_permintaan_dataRequest $request, Kalatirta_permintaan_data $kalatirta_permintaan_data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kalatirta_permintaan_data $kalatirta_permintaan_data)
    {
        //
    }

    public function formKeberatan()
    {
        return view('content.formkeberatan'); 
    }
    public function formKeberatan_search(Request $request)
    {
        $validatedData = $request->validate([
            'nomor_registrasi' => ['nullable', 'max:250'],
            'nohp' => ['required', 'regex:/^\d{10,15}$/'],
        ]);

        $data = Kalatirta_new::where('nomor_registrasi', $validatedData['nomor_registrasi'])
            ->where('nohp', $validatedData['nohp'])
            ->get();
            
        if ($data->isEmpty()) {
            return redirect()->back()->with('fail', 'Data tidak ditemukan');
        }

        return view('content.dataformkeberatan', [
            'data' => $data
        ]);
    }
}
