<?php

use Illuminate\Support\Facades\Route;

Route::prefix(prefix:'institution') ->group(callback: function(): void{

    Route::get(uri:'login');
});