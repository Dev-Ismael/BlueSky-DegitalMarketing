<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*======================================================
========== Controllers
=======================================================*/
use App\Http\Controllers\Admin\HomeController;



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

Route::group([ 'prefix' => 'admin' ] , function(){     // URL ==> 'api/admin' ,

    Route::get('user',  [HomeController::class, 'index']);

});
