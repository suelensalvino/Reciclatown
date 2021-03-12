<?php
 
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProdutoController;
use \App\Http\Controllers\AgendamentoController;
use \App\Http\Controllers\UserController;
use App\Models\User;
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
Route::model('user', User::class);
Route::model('produto', Produto::class);
Route::model('agendamento', Agendamento::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::put('/dashboard/{user}/update', [UserController::class, 'update'])
->name('update-coletor')
->middleware('auth');

Route::put('/produto/{produto}/update', [ProdutoController::class, 'update'])
->name('update-produto')
->middleware('auth');

Route::put('/agendamentos/{agendamento}/update', [AgendamentoController::class, 'update'])
->name('update-agendamento')
->middleware('auth');

Route::post('/novo/produto', [ProdutoController::class, 'store'])
->name('novo_produto')
->middleware('auth');

Route::post('/novo/agendamento/{produto}', [AgendamentoController::class, 'store'])
->name('novo_agendamento')
->middleware('auth');;



Route::get('/produtos/remover/{produto}', [ProdutoController::class, 'destroy'])
->name('rm-produto')
->middleware('auth');
Route::get('/agendamentos/remover/{agendamento}', [AgendamentoController::class, 'destroy'])
->name('rm-agendamento')
->middleware('auth');

Route::any('/agendamentos/{agendamento}/update', [AgendamentoController::class, 'update'])
->name('update-agendamento')
->middleware('auth');


require __DIR__.'/auth.php';