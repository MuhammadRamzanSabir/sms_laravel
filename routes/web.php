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
    return view('layouts.master');
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

Route::get('/level', 'LevelController@index');
Route::get('/level/new', 'LevelController@newForm');
Route::post('/level', 'LevelController@store');
Route::get('/level/delete/{id}', 'LevelController@delete');
Route::get('/level/edit/{id}', 'LevelController@editForm');
Route::post('/level/update', 'LevelController@update');

Route::get('/group', 'GroupController@index');
Route::get('/group/new', 'GroupController@newForm');
Route::post('/group', 'GroupController@store');
Route::get('/group/delete/{id}', 'GroupController@delete');
Route::get('/group/edit/{id}', 'GroupController@editForm');
Route::post('/group/update', 'GroupController@update');

Route::get('/section', 'SectionController@index');
Route::get('/section/new', 'SectionController@newForm');
Route::post('/section', 'SectionController@store');
Route::get('/section/delete/{id}', 'SectionController@delete');
Route::get('/section/edit/{id}', 'SectionController@editForm');
Route::post('/section/update', 'SectionController@update');

Route::get('/subject', 'SubjectController@index');
Route::get('/subject/new', 'SubjectController@newForm');
Route::post('/subject', 'SubjectController@store');
Route::get('/subject/delete/{id}', 'SubjectController@delete');
Route::get('/subject/edit/{id}', 'SubjectController@editForm');
Route::post('/subject/update', 'SubjectController@update');