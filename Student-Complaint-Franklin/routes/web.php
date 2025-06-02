<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('show.login');

Route::post('/login-perform', [AuthController::class, 'login'])->name('login.perform');

include 'student.php';
include 'admin.php';
include 'institution.php';