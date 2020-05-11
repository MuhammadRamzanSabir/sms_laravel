<?php

use Illuminate\Support\Facades\Route;

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
    return view('home.home');
});
Route::get('/student', 'StudentController@index');
Route::get('/student/new', 'StudentController@newForm');
Route::post('/student', 'StudentController@store');
Route::get('/student/delete/{id}', 'StudentController@delete');
Route::get('/student/edit/{id}', 'StudentController@editForm');
Route::post('/student/update', 'StudentController@update');

Route::get('/family', 'FamilyController@index');
Route::get('/family/new', 'FamilyController@newForm');
Route::post('/family', 'FamilyController@store');
Route::get('/family/delete/{id}', 'FamilyController@delete');
Route::get('/family/edit/{id}', 'FamilyController@editForm');
Route::post('/family/update', 'FamilyController@update');