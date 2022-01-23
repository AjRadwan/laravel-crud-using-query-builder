<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('', [StudentController::class, 'index'])->name('index');
Route::post('addstudent', [StudentController::class, 'create']);
Route::get('addstudent', [StudentController::class, 'show']);
 