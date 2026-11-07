<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::redirect('/contact', '/#contact');
Route::redirect('/education', '/#education');
Route::redirect('/skills', '/#skills');
Route::redirect('/certificates', '/#certificates');
