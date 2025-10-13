<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sendEmailsController;
use App\Http\Controllers\sendEmailsEcommerceController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/send', [sendEmailsController::class, 'send']);
Route::post('/contact', [sendEmailsEcommerceController::class, 'send']);
