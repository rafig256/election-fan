<?php

use App\Http\Controllers\Admin\CardController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/card/create',[\App\Http\Controllers\Front\CardController::class , 'create'])->name('create-card');
Route::get('/card/{id}',[\App\Http\Controllers\Front\CardController::class , 'show'])->name('show-card');
Route::post('/card/store',[\App\Http\Controllers\Front\CardController::class, 'store'])->name('client.card.store');
Route::get('/client/info/{id}' , [\App\Http\Controllers\Front\CardController::class , 'info'])->name('client.info');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth','admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/admin/card', CardController::class);

});

//admin


require __DIR__.'/auth.php';
