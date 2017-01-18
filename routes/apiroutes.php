<?php
	Route::resource('author', 'API\AuthorAPIController');
	Route::resource('resource', 'API\ResourceAPIController');
	Route::resource('subresourcedetail', 'API\SubresourcedetailAPIController');
	Route::resource('sisterdownloadapps', 'API\SisterdownloadappsAPIController');
	Route::resource('tlgprofiles', 'API\TlgprofilesAPIController');
	Route::resource('beinspiredpost', 'API\BeinspiredpostAPIController');
	Route::resource('categories', 'API\CategoriesAPIController');
?>