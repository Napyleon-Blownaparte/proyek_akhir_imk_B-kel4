<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::get('/hotel', [App\Http\Controllers\HotelController::class, 'index'])->name('hotel.index');
Route::get('/hotel/{hotel}', [App\Http\Controllers\HotelController::class, 'show'])->name('hotel.show');

Route::get('/transaction-choice', [App\Http\Controllers\TransactionChoiceController::class, 'index'])->name('transaction-choice.index');
Route::get('/transaction-explanation', [App\Http\Controllers\TransactionExplanationController::class, 'index'])->name('transaction-explanation.index');
Route::get('/transaction-success', [App\Http\Controllers\TransactionSuccessController::class, 'index'])->name('transaction-success.index');

Route::get('/room', [App\Http\Controllers\RoomController::class, 'show'])->name('room.show');
