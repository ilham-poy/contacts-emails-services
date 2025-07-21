<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\sendEmailsController;


Route::get('/', function () {
    return view('welcome');
});
// Route::post('/send', [sendEmailsController::class, 'send']);
