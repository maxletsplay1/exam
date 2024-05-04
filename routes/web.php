<?php

use App\Http\Controllers\ProblemsController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [ProblemsController::class, 'index'])->name('admin');
Route::get('/applications/{id}', [ProblemsController::class, 'zayavka'])->name('zayavka');
Route::get('/application/add', [App\Http\Controllers\HomeController::class, 'form'])->name('form');

Route::post('/addproblem', [ProblemsController::class, 'create']);
Route::post('/updateproblem', [ProblemsController::class, 'update']);
