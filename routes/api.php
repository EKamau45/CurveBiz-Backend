<?php

use Illuminate\Support\Facades\Route;

Route::get('/health', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'CurveBiz API is running.',
        'application' => 'CurveBiz',
    ]);
});

Route::get('/user', function (\Illuminate\Http\Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
