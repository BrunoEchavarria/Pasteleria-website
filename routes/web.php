<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::resource('nuestros-productos', ProductsController::class);
Route::resource('about-section', AboutController::class);


Route::resource('contactanos',ContactController::class);
// Route::get('contactanos', [ContactController::class, 'store'])->name('contactanos.store');

Route::middleware(['auth','verified'])->group(function (){
    Route::resource('productos', ProductoController::class);
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
