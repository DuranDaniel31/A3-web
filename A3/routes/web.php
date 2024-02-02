<?php

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

Route::get('/career/create', function () {
    return view('career.create');
})->name('career.create');

Route::get('/career/index', function () {
    return view('career.index');
})->name('career.index');

Route::get('/career/edit', function () {
    return view('career.edit');
})->name('career.edit');

Route::get('/location/create', function () {
    return view('location.create');
})->name('location.create');

Route::get('/location/index', function () {
    return view('location.index');
})->name('location.index');

Route::get('/location/edit', function () {
    return view('location.edit');
})->name('location.edit');