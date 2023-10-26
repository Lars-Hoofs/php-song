<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;


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

    Route::get('/songs/create', [SongController::class, 'create']);
    Route::get('/songs', [SongController::class, 'index'])->name('songs.songs');
    Route::post('/songs', [SongController::class, 'store'])->name('songs.store');
    Route::get('/songs/{id}', [SongController::class, 'show'])->name('songs.show');
    Route::get('/songs/{id}/edit', [SongController::class, 'edit'])->name('songs.edit');
    Route::patch('/songs/{id}', [SongController::class, 'update'])->name('songs.update');
    Route::delete('/songs/{id}', [SongController::class, 'destroy'])->name('songs.destroy');





    
