<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;

Route::get('/quote/{id}', [QuoteController::class, 'show']);
Route::post('/quote', [QuoteController::class, 'store']);
