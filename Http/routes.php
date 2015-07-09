<?php

Route::group(['prefix' => 'theme2013', 'namespace' => 'YC\Theme2013\Http\Controllers'], function()
{
	Route::get('/', 'Theme2013Controller@index');
});