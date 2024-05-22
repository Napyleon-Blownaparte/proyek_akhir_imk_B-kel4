<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::get('/hotel', [App\Http\Controllers\HotelController::class, 'index'])->name('hotel.index');
Route::get('/hotel/show', [App\Http\Controllers\HotelController::class, 'show'])->name('hotel.show');

Route::get('/room/{room}', [App\Http\Controllers\RoomController::class, 'show'])->name('room.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
