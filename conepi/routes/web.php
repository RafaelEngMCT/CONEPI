<?php

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
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/consulta', [EventController::class, 'consulta']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::get('cadastrar', [EventController::class, 'cadastro']);
Route::get('/events/edit/{id}', [EventController::class, 'edit']);
Route::put('/events/update/{id}', [EventController::class, 'update']);
Route::post('/events', [EventController::class, 'store']);


Route::get('/solicitacao', function () {
    return view('solicitacao');
});
