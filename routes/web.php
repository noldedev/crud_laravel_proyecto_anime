<?php

use App\Http\Controllers\AnimeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/animes", [AnimeController::class, "index"]);
Route::get("/animes/create", [AnimeController::class, "create"]);
Route::post("/animes", [AnimeController::class, "store"])->name("animes.store");
Route::get("/animes/{id}/edit", [AnimeController::class, "edit"])->name("animes.edit");
Route::put("/animes/{id}", [AnimeController::class, "update"])->name("animes.update");
