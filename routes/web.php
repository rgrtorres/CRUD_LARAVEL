<?php

use App\Http\Controllers\ContainerController;
use App\Http\Controllers\MovimentacaoController;
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
    return view('home');
});

Route::get('/containers', [ContainerController::class, 'show'])->name('container');

Route::group(['prefix' => 'containers'], function(){
    /* ADD */
    Route::get('/insert', [ContainerController::class, 'create'])->name('container.insert');
    Route::post('/add', [ContainerController::class, 'store'])->name('container.store');

    /* EDIT */
    Route::get('/edit/{id}', [ContainerController::class, 'edit'])->name('container.edit');
    Route::post('/edit/{id}/update', [ContainerController::class, 'update'])->name('container.update');

    /* DELETE */
    Route::get('/apagar/{id}', [ContainerController::class, 'destroy'])->name('container.destoy');
});