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

	Route::get('subresourcedetail', 'SubresourcedetailController@getIndex');
	Route::get('subresourcedetail/update', 'SubresourcedetailController@getUpdate');
	Route::get('subresourcedetail/update/{id}', 'SubresourcedetailController@getUpdate');
	Route::get('subresourcedetail/show/{id}', 'SubresourcedetailController@getShow');
	Route::post('subresourcedetail/save', 'SubresourcedetailController@postSave');
	Route::post('subresourcedetail/delete/{id}', 'SubresourcedetailController@postDelete');
	Route::get('subresourcedetail/savepublic', 'SubresourcedetailController@postSavepublic');
	Route::get('subresourcedetail/download', 'SubresourcedetailController@getDownload');
	Route::get('subresourcedetail/search', 'SubresourcedetailController@getSearch');
	Route::get('subresourcedetail/comboselect', 'SubresourcedetailController@getComboselect');
	Route::get('subresourcedetail/removefiles', 'SubresourcedetailController@getComboselect');
	Route::post('subresourcedetail/filter', 'SubresourcedetailController@postFilter');
	Route::get('subresourcedetail/lookup/{master_detail}', 'SubresourcedetailController@getLookup');

	Route::get('sisterdownloadapps', 'SisterdownloadappsController@getIndex');
	Route::get('sisterdownloadapps/update', 'SisterdownloadappsController@getUpdate');
	Route::get('sisterdownloadapps/update/{id}', 'SisterdownloadappsController@getUpdate');
	Route::get('sisterdownloadapps/show/{id}', 'SisterdownloadappsController@getShow');
	Route::post('sisterdownloadapps/save', 'SisterdownloadappsController@postSave');
	Route::post('sisterdownloadapps/delete/{id}', 'SisterdownloadappsController@postDelete');
	Route::get('sisterdownloadapps/savepublic', 'SisterdownloadappsController@postSavepublic');
	Route::get('sisterdownloadapps/download', 'SisterdownloadappsController@getDownload');
	Route::get('sisterdownloadapps/search', 'SisterdownloadappsController@getSearch');
	Route::get('sisterdownloadapps/comboselect', 'SisterdownloadappsController@getComboselect');
	Route::get('sisterdownloadapps/removefiles', 'SisterdownloadappsController@getComboselect');
	Route::post('sisterdownloadapps/filter', 'SisterdownloadappsController@postFilter');
	Route::get('sisterdownloadapps/lookup/{master_detail}', 'SisterdownloadappsController@getLookup');

	Route::get('tlgprofiles', 'TlgprofilesController@getIndex');
	Route::get('tlgprofiles/update', 'TlgprofilesController@getUpdate');
	Route::get('tlgprofiles/update/{id}', 'TlgprofilesController@getUpdate');
	Route::get('tlgprofiles/show/{id}', 'TlgprofilesController@getShow');
	Route::post('tlgprofiles/save', 'TlgprofilesController@postSave');
	Route::post('tlgprofiles/delete/{id}', 'TlgprofilesController@postDelete');
	Route::get('tlgprofiles/savepublic', 'TlgprofilesController@postSavepublic');
	Route::get('tlgprofiles/download', 'TlgprofilesController@getDownload');
	Route::get('tlgprofiles/search', 'TlgprofilesController@getSearch');
	Route::get('tlgprofiles/comboselect', 'TlgprofilesController@getComboselect');
	Route::get('tlgprofiles/removefiles', 'TlgprofilesController@getComboselect');
	Route::post('tlgprofiles/filter', 'TlgprofilesController@postFilter');
	Route::get('tlgprofiles/lookup/{master_detail}', 'TlgprofilesController@getLookup');

	Route::get('beinspiredpost', 'BeinspiredpostController@getIndex');
	Route::get('beinspiredpost/update', 'BeinspiredpostController@getUpdate');
	Route::get('beinspiredpost/update/{id}', 'BeinspiredpostController@getUpdate');
	Route::get('beinspiredpost/show/{id}', 'BeinspiredpostController@getShow');
	Route::post('beinspiredpost/save', 'BeinspiredpostController@postSave');
	Route::post('beinspiredpost/delete/{id}', 'BeinspiredpostController@postDelete');
	Route::get('beinspiredpost/savepublic', 'BeinspiredpostController@postSavepublic');
	Route::get('beinspiredpost/download', 'BeinspiredpostController@getDownload');
	Route::get('beinspiredpost/search', 'BeinspiredpostController@getSearch');
	Route::get('beinspiredpost/comboselect', 'BeinspiredpostController@getComboselect');
	Route::get('beinspiredpost/removefiles', 'BeinspiredpostController@getComboselect');
	Route::post('beinspiredpost/filter', 'BeinspiredpostController@postFilter');
	Route::get('beinspiredpost/lookup/{master_detail}', 'BeinspiredpostController@getLookup');

	Route::get('categories', 'CategoriesController@getIndex');
	Route::get('categories/update', 'CategoriesController@getUpdate');
	Route::get('categories/update/{id}', 'CategoriesController@getUpdate');
	Route::get('categories/show/{id}', 'CategoriesController@getShow');
	Route::post('categories/save', 'CategoriesController@postSave');
	Route::post('categories/delete/{id}', 'CategoriesController@postDelete');
	Route::get('categories/savepublic', 'CategoriesController@postSavepublic');
	Route::get('categories/download', 'CategoriesController@getDownload');
	Route::get('categories/search', 'CategoriesController@getSearch');
	Route::get('categories/comboselect', 'CategoriesController@getComboselect');
	Route::get('categories/removefiles', 'CategoriesController@getComboselect');
	Route::post('categories/filter', 'CategoriesController@postFilter');
	Route::get('categories/lookup/{master_detail}', 'CategoriesController@getLookup');

	Route::get('iwomenpostaudio', 'IwomenpostaudioController@getIndex');
	Route::get('iwomenpostaudio/update', 'IwomenpostaudioController@getUpdate');
	Route::get('iwomenpostaudio/update/{id}', 'IwomenpostaudioController@getUpdate');
	Route::get('iwomenpostaudio/show/{id}', 'IwomenpostaudioController@getShow');
	Route::post('iwomenpostaudio/save', 'IwomenpostaudioController@postSave');
	Route::post('iwomenpostaudio/delete/{id}', 'IwomenpostaudioController@postDelete');
	Route::get('iwomenpostaudio/savepublic', 'IwomenpostaudioController@postSavepublic');
	Route::get('iwomenpostaudio/download', 'IwomenpostaudioController@getDownload');
	Route::get('iwomenpostaudio/search', 'IwomenpostaudioController@getSearch');
	Route::get('iwomenpostaudio/comboselect', 'IwomenpostaudioController@getComboselect');
	Route::get('iwomenpostaudio/removefiles', 'IwomenpostaudioController@getComboselect');
	Route::post('iwomenpostaudio/filter', 'IwomenpostaudioController@postFilter');
	Route::get('iwomenpostaudio/lookup/{master_detail}', 'IwomenpostaudioController@getLookup');

?>