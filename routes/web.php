<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\AdminAreaController;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [NoteController::class, 'dashboard'])->name('dashboard');
    Route::get('/note/create', [NoteController::class, 'createNote']);
    Route::post('/note/store', [NoteController::class, 'store']);
    Route::delete('/note/delete/{id}', [NoteController::class, 'delete']);
    Route::get('/note/{id}', [NoteController::class, 'show']);
    Route::get('/note/edit/{id}', [NoteController::class, 'editNote']);
    Route::put('/note/update/{id}', [NoteController::class, 'update']);

    Route::get('/admin', [AdminAreaController::class, 'show']);
    Route::get('/admin/users', [AdminAreaController::class, 'listUsers']);
    Route::get('/admin/users/{id}', [AdminAreaController::class, 'showUserProfile']);
    Route::put('/admin/users/edit/{id}', [AdminAreaController::class, 'editUser']);
    //Route::get('/admin/warnings/create', [AdminAreaController::class, 'createWarning']);
    //Route::post('/admin/warnings/store', [AdminAreaController::class, 'createWarning']);
    //Route::get('/admin/warnings', [AdminAreaController::class, 'listWarnings']);
    //Route::get('/warnings/{id}', [AdminAreaController::class, 'showWarning']);
    //Route::put('/admin/warnings/edit/{id}', [AdminAreaController::class, 'editWarning']);


});
require __DIR__.'/auth.php';

