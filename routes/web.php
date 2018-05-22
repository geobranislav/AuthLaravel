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

Route::get('/',['as'=>'home', function () {
    return view('welcome');
}]);

Route::get('/cont', 'noviKontroler@conMetoda');
Route::get('/cont/{b}', 'noviKontroler@conMetodaPar' );

Route::get('/home/{ba}', [function ($ba) {
    return $ba;},'middleware'=>'mymiddleware']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@index')->name('logout');



