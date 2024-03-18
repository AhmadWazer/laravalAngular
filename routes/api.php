<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AngulerJs;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
Route::get('/home', [HomeController::class, 'index'])->name('home');
*/

//api's for Angular project
Route::get('customer/show',[AngulerJs::class,'shows']);
Route::delete('customer/{customer_id}',[ AngulerJs::class,'destroy']);
Route::post('customer/add', [AngulerJs::class,'store']);
Route::get('customer/edit/{customer_id}',[AngulerJs::class,'edit']);
Route::put('customer/update/{id}', [AngulerJs::class, 'update']);
Route::get('customer/view/{customer_id}', [AngulerJs::class, 'view']);



///////////////////////////////////////////////////
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

