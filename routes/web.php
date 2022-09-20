<?php

use Illuminate\Support\Facades\Auth;
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




Auth::routes();






/*===========================================================
====== Web Routes
============================================================*/
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/{service_slug}', [App\Http\Controllers\ServiceController::class, 'show'])->name('service.show');
// Route::get('/portfolio', [App\Http\Controllers\ProjectController::class, 'index'])->name('portfolio');
// Route::get('/portfolio/{slug}', [App\Http\Controllers\ProjectController::class, 'show'])->name('portfolio.project');





/*===========================================================
====== Admin Routes
============================================================*/
Route::get('admin/{any}', [App\Http\Controllers\Admin\AdminController::class, 'index'])
->middleware('auth')   -> where([ "any" => ".*" ]);
