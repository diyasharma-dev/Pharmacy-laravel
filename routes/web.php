<?php

use App\Http\Controllers\PharmacyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PharmacyController::class, 'home'])->name('home');
Route::get('/about', [PharmacyController::class, 'about'])->name('about');
Route::get('/vaccinations', [PharmacyController::class, 'vaccinations'])->name('vaccinations');
Route::get('/services', [PharmacyController::class, 'services'])->name('services');
Route::get('/transfer', [PharmacyController::class, 'transfer'])->name('transfer');
Route::post('/transfer', [PharmacyController::class, 'storeTransfer'])->name('transfer.store');
Route::get('/contact', [PharmacyController::class, 'contact'])->name('contact');
Route::post('/contact', [PharmacyController::class, 'storeContact'])->name('contact.store');
