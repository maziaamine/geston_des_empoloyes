<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\TaskController;
use Illuminate\Support\Facades\Route;



        Route::get('/login', [LoginController::class, 'index'])->name('admin.auth.login');
        Route::post('/login/post', [LoginController::class, 'login'])->name('admin.login');



        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

        // employee routes
        Route::get('/employee/list', [EmployeeController::class, 'index'])->name('admin.employee.list');
        Route::get('/employee/add', [EmployeeController::class, 'add'])->name('admin.employee.add');
        Route::post('/employee/crate', [EmployeeController::class, 'create'])->name('admin.employee.create');
        Route::post('/employee/delete', [EmployeeController::class, 'delete'])->name('admin.employee.delete');
        Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('admin.employee.edit');
        Route::post('/employee/update', [EmployeeController::class, 'update'])->name('admin.employee.update');


        // Task routes



        // department routes

        Route::get('/departments/list', [DepartmentController::class, 'index'])->name('admin.department.list');
        Route::get('/departments/add', [DepartmentController::class, 'add'])->name('admin.department.add');
        Route::post('/departments/store', [DepartmentController::class, 'store'])->name('admin.department.store');
        Route::post('/departments/delete', [DepartmentController::class, 'delete'])->name('admin.department.delete');
        Route::get('/departments/edit/{id}', [DepartmentController::class, 'edit'])->name('admin.department.edit');
        Route::post('/departments/update', [DepartmentController::class, 'update'])->name('admin.department.update');

        // Admin Crud

        
