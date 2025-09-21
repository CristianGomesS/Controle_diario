<?php

use App\Http\Controllers\Api\FuncionarioController;
use App\Http\Controllers\Api\ProfileController;
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