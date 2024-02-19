<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProposController;
use App\Http\Controllers\RealisationController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;


Route::get("/", [AccueilController::class, "index"])
    ->name("accueil");

Route::get("/services", [ServiceController::class, "index"])
    ->name("services");

Route::get("/realisations", [RealisationController::class, "index"])
    ->name("realisations.index");

Route::get("/realisations/{id}", [RealisationController::class, "show"])
    ->name("realisations.show");

Route::get("/a-propos", [ProposController::class, "index"])
    ->name("a-propos");

Route::get("/contact", [ContactController::class, "index"])
    ->name("contact");

Route::post("/soumission", [ContactController::class, "store"])
    ->name("soumission.store");
