<?php

use App\Http\Controllers\ProfileController;
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

Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'index');
    Route::get('/profile/create', 'create');
    Route::post('/profile/store', 'store');
    Route::get('/profile/{id}/edit', 'edit');
    Route::put('/profile/{id}', 'update');
    Route::delete('/profile/{id}', 'destroy');
});

