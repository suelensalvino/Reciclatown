<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Coletor;
use App\Http\Controllers\ColetorController;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'nascimento' => 'required',
            'tipo' => 'required',
            'uf' => 'required',
            'cidade' => 'required',
            'bairro' => 'required',
            'cep' => 'required|max:5|min:5',
            'logradouro' => 'required|max:3|min:3',
            'complemento' => 'required',
        ]);
        if ($request->tipo == 'usuario') {
        Auth::login($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nascimento' => $request->nascimento,
            'tipo'=> $request->tipo,
            'uf'=> $request->uf,
            'cidade' => $request->cidade,
            'bairro' => $request->bairro,
            'cep' => $request->cep,
            'logradouro'=> $request->logradouro,
            'complemento' => $request->complemento,
        ]));
         event(new Registered($user));
        }
        else if ($request->tipo == 'coletor') {
            Auth::login($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nascimento' => $request->nascimento,
            'tipo'=> $request->tipo,
            'uf'=> $request->uf,
            'cidade' => $request->cidade,
            'bairro' => $request->bairro,
            'cep' => $request->cep,
            'logradouro'=> $request->logradouro,
            'complemento' => $request->complemento,
        ]));
        event(new Registered($user));
            coletor::create([
                'perfil' => $request->perfil,
                'telefone' => $request->telefone,
                'user_id' => Auth::user()->id
            ]);
        }

        var_dump($request->tipo);
        return redirect(RouteServiceProvider::HOME);
    }
}
