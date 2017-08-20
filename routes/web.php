<?php

use App\Visit;

Route::get('/', function () {
    return view('child'); // Welcome page; Starts with license plate entry, initially left without controller here
});

Route::post('/lookup', 'LicensePlateController@lookup'); // License plate lookup; Example of Query Building

Route::post('/review', 'OrdersController@review'); // Allows user to review car wash order total before submitting

Route::post('/submit', 'OrdersController@submit'); // Allows user to submit car wash order

Route::get('/visits', 'VisitsController@index'); // Returns all visits; Example of Eloquent Active Record

Route::get('/visits/unpaid', 'VisitsController@unpaid'); // Returns incomplete, unpaid visits; Example of Query Scope

Route::get('/visits/paid', 'VisitsController@paid'); // Returns completed, paid visits

Route::get('/visits/{visit}', 'VisitsController@show'); // Returns individual visit; Example of Route Model Binding
