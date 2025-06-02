<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ComplainController;


Route::prefix('admin')->group(function () {

        Route::get('dashboard', [DashboardController::class, 'showDashboard'])->name('show.dashboard');
        Route::get('logout', [DashboardController::class, 'logout'])->name('admin.logout');



            // Department Routes
            Route::get('departments', [DepartmentController::class, 'showDepartments'])->name('show.department');
            Route::post('create-department', [DepartmentController::class, 'createDepartment'])->name('create.department');
            Route::put('update-department/{id}', [DepartmentController::class, 'updateDepartment'])->name('update.department');
            Route::delete('delete-department/{id}', [DepartmentController::class, 'deleteDepartment'])->name('delete.department');


             // Courses Routes
            Route::get('courses', [CourseController::class, 'showCourses'])->name('show.course');
            Route::post('create-course', [CourseController::class, 'createCourse'])->name('create.course');
            Route::put('update-course/{id}', [CourseController::class, 'updateCourse'])->name('update.course');
            Route::delete('delete-course/{id}', [CourseController::class, 'deleteCourse'])->name('delete.course');



        //Admin Routes
            Route::get('admins', [AdminController::class, 'showAdmins'])->name('show.admin');
            Route::post('create-admin', [AdminController::class, 'createAdmin'])->name('create.admin');
            Route::put('update-admin/{id}', [AdminController::class, 'updateAdmin'])->name('update.admin');
            Route::delete('delete-admin/{id}', [AdminController::class, 'deleteAdmin'])->name('delete.admin');

        //Complain ROutes
        Route::get('ca-complains',  [ComplainController::class, 'showCaComplain'])->name('ca.complain');
        Route::get('exam-complains',  [ComplainController::class, 'showExamComplain'])->name('exam.complain');
        Route::get('other-complains',  [ComplainController::class, 'showOtherComplain'])->name('other.complain');
        Route::put('resolve-complaint/{id}', [ComplainController::class, 'resolveComplain'])->name('resolve.complain');
        Route::put('decline-complaint/{id}', [ComplainController::class, 'declineComplain'])->name('decline.complain');

});
