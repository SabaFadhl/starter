<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\UserController;
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
        return view('welcome')->with(['name'=>'saba fadl','age'=>23]);
    });

 Route::get('index',[UserController::class,'getIndex']);
// Route::get('index','Front/UserController@getIndex');

Route::get('/landing', function () {
    return view('landing');
});
Route::get('/about', function () {
    return view('about');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes(['verify' => true]);
