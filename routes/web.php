<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TaskController;
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

Auth::routes();

Route::get('/', [AdminController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/task-store', [TaskController::class, 'store'])->name('task.store');
Route::get('/task/{id}', [TaskController::class, 'destroy'])->name('task.destroy');
Route::get('/task-edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
Route::post('/task-update/{id}', [TaskController::class, 'update'])->name('task.update');
Route::post('/task-status-update', [TaskController::class, 'status_update'])->name('task.status_update');


