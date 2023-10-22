<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('/auth/login');
});*/

Route::get('/games/create', [GameController::class, "create"])->middleware("auth")->name("games_create");
Route::post('/games', [GameController::class, "store"])->middleware("auth");
Route::delete('games/{id}', [GameController::class, "destroy"])->middleware("auth");
Route::get('/games/edit/{id}', [GameController::class, "edit"])->middleware("auth");
Route::put('/games/update/{id}', [GameController::class, 'update'])->middleware("auth");
Route::get("/dashboard", [GameController::class, "dashboard"])->middleware("auth")->name('dashboard');

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
