<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::get('/hotel', [App\Http\Controllers\HotelController::class, 'index'])->name('hotel.index');
Route::get('/hotel/{hotel}', [App\Http\Controllers\HotelController::class, 'show'])->name('hotel.show');

Route::get('/transaction-choice/{hotel_id}/{room_id}', [App\Http\Controllers\TransactionChoiceController::class, 'show'])->name('transaction-choice.index');
Route::get('/transaction-explanation/{hotel_id}/{room_id}', [App\Http\Controllers\TransactionExplanationController::class, 'show'])->name('transaction-explanation.index');
Route::get('/transaction-success/{hotel_id}/{room_id}', [App\Http\Controllers\TransactionSuccessController::class, 'show'])->name('transaction-success.index');

// Route::get('/room/show', [App\Http\Controllers\RoomController::class, 'show'])->name('room.show');
Route::get('/room/{hotel_id}/{room_id}', [App\Http\Controllers\RoomController::class, 'show'])->name('room.show');


Route::get('/history', [App\Http\Controllers\HistoryController::class, 'index'])->name('history.index');
