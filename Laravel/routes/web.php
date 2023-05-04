<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudInsert;

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
    return view('stud_create');
});

 Route::get('insert', [App\Http\Controllers\StudInsert::class ,'insertform']);
Route::post('create' ,  [App\Http\Controllers\StudInsert::class ,'insert'] );

