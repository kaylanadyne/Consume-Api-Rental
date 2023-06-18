<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentalController;

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

Route::get('/',[RentalController::class,'lihat']);
Route::get('/howto',[RentalController::class,'panduan']);
Route::get('/rental',[RentalController::class,'index']);
Route::get('/show',[RentalController::class,'show']);
Route::get('/add',[RentalController::class,'create'])->name('add');
Route::post('/add/send',[RentalController::class,'store'])->name('send');
Route::get('/edit/{id}',[RentalController::class,'edit'])->name('edit');
Route::post('/update/{id}',[RentalController::class,'update'])->name('update');
Route::post('/delete/{id}',[RentalController::class,'destroy'])->name('destroy');
Route::get('/trash',[RentalController::class,'getTrash'])->name('trash');
Route::get('/restore/{id}',[RentalController::class,'restore'])->name('restore');
Route::post('/deletetrash/{id}',[RentalController::class,'deleteTrash'])->name('deleteTrash');
