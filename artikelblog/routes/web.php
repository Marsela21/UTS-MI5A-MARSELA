<?php

use App\Http\Controllers\ArtikelblogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
});

Route::resource('artikelblog', ArtikelblogController::class);
