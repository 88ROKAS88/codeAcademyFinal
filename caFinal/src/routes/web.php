<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::redirect('/', 'games/welcome');

Route::prefix('/games')->name('games.')->group(function () {
    Route::get('/welcome', [Controllers\Games\CatGameController::class, 'welcome'])->name('welcome');
    Route::get('/play', [Controllers\Games\CatGameController::class, 'play'])->name('play');
    Route::get('/highscore', [Controllers\Games\CatGameController::class, 'highscore'])->name('highscore');
    Route::get('/credits', [Controllers\Games\CatGameController::class, 'credits'])->name('credits');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
