<?php
	Route::resource('author', 'API\AuthorAPIController');
	Route::resource('resource', 'API\ResourceAPIController');
	Route::resource('beinspiredpost', 'API\BeinspiredpostAPIController');
	Route::resource('subresourcedetail', 'API\SubresourcedetailAPIController');
?>