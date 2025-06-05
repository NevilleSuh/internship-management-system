<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InstitutionController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\StudentController;



Route::prefix('admin')->group(function () {

    Route::group(['middleware' => ['authenticate:admin']], function(){

        Route::get('dashboard', [DashboardController::class, 'showDashboard'])->name('admin.dashboard');


        // Institutions ROutes
        Route::get('institution', [InstitutionController::class, 'showInstitution'])->name('admin.institution');
        Route::post('add-institution', [InstitutionController::class, 'addInstitution'])->name('admin.add.institution');
        Route::delete('delete-institution/{id}', [InstitutionController::class, 'deleteInstitution'])->name('admin.delete.institution');


        // Institutions ROutes
        Route::get('category', [CategoryController::class, 'showCategory'])->name('admin.category');
        Route::post('add-category', [CategoryController::class, 'addCategory'])->name('admin.add.category');
        Route::delete('delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('admin.delete.category');


        //Students
        Route::get('students', [StudentController::class, 'showStudent'])->name('admin.student');

    });

});
