<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\ValidateController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/contactos', [ContactController::class, 'index'])->name('contacts.index');;
Route::get('/contactos/create', [CreateController::class, 'create'])->name('contacts.create');
Route::post('/contactos', [ValidateController::class, 'store'])->name('contacts.store');
Route::get('/contactos/{contactos}/edit', [EditController::class, 'edit'])->name('contacts.edit');
Route::put('/contactos/{contactos}', [UpdateController::class, 'update'])->name('contacts.update');
Route::delete('/contactos/{contactos}', [DeleteController::class, 'destroy'])->name('contacts.destroy');
