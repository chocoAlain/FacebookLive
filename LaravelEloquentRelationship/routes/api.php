<?php

use App\Http\Controllers\Contact_Controller;
use App\Http\Controllers\User_Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('contact', [Contact_Controller::class, 'index']);
Route::post('contact/create', [Contact_Controller::class, 'store']);

Route::get('user', [User_Controller::class, 'index']);
Route::post('user/create', [User_Controller::class, 'store']);

