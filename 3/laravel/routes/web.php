<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/easteregg', function () {
    return view('easteregg');
});

Route::get('/halloween', function () {
    return view('halloween');
});

Route::get('/roman', function () {
    return view('roman');
});

Route::get('/fizzbuzz', function () {
    return view('fizzbuzz');
});