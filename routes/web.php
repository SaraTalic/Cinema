<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;


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
Route::get('/kontakt', [ContactController::class, 'kontakt']);

//Slanje mejla
Route::post('/kontakt', [ContactController::class, 'store']);

//Pretraga
Route::get('/pretraga', [MovieController::class, 'search']);


//Rezervacija
Route::get('/movies/{movie}/rezervacija', [MovieController::class, 'rezervacija'])->middleware('auth');

//Potvrda rezervacije
Route::post('/movies/{movie}/rezervacija', [MovieController::class, 'storeReservation'])->middleware('auth');

//Moje rezervacije
Route::get('/mojerezervacije', [MovieController::class, 'manage'])->middleware('auth');

//Jedna rezervacija
Route::get('/mojerezervacije/{id}', [MovieController::class, 'single'])->middleware('auth');

//Update rezervaciju
Route::put('/mojerezervacije/{id}/', [MovieController::class, 'update'])->middleware('auth');

//Delete rezervaciju
Route::delete('/mojerezervacije/{id}', [MovieController::class, 'destroy'])->middleware('auth');

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