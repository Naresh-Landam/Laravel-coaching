<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ReplacementOrderApiController;
// Equivalent of Route::apiResource()
Route::get('/replacement-orders', [ReplacementOrderApiController::class, 'index']);
Route::post('/replacement-orders', [ReplacementOrderApiController::class, 'store']);
Route::get('/replacement-orders/{id}', [ReplacementOrderApiController::class, 'show']);
Route::put('/replacement-orders/{id}', [ReplacementOrderApiController::class, 'update']);
Route::delete('/replacement-orders/{id}', [ReplacementOrderApiController::class, 'destroy']);

//Route::apiResource('replacement-orders', ReplacementOrderApiController::class);  instead of that four methods separate  you can use single line 
