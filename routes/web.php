<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\TeacherController1;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VideoController;
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

Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/', [HomeController::class, 'index1'])->name('home');
Route::get('/student', [StudentController::class, 'index'])->name('student');
Route::get('/student/weeks', [StudentController::class, 'student_weeks'])->name('student_weeks');
Route::get('/student/weeks/content', [StudentController::class, 'student_content'])->name('student_content');
Route::get('/teacher', [TeacherController1::class, 'index'])->name('teacher');
Route::get('/teacher/weeks', [TeacherController1::class, 'teacher_weeks'])->name('teacher_weeks');
Route::get('/teacher/weeks/content', [TeacherController1::class, 'teacher_content'])->name('teacher_content');
Route::get('/admin', [AdminController::class, 'login'])->name('admin');
Route::get('admin/faculties', [AdminController::class, 'faculties'])->name('faculties');
Route::resource('/admin/departments', DepartmentController::class);
Route::get('delete_department/{id}', [DepartmentController::class, 'destroy']);
// Route::get('/admin/teachers', [TeacherController::class, 'teachers'])->name('teachers');
Route::resource('/admin/teachers', TeacherController::class);
Route::get('/admin/students', [AdminController::class, 'students'])->name('students');
Route::get('/admin/courses', [AdminController::class, 'courses'])->name('courses');
Route::get('/admin/faculties/add_faculty', [AdminController::class, 'faculties_add'])->name('faculties_add');
// Route::get('/admin/teachers/add_teacher', [TeacherController::class, 'teachers_add'])->name('teachers_add');
Route::get('/admin/students/add_student', [AdminController::class, 'students_add'])->name('students_add');
Route::get('/admin/courses/add_course', [AdminController::class, 'courses_add'])->name('courses_add');
Route::post('admin/faculties/add_faculty', [FacultyController::class, 'create']);
Route::get('delete_faculty/{id}', [FacultyController::class, 'delete']);
// Route::post('admin/teachers/add_teacher', [TeacherController::class, 'store']);
Route::get('delete_teacher/{id}', [TeacherController::class, 'destroy']);
Route::post('admin/students/add_student', [StudentController::class, 'create']);
Route::get('delete_student/{id}', [StudentController::class, 'delete']);
Route::post('admin/courses/add_course', [CourseController::class, 'create']);
Route::get('delete_course/{id}', [CourseController::class, 'delete']);
Route::post('uploadVideo', [VideoController::class, 'uploadVideo'])->name('attachments.uploadedVideo');
