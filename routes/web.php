<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use PragmaRX\Countries\Package\Countries;
use App\Http\Controllers\PlayersController;

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
    return view('index');
})->name('index');

Route::get('/players', [UserController::class, 'index'])->name('players.index');
Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');


Route::middleware(['auth'])->prefix('team')->group(function () {
    Route::get('/create', [TeamController::class, 'create'])->name('teams.create');
    Route::post('/store', [TeamController::class, 'store'])->name('teams.store');    
});
Route::get('/team/{team:name}', [TeamController::class, 'show'])->name('teams.show');





Route::get('/test', function() {
    $countries = new Countries();
    echo $countries->where('cca2', 'IT')->first()->hydrateCurrencies()->currencies->EUR->coins->frequent->first();
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
