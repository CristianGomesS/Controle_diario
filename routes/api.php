<?php

use App\Http\Controllers\Api\FuncionarioController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\StatusController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(ProfileController::class)->prefix('profiles')->group(function () {
    Route::get('/', action: [ProfileController::class,'index'])->name('index');
});

Route::controller(FuncionarioController::class)->prefix('funcionarios')->group(function () {
    Route::get('/', action: [FuncionarioController::class,'index'])->name('index');
});
Route::controller(StatusController::class)->prefix('status')->group(function () {
    Route::get('/', action: [StatusController::class,'index'])->name('index');
    Route::post('/', action: [StatusController::class,'store'])->name('store');
});

