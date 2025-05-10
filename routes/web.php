<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChampionshipController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QuestionSetController;
use App\Http\Controllers\TController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\GameModeController;
use App\Http\Controllers\InsightController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WController;
use App\Http\Controllers\BulkQuestionController;


Route::get('/add_set', [QuestionSetController::class, 'create'])->name('question_set.new');
Route::get('/all_sets', [QuestionSetController::class, 'all_set'])->name('question_set.all');
Route::post('/question_set', [QuestionSetController::class, 'store'])->name('question_set.store');

Route::get('/add_championship', [ChampionshipController::class, 'create'])->name('championship.new');
Route::get('/all_championships', [ChampionshipController::class, 'all_champs'])->name('championship.all');
Route::post('/championship', [ChampionshipController::class, 'store'])->name('championship.store');

Route::get('/add_question', [QuestionController::class, 'create'])->name('question.new');
Route::get('/question_bank', [QuestionController::class, 'all_questions'])->name('question.all');
Route::post('/question', [QuestionController::class, 'store'])->name('question.store');

Route::get('/add_bulk_question', [BulkQuestionController::class, 'create'])->name('bulk_question.new');
Route::post('/bulk_question', [BulkQuestionController::class, 'store'])->name('bulk_question.store');

Route::get('/add_new_mode', [GameModeController::class, 'create'])->name('mode.new');
Route::get('/all_game_modes', [GameModeController::class, 'all_modes'])->name('mode.all');
Route::post('/mode', [GameModeController::class, 'store'])->name('mode.store');


Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup.form');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/all_categories', [CategoryController::class, 'all_category'])->name('category.all');

Route::get('/analytics', [AnalyticsController::class, 'show'])->name('analytics');

Route::get('/insights', [InsightController::class, 'insights'])->name('insights');

Route::get('/terms-and-conditions', [TController::class, 'show'])->name('terms&conditions');
Route::get('/help', [HelpController::class, 'show'])->name('help');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::get('/wrong_questions', [WController::class, 'show'])->name('wrong_questions');


Route::get('/privacy-page', function () {
    return view('privacy_page');
});

Route::get('/forgot-password', function () {
    return view('forgot_password');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
