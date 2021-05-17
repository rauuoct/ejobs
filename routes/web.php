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

use Illuminate\Support\Facades\Route;
/*
	Login & Register Routes
*/
Route::get('/',                                     'UserController@index');
Route::get('/login',                                'UserController@index')->name('login');
Route::post('/login',                               'UserController@login');
Route::get('/logout',                               'UserController@destroy');

Route::get('/register',                             'UserController@register');
Route::post('/register',                            'UserController@store');
/*
	Home Routes
*/
Route::get('/home',                                 'HomeController@index');
/*
	Institute Routes
*/
Route::get('/institute',                            'InstituteController@create');
Route::post('/institute/save',                      'InstituteController@store');



/*
REGISTER EMPOLYER
*/

Route::get('/employee-register',                     'JobEmployeeController@create');
Route::post('/employee/save',                      'JobEmployeeController@store');


/*
Employee Profile 
*/

Route::get('/employee/profile',                    'JobEmployeeProfileController@createProfilePersonal');
Route::post('/employee/save',                      'JobEmployeeProfileController@store');
Route::post('/employee/save_academics',            'JobEmployeeProfileController@storeAcademics');
Route::post('/employee/save_experience',           'JobEmployeeProfileController@storeExperience');
Route::post('/employee/save/skills/training',      'JobEmployeeProfileController@storeSkills');
Route::post('/employee/save/miscellaneous',        'JobEmployeeProfileController@storeMiscellaneous');
Route::post('/employee/save/research',        'JobEmployeeProfileController@storeResearch');
Route::post('/employee/save/preferred/job',        'JobEmployeeProfileController@storePreferredJob');