<?php

Route::get('/', 'NilaisiswasController@index');

Route::resource('nilaisiswa', 'NilaisiswasController');
Route::post('nilaisiswa/search_ajax',['as'=>'cari_ajax', 'uses'=>'NilaisiswasController@search_ajax']);
