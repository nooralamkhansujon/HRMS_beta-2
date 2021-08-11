<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    // return $request->user();
    return Auth::guard('sanctum')->user();

});
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/logout',[LogoutController::class,'logout']);

    ///employee routes
    Route::post('/employees/store',[EmployeeController::class,'store']);

    //departments
    Route::get('/department/list',[DepartmentController::class,'index']);
    Route::get('/department/show/{id}',[DepartmentController::class,'show']);
    Route::post('/department/store',[DepartmentController::class,'store']);
    Route::post('/department/update/{id}',[DepartmentController::class,'update']);
    Route::delete('/department/destroy/{id}',[DepartmentController::class,'destroy']);
});



Route::post('/login',[LoginController::class,'login']);