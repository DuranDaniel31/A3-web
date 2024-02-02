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



Route::get('/course/create', function () {
    return view('course.create');
})->name('course.create');

Route::get('/course/index', function () {
    return view('course.index');
})->name('course.index');

Route::get('/course/edit', function () {
    return view('course.edit');
})->name('course.edit');

Route::get('/instructor/create', function () {
    return view('instructor.create');
})->name('instructor.create');

Route::get('/instructor/index', function () {
    return view('instructor.index');
})->name('instructor.index');

Route::get('/instructor/edit', function () {
    return view('instructor.edit');
})->name('instructor.edit');



Route::get('/environmet_type/create', function () {
    return view('environmet_type.create');
})->name('environmet_type.create');

Route::get('/environmet_type/index', function () {
    return view('environmet_type.index');
})->name('environmet_type.index');

Route::get('/environmet_type/edit', function () {
    return view('environmet_type.edit');
})->name('environmet_type.edit');


Route::get('/learning_environment/create', function () {
    return view('learning_environment.create');
})->name('learning_environment.create');


Route::get('/learning_environment/index', function () {
    return view('learning_environment.index');
})->name('learning_environment.index');


Route::get('/learning_environment/edit', function () {
    return view('learning_environment.edit');
})->name('learning_environment.edit');



Route::get('scheluding_environment/create', function (){
    return view('scheluding_environment.create');
})->name('scheluding_environment.create');


Route::get('scheluding_environment/index', function (){
    return view('scheluding_environment.index');
})->name('scheluding_environment.index');

Route::get('scheluding_environment/edit', function (){
    return view('scheluding_environment.edit');
})->name('scheluding_environment.edit');
