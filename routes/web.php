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

 Auth::routes();
 Route::get('/home', 'employeesController@index');
//////////////////////////////////// admin //////////////////////////////////////////////////////

Route::group([ 'prefix' => 'admin'], function ()
{
Route::resource('/', 'CompaniesController');
Route::resource('Companies', 'CompaniesController');
Route::resource('Employee', 'employeesController');
});
//////////////////////////////////// profile //////////////////////////////////////////////////////
Route::group([ 'prefix' => 'profile'], function ()
{
Route::get('/login', 'LoginEmployeesController@login');
Route::post('/login', 'LoginEmployeesController@login_post');
Route::get('/register', 'LoginEmployeesController@register');
Route::post('/register', 'LoginEmployeesController@register_post');
Route::get('/', 'LoginEmployeesController@profile')->name('profile');


});


