<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

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

Route::get('/', [QuizController::class, 'index'])->name('index');
Route::post('/start', [QuizController::class, 'start'])->name('start');
Route::get('/quiz', [QuizController::class, 'quiz'])->name('quiz');
Route::post('/submit', [QuizController::class, 'submit']);
