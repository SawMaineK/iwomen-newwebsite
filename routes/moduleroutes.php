<?php

	Route::get('author', 'AuthorController@getIndex');
	Route::get('author/update', 'AuthorController@getUpdate');
	Route::get('author/update/{id}', 'AuthorController@getUpdate');
	Route::get('author/show/{id}', 'AuthorController@getShow');
	Route::post('author/save', 'AuthorController@postSave');
	Route::post('author/delete/{id}', 'AuthorController@postDelete');
	Route::get('author/savepublic', 'AuthorController@postSavepublic');
	Route::get('author/download', 'AuthorController@getDownload');
	Route::get('author/search', 'AuthorController@getSearch');
	Route::get('author/comboselect', 'AuthorController@getComboselect');
	Route::get('author/removefiles', 'AuthorController@getComboselect');
	Route::post('author/filter', 'AuthorController@postFilter');
	Route::get('author/lookup/{master_detail}', 'AuthorController@getLookup');

	Route::get('resource', 'ResourceController@getIndex');
	Route::get('resource/update', 'ResourceController@getUpdate');
	Route::get('resource/update/{id}', 'ResourceController@getUpdate');
	Route::get('resource/show/{id}', 'ResourceController@getShow');
	Route::post('resource/save', 'ResourceController@postSave');
	Route::post('resource/delete/{id}', 'ResourceController@postDelete');
	Route::get('resource/savepublic', 'ResourceController@postSavepublic');
	Route::get('resource/download', 'ResourceController@getDownload');
	Route::get('resource/search', 'ResourceController@getSearch');
	Route::get('resource/comboselect', 'ResourceController@getComboselect');
	Route::get('resource/removefiles', 'ResourceController@getComboselect');
	Route::post('resource/filter', 'ResourceController@postFilter');
	Route::get('resource/lookup/{master_detail}', 'ResourceController@getLookup');

?>