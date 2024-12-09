<?php

use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\ClickController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AffiliateController::class, 'create'])->name('affiliate.create');
Route::post('/affiliate/store', [AffiliateController::class, 'store'])->name('affiliate.store');
Route::get('/track/{referral_code}', [ClickController::class, 'track'])->name('affiliate.track');
