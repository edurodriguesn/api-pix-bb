<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PixController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('pix')->group(function () {
    Route::post('/gerar', [PixController::class, 'store']);
});
