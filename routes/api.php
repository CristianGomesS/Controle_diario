<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\FuncionarioController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\StatusController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);
// Route::get('/auth/me', [AuthController::class, 'me']);
Route::post('/auth/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum')->name('logout');


Route::group(['middleware' => ['auth:sanctum']], function () {
Route::controller(UserController::class)->prefix('users')->group(function () {
    Route::get('/', action: [UserController::class,'index'])->name('index');
    Route::get('/{id}', action: [UserController::class,'show'])->name('show');
    Route::post('/', action: [UserController::class,'store'])->name('store');
    Route::put('/{id}', action: [UserController::class,'update'])->name('update');
    Route::delete('/{id}', action: [UserController::class,'destroy'])->name('destroy');
});

Route::controller(FuncionarioController::class)->prefix('funcionarios')->group(function () {
    Route::get('/', action: [FuncionarioController::class,'index'])->name('index');
    Route::get('/{id}', action: [FuncionarioController::class,'show'])->name('show');
    Route::post('/', action: [FuncionarioController::class,'store'])->name('store');
    Route::put('/{id}', action: [FuncionarioController::class,'update'])->name('update');
    Route::delete('/{id}', action: [FuncionarioController::class,'destroy'])->name('destroy');
});
Route::controller(StatusController::class)->prefix('status')->group(function () {
    Route::get('/', action: [StatusController::class,'index'])->name('index');
    Route::get('/{id}', action: [StatusController::class,'show'])->name('show');
    Route::post('/', action: [StatusController::class,'store'])->name('store');
    Route::put('/{id}', action: [StatusController::class,'update'])->name('update');
    Route::delete('/{id}', action: [StatusController::class,'destroy'])->name('destroy');
});

});

