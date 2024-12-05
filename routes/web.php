<?php

use App\Http\Controllers\OfferController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OfferController::class, 'index'])->name('home');
