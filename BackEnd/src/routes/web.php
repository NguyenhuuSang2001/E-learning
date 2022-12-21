<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Clients\ExamController;
use App\Http\Controllers\Clients\QuestionController;
use App\Http\Controllers\Clients\QuestionStoreController;
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
})->name('/');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('clients.exam', ExamController::class)->middleware(['auth']);
Route::resource('clients.questionStore', QuestionStoreController::class)->middleware(['auth']);
Route::resource('clients.question', QuestionController::class)->middleware(['auth']);

require __DIR__ . '/auth.php';
