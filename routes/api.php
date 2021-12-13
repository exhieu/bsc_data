<?php

use App\Http\Controllers\CanDoiKeToanController;
use App\Http\Controllers\AuthController;
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
//Route::resource('cdkt',CanDoiKeToanController::class);
// Public route
Route::get("/cdkt",[CanDoiKeToanController::class,'index']);
Route::post("/register",[Authcontroller::class,'register']);
Route::post("/login",[Authcontroller::class,'login']);
Route::get("/cdkt/{id}",[CanDoiKeToanController::class,'show']);
Route::get('cdkt/search/{Ticker}',[CanDoiKeToanController::class,'search']);
// Protected route
Route::group(['middleware'=>['auth:sanctum']], function () {
    Route::post('/cdkt',[CanDoiKeToanController::class,'store']);
    Route::put('/cdkt/{id}',[CanDoiKeToanController::class,'update']);
    Route::delete('/cdkt/{id}',[CanDoiKeToanController::class,'destroy']);
    Route::post("/logout",[Authcontroller::class,'logout']);
});
