<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use LaravelLegends\EloquentFilter\Filter;


class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
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
    public function store(Request $request, Produto $produto)
    {
        
         $agendamento = Agendamento::create([
            'horario' => $request->horario,
            'local'=> $request->local,
            'produtos_id' => $produto->id,
            'coletors_id' =>  Auth::user()->id,
            'status' => 'Aguardando resposta'
         ]);
         
  // return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function show(Agendamento $agendamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Agendamento $agendamento)
    {
       
        return redirect('update-agendamento',['agendamento'=>$agendamento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agendamento $agendamento)
    {

        $agendamento->update([
            'coletors_id' => Auth::user()->id,
            'horario' => $request->horario,
           
        ]);
       return redirect('dashboard');
    }

    public function cancelar(Request $request, Agendamento $agendamento)
    {
        $agendamento->update([
            'coletors_id' => null,
           
        ]);
       return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\agendamento  $agendamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agendamento $agendamento)
    {
        //
    }
  
}
