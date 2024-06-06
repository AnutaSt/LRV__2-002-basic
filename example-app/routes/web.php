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

Route::get('/', function () {
    return redirect('/groups');
});

Route::get('/groups', [\App\Http\Controllers\GroupController::class, 'index']);

Route::post('/groups', [\App\Http\Controllers\GroupController::class, 'store']);

Route::get('/groups/create', [\App\Http\Controllers\GroupController::class, 'create']);

Route::get('/groups/{group}', [\App\Http\Controllers\GroupController::class, 'show']);

Route::post('/groups/{group}/students', [\App\Http\Controllers\StudentController::class, 'store']);

Route::get('/groups/{group}/students/create', [\App\Http\Controllers\StudentController::class, 'create']);

Route::get('/groups/{group}/students/{student}', [\App\Http\Controllers\StudentController::class, 'show']);