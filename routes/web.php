<?php

use App\Http\Controllers\BlogsController;
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
    return view('welcome');
});

Route::get('/fetch',[BlogsController::class,'iindex']);
Route::get('/dat',[BlogsController::class,'datatable'])->name('dat');
Route::post('/dat/update',[BlogsController::class,'updateuser'])->name('datupdate');

