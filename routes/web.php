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

Auth::routes();
//User
Route::get('/addleave', [App\Http\Controllers\LeaveController::class, 'addLeave'])->name('addleave');
Route::get('/getLeavesByUser', [App\Http\Controllers\LeaveController::class, 'getLeavesByUser'])->name('getLeavesByUser');
Route::post('/createleave', [App\Http\Controllers\LeaveController::class, 'createLeave'])->name('createleave');
//Admin
Route::get('/getleave', [App\Http\Controllers\AdminController::class, 'getLeave'])->name('getleave');
Route::get('/acceptleave/{id}', [App\Http\Controllers\AdminController::class, 'acceptleave'])->name('acceptleave');
Route::get('/refuseleave/{id}', [App\Http\Controllers\AdminController::class, 'refuseleave'])->name('refuseleave');
Route::get('/getAllEmployees', [App\Http\Controllers\AdminController::class, 'getAllEmployees'])->name('getAllEmployees');
Route::get('/leavesbyuser/{id}', [App\Http\Controllers\AdminController::class, 'getLeavesByUser'])->name('leavesbyuser');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');