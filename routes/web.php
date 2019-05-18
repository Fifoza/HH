<?php

use Illuminate\Http\Request;

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

Route::get('/', 'WelcomeController@welcome')->name('welcome')->name('welcome');

Route::get('/conditions', 'WelcomeController@conditions')->name('conditions');

Route::get('/mission', 'MissionController@index')->name('mission');

Auth::routes();

Route::get('/profiles/{profile}', 'ProfilesController@show')->name('profiles.show');

Route::get('/profiles/{profile}/creativities/create', 'ProfilesCreativitiesController@create')->name('profiles.creativities.create');
Route::post('/profiles/{profile}/creativities', 'ProfilesCreativitiesController@store')->name('profiles.creativities.store');
Route::get('/profiles/{profile}/creativities/{creativity}', 'ProfilesCreativitiesController@show')->name('profiles.creativities.show');
