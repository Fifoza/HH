<?php

use App\User;

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
    $users = User::with('creativities')->get()->filter(function($u){
        return $u->creativities()->count() > 0;
    })->take(3);

    return view('welcome')->withUsers($users);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
