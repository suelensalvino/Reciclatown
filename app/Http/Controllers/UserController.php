<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Coletor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

class UserController extends Controller
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
        //
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {   
        if($request->name){
            $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'nascimento' => $request->nascimento,
            'uf' => $request->uf,
            'cidade' => $request->cidade,
            'bairro' => $request->bairro,
            'cep' => $request->cep,
            'logradouro' => $request->logradouro,
            'complemento' => $request->complemento,
            ]);
        }
        if($request->tipo){
        $user->update([
            'tipo' => $request->tipo,
        ]);
            
        }
        if($request->perfil){
            $coletor = Coletor::Create([
                'perfil' => $request->perfil,
                'telefone' => $request->telefone,
                'user_id' => Auth::user()->id,
            ]);
        }



            return redirect('dashboard');
        // var_dump($request);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
       
    } 
}