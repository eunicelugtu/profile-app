<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profiles', [ProfilesController::class, 'getAllProfiles']);

Route::get('/profile/{id}', [ProfilesController::class,'getProfile']);