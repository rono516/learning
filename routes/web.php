<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'root']);

Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);
// Route::get('/logout',[Auth\LoginController::class, 'logout']);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('perm:1');
    Route::get('/courses/create', [CoursesController::class, 'create'])->name('courses.create');
    Route::get('/courses/edit/{id}', [CoursesController::class, 'edit'])->name('courses.edit');
    Route::post('/courses/update/{id}', [CoursesController::class, 'update'])->name('courses.update');
    Route::post('/courses/delete', [CoursesController::class, 'delete'])->name('courses.delete');
    Route::get('/students/view', [StudentController::class, 'index'])->name('students.view');
    Route::post('/courses/store', [CoursesController::class, 'store']);
    Route::get('start_course/{id}', [HomeController::class, 'start']);
    Route::get('/my_courses', [HomeController::class, 'my_courses']);
    Route::get('/all_courses', [HomeController::class, 'all_courses']);
    Route::get('/course_detail/{id}', [HomeController::class, 'course_detail']);
    Route::get('/module_view/{id}', [HomeController::class, 'module_view']);
    Route::post('/modules/store', [ModuleController::class, 'store_module']);
    Route::post('/modules/delete', [ModuleController::class, 'delete'])->name('module.delete');
});
