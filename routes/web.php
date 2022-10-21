<?php

use App\Http\Controllers\TesteController;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;

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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', [TesteController::class, 'index']);
Route::post('/teste/save', [TesteController::class, 'store']);

Route::get('/author/{id}', [AuthorController::class, 'show']);
Route::get('/tests/author/{id}', [TesteController::class, 'byAuthor']);
Route::get('/tests/type/{id}', [TesteController::class, 'byTestType']);
