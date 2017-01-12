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

?>