<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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

Route::get('/home', [App\Http\Controllers\ProductController::class, 'index'])->name('index');
Route::get('/all',[App\Http\Controllers\TestController::class, 'index']);
Route::post('/store', [App\Http\Controllers\TestController::class, 'store']);
Route::get('/page', function(){
	return view('page');
});


  
Route::resource('products', ProductController::class);

Route::get('/search',[ProductController::class, 'search'])->name('web.search');
Route::get('/find',[ProductController::class, 'find'])->name('web.find');
