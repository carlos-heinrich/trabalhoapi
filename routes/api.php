<?php

use App\Http\Controllers\SportController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\CompetitorController;
use App\Http\Controllers\LocalityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/me', function () {
    return response()->json([
        'nome_completo' => 'Stefany Gomes Andrade',
        'ra' => '1380003586'
    ]);
});

Route::apiResource('/sports', SportController::class);
Route::apiResource('/trainer', TrainerController::class);
Route::apiResource('/competitor', CompetitorController::class);
Route::apiResource('/locality', LocalityController::class);