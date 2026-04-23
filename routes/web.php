<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;

//Route::get('/', function () {
  //  return view('home');
//});

//Route::get('/login', function () {
 //   return view('login.signup');
//});

//Route::get('/home', function () {
 //   return view('home');
//});


//Route::get('/profil', function () {
  //  return view('profil.profil');
//});


Route::get('/', [HomeController::class, 'dashboard']);

Route::get('/register', [FormController::class, 'form']);
//Route::post('/welcome', [FormController::class, 'form']);

Route::post('/register', [FormController::class, 'daftar']);
// Route::post('/register', [FormController::class, 'daftar'])->name('register');


//Route::get('/master', function () {
//  return view('layout/master');
//});

Route::get('/master', function () {
  return view('layout/master');
});

