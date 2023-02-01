<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NoteController;

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

Route::get('/', [NoteController::class, 'index']);
Route::get('/note/create', [NoteController::class, 'createNote']);
Route::post('/note/store', [NoteController::class, 'store']);
Route::delete('/note/delete/{id}', [NoteController::class, 'delete']);
Route::get('/note/{id}', [NoteController::class, 'show']);
Route::get('/note/edit/{id}', [NoteController::class, 'editNote']);
Route::put('/note/update/{id}', [NoteController::class, 'update']);

