<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\QuestionController;

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
    return redirect()->to('/exam');
});




// Resource Route for article.
Route::resource('/exam', ExamController::class);

Route::resource('/questions', QuestionController::class);

Route::get('/exam/delete/{id}', [ExamController::class, 'destroy']);

