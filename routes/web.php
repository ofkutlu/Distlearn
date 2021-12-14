<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();
Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/faculties', [AdminController::class, 'faculties'])->name('faculties');
Route::get('/admin/departments', [AdminController::class, 'departments'])->name('departments');
Route::get('/admin/teachers', [AdminController::class, 'teachers'])->name('teachers');
Route::get('/admin/students', [AdminController::class, 'students'])->name('students');
Route::get('/admin/courses', [AdminController::class, 'courses'])->name('courses');
Route::get('/admin/faculties/add_faculty', [AdminController::class, 'faculties_add'])->name('faculties_add');
Route::get('/admin/departments/add_department', [AdminController::class, 'departments_add'])->name('departments_add');
Route::get('/admin/teachers/add_teachers', [AdminController::class, 'teachers_add'])->name('teachers_add');
Route::get('/admin/students/add_student', [AdminController::class, 'students_add'])->name('students_add');
Route::get('/admin/courses/add_course', [AdminController::class, 'courses_add'])->name('courses_add');
