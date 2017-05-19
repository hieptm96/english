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
    return view('home');
});

Auth::routes();

Route::get('/home', function() {
    return redirect('admin/dashboard');
});

Route::group(['middleware' => 'auth', 'prefix' => 'admin/'], function() {
    Route::get('/dashboard', 'DashboardController@index');

    //Profile
    Route::get('/profile', 'ProfilesController@index')->name('profiles.index');

    //Users
    Route::get('/users', 'UsersController@index');

    //Exams
    Route::get('exams', 'ExamsController@index')->name('exams.index');
    Route::get('exams/create', 'ExamsController@create')->name('exams.create');
    Route::post('exams', 'ExamsController@store')->name('exams.store');
    // Route::

    //Incomplete Sentences
    Route::get('incomplete-sentences', 'IncompleteSentencesController@index')->name('incompletesentences.index');
    Route::get('incomplete-sentences/create', 'IncompleteSentencesController@create')->name('incompletesentences.create');
    Route::post('incomplete-sentences', 'IncompleteSentencesController@store')->name('incompletesentences.store');
});
// Route::get('/home', 'DashboardController@index');
