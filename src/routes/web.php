<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\UsersController;


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

//Route::get('/', function () {
//    return view('welcome');
//});



Route::get('/mirudake', [UsersController::class, 'mirudake']);


Route::get('/login', [UsersController::class, 'login']);
Route::post('/login', [usersController::class, 'thanks']);

Route::post('/register', [UsersController::class, 'register']);
Route::get('/register', [UsersController::class, 'create']);


//Route::get('/register', [UsersController::class, 'register']);
//Route::get('/register', [UsersController::class, 'thanks']);
//Route::post('/register', [UsersController::class, 'register']);


Route::get('/attendance', [AttendanceController::class, 'attendance']);
Route::post('/attendance', [AttendanceController::class, 'atten']);


Route::get('/recode', [AttendanceController::class, 'recode']);
//Route::get('/register', [AttendanceController::class, 'register']);

//Route::post('/', [UsersController::class, 'login']);
Route::get('/thanks', [AttendanceController::class, 'thanks']);
Route::post('/thanks', [AttendanceController::class, 'thanks']);
//Route::post('/thanks', [usersController::class, 'data']);



//Route::middleware('auth')->group(function () {
//Route::get('/', [UsersController::class, 'index']);


Route::get('/nation', [AttendanceController::class, 'nation']);
Route::get('/worktime', [AttendanceController::class, 'work_time']);
//});











