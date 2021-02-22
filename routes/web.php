<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProdutoController;
use App\Models\Produto;


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

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::model('produto', Produto::class);
Route::get('/produtos/remover/{produto}', [ProdutoController::class, 'destroy'])->name('rm-produto');

Route::post('/novo/produto', [ProdutoController::class, 'store'])->name('novo_produto');


require __DIR__.'/auth.php';