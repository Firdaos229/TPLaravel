<?php

use App\Http\Controllers\MarcheController;
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

