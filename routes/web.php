<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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
    return view('index.layouts.layout');
});
Route::get('/admin', function () {
    return view('admin.layouts.adminlayout');
});
Route::get('/contact', function(){
    return view('pages.contact');
});

Route::get('/home', function(){
    return view('user.pages.home');
});
Route::get('/admin/home', function(){
    return view('admin.pages.adminhome');
});
//show registration
Route::get('/register',[userController::class, 'create']);