<?php

use App\Http\Controllers\BackOffice\DashboardController; // Import the DashboardController class
use App\Http\Controllers\BackOffice\EmployeesController; // Import the EmployeesController class
use App\Http\Controllers\BackOffice\DepartmentsController; // Import the DepartmentsController class
use App\Http\Controllers\BackOffice\UsersController; // Import the UsersController class
use App\Http\Controllers\BackOffice\RolesController; // Import the RolesController class
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

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/employees', [EmployeesController::class, 'index'])->name('employees.index');
Route::get('/departments', [DepartmentsController::class, 'index']);
Route::get('/users', [UsersController::class, 'index']);
Route::get('/roles', [RolesController::class, 'index']);
Route::get('/add-employee', [EmployeesController::class, 'create']);
Route::post('/add-employee', [EmployeesController::class, 'store'])->name('add-employee');
Route::delete('/employees/{id}', [EmployeesController::class, 'destroy'])->name('employees.destroy');