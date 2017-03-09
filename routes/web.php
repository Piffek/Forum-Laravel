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

Route::get('/', 'SubjectController@showSubjectList')->name('showSubjectList');
Route::get('/newSubject/{id}', 'SubjectController@showSubjectForm')->name('subjectForm');
Route::post('/addSubject', 'SubjectController@addSubject')->name('newSubject');
Route::get('/category/{id}', 'CategoriesController@showCategory')->name('showCategory');

Auth::routes();

Route::get('/home', 'HomeController@index');
