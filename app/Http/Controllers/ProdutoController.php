<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

class ProdutoController extends Controller
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
    if ($request->categoria == 0) {
            $categoria = Categoria::create([
            'tipo' => $request->cate_outra,
            'user_id' => Auth::user()->id
    ]);
        Produto::create([
            'quantidade' => $request->quantidade,
            'descricao' => $request->descricao, 
            'categorias_id' => $categoria->id,
            'user_id' => Auth::user()->id
    ]);
         return redirect('dashboard');
    }
        Produto::create([
            'quantidade' => $request->quantidade,
            'descricao' => $request->descricao, 
            'categorias_id' => $request->categoria,
            'user_id' => Auth::user()->id
    ]);
         return redirect('dashboard');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        return view('proedit',['produto'=>$produto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        $produto->update([
            'quantidade' => $request->quantidade,
            'descricao' => $request->descricao, 
        ]);
         return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();
        
        return redirect('dashboard');
    } 
}
