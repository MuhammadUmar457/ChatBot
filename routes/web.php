<?php

use Illuminate\Support\Facades\Route;

// All the routes for the demo site pages
Route::get('/', function () {return view('index');});
Route::get('/about', function () {return view('about');});
Route::get('/contact', function () {return view('contact');});
Route::get('/courses', function () {return view('courses');});