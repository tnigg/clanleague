<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use PragmaRX\Countries\Package\Countries;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\ProfileController;

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
    Route::get('/requests', [InviteController::class, 'showRequests'])->name('teams.requests'); 
    Route::get('/{team:name}', [TeamController::class, 'show'])->name('teams.show');    
});



Route::get('/players/profile/{user:name}', [ProfileController::class, 'index'])->name('profiles.index');
Route::get('/players/profile/edit/{user:name}', [ProfileController::class, 'edit'])->name('profiles.edit');
Route::put('/players/profile/update/{user:name}', [ProfileController::class, 'update'])->name('profiles.update');
Route::get('/invite/store/{team}', [InviteController::class, 'store'])->name('invites.join');
Route::get('/invite/accept/{user}', [InviteController::class, 'accept'])->name('invites.accept');










Route::get('/test', function() {
    $countries = new Countries();
    echo $countries->where('cca2', 'IT')->first()->hydrateCurrencies()->currencies->EUR->coins->frequent->first();
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
