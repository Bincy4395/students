<?php

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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/students', ['uses' => 'StudentsController@index']);*/
/*Route::get('/students', 'StudentsController@index');*/

Route::prefix('students')->group(function () {

    Route::get('/', [App\Http\Controllers\StudentsController::class, 'index'])->name('students');
    Route::get('/add', [App\Http\Controllers\StudentsController::class, 'add']);
    Route::post('/save', [App\Http\Controllers\StudentsController::class, 'save']);
    Route::post('/update/{id}', [App\Http\Controllers\StudentsController::class, 'update']);
    Route::get('/edit/{id}', [App\Http\Controllers\StudentsController::class, 'edit']);
    Route::get('/delete/{id}', [App\Http\Controllers\StudentsController::class, 'delete']);


    
    Route::prefix('marks')->group(function () {

        Route::get('/', [App\Http\Controllers\StudentsMarkController::class, 'index'])->name('students/marks');
        Route::get('/add', [App\Http\Controllers\StudentsMarkController::class, 'add']);
        Route::post('/save', [App\Http\Controllers\StudentsMarkController::class, 'save']);
        Route::post('/update/{id}', [App\Http\Controllers\StudentsMarkController::class, 'update']);
        Route::get('/edit/{id}', [App\Http\Controllers\StudentsMarkController::class, 'edit']);
        Route::get('/delete/{id}', [App\Http\Controllers\StudentsMarkController::class, 'delete']);
    });
});




