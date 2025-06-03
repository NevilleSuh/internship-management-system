<?php

use Illuminate\Support\Facades\Route;


Route::prefix('institution')->group(function () {

    Route::get('login', function () {

        return view('institution.auth.login');
    });

    Route::get('post', function () {

        return view('institution.post');
    });

    Route::get('view', function () {

        return view('institution.view');
    });
});