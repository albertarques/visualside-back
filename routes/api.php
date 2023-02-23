<?php

use App\Http\Controllers\AdvertiserController;
use App\Http\Controllers\JobsController;
use App\Models\Advertiser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::apiResource('jobs', JobsController::class);
Route::apiResource('advertisers', AdvertiserController::class);