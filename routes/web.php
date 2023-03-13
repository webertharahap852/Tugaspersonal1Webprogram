<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/coach', function () {
    return view('coach');
});
Route::get('/testimonial', function () {
    return view('testimon');
});
Route::get('/services', function () {
    return view('service');
});
Route::get('/contact', function () {
    return view('contact');
});
