<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\applicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobsController;
use App\Http\Controllers\userController;
use App\Http\Controllers\departmentsController;

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
Route::post('/logout',[userController::class,'logout']);
Route::post('/application',[applicationController::class,'store']);

Route::get('/my-profile/user/{id}',[userController::class,'profile']);
Route::get('/login',[userController::class, 'login']);
Route::post('/users/authentication',[userController::class, 'authentication']);
Route::get('download/applicants/{resume}', [applicationController::class,'download']);
Route::get('/admin',[adminController::class,'login']);
Route::post('/admin/auth',[adminController::class,'authenticate']);
Route::get('/contact', function(){
    return view('pages.contact');
});
Route::get('/departments',[departmentsController::class,'index']);
Route::get('/departments/{department}',[departmentsController::class,'show']);

