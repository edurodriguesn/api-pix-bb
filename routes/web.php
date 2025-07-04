<?php

use App\Http\Controllers\PixController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('pix')->group(function () {
    Route::post('/gerar', [PixController::class, 'store']);
});
