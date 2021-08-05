<?php

use App\Http\Controllers\Management\MenuController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/management' , function(){
    return view("management.index");
});

Route::resource('management/category','App\Http\Controllers\Management\CategoryController');

Route::resource('management/menu','App\Http\Controllers\Management\MenuController');

// Route::post('post/{id}',[MenuController::class,'store'])->name('postproduct');
