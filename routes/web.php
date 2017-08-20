<?php

use App\Visit;

Route::get('/', function () {
    return view('child'); // Welcome page; Starts with license plate entry
});

// Route::get('/start', 'LicensePlateController@index'); // Starts with license plate entry

Route::post('/lookup', 'LicensePlateController@lookup'); // Does license plate lookup; Example of Query Building

Route::get('/cars', 'CarsController@index'); // Sends user down car path

Route::get('/trucks', 'TrucksController@index'); // Sends user down truck path

Route::get('/visits', 'VisitsController@index'); // Returns all visits; Example of Eloquent Active Record

Route::get('/visits/unpaid', 'VisitsController@unpaid'); // Returns incomplete, unpaid visits; Example of Query Scope

Route::get('/visits/paid', 'VisitsController@paid'); // Returns completed, paid visits

Route::get('/visits/{visit}', 'VisitsController@show'); // Returns individual visit; Example of Route Model Binding
