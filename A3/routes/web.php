<?php

use App\Http\Controllers\CareerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnvironmetTypeController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\LearningEnvironmentController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SchedulingEnvironmentController;
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
    return view('index');
})->name('index');

Route::get('/test2', function () {
    return view('test2');
})->name('test2');

Route::prefix('career')->group(function(){
    Route::get('/index', [CareerController::class, 'index'])->name('career.index');
    Route::get('/create', [CareerController::class, 'create'])->name('career.create');
    Route::get('/edit/{id}', [CareerController::class, 'edit'])->name('career.edit');
    Route::post('/create', [CareerController::class, 'store'])->name('career.store');
    Route::put('/edit/{id}', [CareerController::class, 'update'])->name('career.update');
    Route::get('/destroy/{id}', [CareerController::class, 'destroy'])->name('career.destroy');
});
    Route::prefix('location')->group(function(){
        Route::get('/index', [LocationController::class, 'index'])->name('location.index');
        Route::get('/create', [LocationController::class, 'create'])->name('location.create');
        Route::get('/edit/{id}', [LocationController::class, 'edit'])->name('location.edit');
        Route::post('/create', [LocationController::class, 'store'])->name('location.store');
        Route::put('/edit/{id}', [LocationController::class, 'update'])->name('location.update');
        Route::get('/destroy/{id}', [LocationController::class, 'destroy'])->name('location.destroy');
});

Route::prefix('course')->group(function(){
    Route::get('/index', [CourseController::class, 'index'])->name('course.index');
    Route::get('/create', [CourseController::class, 'create'])->name('course.create');
    Route::get('/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
    Route::post('/create', [CourseController::class, 'store'])->name('course.store');
    Route::put('/edit/{id}', [CourseController::class, 'update'])->name('course.update');
    Route::get('/destroy/{id}', [CourseController::class, 'destroy'])->name('course.destroy');
});

Route::prefix('instructor')->group(function(){
    Route::get('/index', [InstructorController::class, 'index'])->name('instructor.index');
    Route::get('/create', [InstructorController::class, 'create'])->name('instructor.create');
    Route::get('/edit/{id}', [InstructorController::class, 'edit'])->name('instructor.edit');
    Route::post('/create', [InstructorController::class, 'store'])->name('instructor.store');
    Route::put('/edit/{id}', [InstructorController::class, 'update'])->name('instructor.update');
    Route::get('/destroy/{id}', [InstructorController::class, 'destroy'])->name('instructor.destroy');
});

Route::prefix('enviromet_type')->group(function(){
    Route::get('/index', [EnvironmetTypeController::class, 'index'])->name('enviromet_type.index');
    Route::get('/create', [EnvironmetTypeController::class, 'create'])->name('enviromet_type.create');
    Route::get('/edit/{id}', [EnvironmetTypeController::class, 'edit'])->name('enviromet_type.edit');
    Route::post('/create', [EnvironmetTypeController::class, 'store'])->name('enviromet_type.store');
    Route::put('/edit/{id}', [EnvironmetTypeController::class, 'update'])->name('enviromet_type.update');
    Route::get('/destroy/{id}', [EnvironmetTypeController::class, 'destroy'])->name('enviromet_type.destroy');
});

Route::prefix('enviromet_type')->group(function(){
    Route::get('/index', [EnvironmetTypeController::class, 'index'])->name('enviromet_type.index');
    Route::get('/create', [EnvironmetTypeController::class, 'create'])->name('enviromet_type.create');
    Route::get('/edit/{id}', [EnvironmetTypeController::class, 'edit'])->name('enviromet_type.edit');
    Route::post('/create', [EnvironmetTypeController::class, 'store'])->name('enviromet_type.store');
    Route::put('/edit/{id}', [EnvironmetTypeController::class, 'update'])->name('enviromet_type.update');
    Route::get('/destroy/{id}', [EnvironmetTypeController::class, 'destroy'])->name('enviromet_type.destroy');
});

Route::prefix('learning_environment')->group(function(){
    Route::get('/index', [LearningEnvironmentController::class, 'index'])->name('learning_environment.index');
    Route::get('/create', [LearningEnvironmentController::class, 'create'])->name('learning_environment.create');
    Route::get('/edit/{id}', [LearningEnvironmentController::class, 'edit'])->name('learning_environment.edit');
    Route::post('/create', [LearningEnvironmentController::class, 'store'])->name('learning_environment.store');
    Route::put('/edit/{id}', [LearningEnvironmentController::class, 'update'])->name('learning_environment.update');
    Route::get('/destroy/{id}', [LearningEnvironmentController::class, 'destroy'])->name('learning_environment.destroy');
});

Route::prefix('learning_environment')->group(function(){
    Route::get('/index', [LearningEnvironmentController::class, 'index'])->name('learning_environment.index');
    Route::get('/create', [LearningEnvironmentController::class, 'create'])->name('learning_environment.create');
    Route::get('/edit/{id}', [LearningEnvironmentController::class, 'edit'])->name('learning_environment.edit');
    Route::post('/create', [LearningEnvironmentController::class, 'store'])->name('learning_environment.store');
    Route::put('/edit/{id}', [LearningEnvironmentController::class, 'update'])->name('learning_environment.update');
    Route::get('/destroy/{id}', [LearningEnvironmentController::class, 'destroy'])->name('learning_environment.destroy');
});

Route::prefix('scheduling_environment')->group(function(){
    Route::get('/index', [SchedulingEnvironmentController::class, 'index'])->name('scheduling_environment.index');
    Route::get('/create', [SchedulingEnvironmentController::class, 'create'])->name('scheduling_environment.create');
    Route::get('/edit/{id}', [SchedulingEnvironmentController::class, 'edit'])->name('scheduling_environment.edit');
    Route::post('/create', [SchedulingEnvironmentController::class, 'store'])->name('scheduling_environment.store');
    Route::put('/edit/{id}', [SchedulingEnvironmentController::class, 'update'])->name('scheduling_environment.update');
    Route::get('/destroy/{id}', [SchedulingEnvironmentController::class, 'destroy'])->name('scheduling_environment.destroy');
});

