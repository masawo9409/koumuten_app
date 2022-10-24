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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [KoumtenController::class, 'index'])
    ->name('root');

Route::get('/dashbord', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/top', function () {
    return view('koumuten.top');});

Route::resource('/koumtens',KoumtenController::class)
    ->only(['create','store','edit','update','destroy'])
    ->middleware('auth');

Route::resource('/koumtens', KoumtenController::class)
    ->only(['show', 'index']);

Route::get('/b1',[App\Http\Controllers\KoumtenController::class,'button1'])
    ->name('button1');

require __DIR__.'/auth.php';
