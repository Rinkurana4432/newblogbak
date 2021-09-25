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
    return redirect('/login');
});

Auth::routes();


	
	Route::group(['middleware' => 'auth'], function () {	
		Route::get('/home', [App\Http\Controllers\IndexController::class, 'index']);
		
		Route::get('/employee', [App\Http\Controllers\EmployeeController::class, 'index']);		
		Route::match(['GET','POST'],'/addemployee',[App\Http\Controllers\EmployeeController::class, 'addEmp']);
		
    });