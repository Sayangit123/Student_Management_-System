<?php

use Illuminate\Support\Facades\Route;
// use Iluminate\App\Http\Controllers\projectcontroller;
use App\Http\Controllers\project;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PlacementController;
use App\Http\Controllers\Admin\InstructorController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ChartController;


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
    return view('welcome');
});


route::get('/details/{id}',[project::class,'show1']);
Route::get("/home",[project::class,'home']);
Route::get("/courses",[project::class,'course']);

Route::get("/instructor",[project::class,'Instructors']);
Route::get("/placements",[project::class,'placements']);
Route::get("/about",[project::class,'about']);
Route::get("/privacy",[project::class,'privacy']);
Route::get("/terms",[project::class,'terms']);

//route::get('/placments',[project::class,'hiring']);




Route::get("/login",[logincontroller::class,'index1']); //login page
Route::get('/signup',[logincontroller::class,'create']); //signup or registration page
Route::post("/login2",[logincontroller::class,'login']);
Route::post("/submit",[logincontroller::class,'submit1']);
Route::get('/logout',[logincontroller::class,'logout'])->name('logout');
Route::get('/welcome2',[logincontroller::class,'welcome']); //welcom page after login



//Admin section

Route::get('dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
Route::get('users',[DashboardController::class,'users'])->name('admin.users');
Route::get('create',[DashboardController::class,'create'])->name('admin.create');
Route::post('store',[DashboardController::class,'store'])->name('admin.store');
Route::get('edit/{id}',[DashboardController::class,'edit'])->name('admin.edit');
Route::post('update',[DashboardController::class,'update'])->name('admin.update');
Route::delete('delete/{id}', [DashboardController::class, 'delete'])->name('admin.delete');


Route::get('placements/index',[PlacementController::class,'index'])->name('placements');
Route::get('placements/create',[PlacementController::class,'create'])->name('placements.create');
Route::post('placements/store',[PlacementController::class,'store'])->name('placements.store');
Route::get('placements/edit/{id}',[PlacementController::class,'edit'])->name('placements.edit');
Route::post('placements/update',[PlacementController::class,'update'])->name('placements.update');
Route::delete('placements/delete/{id}', [PlacementController::class, 'delete'])->name('placements.delete');


Route::get('instructors/index',[InstructorController::class,'index'])->name('instructors');
Route::get('instructors/create',[InstructorController::class,'create'])->name('instructors.create');
Route::post('instructors/store',[InstructorController::class,'store'])->name('instructors.store');
Route::get('instructors/edit/{id}',[InstructorController::class,'edit'])->name('instructors.edit');
Route::post('instructors/update',[InstructorController::class,'update'])->name('instructors.update');
Route::delete('instructors/delete/{id}', [InstructorController::class, 'delete'])->name('instructors.delete');


Route::get('courses/index',[CourseController::class,'index'])->name('courses');
Route::get('courses/create',[CourseController::class,'create'])->name('courses.create');
Route::post('courses/store',[CourseController::class,'store'])->name('courses.store');
Route::get('courses/edit/{id}',[CourseController::class,'edit'])->name('courses.edit');
Route::post('courses/update',[CourseController::class,'update'])->name('courses.update');
Route::delete('courses/delete/{id}', [CourseController::class, 'delete'])->name('courses.delete');

Route::get('/bar-chart', [DashboardController::class, 'show']);
Route::get('/user-pie-chart', [DashboardController::class, 'userPieChart']);
