<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OnlineTrainingController;

Route::get('/online_trainings', [OnlineTrainingController::class, 'index']);
Route::post('/online_trainings', [OnlineTrainingController::class, 'store']);

Route::apiResource('online_trainings', OnlineTrainingController::class);
