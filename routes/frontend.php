<?php

use App\Http\Controllers\Frontend\Home\HomeController;
use Illuminate\Support\Facades\Route;



Route::group(['as' => 'frontend.'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});
