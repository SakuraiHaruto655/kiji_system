<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KijiController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/kiji', [KijiController::class, 'show'])->name('show');
Route::post('/kiji/add',[KijiController::class,'add']);
Route::post('/kiji/delete/{id}',[KijiController::class,'delete']);
Route::post('/kiji/detail/{id}',[KijiController::class,'detail']);