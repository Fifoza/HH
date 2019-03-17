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
    $users = User::with('creativities')->latest('created_at')->has('creativities')->limit(3)->get();
    return view('welcome')->withUsers($users);
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/todos', function(){
    $clean = str_replace("\n", ' ',request()->Original);
    \file_put_contents(config_path('todos.txt'), $clean);
    return 'it works';
});
