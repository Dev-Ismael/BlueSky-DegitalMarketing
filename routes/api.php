<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/*===========================================================
====== Web APIs
============================================================*/
Route::get('services' , [App\Http\Controllers\ServiceController::class, 'index'])->name("service.index");
Route::get('service/show/{slug}' , [App\Http\Controllers\ServiceController::class, 'getService'])->name("service.show");
Route::get('settings' , [App\Http\Controllers\SettingController::class, 'show'])->name("settings.show");
Route::post('messege/store' , [App\Http\Controllers\MessegeController::class, 'store'])->name("settings.store");


/*===========================================================
====== Admin APIs
============================================================*/
Route::group([ 'prefix' => 'admin' ] , function(){     // URL ==> 'api/admin' ,


    Route::get('user',  [\App\Http\Controllers\Admin\HomeController::class, 'index']);

    // Services
    Route::resource('service', '\App\Http\Controllers\Admin\ServiceController');
    Route::post('service/search' , [App\Http\Controllers\Admin\ServiceController::class, 'search'])->name("service.search");
    Route::post('service/multiAction' , [App\Http\Controllers\Admin\ServiceController::class, 'multiAction'])->name("service.multiAction");

    // Settings
    Route::get('settings' , [App\Http\Controllers\Admin\SettingController::class, 'show'])->name("settings.show");
    Route::post('settings' , [App\Http\Controllers\Admin\SettingController::class, 'update'])->name("settings.update");


});
