<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\regController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('reg');
});


Route::get('/display', function () {
    return view('display');
});

Route::get('/reg',[regController::class,'reg']);

//Insert Data

Route::post('/insert',[regController::class,'insertData']);

//Display Data

Route::get('/display',[regController::class,'dispData']);

//Delete data 

Route::get('/delete/{id}',[regController::class,'deleteData']);

//Edit Data

Route::get('/edit/{id}',[regController::class,'editData']);
Route::post('/update',[regController::class,'updateData']);