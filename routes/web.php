<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;


//Pocetna
Route::get('/', [MovieController::class, 'index']);

//Zasebna stanica za film
Route::get('/movies/{movie}', [MovieController::class, 'show']);

//Repertoar
Route::get('/repertoar', [MovieController::class, 'repertoar']);

//Uskoro
Route::get('/uskoro', [MovieController::class, 'uskoro']);

//Cjenovnik
Route::get('/cjenovnik', [MovieController::class, 'cjenovnik']);

//Kontakt
Route::get('/kontakt', [Controller::class, 'kontakt']);

//Rezervacija
Route::get('/movies/{movie}/rezervacija', [MovieController::class, 'rezervacija'])->middleware('auth');

//Potvrda rezervacije
Route::post('/movies/{movie}/rezervacija', [MovieController::class, 'storeReservation'])->middleware('auth');

//Moje rezervacije
Route::get('/mojerezervacije', [MovieController::class, 'manage'])->middleware('auth');

//Jedna rezervacija
Route::get('/mojerezervacije/{id}', [MovieController::class, 'single'])->middleware('auth');

//Update rezervaciju
Route::put('/mojerezervacije/{usersreservation}', [MovieController::class, 'update'])->middleware('auth');

//Delete rezervaciju
Route::delete('/mojerezervacije/{usersreservation}', [MovieController::class, 'destroy'])->middleware('auth');

//Registracija
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Kreiraj korisnika
Route::post('/users', [UserController::class, 'store'])->middleware('guest');

//Odjavi se
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Login
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//Uloguj korisnika
Route::post('/users/authenticate', [UserController::class, 'authenticate']);