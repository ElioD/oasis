<?php

use Illuminate\Http\Request;

//Rutas APIS
Route::get('/restaurantes/{dia}','ApiController@restaurantes');
Route::get('/bares/{dia}','ApiController@bares');
Route::get('/show/{id}/{dia}','ApiController@show');