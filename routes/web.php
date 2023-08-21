<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;

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

//Pocetna
Route::get('/', [MovieController::class, 'index']);

//Zasebna stanica za film
Route::get('/movies/{movie}', [MovieController::class, 'show']);

//Repertoar
Route::get('/repertoar',[MovieController::class,'repertoar']);

//Uskoro
Route::get('/uskoro',[MovieController::class,'uskoro']);

//Cjenovnik
Route::get('/cjenovnik',[MovieController::class,'cjenovnik']);

//Rezervacija
Route::get('/movies/{movie}/rezervacija',[MovieController::class,'rezervacija']);

//Potvrda rezervacije

Route::post('/movies/{movie}/rezervacija', [MovieController::class, 'storeReservation']);

//Kontakt
Route::get('/kontakt',[Controller::class,'kontakt']);

//Moje rezervacije
Route::get('/mojerezervacije', [MovieController::class, 'manage']);

//Jedna rezervacija
Route::get('/mojerezervacije/{id}',[MovieController::class,'single']);

// Update rezervaciju
Route::put('/mojerezervacije/{usersreservation}', [MovieController::class, 'update'])->middleware('auth');

// Delete rezervaciju
Route::delete('/mojerezervacije/{usersreservation}', [MovieController::class, 'destroy'])->middleware('auth');

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout']);

// Show Login Form
Route::get('/login', [UserController::class, 'login']);

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


