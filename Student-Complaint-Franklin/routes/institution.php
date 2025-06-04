<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Institution\auth\AuthController;
use App\Http\Controllers\Institution\PostController;
use App\Http\Controllers\Institution\ApplicationController;


Route::prefix('institution')->group(function () {

    Route::get('login', [AuthController::class, 'showLogin'])->name('show.login');
    Route::post('login-perform', [AuthController::class, 'login'])->name('perform.login');


    // Post Routes
    Route::get('post', [PostController::class, 'showPost'])->name('show.post');
    Route::post('post-perform', [PostController::class, 'post'])->name('perform.post');

    //Applications Routes
    Route::get('application', [ApplicationController::class, 'showApplications'])->name('show.application');
});