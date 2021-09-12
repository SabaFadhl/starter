<?php

use App\Http\Controllers\CrudController;
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
Route::get('/fillabe',[CrudController::class,'getOffers']);


Route::group(['prefix'=>'offers'],function(){
    // Route::get('store',[CrudController::class,'store']);
    Route::post('store',[CrudController::class,'store'])->name('offers.store');
    Route::get('create',[CrudController::class,'create']);
    Route::get('all',[CrudController::class,'getOfferAll']);
    Route::get('edit/{offer_id}',[CrudController::class,'editOffer']);
    Route::post('update/{offer_id}',[CrudController::class,'updateOffer'])->name('offers.update');
});
