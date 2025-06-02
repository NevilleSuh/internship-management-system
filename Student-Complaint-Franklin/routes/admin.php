<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\InstitutionController;
// use App\Http\Controllers\Admin\AdminController;
// use App\Http\Controllers\Admin\CourseController;
// use App\Http\Controllers\Admin\ComplainController;


Route::prefix('admin')->group(function () {

    Route::get('dashboard', [DashboardController::class, 'showDashboard'])->name('admin.dashboard');


    // Institutions ROutes
    Route::get('institution', [InstitutionController::class, 'showInstitution'])->name('admin.institution');
    Route::post('add-institution', [InstitutionController::class, 'addInstitution'])->name('admin.add.institution');

});
