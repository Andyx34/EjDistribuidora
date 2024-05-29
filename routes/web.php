<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TruckTruckerController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/truck/asociar',[TruckTruckerController::class,'asociar']);
Route::get('/truck/asociar/store',[TruckTruckerController::class,'store'])->name('truck_truckers.store');