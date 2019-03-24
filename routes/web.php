<?php

use App\User;
use App\Creativity;
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

Route::get('/', function () {
    $lastCreativities = Creativity::latest()->limit(3)->get();

    $topRatedCreativities = Creativity::orderByDesc('rate')->limit(3)->with('user')->get();

    $randomCreativities = Creativity::inRandomOrder()->limit(12)->with('user')->get();

    return view('welcome')->withTopRatedCreativities($topRatedCreativities)->withRandomCreativities($randomCreativities)->withLastCreativities($lastCreativities);
})->name('welcome');

Route::get('/conditions', function (Request $request) {
    $registerButton = (app('router')->getRoutes()->match(app('request')->create(URL::previous()))->getName() == 'register');
    return view('conditions')->withRegisterButton($registerButton);
})->name('conditions');

Route::get('/mission', function (Request $request) {
    return view('mission');
})->name('mission');

Auth::routes();

Route::get('/profiles/{profile}', 'ProfilesController@show')->name('profiles.show');

Route::get('/profiles/{profile}/creativities/create', 'ProfilesCreativitiesController@create')->name('profiles.creativities.create');
Route::post('/profiles/{profile}/creativities', 'ProfilesCreativitiesController@store')->name('profiles.creativities.store');
Route::get('/profiles/{profile}/creativities/{creativity}', 'ProfilesCreativitiesController@show')->name('profiles.creativities.show');
