<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Route::resource('/questions', QuestionController::class)
    ->except(['index', 'show'])
    ->middleware('auth');
    return Inertia::render('Question/Index');
});
