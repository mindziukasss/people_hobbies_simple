<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'generate-fd'], function () {
    Route::get('/people/{count?}', ['uses' => 'PHFakeDataController@generatePeople']);
    Route::get('/cities/{count?}', ['uses' => 'PHFakeDataController@generateCities']);
    Route::get('/hobies/{count?}', ['uses' => 'PHFakeDataController@generateHobies']);
    Route::get('/connections/{count?}', ['uses' => 'PHFakeDataController@generateConnectionsPeopleHobies']);



});
