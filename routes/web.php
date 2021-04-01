<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

/*Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});*/

/*Route::get('/admin/', App\Http\Controllers\Admin\AdminController::class)->name('admin.home');*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::name('admin.')->domain('admin.mozikamg.test')->group(function () {
//Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('index');
    Route::put('/file/artiste/cover', [App\Http\Controllers\Admin\AdminController::class, 'artist_cover'])->name('file.artiste.cover');
    Route::resource('user', \App\Http\Controllers\Admin\UserController::class);
    Route::resource('artiste', \App\Http\Controllers\Admin\ArtisteController::class);
    Route::resource('musique', \App\Http\Controllers\Admin\MusiqueController::class);
});

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('site.index');
Route::get('/contact', [App\Http\Controllers\PageController::class, 'contact'])->name('site.contact');
Route::get('/politique-d-utilisation', [App\Http\Controllers\PageController::class, 'privacy_policy'])->name('site.contact');
Route::get('/musique/', [App\Http\Controllers\MusiqueController::class, 'index'])->name('site.musique.index');
Route::get('/musique/{slug}', [App\Http\Controllers\MusiqueController::class, 'show'])->name('site.musique.show');
Route::get('/artiste/', [App\Http\Controllers\ArtisteController::class, 'index'])->name('site.artiste.index');
Route::get('/artiste/{slug}', [App\Http\Controllers\ArtisteController::class, 'show'])->name('site.artiste.show');

/*Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('index');
    Route::resource('user', \App\Http\Controllers\Admin\UserController::class);
});*/
