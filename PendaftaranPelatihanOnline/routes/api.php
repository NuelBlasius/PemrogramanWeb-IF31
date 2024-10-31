<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OnlineTrainingController;

Route::apiResource('online_trainings', OnlineTrainingController::class);

Route::get('/online_trainings', [OnlineTrainingController::class, 'index']);
Route::post('/online_trainings', [OnlineTrainingController::class, 'store']);



// npm install bootstrap
// php artisan make:resource OnlineTrainingResource
// composer create-project laravel/laravel nama_proyek
// npx create-next-app@latest nama_proyek
// php artisan install:api