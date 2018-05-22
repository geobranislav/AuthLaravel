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



/*
Route::middleware('mymiddleware')->group(function () {
    Route::get('/home/{ba}', function ($ba) {
        return $ba;
    });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('noviFajl');
});

Route::middleware('auth:api')->get('/homeee', function () {
return 'ovo je home stranica';

Route::get('/home', function () {
return 'ovo je home stranica';
});



Route::get('/home', function () {
    return view('noviFajl');
});

*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
