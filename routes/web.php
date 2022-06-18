<?php

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
Route::post('/users',[userController::class,'store']);
Route::get('/contact', function(){
    return view('pages.contact');
});
Route::get('/departments',[departmentsController::class,'index']);
Route::get('/departments/{department}',[departmentsController::class,'show']);

Route::get('/admin/home', function(){
    return view('admin.pages.home');
});
//show registration
Route::get('/register',[userController::class, 'create']);