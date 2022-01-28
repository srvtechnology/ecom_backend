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
Route::post('/category-add','Modules\Category\CategoryController@add')->name('category.add');
Route::get('/category-details/{id}','Modules\Category\CategoryController@show')->name('category.details');
Route::post('/category-update','Modules\Category\CategoryController@update')->name('category.update');
Route::get('/category-delete/{id}','Modules\Category\CategoryController@delete')->name('category.delete');
Route::get('/category-status/{id}','Modules\Category\CategoryController@status')->name('category.status');

// user-sub-category 
Route::get('/category-fecth','Modules\Category\CategoryController@categoryFetch')->name('category.fecth');
Route::post('/sub-category-add','Modules\Category\CategoryController@subcategoryadd')->name('sub.category.add');
Route::get('/sub-category-details/{id}','Modules\Category\CategoryController@subcategoryshow')->name('sub.category.show');
Route::post('/sub-category-update','Modules\Category\CategoryController@subcategoryupdate')->name('sub.category.update');
Route::get('/sub-category-status/{id}','Modules\Category\CategoryController@subcategorystatus')->name('sub.category.status');
Route::get('/sub-category-delete/{id}','Modules\Category\CategoryController@subcategorydelete')->name('sub.category.delete');

// user-subcategory


Route::middleware('auth:api')->group(function () {
   
});