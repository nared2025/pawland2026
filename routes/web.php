<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::resource('photos',PhotoController::class);

Route::get('/',[HomeController::class, 'home'])->name('photos.home');
Route::get('about',[PhotoController::class, 'about'])->name('photos.about');
Route::get('contact',[PhotoController::class, 'contact'])->name('photos.contact');
Route::get('create',[PhotoController::class, 'create'])->name('photos.create')->middleware(['auth', 'verified']);
Route::get('/products', [PhotoController::class, 'index'])->name('products.index');

Route::get('/dashboard', function () {
    return redirect()->route('photos.home');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';