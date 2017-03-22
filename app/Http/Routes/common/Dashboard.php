<?php

//Route::get('/', function () {
//    return view('client.public.dashboard');
//});

Route::group(['middleware' => ['authorization']], function () {
    Route::get('/dashboard', ['as' => 'dashboard.index', 'uses' => 'common\dashboard\DashboardController@index']);


});
