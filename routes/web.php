<?php

use App\Visit;

Route::get('/', function ()
{
    return view('welcome');
});

Route::get('/cars', 'CarsController@index'); // Starts user down car path

Route::get('/trucks', 'TrucksController@index'); // Starts user down truck path

Route::get('/visits', 'VisitsController@index'); // Returns all visits

Route::get('/visits/unpaid', 'VisitsController@unpaid'); // Returns incomplete, unpaid visits

Route::get('/visits/paid', 'VisitsController@paid'); // Returns completed, paid visits

Route::get('/visits/{visit}', 'VisitsController@show'); // Returns individual visit
