<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FundingController;
use App\Models\Funding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/menu', function (Request $request) {
    return response()->json(['Home', 'Profile', 'About', 'Contact Us']);
});

Route::get('/donatur', function (Request $request) {
    return response()->json([
        ['id'=>1, 'name'=>'Valen'],
        ['id'=>2, 'name'=>'Jessen'],
        ['id'=>3, 'name'=>'Jason'],
        ['id'=>4, 'name'=>'Felix'],
        ['id'=>5, 'name'=>'Arjun'],
        ['id'=>6, 'name'=>'Kevin'],
        ['id'=>7, 'name'=>'Eddo'],
    ]);
});

Route::group(['middleware' => 'auth:sanctum'], function() {
    //API CRUD Funding
    Route::get('/funding', [ FundingController::class, 'index' ]);
    Route::post('/funding', [ FundingController::class, 'store' ]);
    Route::get('/funding/{id}', [ FundingController::class, 'show' ]);
    Route::put('/funding/{id}', [ FundingController::class, 'update' ]);
    Route::delete('/funding/{id}', [ FundingController::class, 'destroy' ]);

    //API CRUD Donation
    // Route::get('/donation', [ DonationController::class, 'index' ]);
    Route::apiResource('donation', FundingController::class);

    Route::get('logout', [AuthController::class, 'logout']);
});

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
