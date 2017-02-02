<?php

Route::group(['middleware' => ['authenticate.client']], function () {
    Route::get('/', ['as' => 'client.index', 'uses' => 'DashboardController@index']);

    

    Route::resource('company', 'Company');


    Route::resource('contacts', 'Contacts');


    Route::resource('contracts', 'Contracts');


    Route::resource('contracts_documents', 'ContractsDocuments');


    Route::resource('contracts_renewal', 'ContractsRenewal');


    Route::resource('emails', 'Emails');


    Route::resource('licenses', 'Licenses');


    Route::resource('products', 'Products');


    Route::resource('products_list', 'ProductsList');


    Route::resource('users', 'Users');


    Route::resource('versions', 'Versions');

});
