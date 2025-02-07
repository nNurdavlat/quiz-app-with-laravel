<?php

use Illuminate\Support\Facades\Route;


// Main pages
Route::get('/', function () { return view('welcome'); });
Route::get('/login', function () { return view('auth.login'); });
Route::get('/register', function () { return view('auth.register'); });


//  After register or login
Route::get('/dashboard', function () { return view('dashboard.home'); });
Route::get('/dashboard/quizzes', function () { return view('dashboard.quizzes'); });
Route::get('/dashboard/create-quiz', function () { return view('dashboard.create-quiz'); });
Route::get('/dashboard/statistics', function () { return view('dashboard.statistics'); });
Route::get('/about', function () { return view('about'); });
Route::get('/take-quiz', function () { return view('quiz.take-quiz'); });
