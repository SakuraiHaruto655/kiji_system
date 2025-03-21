<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KijiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kiji', [KijiController::class, 'show']);
Route::post('/kiji/add',[KijiController::class,'add']);