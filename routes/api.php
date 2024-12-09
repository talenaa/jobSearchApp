<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\Api\FeedbackController;

Route::get('/offers',[OfferController::class, 'index'])->name('apihome');
Route::delete('/offers/{id}',[OfferController::class, 'destroy'])->name('apidestroy');
Route::put('/offers/{id}',[OfferController::class, 'update'])->name('apiupdate');
Route::post('/offers',[OfferController::class, 'store'])->name('apistore');
Route::get('/offers/{id}',[OfferController::class, 'show'])->name('apishow');

Route::get('/offers/{offerId}/news',[FeedbackController::class, 'index'])->name('apihomeNews');
Route::delete('/offers/{offerId}/news/{newsID}',[FeedbackController::class, 'destroy'])->name('apidestroyNews');
Route::put('/offers/{offerId}/news/{newsID}',[FeedbackController::class, 'update'])->name('apiupdateNews');
Route::post('/offers/{offerId}/news',[FeedbackController::class, 'store'])->name('apistoreNews');
Route::get('/offers/{offerId}/news/{newsID}',[FeedbackController::class, 'show'])->name('apishowNews');