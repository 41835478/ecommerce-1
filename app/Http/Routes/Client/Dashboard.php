<?php


Route::group(['middleware' => ['authenticate.client']], function () {
    Route::get('/', ['as' => 'client.index', 'uses' => 'DashboardController@index']);
    Route::resource('product_list', 'ProductList');

});
