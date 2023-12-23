<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;

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





Route::get('/', [AuthController::class, 'index']);
 


//Route::middleware('auth')->group(function () {
//     Route::get('/', [AuthController::class, 'index']);
// });






//Route::get('/attendance', [AttendanceController::class, 'index1']);
//Route::post('/attendance', [AttendanceController::class, 'index1']);
//Route::post('/attendance/end', [AttendanceController::class, 'index1']);

Route::post('/attendance/index2', [AttendanceController::class, 'index2']);
Route::post('/attendance/start', [AttendanceController::class, 'indexstart']);
Route::post('/attendance/end', [AttendanceController::class, 'indexend']);
Route::post('/attendance/rest', [AttendanceController::class, 'indexend']);
Route::post('/index2', [AttendanceController::class, 'index2']);


Route::get('/login', [AuthController::class, 'login']);