<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/why-lazord', [PageController::class, 'whyLazord'])->name('why-lazord');
Route::get('/lab-services', [PageController::class, 'labServices'])->name('lab-services');
Route::get('/solutions', [PageController::class, 'solutions'])->name('solutions');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/learn', [PageController::class, 'learn'])->name('learn');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
});


require __DIR__.'/auth.php';