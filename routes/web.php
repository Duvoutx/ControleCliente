<?php
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('listaClientes')->group(function () {
    Route::get('/', [ClienteController::class, 'index'])->name('clientes-index');
    Route::get('/criaCliente', [ClienteController::class, 'create'])->name('clientes-create');
    Route::post('/', [ClienteController::class, 'store'])->name('clientes-store');
    Route::get('/{id}/editaCliente', [ClienteController::class, 'edit'])->where('id', '[0-9]+')->name('clientes-edit');
    Route::put('/{id}', [ClienteController::class, 'update'])->where('id', '[0-9]+')->name('clientes-update');
    Route::delete('/{id}', [ClienteController::class, 'destroy'])->where('id', '[0-9]+')->name('clientes-destroy');
});





Route::fallback(function () {
    return "Erro!";
});