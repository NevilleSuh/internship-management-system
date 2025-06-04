<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\auth\AuthController;
use App\Http\Controllers\Student\HomeController;
use App\Http\Controllers\Student\ProfileController;


Route::prefix('student')->group(function () {

    Route::get('register', [AuthController::class, 'showRegister'])->name('register.show');
    Route::post('register-perform', [AuthController::class, 'register'])->name('register.perform');

        Route::get('logout', [AuthController::class, 'logout'])->name('student.logout');


        Route::get('home', [HomeController::class, 'showHome'])->name('show.home');

        // Complaint Controller
        Route::get('profile', [ProfileController::class, 'showProfile'])->name('show.profile');
        // Route::get('/courses/filter', [ComplainController::class, 'filterCourses'])->name('courses.filter');
        // Route::post('create-complain', [ComplainController::class, 'createComplain'])->name('create.complain');

});