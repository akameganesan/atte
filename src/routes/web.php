<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});





//Route::get('/', [AuthController::class, 'index']);
//Route::post('/', [AuthController::class, 'index']);



Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
});






//Route::get('/attendance', [AttendanceController::class, 'index1']);
//Route::post('/attendance', [AttendanceController::class, 'index1']);
//Route::post('/attendance/end', [AttendanceController::class, 'index1']);

Route::get('/attendance/index2', [AttendanceController::class, 'index2']);
Route::post('/attendance/index2', [AttendanceController::class, 'index2']);

Route::get('/attendance/start', [AttendanceController::class, 'indexstart']);
Route::post('/attendance/start', [AttendanceController::class, 'indexstart']);

Route::get('/attendance/end', [AttendanceController::class, 'indexend']);
Route::post('/attendance/end', [AttendanceController::class, 'indexend']);

Route::get('/attendance/rest', [AttendanceController::class, 'indexend']);
Route::post('/attendance/rest', [AttendanceController::class, 'indexend']);

Route::get('/index2', [AttendanceController::class, 'index2']);
Route::post('/index2', [AttendanceController::class, 'index2']);

Route::get('/list', [AttendanceController::class, 'recode']);
Route::post('/list', [AttendanceController::class, 'recode']);

Route::get('/tasu', [AttendanceController::class, 'tasu']);
Route::post('/tasu', [AttendanceController::class, 'tasu']);

Route::get('/hiku', [AttendanceController::class, 'hiku']);
Route::post('/hiku', [AttendanceController::class, 'hiku']);

Route::get('/hiduke', [AttendanceController::class, 'hiduke']);
Route::post('/hiduke', [AttendanceController::class, 'hiduke']);

Route::get('/day_contena', [AttendanceController::class, 'day_contena']);
Route::post('/day_contena', [AttendanceController::class, 'day_contena']);

Route::get('/day_contena2', [AttendanceController::class, 'day_contena2']);
Route::post('/day_contena2', [AttendanceController::class, 'day_contena2']);

Route::get('/day_contena2', [AttendanceController::class, 'day_contena2']);
Route::post('/day_contena2', [AttendanceController::class, 'day_contena2']);

Route::get('/list0', [AttendanceController::class, 'recode2']);
Route::post('/list0', [AttendanceController::class, 'recode2']);

Route::get('/list1', [AttendanceController::class, 'recode1']);
Route::post('/list1', [AttendanceController::class, 'recode1']);


Route::get('/list_end', [AttendanceController::class, 'recode_end']);
Route::post('/list_end', [AttendanceController::class, 'recode_end']);


Route::get('/list_end_1', [AttendanceController::class, 'recode_end_1']);
Route::post('/list_end_1', [AttendanceController::class, 'recode_end_1']);






// day_contena2(

//Route::get('/register', [UsersController::class, 'create']);
//Route::post('/register', [UsersController::class, 'register']);


//Route::get('/login', [AuthController::class, 'login']);

//Route::post('/logout', [AuthController::class, 'login']);


Route::get('/thanks', [AttendanceController::class, 'thanks']);