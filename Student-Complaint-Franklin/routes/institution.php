<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Institution\auth\AuthController;
use App\Http\Controllers\Institution\PostController;
use App\Http\Controllers\Institution\ApplicationController;


Route::prefix('institution')->group(function () {

    // Route::get('login', [AuthController::class, 'showLogin'])->name('show.login');
    // Route::post('login-perform', [AuthController::class, 'login'])->name('perform.login');


    // Post Routes
    Route::get('post', [PostController::class, 'showPost'])->name('show.post');
    Route::post('post-perform', [PostController::class, 'post'])->name('perform.post');
    Route::delete('delete-post/{id}', [PostController::class, 'deletePost'])->name('delete.post');

    //Applications Routes
    Route::get('application', [ApplicationController::class, 'showApplications'])->name('show.application');
    Route::put('accept-application/{id}', [ApplicationController::class, 'acceptApplication'])->name('accept.application');
    Route::put('reject-application/{id}', [ApplicationController::class, 'declineApplication'])->name('reject.application');
});