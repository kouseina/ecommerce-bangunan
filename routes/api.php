<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/cek-koneksi', function () {
    return response()->json([
        "status" => "sukses",
        "pesan" => 'API Toko Bangunan siap digunakan!'
    ]);
});
