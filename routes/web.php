<?php

use App\Http\Controllers\MarcheController;
use App\Http\Controllers\VilleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('enregistrer', [MarcheController::class, 'create']);
Route::get('liste', [MarcheController::class, 'list'])->name('marche.list');

Route::post('sauvegarde', [MarcheController::class, 'store'])->name('marche.store');

Route::get('/modifier/{idMarche}', [MarcheController::class, 'modifier'])->name('marche.edit');
Route::post('/modifier/traitement', [MarcheController::class, 'update'])->name('marche.update');

Route::post('/supprimer/{idMarche}', [MarcheController::class, 'supprimer'])->name('marche.delete');

Route::resource('villes', VilleController::class);

