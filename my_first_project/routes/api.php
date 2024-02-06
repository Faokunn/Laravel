<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('add-teachers', [TeacherController::class, 'adding']);
Route::put('edit-teachers', [TeacherController::class, 'updating']);
Route::delete('delete-teachers', [TeacherController::class, 'deleting']);
Route::get('view-teachers', [TeacherController::class, 'viewing']);

Route::post('add-students', [StudentController::class, 'adding']);
Route::put('edit-students', [StudentController::class, 'updating']);
Route::delete('delete-students', [StudentController::class, 'deleting']);
Route::get('view-students', [StudentController::class, 'viewing']);
