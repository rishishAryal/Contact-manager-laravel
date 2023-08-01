<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[ContactController::class, 'index']);
Route::delete('contacts/delete/{contact}',[ContactController::class,'destroy']);
Route::get('/contacts/{contact}/edit',[ContactController::class,'edit']);
Route::patch('/contacts/{contact}/edit',[ContactController::class,'update']);
Route::get('contacts/create',[ContactController::class,'create']);
Route::post('contacts/create',[ContactController::class,'store']);
