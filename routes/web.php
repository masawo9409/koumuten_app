<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KoumtenController;

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

Route::get('/', function () {
    return view('koumuten.top');
})->name('top');

Route::get('/test', function () {
    return view('koumuten.test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::resource('/koumtens', KoumtenController::class)
    ->only(['create', 'store', 'edit', 'update', 'destroy'])
    ->middleware('auth');

Route::resource('/koumtens', KoumtenController::class)
    ->only(['show', 'index']);

Route::get('/b1', [App\Http\Controllers\KoumtenController::class, 'button1'])
    ->name('button1');
Route::get('/b2', [App\Http\Controllers\KoumtenController::class, 'button2'])
    ->name('button2');

require __DIR__ . '/auth.php';
