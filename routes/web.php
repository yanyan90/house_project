<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


Route::get("/", [AccueilController::class, "index"])
    ->name("accueil");

Route::get("/services", [ServiceController::class, "index"])
    ->name("services");
