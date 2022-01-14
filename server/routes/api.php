<?php

use App\Http\Controllers\PlatformController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/platforms', [PlatformController::class, 'list']);

Route::get('/platforms/{id}', [PlatformController::class, 'view']);

Route::post('/platforms/create', [PlatformController::class, 'create']);

Route::put('/platforms/edit/{id}', [PlatformController::class, 'edit']);

Route::delete('/platforms/delete/{id}', [PlatformController::class, 'delete']);
