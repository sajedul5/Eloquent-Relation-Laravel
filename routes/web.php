<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RoleController;

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

Route::get('/student-list',[StudentController::class, 'studentList']);
Route::get('/add-student',[StudentController::class, 'addData']);
Route::get('/fetch-student/{id}',[StudentController::class, 'fetchStudentData']);

Route::get('/add-students',[StudentController::class, 'addStudent']);
Route::get('/add-subject/{id}',[StudentController::class, 'addSubject']);
Route::get('/get-subject-by-student/{id}',[StudentController::class, 'getSubjectBystudentId']);

Route::get('/add-role', [RoleController::class, 'addRole']);
Route::get('/add-user', [RoleController::class, 'addUser']);
Route::get('/get-user-role/{id}', [RoleController::class, 'getRoleByUserID']);
Route::get('/get-role-userid/{id}', [RoleController::class, 'getUserByRoleId']);

