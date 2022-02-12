<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Models\teacher;
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
    return view('welcome');
});

//schools
Route::get('/schools',[SchoolController::class , 'index']);

Route::get('/schools/{school}',[SchoolController::class , 'show']);

Route::get('/createschool',[SchoolController::class ,'create'])->middleware('admin');

Route::post('/schools',[SchoolController::class ,'add']);

Route::get('/schools/{school}/edit',[SchoolController::class ,'edit'])->middleware('admin');

Route::PATCH('/schools/{school}',[SchoolController::class ,'update']);

Route::DELETE('/schools/{school}',[SchoolController::class ,'destroy'])->middleware('admin');

//stuents
Route::get('/students',[StudentController::class,'index']);

Route::get('/students/{student}',[StudentController::class,'show']);

Route::get('/createstudent',[StudentController::class ,'create'])->middleware('admin');

Route::post('/students',[StudentController::class ,'add']);

Route::get('/students/{student}/edit',[StudentController::class,'edit'])->middleware('admin');

Route::PATCH('/students/{student}',[StudentController::class,'update']);

Route::DELETE('/students/{student}',[StudentController::class,'destroy'])->middleware('admin');

//teachers
Route::get('/teachers',[TeacherController::class , 'index']);

// Route::get('/teachers/{teacher}',[TeacherController::class ,'show']);

Route::get('/createteacher',[TeacherController::class , 'create'])->middleware('admin');

Route::post('/teachers',[TeacherController::class , 'add']);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
