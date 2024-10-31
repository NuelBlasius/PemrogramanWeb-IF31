<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OnlineTrainingController;

Route::apiResource('online_trainings', OnlineTrainingController::class);

Route::get('/online_trainings', [OnlineTrainingController::class, 'index']);
Route::post('/online_trainings', [OnlineTrainingController::class, 'store']);


// php artisan tinker
// App\Models\Post::factory(100)->create();
// php artisan make:factory //(namaModel)Factory

// php artisan install:api

// npm install bootstrap
// php artisan make:resource OnlineTrainingResource
// composer create-project laravel/laravel nama_proyek

// npx create-next-app@latest nama_proyek // no, yes, yes, no, yes, no, no
// npm run dev
// npm install

// npx create-react-app nama_proyek
// npm start

// php artisan install:api
