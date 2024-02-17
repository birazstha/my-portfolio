<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('frontend.home');
});


include('backend.php');
include('frontend.php');
