<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KijiController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('home');
});

Auth::routes();
Route::middleware(['auth'])->group(function () {
Route::get('/home', [KijiController::class, 'show'])->name('show');
Route::post('/kiji/add',[KijiController::class,'add']);
Route::post('/kiji/delete/{id}',[KijiController::class,'delete']);
Route::get('/kiji/detail/{id}',[KijiController::class,'detail'])->name('detail');
Route::get('/kiji/edit/{id}',[KijiController::class,'edit']);
Route::post('/kiji/update/{id}',[KijiController::class,'update']);
Route::get('/kiji/complete_edit/{id}',[KijiController::class,'complete'])->name('complete_edit');
});