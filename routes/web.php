<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobsController;
use App\Http\Controllers\userController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\applicationController;
use App\Http\Controllers\departmentsController;
use GuzzleHttp\Middleware;

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

Route::get('/',[jobsController::class,'preview']);
Route::get('/joblist',[jobsController::class,'userindex']);
Route::get('/joblist/job/{job}',[jobsController::class,'show']);
Route::get('/register',[userController::class,'register']);
Route::get('/register',[userController::class, 'create']);
Route::post('/users',[userController::class,'store']);
Route::post('/logout',[userController::class,'logout'])->middleware('auth');
Route::post('/application',[applicationController::class,'store'])->middleware('auth');
Route::get('/my-profile/user/{id}',[userController::class,'profile']);
Route::get('/login',[userController::class, 'login'])->name('login')->name('login')->middleware('guest');
Route::post('/users/authentication',[userController::class, 'authentication']);
Route::get('download/applicants/{resume}', [applicationController::class,'download']);

Route::get('/departments',[departmentsController::class,'index']);
Route::get('/departments/{department}',[departmentsController::class,'show']);


Route::prefix('/admin')->namespace('App\Http\Controllers')->group(function(){
    Route::match(['get','post'],'login','AdminController@login');
    Route::post('authenticate','AdminController@authenticate'); 
    Route::group(['middleware'=>['admin']],function(){
        Route::get('home','AdminController@index');
        Route::post('logout','AdminController@logout'); 
        Route::get('home/departments','departmentsController@manage');
        Route::get('home/departments/create','departmentsController@create');
        Route::post('home/departments/create/save','departmentsController@store');
        Route::get('home/departments/{department}/edit','departmentsController@edit');
        Route::put('home/departments/{department}/edit/update','departmentsController@update');    
        Route::delete('home/departments/{department}/delete','departmentsController@destroy');
        //jobs routes
        Route::get('home/vacancy','jobsController@manage');
        Route::get('home/vacancy/create','jobsController@create');
        Route::post('home/vacancy/create/save','jobsController@store');
        Route::get('home/vacancy/{job}/edit','jobsController@edit');
        Route::put('home/vacancy/{job}/edit/update','jobsController@update');    
        Route::delete('home/vacancy/{jobs}/delete','jobsController@destroy');
        //application routes
        Route::get('home/applications','applicationController@index');
        Route::get('home/applications/{application}','applicationController@show');
        Route::get('download/applicants/{resume}','applicationController@adminreview');
        Route::post('home/employees/{application}', 'employeeController@store');
        Route::get('home/employees/list', 'employeeController@index');
        Route::get('home/employee/{employees}', 'employeeController@show');
        Route::get('home/employee/{employees}/edit', 'employeeController@edit');
        Route::delete('home/employee/{employees}/delete', 'employeeController@destroy');
        Route::put('home/employees/{employees}/update','employeeController@update');
    });

});
