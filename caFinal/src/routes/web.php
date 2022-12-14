<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Games\CatGameController;

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



Route::redirect('/', 'games/welcome');

Route::prefix('/games')->name('games.')->group(function () {
    Route::get('/welcome', [CatGameController::class, 'welcome'])->name('welcome');
    Route::get('/play', [CatGameController::class, 'play'])->name('play');
    Route::get('/highscore/{score?}', [CatGameController::class, 'highscore'])->name('highscore');
    Route::get('/credits', [CatGameController::class, 'credits'])->name('credits');
    Route::post('/newscore', [CatGameController::class, 'newscore'])->name('newscore');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
