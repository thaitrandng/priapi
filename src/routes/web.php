<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'/priapi'], function () {
    Route::get('/', function () {
        echo 'It works';
    });
});