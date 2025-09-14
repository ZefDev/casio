<?php

use App\Http\Controllers\SlotController;
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

Route::get('/', [SlotController::class, 'index']);
Route::post('/slots', [SlotController::class, 'store'])->name('slots.store');
Route::delete('/slots/{id}', [SlotController::class, 'destroy'])->name('slots.destroy');
Route::get('/{slug}', [SlotController::class, 'show'])->name('slots.show');