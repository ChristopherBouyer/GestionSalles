<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GestionSallesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApiController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', [GestionSallesController::class, 'index'])->name('gestion-salles.index');

Route::get('/gestion-salles/create', [GestionSallesController::class, 'create'])->name('gestion-salles.create');
Route::post('/gestion-salles', [GestionSallesController::class, 'store'])->name('gestion-salles.store');
Route::get('/gestion-salles/{salle}/edit', [GestionSallesController::class, 'edit'])->name('gestion-salles.edit');
Route::put('/gestion-salles/{salle}', [GestionSallesController::class, 'update'])->name('gestion-salles.update');
Route::delete('/gestion-salles/{salle}', [GestionSallesController::class, 'destroy'])->name('gestion-salles.destroy');



// Partie USERS
Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/apirequest', [ApiController::class, 'index']);