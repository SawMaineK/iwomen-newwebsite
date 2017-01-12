<?php
	Route::resource('author', 'API\AuthorAPIController');
	Route::resource('resource', 'API\ResourceAPIController');
	Route::resource('beinspiredpost', 'API\BeinspiredpostAPIController');
	Route::resource('subresourcedetail', 'API\SubresourcedetailAPIController');
	Route::resource('sisterdownloadapps', 'API\SisterdownloadappsAPIController');
	Route::resource('iwomenposts', 'API\IwomenpostsAPIController');
	Route::resource('beinspirediwomenposts', 'API\BeinspirediwomenpostsAPIController');
?>