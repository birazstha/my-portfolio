<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('frontend.home');
});

define('PAGINATE', 15);


include('backend.php');
include('frontend.php');
