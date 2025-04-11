<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tuts', [NinjaController::class, 'index'])->name('index');
Route::get('/tuts/create', [NinjaController::class,'create'])->name('create');
Route::get('/tuts/{ninja}', [NinjaController::class, 'show'])->name('show'); // routes wildcards
Route::post('/tuts', [NinjaController::class, 'store'] )->name('store');
Route::delete('/tuts/{ninja}', [NinjaController::class, 'destroy'])->name('destroy');

