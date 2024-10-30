<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OnlineTrainingController;

Route::get('/online_trainings', [OnlineTrainingController::class, 'index']);
Route::post('/online_trainings', [OnlineTrainingController::class, 'store']);

Route::apiResource('online_trainings', OnlineTrainingController::class);


// npm install bootstrap
// composer create-project laravel/laravel nama_proyek
// npx create-next-app@latest nama_proyek
