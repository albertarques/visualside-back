<?php

use App\Http\Controllers\AdvertiserController;
use App\Http\Controllers\JobsController;
use App\Models\Advertiser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource('jobs', JobsController::class);
Route::apiResource('advertisers', AdvertiserController::class);