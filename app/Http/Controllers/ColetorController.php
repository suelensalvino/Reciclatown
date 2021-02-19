<?php

namespace App\Http\Controllers;

use App\Models\Coletor;
use Illuminate\Http\Request;

class ColetorController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'perfil' =>'required',
            'telefone' => 'required|number|min:11|max:16'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coletor  $coletor
     * @return \Illuminate\Http\Response
     */
    public function show(Coletor $coletor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coletor  $coletor
     * @return \Illuminate\Http\Response
     */
    public function edit(Coletor $coletor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coletor  $coletor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coletor $coletor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coletor  $coletor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coletor $coletor)
    {
        //
    }
}
