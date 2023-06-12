<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\CountryStateCityController;
use App\Http\Controllers\TestController;
//use\App\Models\Country;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Route::get('/country-state-city', [TestController::class, 'index']);

Route::get('country-state-city', [TestController::class, 'index'] );
//Route::get('country-state-city','CountryStateCityController@index');
Route::post('get-states-by-country', [TestController::class, 'getState'] );

Route::post('get-cities-by-state', [TestController::class, 'getCity'] );

//Route::post('get-states-by-country','CountryStateCityController@getState');
//Route::post('get-cities-by-state','CountryStateCityController@getCity');
