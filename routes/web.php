<?php

use Illuminate\Support\Facades\Route;

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

// Page accueil
Route::get('/', function () {
    return view('home');
});

// Page acutalités
Route::get('/actualites', function() {
    return view('actualites');
});

// Page single acutalité
Route::get('/single-actualite', function() {
    return view('single-actualites');
});

// Page contact
Route::get('/contact', function () {
    return view('contact');
});

// Authentification routes
Route::get('/espace-admin', [App\Http\Controllers\Auth\LoginController::class, 'show'])->name('login');