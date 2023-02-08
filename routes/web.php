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
})->name('home');

// Page actalité
Route::get('/actualites', [App\Http\Controllers\PostController::class, 'public'])->name('actualites');
// Page single acutalité
Route::get('/actualites/{slug}', [App\Http\Controllers\PostController::class, 'show'])->name('actualites.article');

// Page contact
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');


/**
 * Utilisateur non connecté
 */
Route::group(['middleware' => ['guest']], function () {
    // Connexion
    Route::get('/espace-admin', [App\Http\Controllers\LoginController::class, 'show'])->name('login');
    Route::post('/espace-admin', [App\Http\Controllers\LoginController::class, 'login'])->name('login.connection');
});

/**
 * Utilisateur connecté
 */
    
 Route::group(['middleware' => ['auth']], function () {

    // Dashboard
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', [App\Http\Controllers\DashboardController::class, 'show'])->name('dashboard');

        // Users
        Route::resource("users", App\Http\Controllers\UserController::class);

        // Actualités
        Route::resource("actualites", App\Http\Controllers\PostController::class);
    });

    // Déconnexion
    Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
});