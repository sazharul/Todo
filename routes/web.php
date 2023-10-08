<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SomethingController;
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

Route::get('/something', [SomethingController::class, 'something']);




Route::get('/', [AdminController::class, 'index']);
Route::get('/name', [AdminController::class, 'name']);

Route::post('/task-store', [TaskController::class, 'store'])->name('task.store');
Route::get('/task/{id}', [TaskController::class, 'destroy'])->name('task.destroy');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
