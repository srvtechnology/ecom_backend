<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// admin-all-routes
Route::post('/admin-register','Admin\Modules\Auth\AuthController@register')->name('admin.register');
Route::post('/admin-login','Admin\Modules\Auth\AuthController@login')->name('admin.login');

// user-category
Route::post('/user-category-add','Modules\Category\CategoryController@add')->name('admin.login');
Route::middleware('auth:api')->group(function () {
   
});