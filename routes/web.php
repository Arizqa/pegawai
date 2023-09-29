<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KantorController;

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

// Route::get('/', function () {
//     return view('welcome');

Route::get('/', [KantorController::class, 'index']);

/**
 * Show create todo form
 */

/**
 * Add Todo
 */
Route::post('/kantors', [KantorController::class, 'store']);
Route::prefix('kantor')->group(function () {
    Route::get('/{id}/edit', [KantorController::class, 'edit']);
    Route::get('/{id}/delete', [KantorController::class, 'deleteData']);
    Route::post('/{id}/update', [KantorController::class, 'updateData'])->name('kantor-update');
    Route::get('/create', [KantorController::class, 'create']);
});


