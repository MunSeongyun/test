<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\QuestionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(["prefix"=> "v1", 'namespace' => 'App\Http\Controllers'], function () {
    Route::apiResource('answers',AnswerController::class);
    Route::apiResource('informations', InformationController::class);
    Route::apiResource('questions', QuestionController::class);
});