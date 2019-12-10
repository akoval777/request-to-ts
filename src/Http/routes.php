<?php

Route::get('request-to-ts', 'Akoval777\RequestToTs\Http\RequestToTsController@index');
Route::get('request-to-ts/{requestToTs}', 'Akoval777\RequestToTs\Http\RequestToTsController@show')->middleware('web');
Route::post('request-to-ts', 'Akoval777\RequestToTs\Http\RequestToTsController@create');
Route::put('request-to-ts/{requestToTs}', 'Akoval777\RequestToTs\Http\RequestToTsController@update')->middleware('web');
Route::delete('request-to-ts/{requestToTs}', 'Akoval777\RequestToTs\Http\RequestToTsController@delete')->middleware('web');