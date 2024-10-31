<?php

use App\Http\Controllers\Api\PendaftaranController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('Pendaftaran', PendaftaranController::class);
// php artisan i api
