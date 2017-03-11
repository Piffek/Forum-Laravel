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
Route::get('/subject/{id}', 'SubjectController@showOneSubject')->name('showOneSubject');
Route::post('/newPost', 'PostsController@newPost')->name('newPost');
Route::get('/deletePost/{id}', 'PostsController@deletePost')->name('deletePost');
Route::get('/editPost/{id}', 'PostsController@editPost')->name('editPost');
Route::post('/updatePost/{id}', 'PostsController@updatePost')->name('updatePost');

Route::get('/editSubject/{id}', 'SubjectController@editSubject')->name('editSubject');
Route::get('/deleteSubject/{id}', 'SubjectController@deleteSubject')->name('deleteSubject');
Route::post('/updateSubject/{id}', 'SubjectController@updateSubject')->name('updateSubject');

Auth::routes();

Route::get('/home', 'HomeController@index');
