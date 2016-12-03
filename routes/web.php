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
	if(\Auth::check())
    	return redirect()->to('user');
    else
    	return redirect()->to('user/login');
});

include('pageroutes.php');

Route::group(['middleware' => ['web','auth']], function(){
	include('moduleroutes.php');
});

Route::get('login', 'Core\UserController@getLogin');
Route::get('logout', 'Core\UserController@getLogout');
Route::get('register', 'Core\UserController@getRegister');

Route::group(['middleware' => ['web'], 'prefix' => 'user'], function(){

	Route::get('register', 'Core\UserController@getRegister');
	Route::post('create', 'Core\UserController@postCreate');
	Route::get('activation', 'Core\UserController@getActivation');
	Route::get('login', 'Core\UserController@getLogin');
	Route::post('signin', 'Core\UserController@postSignin');
	Route::get('profile', 'Core\UserController@getProfile');
	Route::post('saveprofile', 'Core\UserController@postSaveprofile');
	Route::post('savepassword', 'Core\UserController@postSavepassword');
	Route::get('reminder', 'Core\UserController@getReminder');
	Route::post('request', 'Core\UserController@postRequest');
	Route::get('reset', 'Core\UserController@getReset');
	Route::post('doreset', 'Core\UserController@postDoreset');
	Route::get('logout', 'Core\UserController@getLogout');
	Route::get('autosignin', 'Core\UserController@autoSignin');

	Route::group(['middleware' => ['auth']], function(){

		Route::get('/', 'Core\UserListController@getIndex');
		Route::get('update', 'Core\UserListController@getUpdate');
		Route::get('update/{id}', 'Core\UserListController@getUpdate');
		Route::get('show/{id}', 'Core\UserListController@getShow');
		Route::post('save', 'Core\UserListController@postSave');
		Route::post('delete', 'Core\UserListController@postDelete');
		Route::get('search', 'Core\UserListController@getSearch');
		Route::post('multisearch', 'Core\UserListController@postMultisearch');
		Route::post('filter', 'Core\UserListController@postFilter');
		Route::get('download', 'Core\UserListController@getDownload');
		Route::get('comboselect', 'Core\UserListController@getComboselect');
		Route::get('blast', 'Core\UserListController@getBlast');
		Route::post('blast', 'Core\UserListController@postDoblast');

		Route::get('groups', 'Core\GroupsController@getIndex');
		Route::get('groups/update', 'Core\GroupsController@getUpdate');
		Route::get('groups/update/{id}', 'Core\GroupsController@getUpdate');
		Route::get('groups/show/{id}', 'Core\GroupsController@getShow');
		Route::post('groups/save', 'Core\GroupsController@postSave');
		Route::post('groups/delete', 'Core\GroupsController@postDelete');

		Route::get('logs', 'Core\LogsController@getIndex');
		Route::get('logs/update/{id}', 'Core\LogsController@getUpdate');
		Route::get('logs/show/{id}', 'Core\LogsController@getShow');
		Route::get('logs/save/{id}', 'Core\LogsController@postSave');
		Route::post('logs/delete', 'Core\LogsController@postDelete');
		Route::get('logs/download', 'Core\LogsController@getDownload');
		Route::post('logs/filter', 'Core\LogsController@postFilter');

	});
});


