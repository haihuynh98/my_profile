<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use \App\Http\Controllers\ContactController;
use \App\Http\Controllers\InformationController;

Route::middleware('auth:api')->get('user', function (Request $request) {
    return $request->user();
});

Route::get('books', [BookController::class, 'index']);
Route::group(['prefix' => 'book'], function () {
    Route::post('add', [BookController::class, 'add']);
    Route::get('edit/{id}', [BookController::class, 'edit']);
    Route::post('update/{id}', [BookController::class, 'update']);
    Route::delete('delete/{id}', [BookController::class, 'delete']);
});

Route::group(['prefix' => 'contact'], function () {
    Route::post('save', [ContactController::class, 'saveContact']);
});

Route::group(['prefix' => 'info'], function () {
    Route::get('index', [InformationController::class, 'index']);
    Route::post('update/{information?}', [InformationController::class, 'update']);
});
