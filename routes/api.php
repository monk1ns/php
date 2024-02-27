<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post("courses/store", [CourseController::class, "store"]);
Route::get("courses/index", [CourseController::class, "index"]);