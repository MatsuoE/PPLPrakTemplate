<?php

namespace App\Http\Controllers;

use App\Models\cplprodi;
use Illuminate\Http\Request;

class cplprodiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cplprodi = cplprodi::get();
        return view('welcome', [
            'cplprodi' => $cplprodi
        ]);
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
    public function store(Request $request)
    {
        $request->validate([
            'kodecpl' => 'required',
            'deskripsi' => 'required'
        ]);

        cplprodi::create($request->all());
        return redirect()->route('cplprodi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(cplprodi $cplprodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cplprodi $cplprodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cplprodi $cplprodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cplprodi $cplprodi)
    {
        $cplprodi->delete();
        return redirect()->route('cplprodi.index');
    }
}
