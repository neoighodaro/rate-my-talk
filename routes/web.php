<?php

Route::post('/rate', 'RateController@store');
Route::get('/', 'RateController@create');
