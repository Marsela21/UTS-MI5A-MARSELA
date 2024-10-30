<?php

use App\Http\Controllers\ArtikelblogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//yg ditambahkan utk artikelblog get
Route::get('artikelblog', [ArtikelblogController::class, 'getartikelblog']);
//yg ditambahkan utk artikelblog post
Route::post('artikelblog', [ArtikelblogController::class, 'storeartikelblog']);

//post utk menyimpan
Route::post('artikelblog', [ArtikelblogController::class, 'getartikelblog']);
//utk menghapus
Route::delete('artikelblog', [ArtikelblogController::class, 'storeartikelblog']);
