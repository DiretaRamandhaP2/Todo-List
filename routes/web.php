<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ListController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/login');
});
Route::get('/login',[AuthController::class,'login']);
Route::post('/auth',[AuthController::class,'auth']);
Route::get('/register',[AuthController::class,'view_register']);
Route::post('/register',[AuthController::class,'register']);

Route::middleware('checklogin')->group(function () {
    Route::get('/home',[ListController::class,'view']);
    Route::get('/create',[ListController::class,'view_create']);
    Route::post('/create',[ListController::class,'create']);
    Route::get('/update/{id_list}',[ListController::class,'view_update']);
    Route::post('/update/{id_list}',[ListController::class,'update']);
    Route::get('/delete/{id_list}',[ListController::class,'delete']);
    Route::get('/list-done/{id_list}',[ListController::class,'list_done']);
    Route::get('/logout',[AuthController::class,'logout']);
});

