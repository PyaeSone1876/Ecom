<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;   
use App\Http\Controllers\TestController;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\admin\ClientController;


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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post("login", [TestController::class,'login']);
// Route::post("clogin",[ClientController::class, 'Clientlogin']);

// testing register login
Route::post("Uregister",[AuthController::class,'createUser']);
Route::post("Ulogin",[AuthController::class,'loginUser']);
Route::get("test",[AuthController::class,'test'])->middleware('auth:api');

//testing product 



