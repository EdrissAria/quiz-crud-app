<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');

Route::middleware(['auth', 'cors'])->group(function () {
    //controller for quizzes
    Route::post('/quiz/{quiz}/complete', [\App\Http\Controllers\QuizController::class, 'complete'])->name('quiz.complete'); 
    Route::resource('/quiz', App\Http\Controllers\QuizController::class)->names([
        'index' => 'quiz', 'create' => 'create-quiz']);

    //contorlller for questions
    Route::resource('quiz.question',  App\Http\Controllers\QuestionController::class);
    //controller for options
    Route::post('quiz/{quiz}/question/{question}/option', [\App\Http\Controllers\OptionController::class, 'store'])
    ->name('quiz.question.option.store');
    Route::get('quiz/{quiz}/question/{question}/option/create', [\App\Http\Controllers\OptionController::class, 'create'])
    ->name('quiz.question.option.create');
    Route::post('quiz/{quiz}/question/{question}/singlestore', [\App\Http\Controllers\OptionController::class, 'singleStore'])
    ->name('quiz.question.option.signleStore');
    Route::delete('quiz/{quiz}/question/{question}/option/{option}/destroy', [\App\Http\Controllers\OptionController::class, 'destroy'])
    ->name('quiz.question.option.destroy');
});


