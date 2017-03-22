<?php

//Route::get('/', function () {
//    return view('client.public.dashboard');
//});

Route::group(['middleware' => ['authorization'],'prefix' => 'common','namespace'=>'common\authorization'], function () {
    Route::resource('roles', 'Roles');

});
