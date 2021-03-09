<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProdutoController;
use \App\Http\Controllers\AgendamentoController;
use App\Models\Produto;
use App\Models\Agendamento;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::model('produto', Produto::class);
Route::get('/produtos/remover/{produto}', [ProdutoController::class, 'destroy'])->middleware(['auth'])->name('rm-produto');

Route::post('/novo/produto', [ProdutoController::class, 'store'])->name('novo_produto');

Route::post('/novo/agendamento/{$produto}',[AgendamentoController::class, 'store'])->name('novo_agendamento');

Route::any('/agendamento/update', [AgendamentoController::class, 'update'])
->name('update-agendamento')
->middleware('auth');

Route::any('/agendamento/{agendamento}/cancelar', [AgendamentoController::class, 'cancelar'])
->name('cancelar-agendamento')
->middleware('auth');

Route::any('agendamento/pesquisar', [AgendamentoController::class, 'pesquisar'])
->name('agendamento-pesquisar')
->middleware('auth');



require __DIR__.'/auth.php';