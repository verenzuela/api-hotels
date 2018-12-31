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

/*
Route::get('countries', function(){
	return App\Country::all();
})->middleware('auth:api');


Route::get('ccredentials-countries', function(){
	return App\Country::all();
})->middleware('client-credentials');

Route::post('ccredentials-country-add', function(Request $request){

	App\Country::create([
		'name' => $request->input('name'),
		'code' => $request->input('code')
	]);

	return ['status' => 200];

})->middleware('client-credentials');
*/


Route::group(['prefix' => 'v1', 'middleware' => ['auth:api', 'scope:get-all-records'] ], function () {

	Route::resource('countries','Api\CountryController', [ 'only' => ['index', 'show'] ] );

});

Route::group(['prefix' => 'v1', 'middleware' => ['auth:api', 'scope:manage-records'] ], function () {

	Route::resource('countries','Api\CountryController', [ 'only' => ['store', 'destroy', 'update'] ] );

});