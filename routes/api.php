<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppItemController;
use App\Http\Controllers\ProcurementController;

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

Route::middleware('auth:sanctum')->get('/athenticated', function () {
    return true;
});
// App Model
Route::middleware('api')->group(function () {
    Route::get('appitems', [AppItemController::class, 'getAppData']);
});

Route::middleware('api')->group(function () {
    Route::get('appitems/{id}', [AppItemController::class, 'show']);
});

// Procurement
Route::middleware('api')->group(function () {
    Route::get('tbl_procurement', [ProcurementController::class, 'generatePRNo']);
});


//inserting data
Route::post('ReservedPurchaseNo', 'ProcurementController@ReservedPurchaseNo');
Route::post('savePR', 'ProcurementController@savePR');




Route::post('login', 'LoginController@login');
Route::post('logout', 'LoginController@logout');
Route::post('register', 'RegisterController@register');
Route::get('user_profile', 'UserController@user_profile');



